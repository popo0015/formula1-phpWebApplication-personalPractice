<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>F1JOY</title>

    <link href="{{asset('css/index.css')}}" rel="stylesheet">

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- Render additional styles from subviews and/or components --}}
    @stack('styles')
</head>
<body>
{{-- Navigation bar --}}
<x-ui.navbar>
    <x:slot:brand>
        <a href="/" class="navbar-item">
            <i class="fa-solid fa-list-check"></i>&nbsp;F1JOY
        </a>
    </x:slot:brand>


</x-ui.navbar>
<nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class="logo navLogo"><a href="#">F1JOY</a></span>
        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="#">F1JOY</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>
            <ul class="nav-links">
                @foreach($navItems as $navItem)
                    <x-ui.navbar-item :route="$navItem['route']">{{ $navItem['title'] }}</x-ui.navbar-item>
                @endforeach
            </ul>
        </div>
        <div class="darkLight-searchBox">
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>
        </div>
    </div>
</nav>

{{-- Content --}}
<section class="section">
    <div class="container">
        <x-ui.notifications></x-ui.notifications>
        {{ $slot }}
    </div>
</section>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://github.com/popo0015">Silvia Popova</a></p>
            <p>F1JOY</p>
        </div>
    </div>
</footer>
{{-- Render additional scripts from subviews and/or components --}}
@stack('scripts')
</body>
</html>
