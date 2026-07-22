<div>
    {{-- <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#27AAE1]/80 to-[#39B54A]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">Accommodation</h2>
        </div>
    </section> --}}
    <h2 class="md:text-4xl text-xl font-semibold uppercase text-center mt-10"> <span
            class="text-[#FF47AF]">Accommodation
        </span></h2>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="text-center md:text-start mb-5">
            <h2 class="mb-3 uppercase text-xl tracking-wide font-bold">Hotel <span
                    class="text-[#FF47AF]">Recommendation</span></h2>
            <p class="text-gray-500">The organizers of the 3<sup>rd</sup> ASEAN PATHOLOGY Conference 2026 Indonesian
                Chapter
                congress have secured various hotels near the event venue to accommodate delegates with diverse budgets
                and preferences.

                <span class="text-gray-500">Everything is still within the Kuningan/Mega Kuningan area, access is easy
                    via Jl. DR. Ide Anak Agung
                    Gde Agung → Jl. Prof. DR. Satrio/Jl. HR. Rasuna Said.
                </span>
                <span class="text-gray-500">For public transport, the Jakarta LRT (Rasuna Said
                    or Setiabudi stations) and ride-hailing online taxis are the fastest options, aside from
                    walking.</span>
            </p>
        </div>

        <div class="flex flex-wrap justify-evenly gap-2 mb-10">
            @foreach ($accommodations as $accommodation)
            <div class="card w-full max-w-sm bg-white rounded-xl shadow-md pb-10">
                <div class="mb-3 relative">
                    {{-- menampilkan string HTML --}}
                    {!! $accommodation->tag ? '<span
                        class="absolute top-1 right-4 translate-y-5 bg-[#2B3990] rounded-xl text-white px-3 py-1">
                        <p class="text-xs">' . $accommodation->tag . '</p>
                    </span>' : " " !!}
                    <a href="javascript:void(0)"><img src="{{ asset('storage/' . $accommodation->image) }}"
                            alt="{{$accommodation->hotel_name}}" class="w-full object-cover rounded-xl"></a>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3 ">
                        <h6 class="pb-2 mb-3 text-xl font-semibold">{{$accommodation->hotel_name}}</h6>
                        <div class="flex justify-center mb-3">
                            @for ($i = 1; $i <= 5; $i++) @if ($i <=$accommodation->hotel_star)
                                <i class="fa-solid fa-star text-warning"></i>
                                @else
                                <i class="fa-solid fa-star"></i>
                                @endif
                                @endfor
                        </div>
                        <p class="mt-2 mb-5 text-xs"><i class="fa-solid fa-circle-info"></i>
                            {{$accommodation->distance}}
                        </p>
                        <p class="text-sm"> Cost/Night</p>
                        <div class="text-sm mb-6 flex justify-center gap-3">
                            <p class="text-[#39B54A] font-semibold mb-0"><span class="fw-normal">IDR</span>
                                {{number_format($accommodation->idr_price, 0, ',', '.')}}
                            </p>
                            @if ($accommodation->usd_price !== null && $accommodation->usd_price > 0)

                            <p class="text-[#39B54A] font-semibold"><span class="fw-normal">USD</span>
                                {{$accommodation->usd_price}}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-2 justify-evenly w-full">
                        @if ($accommodation->url !== null)
                        <a href="{{$accommodation->url}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] text-white md:w-36 rounded-lg">Book Now</a>
                        @endif
                        <a href="{{$accommodation->direction ? $accommodation->direction : 'javascript:void(0)'}}"
                            class="btn bg-[#FF47AF] hover:bg-[#2B3990] text-white md:w-36 btn-outline border-none rounded-lg"><i
                                class="fa-solid fa-location-dot mx-1"></i>Direction</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>