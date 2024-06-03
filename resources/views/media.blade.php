@extends('layouts.base')
@section('head')

    <head>
        <title>
            CrisDeLaOsa - Media
        </title>
        <link rel="stylesheet" href="{{ asset('css/stylesBase.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesMedia.css') }}">
    </head>
@endsection

@section('content')
    <div class="container">
        <h1 class="page-title">Media</h1>
    </div>
    {{-- <div class="container">
        <p class="page-subtitle">Presentación de material audiovisual de Cris de la Osa</p>
    </div> --}}
    <div class="container">
        <div class="col">
            <p>Cantante</p>
            <div class="scrollable-column">
                @foreach ($media->where('tipo', 'cantante') as $cantante)
                    <div class="media-item">
                        <img src="{{ asset($cantante->archivo_multimedia) }}" alt="{{ $cantante->nombre }}">
                        <p>{{ $cantante->nombre }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col">
            <h3>Actriz</h3>
            <div class="scrollable-column">
                @foreach ($media->where('tipo', 'actriz') as $actriz)
                    <div class="media-item">
                        <img src="{{ asset($actriz->archivo_multimedia) }}" alt="{{ $actriz->nombre }}">
                        <p>{{ $actriz->nombre }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <h2  class="page-title">Videos</h2>
    </div>
    <div class="container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/l0f9gMJVosc" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Z1Kp22027_0" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-ns40OaXrWI" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection
