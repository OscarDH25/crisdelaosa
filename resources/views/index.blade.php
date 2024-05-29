@extends('layouts.base')

@section('head')

    <head>
        <title>
            CrisDeLaOsa - Inicio
        </title>
        <link rel="stylesheet" href="{{ asset('css/stylesBase.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesIndex.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesAviso.css') }}">

    </head>
@endsection

@section('content')
    <div class="modal" id="cookieModal" style="display: none;">
        <article class="modal-container">
            <header class="modal-container-header">
                <span class="modal-container-title">
                    <svg aria-hidden="true" height="24" width="24" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M14 9V4H5v16h6.056c.328.417.724.785 1.18 1.085l1.39.915H3.993A.993.993 0 0 1 3 21.008V2.992C3 2.455 3.449 2 4.002 2h10.995L21 8v1h-7zm-2 2h9v5.949c0 .99-.501 1.916-1.336 2.465L16.5 21.498l-3.164-2.084A2.953 2.953 0 0 1 12 16.95V11zm2 5.949c0 .316.162.614.436.795l2.064 1.36 2.064-1.36a.954.954 0 0 0 .436-.795V13h-5v3.949z"
                            fill="currentColor"></path>
                    </svg>
                    Política de Cookies 
                </span>
            </header>
            <section class="modal-container-body rtf">
                <!-- Aquí coloca el contenido de tu política de cookies -->
                <h1>Política de Cookies</h1>
                <p>
                    En esta web se utilizan cookies de terceros y propias para
                    conseguir que tengas una mejor experiencia de navegación, puedas
                    compartir contenido en redes sociales y para que podamos obtener
                    estadísticas de los usuarios.
                </p>
                <p>
                    Puedes evitar la descarga de cookies a través de la configuración
                    de tu navegador, evitando que las cookies se almacenen en su
                    dispositivo.
                </p>
                <p>
                    Como propietario de este sitio web, te comunico que no utilizamos
                    ninguna información personal procedente de cookies, tan sólo
                    realizamos estadísticas generales de visitas que no suponen
                    ninguna información personal.
                </p>
                <p>
                    Es muy importante que leas la presente política de cookies y
                    comprendas que, si continúas navegando, consideraremos que aceptas
                    su uso.
                </p>
                <p>
                    Según los términos incluidos en el artículo 22.2 de la Ley 34/2002
                    de Servicios de la Sociedad de la Información y Comercio
                    Electrónico, si continúas navegando, estarás prestando tu
                    consentimiento para el empleo de los referidos mecanismos.
                </p>
                <h2>Entidad Responsable</h2>
                <p>
                    La entidad responsable de la recogida, procesamiento y utilización
                    de tus datos personales, en el sentido establecido por la Ley de
                    Protección de Datos Personales es la página Cris de la Osa,
                    propiedad de –.
                </p>
                <h2>¿Qué son las cookies?</h2>
                <p>
                    Las cookies son un conjunto de datos que un servidor deposita en
                    el navegador del usuario para recoger la información de registro
                    estándar de Internet y la información del comportamiento de los
                    visitantes en un sitio web. Es decir, se trata de pequeños
                    archivos de texto que quedan almacenados en el disco duro del
                    ordenador y que sirven para identificar al usuario cuando se
                    conecta nuevamente al sitio web. Su objetivo es registrar la
                    visita del usuario y guardar cierta información. Su uso es común y
                    frecuente en la web ya que permite a las páginas funcionar de
                    manera más eficiente y conseguir una mayor personalización y
                    análisis sobre el comportamiento del usuario.
                </p>
                <h2>¿Qué tipos de cookies existen?</h2>
                <p>
                    Las cookies utilizadas en nuestro sitio web, son de sesión y de
                    terceros, y nos permiten almacenar y acceder a información
                    relativa al idioma, el tipo de navegador utilizado, y otras
                    características generales predefinidas por el usuario, así como,
                    seguir y analizar la actividad que lleva a cabo, con el objeto de
                    introducir mejoras y prestar nuestros servicios de una manera más
                    eficiente y personalizada.
                </p>
                <p>
                    Las cookies, en función de su permanencia, pueden dividirse en
                    cookies de sesión o permanentes. Las que expiran cuando el usuario
                    cierra el navegador. Las que expiran en función de cuando se
                    cumpla el objetivo para el que sirven (por ejemplo, para que el
                    usuario se mantenga identificado en los servicios de ) o bien
                    cuando se borran manualmente.
                </p>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Caducidad</th>
                            <th>Finalidad</th>
                            <th>Clase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>__utma</td>
                            <td>De Terceros (Google Analytics)</td>
                            <td>2 años</td>
                            <td>Se usa para distinguir usuarios y sesiones.</td>
                            <td>No Exenta</td>
                        </tr>
                        <tr>
                            <td>__utmb</td>
                            <td>De Terceros (Google Analytics)</td>
                            <td>30 minutos</td>
                            <td>Se usa para determinar nuevas sesiones o visitas</td>
                            <td>No Exenta</td>
                        </tr>
                        <tr>
                            <td>__utmc</td>
                            <td>De Terceros (Google Analytics)</td>
                            <td>Al finalizar la sesión</td>
                            <td>Se configura para su uso con Urchin</td>
                            <td>No Exenta</td>
                        </tr>
                        <tr>
                            <td>__utmz</td>
                            <td>De Terceros (Google Analytics)</td>
                            <td>6 meses</td>
                            <td>
                                Almacena el origen o la campaña que explica cómo el usuario
                                ha llegado hasta la página web
                            </td>
                            <td>No Exenta</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    Adicionalmente, en función de su objetivo, las cookies pueden
                    clasificarse de la siguiente forma:
                </p>
                <ul>
                    <li>Cookies de rendimiento</li>
                    <li>Cookies de geo-localización</li>
                    <li>Cookies de registro</li>
                    <li>Cookies de analíticas</li>
                    <li>Cookies de publicidad</li>
                    <li>Cookies publicitarias de terceros</li>
                </ul>
                <p>
                    Para ampliar esta información consulte las instrucciones y
                    manuales de su navegador.
                </p>
                <p>
                    Si desea dejar de ser seguido por Google Analytics visite:
                    <a href="http://tools.google.com/dlpage/gaoptout">http://tools.google.com/dlpage/gaoptout</a>
                </p>
                <p>
                    Puede obtener más información sobre la publicidad online basada en
                    el comportamiento y la privacidad online en el siguiente enlace:
                    <a href="http://www.youronlinechoices.com/es/">http://www.youronlinechoices.com/es/</a>
                </p>
                <p>
                    Protección de datos de Google Analytics:
                    <a
                        href="http://www.google.com/analytics/learn/privacy.html">http://www.google.com/analytics/learn/privacy.html</a>
                </p>
                <p>
                    Cómo usa Google Analytics las cookies:
                    <a
                        href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es#analyticsjs">https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage?hl=es#analyticsjs</a>
                </p>
                <h2>
                    Actualizaciones y cambios en la política de privacidad/cookies
                </h2>
                <p>
                    Las webs de pueden modificar esta Política de Cookies en función
                    de exigencias legislativas, reglamentarias, o con la finalidad de
                    adaptar dicha política a las instrucciones dictadas por la Agencia
                    Española de Protección de Datos, por ello se aconseja a los
                    usuarios que la visiten periódicamente.
                </p>
            </section>
            <footer class="modal-container-footer">
                <button class="button is-ghost" id="declineCookies">Declinar</button>
                <button class="button is-primary" id="acceptCookies">Aceptar</button>
            </footer>
        </article>
    </div>

    <div class="cuerpoIndex">
        <div class="contenido">
            

            <script>
        
                // Manejo de cookies
                document.addEventListener('DOMContentLoaded', function() {
                    // Mostrar el modal si no se han aceptado las cookies
                    if (!localStorage.getItem('cookiesAccepted')) {
                        document.getElementById('cookieModal').style.display = 'block';
                    }
        
                    // Manejar el botón de aceptar cookies
                    document.getElementById('acceptCookies').addEventListener('click', function() {
                        localStorage.setItem('cookiesAccepted', 'true');
                        document.getElementById('cookieModal').style.display = 'none';
                    });
        
                    // Manejar el botón de declinar cookies
                    document.getElementById('declineCookies').addEventListener('click', function() {
                        alert('Has declinado el uso de cookies. Algunas funcionalidades pueden no estar disponibles.');
                        document.getElementById('cookieModal').style.display = 'none';
                    });
                });
            </script>

            <pre class="descripcion">
Canto y cuento historias mediante mi cuerpo y mi voz.
     Soy actriz y cantante.
También acompaño a otras voces para que puedan explotar su potencial.
        </pre>
            <p class="cita">
                "La voz es el puente entre nuestro interior y el mundo exterior."
            </p>
            <p class="autor">- Paulo Coelho</p>
        </div>
    </div>
@endsection
