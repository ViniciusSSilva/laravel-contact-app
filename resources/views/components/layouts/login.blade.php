<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>Contact Manager - Login</title>
    </head>
    <body class="text-lg">
        <div class="p-4"><a href="/" wire:navigate><i class="text-2xl mt-0.5 fa-solid fa-address-book"></i></a></div>
        <div class="container mx-auto h-screen">
            <div class="flex justify-center pt-10">{{ $slot }}</div>
        </div>
    </body>
</html>
