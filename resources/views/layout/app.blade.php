<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>4Sea World Transport</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{asset('css/loading.css')}}?v=557922">
        <script src="https://kit.fontawesome.com/8ff394cebc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Sintony&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}?v=3546546456">
    </head>
    <body>
        <div class="loading">
            <div class="multi-ripple">
                <div></div>
                <div></div>
            </div>
            <small class="d-block">{{(App::getLocale() == 'es') ? 'Cargando...' : 'Loading...'}}</small>
        </div>

        @include('include.menu')

        @yield('contenido')

        @include('include.footer')

        <script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}?v=9565786585"></script>

        @stack('js')
    </body>
</html>
