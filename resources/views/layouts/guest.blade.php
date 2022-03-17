<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">

    <link rel="manifest" href="{{ asset('manifest.json') }}" />
@livewireStyles

<!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="h-full">
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    @isset($slot)
        {{ $slot }}
    @endisset
</div>
@livewireScripts
</body>
</html>
