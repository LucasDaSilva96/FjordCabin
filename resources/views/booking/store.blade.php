<x-layout.default>

    <section class="space-y-6">

        <x-h1-animation text="{{$cottage->title}}" />

            @guest
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">You must be logged in to book a cottage</strong>
            </div>
            @endguest

        </section>

</x-layout.default>
