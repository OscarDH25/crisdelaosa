<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Testimonio;
use App\Models\Media;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function conoceme()
    {
        return view('conoceme');
    }

    public function media()
    {
        $media = Media::all();
        return view('media', compact('media'));
    }

    public function clases()
    {
        $testimonios = Testimonio::all();

        return view('clases', compact('testimonios'));
    }

    public function eventos()
    {
        $eventos = Evento::all();
        return view('eventos', compact('eventos'));
    }

    public function login()
    {
        return view('login');
    }

    public function signIn()
    {
        return view('signIn');
    }

    public function politicaPrivacidad()
    {
        return view('politicaPrivacidad');
    }
    public function avisoLegal()
    {
        return view('avisoLegal');
    }
    public function politicaCookies()
    {
        return view('politicaCookies');
    }
    public function condicionesVenta()
    {
        return view('condicionesVenta');
    }
}
