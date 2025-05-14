<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon-32x32.png">

    <title>Frontend Mentor | Browser extensions manager UI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-4 font-noto-sans bg-neutral-200">
    <header class="container p-2 flex justify-between items-center bg-neutral-0 rounded-lg shadow inset-shadow-sm">
        <a href="/">
            <img src="/storage/images/logo.svg" alt="logo">
        </a>
        <button class="bg-neutral-300/40 p-3 rounded-xl shadow" id="theme-toggle-btn" type="button">
            <img src="/storage/images/icon-moon.svg" alt="moon icon" id="theme-toggle-btn-icon">
        </button>
    </header>
    {{ $slot }}
</body>

</html>
