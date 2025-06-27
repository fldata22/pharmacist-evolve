<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pharmacist Evolve - Supporting overseas pharmacists in building successful careers in the UK pharmacy sector">
        <meta name="theme-color" content="#D4A853">
        <title inertia>{{ config('app.name', 'Pharmacist Evolve') }}</title>
        
        <!-- Favicon - Using Pharmacist Evolve Logo Icon -->
        <link rel="icon" type="image/svg+xml" href="/logo-icon.svg">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="apple-touch-icon" sizes="180x180" href="/logo-icon.svg">
        <link rel="icon" type="image/png" sizes="32x32" href="/logo-icon.svg">
        <link rel="icon" type="image/png" sizes="16x16" href="/logo-icon.svg">
        <link rel="shortcut icon" href="/favicon.svg">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700" rel="stylesheet" />
        
        <!-- Prevent pull-to-refresh issues -->
        <style>
            body {
                overscroll-behavior: none;
                -webkit-overflow-scrolling: touch;
            }
            html {
                overscroll-behavior: none;
            }
        </style>
        
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
