<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    <title>@yield('title', 'JobShop® - Redefine Success')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body>
    <x-header />
    
    <main>
        @yield('content')
    </main>
    
    @stack('scripts')
</body>
</html>