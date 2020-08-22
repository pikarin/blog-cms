<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{ $css ?? '' }}
</head>
<body class="{{ $classesBody }}">
    {{ $slot }}

    <script src="{{ mix('js/app.js') }}"></script>
    {{ $javascript ?? '' }}
</body>
</html>
