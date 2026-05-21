<div>
    {{-- <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#27AAE1]/80 to-[#FF47AF]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">Registration</h2>
        </div>
    </section> --}}
    <h2 class="md:text-4xl text-xl font-semibold uppercase text-center mt-10"> <span class="text-[#FF47AF]">Registration
        </span></h2>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">
        <div class="mb-5">
            <h1 class="font-bold md:text-2xl text-xl uppercase text-[#262262]"><i
                    class="fa fa-angles-right text-lg"></i> Indonesian Participant</h1>
        </div>
        <div class="flex flex-wrap justify-evenly gap-2 mb-10">
            @foreach ($regLocals as $item)
            <div class="card w-full max-w-sm bg-base-100 shadow-sm">
                <div class="card-body">
                    @if (now()->lte(\Carbon\Carbon::create(2026, 8, 31)))
                    <span class="badge badge-sm border-none badge-secondary">Early Bird Registration</span>
                    @elseif (now()->lte(\Carbon\Carbon::create(2026, 11, 6)))
                    <span class="badge badge-xs badge-secondary">Regular Registration</span>
                    @else
                    <span class="badge badge-xs badge-secondary">Late / Onsite Registration</span>
                    @endif

                    <div class="flex justify-between">
                        <h2 class="md:text-2xl text-xl font-bold">{{$item->title}}</h2>
                        @if (now()->lte(\Carbon\Carbon::create(2026, 8, 31)))
                        <span class="text-xl">IDR {{number_format($item->early_bird_reg,
                            0, ',', '.')}}</span>
                        @elseif (now()->lte(\Carbon\Carbon::create(2026, 11, 6)))
                        <span class="text-xl">IDR {{$item->normal_reg}}</span>
                        @else
                        <span class="text-xl">IDR {{$item->onsite_reg}}</span>
                        @endif
                    </div>
                    <div>
                        {!! str($item->description)->markdown()->sanitizeHtml() !!}
                    </div>
                    <div class="mt-6">
                        @if (now()->lte(\Carbon\Carbon::create(2026, 8, 31)))
                        <a href="{{$item->url_earlybird !== null ? $item->url_earlybird : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] btn-block uppercase tracking-widest text-white rounded-lg"><i
                                class="fa fa-edit text-xs"></i> Register</a>
                        @elseif (now()->lte(\Carbon\Carbon::create(2026, 11, 6)))
                        <a href="{{$item->url_regular !== null ? $item->url_regular : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] btn-block uppercase tracking-widest text-white rounded-lg"><i
                                class="fa fa-edit text-xs"></i> Register</a>
                        @else
                        <a href="{{$item->url_onsite !== null ? $item->url_onsite : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] btn-block uppercase tracking-widest text-white rounded-lg"><i
                                class="fa fa-edit text-xs"></i> Register</a>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mb-5">
            <h1 class="font-bold md:text-2xl text-xl text-[#262262] uppercase"><i
                    class="fa fa-angles-right text-lg"></i> International Participant</h1>
        </div>
        <div class="flex flex-wrap justify-evenly gap-2">
            @foreach ($regForeigns as $foreign)
            <div class="card w-full max-w-sm bg-base-100 shadow-sm">
                <div class="card-body">
                    @if (now()->lte(\Carbon\Carbon::create(2026, 8, 31)))
                    <span class="badge badge-sm border-none badge-secondary">Early Bird Registration</span>
                    @elseif (now()->lte(\Carbon\Carbon::create(2026, 11, 6)))
                    <span class="badge badge-xs badge-secondary">Regular Registration</span>
                    @else
                    <span class="badge badge-xs badge-secondary">Late / Onsite Registration</span>
                    @endif

                    <div class="flex justify-between">
                        <h2 class="md:text-2xl text-xl font-bold">{{$foreign->title}}</h2>
                        @if (now()->lte(\Carbon\Carbon::create(2026, 8, 31)))
                        <span class="text-xl">USD {{number_format($foreign->early_bird_reg,
                            0, ',', '.')}}</span>
                        @elseif (now()->lte(\Carbon\Carbon::create(2026, 11, 6)))
                        <span class="text-xl">USD {{$foreign->normal_reg}}</span>
                        @else
                        <span class="text-xl">USD {{$foreign->onsite_reg}}</span>
                        @endif
                    </div>
                    <div>
                        {!! str($foreign->description)->markdown()->sanitizeHtml() !!}
                    </div>
                    <div class="mt-6">
                        @if (now()->lte(\Carbon\Carbon::create(2026, 8, 31)))
                        <a href="{{$foreign->url_earlybird !== null ? $foreign->url_earlybird : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] btn-block uppercase tracking-widest text-white rounded-lg"><i
                                class="fa fa-edit text-xs"></i> Register</a>
                        @elseif (now()->lte(\Carbon\Carbon::create(2026, 11, 6)))
                        <a href="{{$foreign->url_regular !== null ? $foreign->url_regular : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] btn-block uppercase tracking-widest text-white rounded-lg"><i
                                class="fa fa-edit text-xs"></i> Register</a>
                        @else
                        <a href="{{$foreign->url_onsite !== null ? $foreign->url_onsite : 'javascript:void(0)'}}"
                            class="btn hover:bg-[#FF47AF] bg-[#2B3990] btn-block uppercase tracking-widest text-white rounded-lg"><i
                                class="fa fa-edit text-xs"></i> Register</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>

    <section class="px-5 md:px-10 py-10 md:py-20  border-t border-dashed border-gray-400">
        <div class=" mt-10">
            <div class="text-center lg:text-start">
                <h2 class="mb-2 uppercase text-3xl font-semibold">Registration
                    <span class="text-[#FF47AF]">information</span>
                </h2>
            </div>

            <div>
                @foreach ($regInfos as $regInfo)
                <div class="collapse collapse-arrow bg-base-100 border border-base-300">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title font-semibold">{{ $regInfo->title }}</div>
                    <div class="collapse-content text-sm text-gray-500">
                        {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


</div>