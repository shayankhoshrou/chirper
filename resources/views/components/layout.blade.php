<html>
    <head>
        <title>{{ $title ?? 'Chirper' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav>...</nav> <main>
            {{ $slot }} </main>

        <footer>...</footer> </body>
</html>
