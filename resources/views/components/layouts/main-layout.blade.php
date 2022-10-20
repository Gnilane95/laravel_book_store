@props(['title'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book-Store | {{ $title }}</title>
    {{-- import tailwind --}}
    @vite('resources/css/app.css')
</head>
<body>
    {{ $slot }}
</body>
</html>