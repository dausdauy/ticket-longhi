<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="600">

        <title>@yield('title')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="https://longhi-group.com/wp-content/uploads/2017/09/favicon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
        <style>
            body{
                background: url('{{ asset('lg_bg1.png') }}') no-repeat center center fixed; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    margin: 0;
        }
            .m-t-hg {
                    bottom: 0px;
                    position: fixed;
                    text-align: center;
                    left: 0;
                    color: #fff;
                    padding : 15px;
                    width: 100%;
                    background-color: #243a5c;
                    z-index: 1001;
            }
        </style>
        @stack('style')
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        @include('layouts.knowledge.nav')

            <main class="py-4">
                <div class="container" style="max-width: 925px;margin-bottom: 40px;">
                    @yield('content')
                </div>
            </main>

        @include('layouts.knowledge.footer')    
       
        @yield('js')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>