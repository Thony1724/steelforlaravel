<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STEELFOR — Carrocerías de Alto Rendimiento</title>
    <meta name="description"
        content="Diseño, fabricación y mantenimiento de carrocerías para transporte por carretera. Cisternas, camiones y soluciones metálicas de alta ingeniería." />
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proyectos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactenos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comunicados.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bolsa_trabajo.css') }}">
    <link rel="icon" href="{{asset('img/logoes.png')}}" type="image/png">
    <!-- Feather Icons (lightweight SVG icons via CDN) -->
    <script src="https://unpkg.com/feather-icons@4.29.1/dist/feather.min.js" defer></script>
    @yield('style')
    <style>
        .logo-icon {
            width: 40px;
            /* tamaño del contenedor */
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* no deforma */
        }
    </style>
</head>

<body>


    @include('web.layouts.header')

    @yield('content')


    @include('web.layouts.footer')

    @include('web.layouts.whatsapp')


    <!-- Back to top -->
    <button id="back-top" aria-label="Volver al inicio">
        <svg data-feather="chevron-up"></svg>
    </button>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('js/script1.js') }}"></script>
    <script>
        if (typeof feather !== 'undefined') feather.replace();
    </script>
</body>

</html>