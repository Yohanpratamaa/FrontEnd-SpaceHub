<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <section class="flex relative items-center w-full h-[60px]">

        <div class="logo">
            <x-logo></x-logo>
        </div>

        <x-nav-item></x-nav-item>

        <div class="absolute right-0">
            <x-buttonDaftar></x-buttonDaftar>
        </div>

    </section>

</body>
</html>
