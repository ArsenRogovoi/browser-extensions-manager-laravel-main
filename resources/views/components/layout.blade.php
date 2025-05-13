<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon-32x32.png">

    <title>Frontend Mentor | Browser extensions manager UI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-noto-sans">
    {{ $slot }}
</body>

</html>
