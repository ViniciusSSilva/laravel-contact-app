<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>Contact Manager</title>
    </head>
    <body class="text-lg">
        @livewire('nav-bar')
        <div class="container mx-auto h-screen">{{ $slot }}</div>
    </body>
</html>
