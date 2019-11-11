<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="{{ config('app.name') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />
    <title>{{ config('master.name') }} @hasSection('title') - @yield('title')@endif</title>
    @stack('styles')
</head>
<body>
<div id="app">
    <main class="main-content">
        @yield('content')
    </main>
</div>
@stack('scripts')
</body>
</html>
