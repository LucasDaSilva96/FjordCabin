@php

// dd($cottages);
@endphp


<x-layout.default>

    <section class="w-full flex flex-col items-center justify-center">

        <x-h1-animation text="Discover Your Perfect Cabin Retreat" />

        <div class="w-full flex items-center justify-center">

            <form action="" class="w-[90%] flex items-center gap-2 flex-wrap pb-10">
                @csrf

                <x-date-picker />

                <div class="px-4 py-2 mx-auto md:py-10">
                    <div class="w-full mb-5">

                        <label
                        class="block mb-1 text-sm font-medium text-slate-50/80" for="nights">
                            Number of Nights
                        </label>
                        <input
                        type="number"
                        name="nights"
                        placeholder="1"
                        min="1"
                        id="nights"
                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md text-neutral-600 border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>

                    </div>
                </div>

                  <div class="px-4 py-2 mx-auto md:py-10">
                    <div class="w-full mb-5">

                        <label
                        class="block mb-1 text-sm font-medium text-slate-50/80" for="number_of_persons">
                            Number of Persons
                        </label>
                        <input
                        type="number"
                        name="number_of_persons"
                        placeholder="1"
                        min="1"
                        id="number_of_persons"
                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md text-neutral-600 border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"/>

                    </div>
                </div>

                <div class="w-full flex items-center justify-center">

                    <button
                    type="submit"
                    class="w-full max-w-md h-10 px-3 py-2 text-sm font-medium text-white bg-blue-500 border rounded-md border-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 disabled:cursor-not-allowed disabled:opacity-50 cursor-pointer">
                    Search
                    </button>

            </div>

            </form>

        </div>

        <h2 class="text-center text-slate-50 font-bold text-xl md:text-2xl pb-6">
            Popular Destinations
        </h2>
        @if (!empty($imageGallery))

        <x-image-slider :images="$imageGallery" />

        @endif

    </section>

</x-layout.default>
