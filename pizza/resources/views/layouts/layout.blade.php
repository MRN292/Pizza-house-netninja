<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:200,600" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="/css/main.css"> --}}

    <title>pizza</title>
    @vite(['resources/css/app.css', 'resources/sass/main.scss','resources/js/app.js'])
</head>

<body>
@yield('content')
<footer>
    Copyright 2023 Pizza House
</footer>
</body>

</html>
