// resources/views/eventos.blade.php

@extends('layouts.base')

@section('head')
    <head>
        <title>CrisDeLaOsa - Eventos</title>
        <link rel="stylesheet" href="{{ asset('css/stylesBase.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesEventos.css') }}">
    </head>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($eventos as $evento)
                <div class="col-md-12 mb-3">
                    <a href="{{ route('contacto') }}" class="card-link">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <!-- Foto / video -->
                                    <img src="{{ asset($evento->archivo_multimedia) }}" class="card-img" alt="Archivo Multimedia">
                                </div>
                                <div class="col-md-8">
                                    <!-- Información -->
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $evento->nombre }}</h4>
                                        <!-- Más información aquí si es necesario -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
