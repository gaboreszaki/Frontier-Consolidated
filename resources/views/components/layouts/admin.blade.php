<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'FRCN - Admin ' }}</title>

    <link href="{{ asset('app.css') }}" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <x-admin.tinymce-config></x-admin.tinymce-config>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <x-admin.site-nav />
        <div class="col py-3">
            {{ $slot }}
        </div>
    </div>
</div>



</body>
</html>