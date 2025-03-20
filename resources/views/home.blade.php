@php
    $imageGallery = [
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-01.jpeg',
        'alt' => 'Photo of Mountains',
        'place' => 'Mountain Range 1'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-02.jpeg',
        'alt' => 'Photo of Mountains 02',
        'place' => 'Mountain Range 2'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-03.jpeg',
        'alt' => 'Photo of Mountains 03',
        'place' => 'Mountain Range 3'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-04.jpeg',
        'alt' => 'Photo of Mountains 04',
        'place' => 'Mountain Range 4'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-05.jpeg',
        'alt' => 'Photo of Mountains 05',
        'place' => 'Mountain Range 5'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-06.jpeg',
        'alt' => 'Photo of Mountains 06',
        'place' => 'Mountain Range 6'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-07.jpeg',
        'alt' => 'Photo of Mountains 07',
        'place' => 'Mountain Range 7'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-08.jpeg',
        'alt' => 'Photo of Mountains 08',
        'place' => 'Mountain Range 8'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-09.jpeg',
        'alt' => 'Photo of Mountains 09',
        'place' => 'Mountain Range 9'
    ],
    [
        'photo' => 'https://cdn.devdojo.com/images/june2023/mountains-10.jpeg',
        'alt' => 'Photo of Mountains 10',
        'place' => 'Mountain Range 10'
    ]
];
@endphp


<x-layout.default>

    <section class="w-full flex flex-col items-center justify-center bg-blue pb-4">

        <h1 x-data="{
                    startingAnimation: { opacity: 0, scale: 4 },
                    endingAnimation: { opacity: 1, scale: 1, stagger: 0.07, duration: 1, ease: 'expo.out' },
                    addCNDScript: true,
                    animateText() {
                        $el.classList.remove('invisible');
                        gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                    },
                    splitCharactersIntoSpans(element) {
                        text = element.innerHTML;
                        modifiedHTML = [];
                        for (var i = 0; i < text.length; i++) {
                            attributes = '';
                            if(text[i].trim()){ attributes = 'class=\'inline-block\''; }
                            modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                        }
                        element.innerHTML = modifiedHTML.join('');
                    },
                    addScriptToHead(url) {
                        script = document.createElement('script');
                        script.src = url;
                        document.head.appendChild(script);
                    }
                }"
                x-init="
                    splitCharactersIntoSpans($el);
                    if(addCNDScript){
                        addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                    }
                    gsapInterval = setInterval(function(){
                        if(typeof gsap !== 'undefined'){
                            animateText();
                            clearInterval(gsapInterval);
                        }
                    }, 5);
                "
                class="invisible block text-center text-slate-50 font-bold md:text-2xl"
                >
                Discover Your Perfect Cabin Retreat
        </h1>

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
        <x-image-slider :images="$imageGallery" />

    </section>

</x-layout.default>
