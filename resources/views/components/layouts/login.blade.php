<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>Login</title>
    </head>
    <body>
        <div class="p-4"><a href="/" wire:navigate>Home</a></div>
        <div class="container">{{ $slot }}</div>
    </body>
</html>
