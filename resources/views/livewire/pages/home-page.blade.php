<div class="relative">
    <section class="lg:min-h-screen banner relative pb-16 lg:pb-28">
        <div class="absolute inset-0 bg-gradient-to-t from-[#262262]/90 to-[#D62C8C]/70"></div>
        <div class="z-10 relative pt-10 md:pt-14 lg:pt-32 ">

            <div class="px-5 order-1 lg:order-2 w-full max-w-7xl md:px-52">
                <img src="{{asset('assets/images/logo/logo-all.png')}}" class="w-full max-w-md rounded-xl" alt="Banner">
                <div class="flex gap-1 mt-6">
                    <div>
                        <img src="{{asset('assets/images/logo/icon.png')}}" class="w-full max-w-40" alt="">
                    </div>
                    <div class="w-full text-white">
                        <h1 class="text-3xl lg:text-6xl font-bold mb-0 ">
                            ASEAN <br> PATHOLOGY
                        </h1>
                        <H4 class="md:tracking-widest text-xl md:text-3xl uppercase font-semibold">Conference 2026</H4>
                        <div
                            class="bg-[#FF47AF] w-fit px-2 md:px-5 py-1 md:rounded-tl-2xl md:rounded-br-2xl rounded-tl-lg rounded-br-lg">
                            <p class="tracking-widest md:text-xl uppercase font-bold text-xs">Indonesian Chapter</p>
                        </div>

                    </div>
                </div>
                <div class="w-full max-w-2xl">
                    <p class="italic mt-3 text-[#FFDE17] font-bold md:text-3xl">" Precision in Practise: Frontiers in
                        Gynaecological, Thoraric and Oral Pathology "</p>
                </div>
                <p class="text-[#ececec] mt-3">
                    November 7<sup>th</sup> - 8<sup>th</sup>, 2026 <br> The Ritz-Carlton Mega Kuningan, Jakarta,
                    Indonesia
                </p>
                <div class="mt-7 w-full gap-1 flex flex-wrap">
                    <a
                        class="text-white hover:cursor-pointer border-slate-50/30 border bg-[#262262] hover:border-[#262262] focus:ring-4 focus:outline-none focus:ring-[#262262] font-medium rounded-lg text-sm px-5 md:px-10 py-3 text-center  dark:border-[#262262] dark:text-[#262262] dark:hover:text-white dark:hover:bg-white dark:focus:ring-white"><i
                            class="fa-solid fa-file-download mr-1 text-xs"></i>Download Announcement </a>
                    <a href="/registration" wire:navigate
                        class="btn text-sm px-5 md:px-10 py-3 text-center rounded-lg btn-lg btn-soft btn-secondary"><i
                            class="fa-solid fa-pen-to-square"></i> Register Now </a>
                </div>
            </div>
        </div>
        <div
            class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none bottom-[-1px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="fill-white translate-middle-y" fill-opacity="1"
                    d="M0,256L120,261.3C240,267,480,277,720,256C960,235,1200,181,1320,154.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <section class="px-2 -mt-10 lg:-mt-30 lg:px-7 pb-24 ">
        <div id="countdown" class="flex flex-wrap justify-center lg:justify-end md:flex-row w-full mx-auto gap-4">
            <div class="text-center card bg-[#262262] rounded-2xl lg:w-32 w-40">
                <div class="card-body ">
                    <span id="days" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Days</small>
                </div>
            </div>

            <div class="text-center card bg-[#262262] rounded-2xl lg:w-32 w-40">
                <div class="card-body">
                    <span id="hours" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Hours</small>
                </div>
            </div>
            <div class="text-center card bg-[#262262] rounded-2xl lg:w-32 w-40">
                <div class="card-body">
                    <span id="minutes" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Minutes</small>
                </div>
            </div>

            <div class="text-center card bg-[#262262] rounded-2xl lg:w-32 w-40">
                <div class="card-body">
                    <span id="seconds" class="font-bold text-white mb-0 text-2xl lg:text-4xl"></span><br>
                    <small class="text-white mt-0 text-xs">Seconds</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Tempat widget muncul -->
    <div id="my-custom-widget" class="w-full h-fit"></div>

    <!-- Script pemanggil -->
    <script src="https://apfsrm2026bali.org/js/widget.js" async></script>

    <section class="bg-gradient-to-b from-[#262262] to-[#27AAE1] relative z-0 py-28">
        {{-- <div class="absolute inset-0 feature start-0"></div> --}}
        <div class="relative">

            <div class="">
                <h2 class="text-4xl text-white font-semibold uppercase text-center mb-10">Welcome <span
                        class="text-[#39B54A]">message
                    </span></h2>
                <div class="flex flex-col md:flex-row justify-center">
                    @foreach ($welcomeMessages as $welcomeMessage)
                    <div class="mb-5 w-full max-w-3xl items-start px-2 lg:px-8">
                        <div class="pb-4 text-justify text-white">
                            {!! Str::limit(str($welcomeMessage->description)->markdown()->sanitizeHtml(), 450) !!} <br>
                            <a class="text-pink-200 hover:text-white hover:underline" href="/welcome-message">Read
                                More...</a>
                        </div>
                        <div>
                            <div class="avatar">
                                <img src="{{$welcomeMessage->image ? asset('storage/' . $welcomeMessage->image) : "
                                    assets/images/speaker.png"}}" alt="{{$welcomeMessage->name}}"
                                    class="w-full max-w-52 shadow-md rounded-lg ">
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-[#39B54A] w-full max-w-sm mt-3 mb-5">
                            <div class="p-2 border-s border-white border-spacing-7">
                                <p class="text-white text-xs italic"> {{$welcomeMessage->title}}
                                </p>
                                <h6 class="font-semibold text-white">{{$welcomeMessage->name}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full max-w-6xl mx-auto border-t mt-10 pt-10 border-white border-opacity-35">
                <div class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="w-full border-e border-opacity-35 border-white ">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="100"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="25"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="16"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Workshops </p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="40"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:pb-16 pb-20 mt-10 grid grid-cols-1 lg:grid-cols-2 px-3 lg:px-8 gap-3">
        <div class=" px-3 lg:px-8">
            <img src="assets/images/logo/logo-all.png" alt="Icon" class="w-60 mb-5" class="">
            <div class="flex gap-1 mt-6">
                <div>
                    <img src="{{asset('assets/images/logo/icon.png')}}" class="w-full max-w-40" alt="">
                </div>
                <div class="w-full ">
                    <h1 class="text-xl lg:text-2xl text-[#302b88] font-bold mb-0 ">
                        KONAS IX
                    </h1>
                    <h1 class="font-bold text-6xl lg:text-8xl tracking-widest text-[#39B54A] mt-0">HIFERI</h1>
                    <div class="flex flex-row w-full">
                        <p class="text-sm">The 9<sup>th</sup> National Congress of</p>
                    </div>
                    <p class="text-sm tracking-tighter">Indonesian Association of Reproductive Endocrinology and
                        Fertility</p>
                </div>
            </div>
            <div class="w-full max-w-2xl">
                <p class="italic mt-3 text-[#302b88] font-bold md:text-xl">" Empowering Reproductive Endocrinology
                    and Infertility Clinicians:
                    Dedicated to Care, Driven by Innovation, Defined by Success. "</p>
            </div>
            <div class="flex flex-col md:flex-row lg:justify-start justify-center items-center gap-3 mt-8">
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f4f4fc]">
                    <div class="flex items-center">
                        <div class="shrink-0 bg-[#302b88] p-4 rounded-full">
                            <i class="fa fa-calendar-o text-xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate">
                                Thursday to Sunday
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                October 8<sup>th</sup> - 11<sup>th</sup>, 2026
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="z-10 hover:cursor-pointer max-w-sm p-6 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f4f4fc]">
                    <div class="flex items-center px-5">
                        <div class="shrink-0 bg-[#302b88] p-4 rounded-full">
                            <i class="fa fa-map-marker text-xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0 ms-4">
                            <p class="text-sm font-medium  truncate ">
                                Holiday Inn
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                Pasteur, Bandung
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <livewire:section.flyer />
        </div>
    </section>

    <section class="lg:py-16 py-20 bg-[#52da64]/10 relative z-0 bg-competition">
        <div class="w-full pt-5">
            <div class="text-center pb-6 m-auto">
                <h2 class="mb-5 md:mb-8 text-3xl font-bold uppercase">important <span class="">Dates</span></h2>
            </div>
            <livewire:section.important-date />
        </div>
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4 ">
        <div class="border-b-2 border-dashed border-[#302b88]/50 pb-10">
            <div class="">
                <div class="text-center pb-6 w-60 m-auto">
                    {{-- <span class="mb-1  text-sm">49<sup>th</sup> ASMIUA</span> --}}
                    <h2 class="mb-1 text-[#302b88] text-xl md:text-3xl font-bold uppercase">SPONSors</h2>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 items-center justify-center">
                        @foreach ($sponsors as $sponsor)
                        <div class="p-0 border-r border-gray-300 last:border-0">
                            <div class="p-2 opacity-75 hover:opacity-100 text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-accent">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center my-10">
                    <a class="btn bg-[#39B54A] hover:bg-[#2d8d3a] text-white rounded-xl uppercase" href="/sponsors">VIEW
                        MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <h2 class="md:text-3xl text-xl font-semibold uppercase mb-1">GET DIRECTION TO THE <span
                    class="text-[#302b88]">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-fit">
                    <div class="py-10  px-4 text-white rounded-lg shadow-md bg-[#262262]">
                        <div class="">
                            <h5 class="pb-2 tracking-wide font-semibold">EVENT VENUE :
                            </h5>
                            <p class="pb-5 m-0 text-sm"> Holiday Inn, Pasteur, Bandung </p>
                            <h5 class="pb-2 tracking-wide font-semibold">ADDRESS :
                            </h5>
                            <p class="pb-5 m-0 text-sm"> Jl. Dr. Djunjunan No.96, Pasteur, Bandung City, West Java </p>

                            <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                            <a href="https://www.google.com/maps/dir//Holiday+Inn+Bandung+Pasteur,+Jl.+Dr.+Djunjunan+No.96,+Pasteur,+Kec.+Sukajadi,+Kota+Bandung,+Jawa+Barat+40162/@-6.8960897,107.5906402,17z/data=!4m19!1m10!3m9!1s0x2e68e665b08b263d:0x2edd60e3b317f7b4!2sHoliday+Inn+Bandung+Pasteur!5m2!4m1!1i2!8m2!3d-6.8960897!4d107.5906402!16s%2Fg%2F1td8w6x8!4m7!1m0!1m5!1m1!1s0x2e68e665b08b263d:0x2edd60e3b317f7b4!2m2!1d107.5906402!2d-6.8960897?entry=ttu&g_ep=EgoyMDI2MDQxNS4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank" class="hover:text-[#39B54A]">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1 flex flex-col md:flex-row gap-2">
                    <iframe class="rounded-lg w-full "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.954133989028!2d107.5906402!3d-6.8960897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e665b08b263d%3A0x2edd60e3b317f7b4!2sHoliday%20Inn%20Bandung%20Pasteur!5e0!3m2!1sid!2sid!4v1776679432573!5m2!1sid!2sid"
                        width="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full ">
                    <a><img src="{{asset('assets/images/bandung/1.jpg')}}"
                            class="w-full max-h-96 object-cover rounded-xl shadow-md saturate-150"
                            alt="venue bandung "></a>
                </div>
                <div class="w-full ">
                    <a><img src="{{asset('assets/images/bandung/2.webp')}}"
                            class="w-full max-h-96 object-cover rounded-xl shadow-md saturate-150"
                            alt="venue bandung "></a>
                </div>
                <div class="w-full ">
                    <a><img src="{{asset('assets/images/bandung/3.webp')}}"
                            class="w-full max-h-96 object-cover object-top rounded-xl shadow-md sepia-50"
                            alt="venue bandung "></a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('livewire:navigated', function() {
        const days = document.getElementById('days');
        const hours = document.getElementById('hours');
        const minutes = document.getElementById('minutes');
        const seconds = document.getElementById('seconds');

        // Check if all elements are found
        const elementsExist = days && hours && minutes && seconds;

        // If any element is missing, log a warning and return
        if (!elementsExist) {
            console.warn('One or more countdown elements not found.');
            return;
        }

        // Get current date and time
        const currentTime = new Date();

        const targetTime = new Date(2026, 9, 8, 08, 00, 00);

        // Update countdown time
        function updateCountdown() {
            const currentTime = new Date();
            const diff = targetTime - currentTime;

            const d = Math.floor(diff / 1000 / 60 / 60 / 24);
            const h = Math.floor((diff / 1000 / 60 / 60) % 24);
            const m = Math.floor((diff / 1000 / 60) % 60);
            const s = Math.floor((diff / 1000) % 60);

            // Update elements if they exist
            if (days) days.innerHTML = d;
            if (hours) hours.innerHTML = h < 10 ? '0' + h : h;
            if (minutes) minutes.innerHTML = m < 10 ? '0' + m : m;
            if (seconds) seconds.innerHTML = s < 10 ? '0' + s : s;
        }

        // Call updateCountdown initially and set it to run every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
    });
</script>