<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <div class="flex flex-row justify-between p-4">
            <a href="/" wire:navigate>Home</a>
            <div class="flex flex-row gap-8">
                <a href="/create" wire:navigate>Create Contact</a>
                <a href="/login" wire:navigate>Login</a>
            </div>
        </div>
        <div class="container">{{ $slot }}</div>
    </body>
</html>
