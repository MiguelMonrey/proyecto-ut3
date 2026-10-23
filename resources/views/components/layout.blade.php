@props([
    'title' => 'Laracast'
])

<!doctype html>
<html lang="en" data-theme="dracula">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-700 min-h-screen">
        <x-nav/>
        <main class="max-w-xl mx-auto p-6">
            {{ $slot }}
        </main>
    </body>
</html>
