<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;

class GoogleController extends Controller
{
    public function signInwithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackToGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('gauth_id', $user->id)->first();
            
            if ($finduser) {
                Auth::login($finduser);
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gauth_id' => $user->id,
                    'gauth_type' => 'google',
                    'password' => encrypt('admin@123'),
                ]);
                Auth::login($newUser);
            }

            // Guardar en cookies
            $nombre = $user->name;
            $correo = $user->email;
            Cookie::queue('usuario_nombre', $nombre, 60); // La cookie caduca en 60 minutos
            Cookie::queue('usuario_correo', $correo, 60);

            return redirect('/index');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
