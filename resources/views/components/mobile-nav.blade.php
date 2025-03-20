@php
    $nav_array = [
        'Home' => '/',
        'About' => '/about',
        'Contact' => '/contact',
    ];
    $auth_nav_array = [
        'Dashboard' => '/dashboard',
        'Logout' => '/logout',
    ];
    $guest_nav_array = [
        'Login' => '/login',
        'Register' => '/register',
    ];
@endphp

<nav id="mobile-nav" class="block md:hidden p-4 absolute top-0 w-full h-svh bg-slate-50 z-50 slide_out_right">


    <ul class="flex flex-col space-y-8 text-black pt-20 items-center
    justify-center transition-all will-change-auto">
        @foreach ($nav_array as $key => $value)
            <li
            style="
            color: {{ request()->is($value) ? '#ffb700' : 'black' }};"
            >
                <a href="{{ $value }}" class="hover:text-yellow hover:underline">{{ $key }}</a>
            </li>
        @endforeach

        @auth
            @foreach ($auth_nav_array as $key => $value)
                <li
                style="
                color: {{ request()->is($value) ? '#ffb700' : 'black' }};"
                >
                    <a href="{{ $value }}" class="hover:text-yellow hover:underline">{{ $key }}</a>
                </li>
            @endforeach
        @endauth

        @guest
            @foreach ($guest_nav_array as $key => $value)
                <li
                style="
                color: {{ request()->is($value) ? '#ffb700' : 'black' }};"
                >
                    <a href="{{ $value }}" class="hover:text-yellow hover:underline">{{ $key }}</a>
                </li>
            @endforeach
        @endguest
    </ul>
</nav>
