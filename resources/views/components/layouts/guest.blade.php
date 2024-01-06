<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'FRCN.space' }}</title>

    <link href="{{ asset('app.css') }}" rel="stylesheet">

{{-- todo: replace animate css with local version --}}
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="svg-bg hex">

<div id="app" class="container-fluid">
    <div class="row bg-black mb-3">
        <div class="col-12">
            <div class="container">
                <x-public.site-nav></x-public.site-nav>
            </div>
        </div>
    </div>
    <div class="container">
        <x-public.last-announcement-display/>
        {{ $slot }}
    </div>
</div>
</body>
</html>