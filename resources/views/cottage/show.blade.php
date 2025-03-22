@php
    dd($cottage);

    $urls = json_decode($cottage->gallery, true);
@endphp

<x-layout.default>

    <section>

        <x-h1-animation text="{{$cottage->title}}" />


    </section>

</x-layout.default>
