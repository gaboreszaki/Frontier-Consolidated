<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'FRCN - Admin ' }}</title>

    <link href="{{ asset('app.css') }}" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main id="app" class="form-signin w-100 m-auto">
 @yield('content')
</main>
</body>
</html>