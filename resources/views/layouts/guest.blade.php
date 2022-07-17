<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/ui.css') }}">
        <link rel="stylesheet" href="{{ mix('css/style.css') }}">
        <link rel="stylesheet" href="{{ mix('css/responsive.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/jquery.js') }}" defer></script>
        <script src="{{ mix('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ mix('js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/main.js') }}" defer></script>
        <script src="{{ mix('js/script.js') }}" defer></script>
    </head>
    <body class="bg-light font-sans antialiased">
        {{ $slot }}
    </body>
</html>
