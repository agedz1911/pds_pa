<div>
    {{-- <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#27AAE1]/80 to-[#39B54A]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">Accommodation</h2>
        </div>
    </section> --}}
    <h2 class="md:text-4xl text-xl font-semibold uppercase text-center mt-10"> <span class="text-[#FF47AF]">Accommodation
        </span></h2>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        {{-- <div class="text-center md:text-start mb-5">
            <h2 class="mb-3 uppercase text-4xl tracking-wide font-bold">Hotel <span class="text-[#262262]">Reservation</span></h2>
            <p class="text-gray-500">The organizers of the ... congress have secured competitive rates at a variety of
                hotels near the Venue to accommodate delegates
                with different budgets and preferences. Hotel reservations will open and are subject
                to availability. It is advisable to book your preferred hotel as soon as possible
            </p>
        </div> --}}

        <div class="flex flex-wrap justify-evenly gap-2 mb-10">
            @foreach ($accommodations as $accommodation)
            <div class="card w-full max-w-sm bg-white rounded-xl shadow-md pb-10">
                <div class="mb-3 relative">
                    {{-- menampilkan string HTML --}}
                    {!! $accommodation->tag ? '<span
                        class="absolute top-1 right-4 translate-y-5 bg-[#2B3990] rounded-xl text-white px-3 py-1">
                        <p class="text-xs">' . $accommodation->tag . '</p>
                    </span>' : " " !!}
                    <a href="javascript:void(0)"><img
                            src="{{ asset('storage/' . $accommodation->image) }}"
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
                        <p class="mt-2 mb-5 text-xs"><i
                                class="fa-solid fa-circle-info"></i>
                            {{$accommodation->distance}}
                        </p>
                        <p class="text-sm"> Cost/Night</p>
                        <div class="text-sm mb-6 flex justify-center gap-3">
                            <p class="text-[#39B54A] font-semibold mb-0"><span
                                    class="fw-normal">IDR</span>
                                {{number_format($accommodation->idr_price, 0, ',', '.')}}
                            </p>
                            @if ($accommodation->usd_price !== null && $accommodation->usd_price > 0)
                                
                            <p class="text-[#39B54A] font-semibold"><span
                                class="fw-normal">USD</span>
                                {{$accommodation->usd_price}}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="{{$accommodation->url ? $accommodation->url : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] text-white w-full rounded-lg">Book Now</a>
                        <a href="{{$accommodation->direction ? $accommodation->direction : 'javascript:void(0)'}}"
                            class="btn bg-[#FF47AF] hover:bg-[#2B3990] text-white w-full btn-outline rounded-lg"><i class="fa-solid fa-location-dot mx-1"></i>Direction</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>