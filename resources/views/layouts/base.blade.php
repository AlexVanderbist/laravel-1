<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ cdn(mix('css/app.css')) }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @include('partials.body')
    <script src="{{ cdn(mix('js/app.js')) }}"></script>
    @stack('scripts')
</body>
</html>
