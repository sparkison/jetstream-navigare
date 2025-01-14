<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @navigare('htmlAttrs')>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/js/client.ts'])

        @navigare('headTags')
    </head>
    <body class="font-sans antialiased" @navigare('bodyAttrs')>
        @navigare

        @navigare('bodyTags')
    </body>
</html>
