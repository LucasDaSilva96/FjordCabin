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



<nav class="hidden md:block px-2">
    <ul class="flex gap-4 items-center justify-center">
        @foreach ($nav_array as $key => $value)
            <li
                style="
                color: {{ request()->is($value) ? 'black' : 'white' }};
                font-weight: {{ request()->is($value) ? 'semi-bold' : 'normal' }};
                transform: {{ request()->is($value) ? 'scale(1.1)' : 'scale(1)' }};
                "
            >
                <a href="{{ $value }}" class="hover:text-black hover:underline">{{ $key }}</a>
            </li>
        @endforeach

        @auth
            @foreach ($auth_nav_array as $key => $value)
                  <li
                    style="
                    color: {{ request()->is($value) ? 'black' : 'white' }};
                    font-weight: {{ request()->is($value) ? 'semi-bold' : 'normal' }};
                    transform: {{ request()->is($value) ? 'scale(1.1)' : 'scale(1)' }};
                    "
                >
                    <a href="{{ $value }}" class="hover:text-black hover:underline">{{ $key }}</a>
                </li>
            @endforeach
        @endauth

        @guest
            @foreach ($guest_nav_array as $key => $value)
                 <li
                    style="
                    color: {{ request()->is($value) ? 'black' : 'white' }};
                    font-weight: {{ request()->is($value) ? 'semi-bold' : 'normal' }};
                    transform: {{ request()->is($value) ? 'scale(1.1)' : 'scale(1)' }};
                    "
                >
                    <a href="{{ $value }}" class="hover:text-black hover:underline">{{ $key }}</a>
                </li>
            @endforeach
        @endguest
    </ul>
</nav>
