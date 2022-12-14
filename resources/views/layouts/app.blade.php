<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AQTOBE FÝTBOL LIGASY') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css'])
</head>
<body>

    @include('layouts.header')
    
    <div class="container">    

        @yield('content')

        <div id="app">
            <test></test>
        </div>

    </div>  

    @vite(['resources/js/app.js'])
</body>
</html>
