<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-brand-dark antialiased bg-brand-beige">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="mb-8 transform hover:scale-105 transition-transform duration-300">
                <a href="/" wire:navigate>
                    <x-application-logo class="w-24 h-24 fill-current text-brand-orange" />
                </a>
            </div>

            <div class="w-full sm:max-w-md px-8 py-10 bg-brand-cream shadow-[0_10px_25px_-5px_rgba(15,3,2,0.1)] overflow-hidden sm:rounded-2xl border border-brand-cream/50">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
