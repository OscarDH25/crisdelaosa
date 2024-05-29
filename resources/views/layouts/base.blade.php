<!DOCTYPE html>
<html lang="en">

@yield('head')

<body>

    <header>
        <nav class="navbar" id="myNavbar">
            <a href="{{ route('inicio') }}" class="logo-link">
                <img src="{{ asset('img/logoCris.png') }}" alt="Logo" class="logoCris" />
            </a>

            <a href="{{ route('conoceme') }}">Conóceme</a>
            <a href="{{ route('media') }}">Media</a>
            <a href="{{ route('clases') }}">Clases</a>
            <a href="{{ route('eventos') }}">Eventos</a>
            @if (Auth::check() && Cookie::has('usuario_nombre'))
                <!-- Comprueba si el usuario está autenticado y la cookie de usuario_nombre está presente -->
                <div class="welcome-message">Bienvenido {{ Cookie::get('usuario_nombre') }}
                    <a href="{{ route('salir') }}"><img src="{{ asset('img/logoUser.png') }}" alt="Logo"
                            class="logoUser" title="Cerrar Sesión" /></a>
                </div>
            @else
                <a href="{{ route('login') }}"><img src="{{ asset('img/logoUser.png') }}" alt="Logo"
                        class="logoUser" title="Iniciar Sesión / Registrarse" /></a>
            @endif
        </nav>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">

        <div class="columna">
            <ul>
                <li><a href="{{ route('avisoLegal') }}">Aviso legal</a></li>
                <li><a href="{{ route('politicaPrivacidad') }}">Politica de privacidad</a></li>
            </ul>
        </div>

        <div class="columna">
            <ul>
                <li><a href="{{ route('politicaCookies') }}">Politica de cookies</a></li>
                <li><a href="{{ route('condicionesVenta') }}">Condiciones generales de venta</a></li>
            </ul>
        </div>

    </footer>


    <script src="{{asset('js/navbar.js')}}"></script>
    <script>
        // Manejar el click en el icono de usuario
        document.querySelectorAll('.logoUser').forEach(function(element) {
            element.addEventListener('click', function(event) {
                if (!localStorage.getItem('cookiesAccepted')) {
                    event.preventDefault();
                    alert('Es necesario aceptar las cookies para iniciar sesión.');
                    window.location.href = "{{ route('inicio') }}"; // Redireccionar a la página de inicio
                }
            });
        });
    </script>
</body>

</html>
