@php
    function isTabActive_2($routeName){
        return request()->routeIs($routeName);
    }
@endphp


<nav id="mobile-nav" class="block md:hidden p-4 absolute top-0 w-full h-svh bg-slate-50 z-50 slide_out_right">


    <ul class="flex flex-col space-y-8 text-black pt-20 items-center
    justify-center transition-all will-change-auto">
        <li
        style="
                color: {{isTabActive_2('home') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('home') ? '1.1' : '1'}});
        "
        >
            <a href="{{route('home')}}" class=" hover:text-yellow">Home</a>
        </li>

        <li
          style="
                color: {{isTabActive_2('about') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('about') ? '1.1' : '1'}});
        ">
            <a href="{{route('about')}}" class=" hover:text-yellow">About</a>
        </li>

        <li
          style="
                color: {{isTabActive_2('contact') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('contact') ? '1.1' : '1'}});
        ">
            <a href="{{route('contact')}}" class=" hover:text-yellow">Contact</a>
        </li>

        @auth
            <li
              style="
                color: {{isTabActive_2('') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('') ? '1.1' : '1'}});
        ">
                <a href="{{route('dashboard')}}" class=" hover:text-yellow">Dashboard</a>
            </li>
            <li
              style="
                color: {{isTabActive_2('') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('') ? '1.1' : '1'}});
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
                color: {{isTabActive_2('') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('') ? '1.1' : '1'}});
        ">
                <a href="{{route('login')}}" class=" hover:text-yellow">Login</a>
            </li>
            <li
              style="
                color: {{isTabActive_2('') ? '#ffb700' : 'black'}};
                transform: scale({{isTabActive_2('') ? '1.1' : '1'}});
        ">
                <a href="{{route('register')}}" class=" hover:text-yellow">Register</a>
            </li>
        @endguest
    </ul>
</nav>
