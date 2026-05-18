<div>
    @if ($flyers && $flyers->isNotEmpty())
    <div class="carousel w-full max-w-md rounded-2xl" x-data="{ 
         currentSlide: 0, 
         totalSlides: {{ count($flyers) }},
         interval: null 
     }" x-init="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 6000)" @mouseenter="clearInterval(interval)" @mouseleave="interval = setInterval(() => { 
         currentSlide = (currentSlide + 1) % totalSlides;
     }, 6000)">
        <div class="flex transition-transform duration-500 ease-in-out h-full"
            :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
            @foreach ($flyers as $index => $flyer)
            <div id="slide{{ $index + 1 }}"
                class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                {{-- @foreach ($flyer->image as $image) --}}
                <figure>
                    <img src="{{ asset('storage/' . $flyer->image)}}" alt=""
                        class="h-full object-cover max-w-full rounded-2xl" />
                </figure>
                {{-- @endforeach --}}
                <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                    <button
                        @click="clearInterval(interval); currentSlide = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 6000), 6000)"
                        class="btn btn-circle btn-xs btn-outline">❮</button>
                    <button
                        @click="clearInterval(interval); currentSlide = (currentSlide + 1) % totalSlides; setTimeout(() => interval = setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides; }, 6000), 6000)"
                        class="btn btn-circle btn-xs btn-outline">❯</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 align-items-center">
        <div class="flex flex-col gap-4">
            <div class="rounded-xl bg-white shadow-lg">
                <img src="{{asset('assets/images/jakarta/2.jpg')}}" class="w-full rounded-xl saturate-100" alt="jakarta 1">
            </div>
            <div class="rounded-xl bg-white shadow-lg">
                <img src="{{asset('assets/images/jakarta/3.webp')}}" class="w-full rounded-xl sepia-25" alt="jakarta 2">
            </div>
        </div>
        <div class="rounded-xl bg-white shadow-lg">
            <img src="{{asset('assets/images/jakarta/1.jpg')}}" class="w-full rounded-xl object-cover h-full saturate-200"
                alt="jakarta 3">
        </div>
    </div>
    @endif
</div>