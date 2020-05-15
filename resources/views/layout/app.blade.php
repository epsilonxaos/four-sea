<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>4sea</title>

        <link rel="stylesheet" href="{{asset('css/loading.css')}}?v=557922">
        <script src="https://kit.fontawesome.com/8ff394cebc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Sintony&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}?v=6259562623">
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

        <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}?v=667126656"></script>

        @stack('js')
    </body>
</html>
