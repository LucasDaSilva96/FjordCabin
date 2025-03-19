<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'FjordCabin') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @routes
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- @inertiaHead --}}
    </head>
    <body class="font-sans antialiased relative overflow-hidden h-full bg-slate-50">
        {{-- @inertia --}}
        <header class="bg-blue p-2 w-full flex items-center justify-between">
            {{-- Logo --}}
            <aside>
                <a href="/">
                    <img src="/logo.svg" alt="logo" class="w-20 md:w-28 h-auto object-contain">
                </a>
            </aside>

            {{-- Mobile-nav --}}
            <button id="mobile_nav_toggle_btn" class="cursor-pointer block md:hidden absolute top-8 right-2 z-[55]">
               <svg id="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
               </svg>

                <svg id="close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>

            </button>
            <x-mobile-nav />

            {{-- Desktop-nav --}}
            <x-desktop-nav />

        </header>

        <main >
            {{ $slot }}
        </main>

        {{-- Script for the mobile-nav --}}
        <script>
            const mobile_nav_parent = document.getElementById('mobile-nav');
            const nav_toggle_button = document.getElementById('mobile_nav_toggle_btn');
            const open = document.getElementById('open');
            const close = document.getElementById('close');

            nav_toggle_button.addEventListener('click', () => {
                mobile_nav_parent.classList.toggle('slide_out_right');
                mobile_nav_parent.classList.toggle('slide_in_right');
                open.classList.toggle('hidden');
                close.classList.toggle('hidden');
            });

        </script>
    </body>
</html>

