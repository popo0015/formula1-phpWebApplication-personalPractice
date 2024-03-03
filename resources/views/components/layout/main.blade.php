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
<body class="bg-body-color font-family: font-sans">
{{-- Navigation bar --}}
<nav class="bg-nav-color fixed list-none top-0 left-0 w-full z-10">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="#" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                        <span class="font-bold">F1JOY</span>
                    </a>
                </div>
                <!-- primary nav -->
                <div class="hidden md:flex items-center space-x-1">
                    @foreach($navItems as $navItem)
                        <x-layout.navbar-item :route="$navItem['route']" class="py-5 px-3 text-gray-700 hover:text-gray-900">{{ $navItem['title'] }}</x-layout.navbar-item>
                    @endforeach
                </div>
            </div>
            <!-- secondary nav -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="" class="py-5 px-3">Login</a>
                <a href="" class="py-2 px-3 bg-yellow-400 text-yellow-900 rounded hover:bg-yellow-300 transition duration-300">Signup</a>
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
