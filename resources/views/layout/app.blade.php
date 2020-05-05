<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>4sea</title>

        <script src="https://kit.fontawesome.com/8ff394cebc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('include.menu')

        @yield('contenido')

        @include('include.footer')

        <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

        @stack('js')
    </body>
</html>
