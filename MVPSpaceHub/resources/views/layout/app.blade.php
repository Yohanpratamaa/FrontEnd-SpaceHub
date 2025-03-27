<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpaceHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-gray-100">

    <section class="px-[100px] pt-6 max-w-full max-h-screen">

        <div class="blur-[500px] absolute rounded-r-full left-0 -top-[100px] w-[200px] h-full bg-[#4b32eb]"></div>

        {{-- Navbar --}}
        @include('layout.navigation')

        {{-- First Page Landing Page --}}
        <div class="relative w-full h-[700px] px-[60px]">
            <x-firstlp></x-firstlp>
        </div>

        {{-- Second Page Landing Page --}}
        <div class="relative mt-7">
            <x-secondlp></x-secondlp>
        </div>

        {{-- Third Page Landing Page --}}
        <div class="relative">
            <x-thirdlp></x-thirdlp>
        </div>

        <div class="blur-[600px] absolute rounded-l-full right-0 top-[1800px] w-[200px] h-full bg-[#4b32eb]"></div>

        {{-- Fourth Page Landing Page --}}
        <div class="relative">
            <x-fourthlp></x-fourthlp>
        </div>

        {{-- Fifth Page Landing Page --}}
        <div class="relative">
            <x-fifthlp></x-fifthlp>
        </div>

        {{-- Footer --}}
        <div class="relative">
            <x-footer></x-footer>
        </div>

    </section>

</body>
</html>
