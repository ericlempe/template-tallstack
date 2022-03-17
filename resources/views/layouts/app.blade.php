<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
    @livewireStyles
    @isset($pageCSS)
        {{ $pageCSS }}
    @endisset

    <link rel="manifest" href="{{ asset('manifest.json') }}" />

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="h-full" x-data="template()" @resize.window="handleResize()">
<div>
    @include("layouts.partials.sidebar")
    <div class="md:pl-64 flex flex-col">
        @include("layouts.partials.navbar")
        <main class="flex-1">
            @yield("page-header")
            <div class="px-4 py-4">
                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
        </main>
    </div>
</div>
@livewireScripts
@isset($pageJS)
    {{ $pageJS }}
@endisset
</body>
</html>
