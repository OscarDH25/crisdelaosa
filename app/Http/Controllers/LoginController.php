<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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

        $datos = $request->all();
        $check = $this->create($datos);

        return redirect('login')->with('message', 'Haz login');
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
