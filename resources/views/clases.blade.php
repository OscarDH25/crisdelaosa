@extends('layouts.base')
@section('head')

    <head>
        <title>
            CrisDeLaOsa - Clases
        </title>
        <link rel="stylesheet" href={{ asset('css/stylesBase.css') }}>
        <link rel="stylesheet" href={{ asset('css/stylesClases.css') }}>
    </head>
@endsection

@section('content')
    <div class="containerCards">
        <div class="card">
            <div class="header">
                <div class="green-bar"></div>
                <h2>Clase Individual</h2>
                <p>Perfecto para una sesión de prueba</p>
                <p class="price">50.00€</p>
            </div>
            <ul class="features">
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> Duración: 1 hora</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> Sin ningún compromiso de permanencia</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> Totalmente online</li>
            </ul>
            @if (Cookie::get('usuario_nombre') && Cookie::get('usuario_correo'))
                <button class="form-btn">
                    <a href="{{ route('subscribe', ['plan_id' => 'price_1PKMvcLBlcncf3EWiklxhh5j']) }}"
                        class="form-btn">Seleccionar Plan</a>
                </button>
            @else
                <button class="form-btn plan-btn">
                    <a href="{{ route('login') }}" class="form-btn">Inicia sesión para seleccionar el plan</a>
                </button>
            @endif
        </div>
        <!-- Repite este bloque para los otros planes -->
        <div class="card">
            <div class="header">
                <div class="green-bar"></div>
                <h2>Paquete de 5 Clases</h2>
                <p>Para una experiencia más completa</p>
                <p class="price">120.00€</p>
            </div>
            <ul class="features">
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> 5 sesiones de 45 minutos</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> En un periodo máximo de 3 meses</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> Seguimiento semanal, totalmente online</li>
            </ul>
            @if (Cookie::get('usuario_nombre') && Cookie::get('usuario_correo'))
                <button class="form-btn">
                    <a href="{{ route('subscribe', ['plan_id' => 'price_1PKMxfLBlcncf3EWExTEOlbV']) }}">Seleccionar Plan</a>
                </button>
            @else
                <button class="form-btn plan-btn">
                    <a href="{{ route('login') }}" class="form-btn">Inicia sesión para seleccionar el plan</a>
                </button>
            @endif
        </div>
        <!-- Repite el bloque para el último plan -->
        <div class="card">
            <div class="header">
                <div class="green-bar"></div>
                <h2>Paquete de 10 Clases</h2>
                <p>Para un progreso continuo </p>
                <p class="price">300.00€</p>
            </div>
            <ul class="features">
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> 10 sesiones de 1 hora cada una</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> En un periodo máximo de 7 meses</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="check-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M9 16.2l-3.5-3.5-1.4 1.4 5.9 5.9L21 7.9l-1.4-1.4z" />
                    </svg> Seguimiento semanal, totalmente online</li>
            </ul>
            @if (Cookie::get('usuario_nombre') && Cookie::get('usuario_correo'))
                <button class="form-btn">
                    <a href="{{ route('subscribe', ['plan_id' => 'price_1PKMzILBlcncf3EWqsuYJZXt']) }}">Seleccionar Plan</a>
                </button>
            @else
                <button class="form-btn  plan-btn">
                    <a href="{{ route('login') }}" class="form-btn">Inicia sesión para seleccionar el plan</a>
                </button>
            @endif
        </div>
        <div class="testimonial-container">
            <h2>Testimonios</h2>
            <div id="testimonial-wrapper">
                @foreach ($testimonios as $testimonio)
                    <div class="testimonial" style="display: none;">
                        <p>{{ $testimonio->testimonio }}</p>
                        <p>
                            -
                            <strong>{{ $testimonio->autor }}</strong>{{ $testimonio->descripcion ? ', ' . $testimonio->descripcion : '' }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Testimonios
            let testimonials = document.querySelectorAll('.testimonial');
            let index = 0;

            function showTestimonial() {
                testimonials.forEach(testimonial => testimonial.style.display = 'none');
                testimonials[index].style.display = 'block';
                index = (index + 1) % testimonials.length;
            }

            // Mostrar el primer testimonio inmediatamente
            showTestimonial();

            // Cambiar el testimonio cada 7 segundos
            setInterval(showTestimonial, 7000);

            // Botones
            let planButtons = document.querySelectorAll('.plan-btn');

            planButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    if (!localStorage.getItem('cookiesAccepted')) {
                        event.preventDefault();
                        alert('Es necesario aceptar las cookies para iniciar sesión.');
                        window.location.href =
                        "{{ route('inicio') }}"; // Redireccionar a la página de inicio
                    }
                });
            });
        });
    </script>
@endsection
