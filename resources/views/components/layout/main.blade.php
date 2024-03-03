<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>F1JOY</title>

    {{-- Ensure Tailwind CSS is linked here --}}
    @vite(['public/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="font-family: font-sans">
{{-- Navigation bar --}}
<nav class="bg-formula1-red fixed list-none top-0 left-0 w-full z-10 text-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="#" class="flex items-center py-5 px-2 hover:text-gray-900">
                        <span class="font-bold">F1JOY</span>
                    </a>
                </div>
                <!-- primary nav -->
                <div class="hidden md:flex items-center space-x-1">
                    @foreach($navItems as $navItem)
                        <x-layout.navbar-item :route="$navItem['route']">{{ $navItem['title'] }}</x-layout.navbar-item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- Content --}}
<section>
    <div class="container px-5 py-24 mx-auto">
        {{ $slot }}
    </div>
</section>

{{-- Footer --}}
<footer class="text-gray-600">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <span class="ml-3 text-xl">F1JOY</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2024 F1JOY —
            <a href="https://github.com/popo0015" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@Silvia Popova</a>
        </p>
    </div>
</footer>
</body>
</html>
