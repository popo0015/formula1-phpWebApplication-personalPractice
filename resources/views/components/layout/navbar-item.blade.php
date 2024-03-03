<li><a href="{{ route($route) }}"
   class="navbar-item py-5 px-3 hover:bg-gray-900 ease-in duration-200
   {{ Request::routeIs($route) ? "is-active" : "" }}">
    {{ $slot }}
</a></li>
