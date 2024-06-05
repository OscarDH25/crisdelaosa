<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginComprobar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credenciales = $request->only('email', 'password');
        if (Auth::attempt($credenciales, $request->remember)) {
            // Autenticación exitosa, guarda los datos del usuario en una cookie
            $usuario = Auth::user();
            $nombre = $usuario->name;
            $correo = $usuario->email;

            // Establece la cookie con los datos del usuario
            Cookie::queue('usuario_nombre', $nombre, 60); // La cookie caduca en 60 minutos
            Cookie::queue('usuario_correo', $correo, 60);

            return redirect()->intended('index')->with('message', 'Inicio de sesión correcto');
        }

        return redirect('login')->with('message', 'Login incorrecto');
    }

    public function registroGrabar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Sanitizar las entradas del formulario
        $datos = $request->all();
        $datos['name'] = htmlentities($datos['name'], ENT_QUOTES, 'UTF-8');
        $datos['email'] = htmlentities($datos['email'], ENT_QUOTES, 'UTF-8');

        $user = $this->create($datos);

        // Enviar el correo electrónico
        Mail::to($user->email)->send(new WelcomeMail($user->name));

        return redirect('login')->with('message', 'Registro exitoso. Por favor, inicia sesión.');
    }

    public function create(array $datos)
    {
        return User::create([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'password' => Hash::make($datos['password']),
        ]);
    }

    public function salir()
    {
        // Borra las cookies del usuario
        Cookie::queue(Cookie::forget('usuario_nombre'));
        Cookie::queue(Cookie::forget('usuario_correo'));

        Session::flush();
        Auth::logout();

        return redirect('index');
    }
}
