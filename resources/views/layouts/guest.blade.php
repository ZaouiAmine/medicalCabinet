<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Medical Cabinet</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="min-w-screen min-h-screen flex flex-col justify-between">
            @include('layouts.navigation-guest')
                @yield('content')
                
            @include('layouts.footer')
        </div>
        <script>
            window.addEventListener('scroll',(e)=>{
                const nav = document.querySelector('.navbar');
                if(window.pageYOffset>0){
                nav.classList.add("shadow-md");
                }else{
                nav.classList.remove("shadow-md");
                }
            });
        </script>
    </body>
</html>
