@php
    // dd($cottage);

    $urls = json_decode($cottage->gallery, true);
@endphp

<x-layout.default>
    <script defer>
        let slideIndex = 1;

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }

        window.addEventListener('DOMContentLoaded', (event) => {
            showSlides(slideIndex);
        });

    </script>

    <section class="space-y-4 flex flex-col items-center pb-4">

        <x-h1-animation text="{{$cottage->title}}" />

            <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->

    @foreach ($urls as $key=>$value)

        <div class="mySlides fade">
            <div class="numbertext">{{ $key + 1 }} / {{count($urls)}}</div>
            <img src="{{$value}}" class="w-full h-auto object-contain">
        </div>

    @endforeach


    <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="p-4 max-w-xl mx-auto">
        {{$cottage->description}}
    </div>


    <a href="{{route('bookings.create', $cottage->id)}}" class="bg-blue-500 text-white p-2 rounded">
        Check Availability
    </a>

    </section>

</x-layout.default>
