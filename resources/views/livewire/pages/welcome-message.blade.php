<div>
    {{-- <section class="bg-gradient-to-b from-[#27AAE1]/80 to-[#06D322]/10 relative z-0 py-28"> --}}
    <section class="relative z-0 py-20">
        <div class="mb-6 px-4 md:px-24">
            @foreach ($messages as $welcomeMessage)
            {{-- @if ($loop->even) --}}
            <div class="card shadow-lg bg-transparent border border-slate-50/50 w-full mb-5">
                <div class="card-body">
                    <div class="grid grid-cols-1  justify-items-stretch">
                        <div class="order-2 lg:order-2 p-2">
                            <div
                                class="w-full flex flex-col md:flex-row justify-around gap-4">
                                
                                <div class="p-4 rounded-lg bg-[#262262] w-full max-w-sm">
                                    <div class="ps-4 border-s border-[#fff] border-spacing-7">
                                        <p class="text-white text-xs italic">" {{$welcomeMessage->title}}
                                            "</p>
                                        <h6 class="font-semibold text-white">{{$welcomeMessage->name}}</h6>
                                    </div>
                                </div>
                                <div class="p-4 rounded-lg bg-[#262262] w-full max-w-sm">
                                    <div class="ps-4 border-s border-[#fff] border-spacing-7">
                                        <p class="text-white text-xs italic">" {{$welcomeMessage->title_2}}
                                            "</p>
                                        <h6 class="font-semibold text-white">{{$welcomeMessage->name_2}}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="order-1 lg:order-1 p-2 ">
                            <div class="flex flex-col ">
                                <div class="pr-2">
                                    <div class="pb-4  text-justify flex flex-col gap-2 text-white">
                                        {!! str($welcomeMessage->description)->markdown()->sanitizeHtml() !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @else
            <div class="card shadow-lg bg-transparent border  border-opacity-25 w-full mb-5">
                <div class="card-body">
                    <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-stretch">
                        <div class="order-2 lg:order-2 p-2">
                            <div
                                class="w-full justify-center lg:flex-row flex flex-col items-center lg:items-end gap-2">
                                <div class="avatar">
                                    <img src="{{$welcomeMessage->image ? asset('storage/' . $welcomeMessage->image) : "
                                        assets/images/speaker.png"}}" alt="{{$welcomeMessage->name}}"
                                        class="w-full max-w-52 shadow-md rounded-lg ">
                                </div>
                                <div class="p-4 rounded-lg bg-[#39B54A] w-full max-w-sm">
                                    <div class="ps-4 border-s border-[#fff] border-spacing-7">
                                        <p class="text-white text-xs italic">" {{$welcomeMessage->title}}
                                            "</p>
                                        <h6 class="font-semibold text-white">{{$welcomeMessage->name}}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="order-1 lg:order-1 p-2 ">
                            <div class="flex flex-col ">
                                <div class="pr-2">
                                    <div class="pb-4  text-justify flex flex-col gap-2">
                                        {!! str($welcomeMessage->description)->markdown()->sanitizeHtml() !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif --}}
            @endforeach
        </div>
    </section>


</div>