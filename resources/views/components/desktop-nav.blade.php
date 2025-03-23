@php
    function isTabActive($routeName){
        return request()->routeIs($routeName);
    }

@endphp


<nav class="hidden md:block px-2">
    <ul class="flex gap-4 items-center justify-center">

        <li
        style="
                color: {{isTabActive('home') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('home') ? '1.1' : '1'}});
        "
        >
            <a href="{{route('home')}}" class=" hover:text-yellow">Home</a>
        </li>

        <li
          style="
                color: {{isTabActive('about') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('about') ? '1.1' : '1'}});
        ">
            <a href="{{route('about')}}" class=" hover:text-yellow">About</a>
        </li>

        <li
          style="
                color: {{isTabActive('contact') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('contact') ? '1.1' : '1'}});
        ">
            <a href="{{route('contact')}}" class=" hover:text-yellow">Contact</a>
        </li>

        @auth
            <li
              style="
                color: {{isTabActive('') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('') ? '1.1' : '1'}});
        ">
                <a href="{{route('dashboard')}}" class=" hover:text-yellow">Dashboard</a>
            </li>
            <li
              style="
                color: {{isTabActive('') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('') ? '1.1' : '1'}});
        ">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class=" hover:text-yellow">Logout</button>
                </form>
            </li>
        @endauth


        @guest
            <li
              style="
                color: {{isTabActive('login') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('login') ? '1.1' : '1'}});
        ">
                <a href="{{route('login')}}" class=" hover:text-yellow">Login</a>
            </li>
            <li
              style="
                color: {{isTabActive('register') ? '#ffb700' : 'white'}};
                transform: scale({{isTabActive('register') ? '1.1' : '1'}});
        ">
                <a href="{{route('register')}}" class=" hover:text-yellow">Register</a>
            </li>
        @endguest

    </ul>
</nav>
