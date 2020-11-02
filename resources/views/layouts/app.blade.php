<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body, th {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }
            .content-wrapper{
                padding-top: 35px;
                /* Space for fixed navbar */
            }
        </style>
        @yield('styles')
    </head>
    <body>
        <div id="app">
            @include('layouts.navbar')
            <main class="py-4">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
    <script>
        feather.replace();
    </script>
    @yield('scripts')
</html>
