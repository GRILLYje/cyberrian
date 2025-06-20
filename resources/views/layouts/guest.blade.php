<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cyber Rian</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background: linear-gradient(135deg, #1B222C 0%, #210378 100%);">
            <div class="w-full sm:max-w-md mt-6 px-8 py-8 bg-gray-800/90 backdrop-blur-sm shadow-2xl overflow-hidden sm:rounded-2xl border border-gray-700" style="background-color: rgba(0, 0, 0, 0.25);padding: 20px;border-radius: 20px;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
