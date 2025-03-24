@php

    $canBook = end($unAvailableDates) <= now()->format('Y-m-d');


@endphp

<x-layout.default>
    <section class="container mx-auto p-6 space-y-6">
        <x-h1-animation text="Book {{$cottage->title}}" />

        @if (!$canBook)
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">This Cabin is booked until:</strong>
                <span class="block sm:inline">{{ end($unAvailableDates) }}</span>
            </div>
        @endif

        @if ($canBook)

        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">This Cabin is available for booking.</strong>
        </div>
        @endif

        <div class="flex flex-col md:flex-row items-center md:space-x-6">
            <img src="{{$cottage->image_path}}" alt="{{$cottage->title}}" class="w-full md:w-1/2 h-auto max-w-lg object-cover rounded-lg shadow-lg mb-6 md:mb-0">

            <div class="flex flex-col items-center md:items-start space-y-4">
                <h2 class="text-2xl font-bold ">{{$cottage->title}}</h2>
                <p class="text-lg ">{{$cottage->description}}</p>
                <p class="text-lg ">{{$cottage->location}}</p>
                <p class="text-lg  font-semibold">Price: {{$cottage->price}} Per Night</p>
                @if ($canBook)
                <a href="{{route('bookings.store', $cottage->id)}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Book Now</a>
                @endif
            </div>
        </div>
    </section>
</x-layout.default>
