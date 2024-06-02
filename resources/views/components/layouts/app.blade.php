<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href="{{ asset('logo.png') }}"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @filamentStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
    </head>
    <body>
        {{ $slot }}
        @livewire('notifications')


        @livewireScripts

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
