@extends('layouts.base')

@section('head')
    <head>
        <title>CrisDeLaOsa - Contacto</title>
        <link rel="stylesheet" href="{{ asset('css/stylesBase.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesContacto.css') }}">
    </head>
@endsection

@section('content')
    <header class="portadaContacto">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contacto.process') }}" method="POST">
                @csrf
                <fieldset>
                    <legend>Contacta conmigo</legend> <!-- Título del formulario -->

                    <label for="nombre">Nombre:</label><br />
                    <input type="text" id="nombre" name="nombre" required /><br />

                    <label for="email">Correo electrónico:</label><br />
                    <input type="email" id="email" name="email" required /><br />

                    <label for="telefono">Teléfono:</label><br />
                    <input type="tel" id="telefono" name="telefono" required /><br />

                    <label for="mensaje">Mensaje:</label><br />
                    <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br />

                    <label>
                        <input type="checkbox" id="terminos" name="terminos" required />
                        Acepto los <a href="politica_privacidad.html" target="_blank">términos y condiciones de
                        privacidad</a>
                    </label>

                    <button class="button" type="submit">Enviar</button>
                </fieldset>
            </form>
        </div>
    </header>
@endsection
