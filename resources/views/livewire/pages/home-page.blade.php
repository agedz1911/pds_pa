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
                    <p class="italic mt-3 text-[#FFDE17] font-bold md:text-3xl">" Precision in Practice: Frontiers in
                        Gynaecological, Thoracic and Oral Pathology "</p>
                </div>
                <div class="flex flex-col md:flex-row lg:justify-start justify-center items-center gap-3 mt-8">
                    <div
                        class="z-10 hover:cursor-pointer max-w-sm p-4 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f4f4fc]">
                        <div class="flex items-center">
                            <div class="shrink-0 bg-[#302b88] p-4 rounded-full">
                                <i class="fa fa-calendar-o text-xl text-white"></i>
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium  truncate">
                                    Saturday to Sunday
                                </p>
                                <p class="text-sm text-gray-500 truncate">
                                    November 7 - 8, 2026
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="z-10 hover:cursor-pointer max-w-sm p-4 bg-white border border-sky-50 rounded-lg shadow-md hover:bg-[#f4f4fc]">
                        <div class="flex items-center px-5">
                            <div class="shrink-0 bg-[#302b88] p-4 rounded-full">
                                <i class="fa fa-map-marker text-xl text-white"></i>
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium  truncate ">
                                    The Ritz-Carlton
                                </p>
                                <p class="text-sm text-gray-500 truncate">
                                    Jakarta Mega Kuningan
                                </p>
                            </div>
                        </div>
                    </div>
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

    <section class="lg:pb-16 pb-20 mt-10 grid grid-cols-1 lg:grid-cols-2 px-3 lg:px-8 gap-3">
        <div class=" px-3 lg:px-8">
            <div class="w-full">
                <div class="text-center pb-6 m-auto">
                    <h2 class="mb-5 md:mb-8 text-3xl text-[#262262] font-bold uppercase">important <span
                            class="">Dates</span></h2>
                </div>
                <livewire:section.important-date />
            </div>
        </div>

        <div class="">
            <livewire:section.flyer />
        </div>
    </section>

    <section id="welcome-message" class="bg-gradient-to-b from-[#262262] to-[#27AAE1] relative z-0 py-28">
        {{-- <div class="absolute inset-0 feature start-0"></div> --}}
        <div class="relative">
            {{-- <div class="w-full max-w-6xl mx-auto border-b mb-10 pb-10 border-white border-opacity-35">
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
                                        data-val="20"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Symposium</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35 border-white">
                            <div class="border-b border-opacity-25 border-white md:border-b-0 text-center py-5 px-2">
                                <h1 class="text-white m-0 text-4xl md:text-5xl font-semibold"><span class="num"
                                        data-val="15"></span><span>+</span>
                                </h1>
                                <p class="text-xs text-white">Lecture </p>
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
            </div> --}}
            <div class="">
                <h2 class="text-4xl text-white font-semibold uppercase text-center mt-10">Welcome <span
                        class="text-[#FF47AF]">Note
                    </span></h2>
                <livewire:pages.welcome-message />

            </div>
        </div>
    </section>

    <section id="organizing-committee" class="w-full py-24 px-2 lg:px-4 pattern">
        <div class="bg-competition w-full h-full absolute"></div>
        <livewire:pages.committee />
    </section>

    <section id="faculties" class="w-full py-24 px-2 lg:px-4 bg-slate-50">
        <livewire:pages.faculty />
    </section>
    <section id="program-at-glance" class="w-full pt-24 pb-3 px-2 lg:px-4 pattern">
        <livewire:pages.at-glance />
    </section>

    <section id="scientific-schedule" class="w-full py-24 px-2 lg:px-4 bg-slate-50">
        <livewire:pages.schedule />
    </section>

    <section id="registration" class="w-full py-24 px-2 lg:px-4 pattern">
        <livewire:pages.registration />
    </section>
    <section id="accommodation" class="w-full py-24 px-2 lg:px-4 ">
        <livewire:pages.accommodation />
    </section>

    <section id="abstract-submission" class="w-full py-24 px-2 lg:px-4 bg-slate-50">
        <livewire:pages.guideline-abstract />
    </section>

    <section class="w-full pt-24 pb-3 px-2 lg:px-4">
        <div class="text-center mb-5 pb-10">
            <h2 class="md:text-4xl text-xl font-semibold uppercase mb-1">GET DIRECTION TO THE <span
                    class="text-[#FF47AF]">Venue</span></h2>
        </div>
        <div class="">
            <div class="flex flex-col lg:flex-row gap-5">
                <div class="lg:w-1/3 w-fit">
                    <div class="py-10  px-4 text-white rounded-lg shadow-md bg-[#262262]">
                        <div class="">
                            <h5 class="pb-2 tracking-wide font-semibold">EVENT VENUE :
                            </h5>
                            <p class="pb-5 m-0 text-sm"> The Ritz-Carlton Jakarta Mega Kuningan </p>
                            <h5 class="pb-2 tracking-wide font-semibold">ADDRESS :
                            </h5>
                            <p class="pb-5 m-0 text-sm"> Jl. DR. Ide Anak Agung Gde Agung No.1 Kav.E, Kuningan,
                                South jakarta, Indonesia </p>

                            <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                            <a href="https://www.google.com/maps/dir//Ritz-Carlton+Jakarta,+RT.5%2FRW.2,+Kuningan,+East+Kuningan,+Setiabudi,+South+Jakarta+City,+Jakarta+12950/@-6.2285518,106.8246668,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69f3e522f87729:0xdefece2f325ccb3d!2m2!1d106.8272417!2d-6.2285571?entry=ttu&g_ep=EgoyMDI2MDUxMy4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank" class="hover:text-[#FF47AF]">Get Directions</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full px-1 flex flex-col md:flex-row gap-2">
                    <iframe class="rounded-lg w-full "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.266510804608!2d106.82466677478348!3d-6.228551760998128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e522f87729%3A0xdefece2f325ccb3d!2sRitz-Carlton%20Jakarta%2C%20RT.5%2FRW.2%2C%20Kuningan%2C%20East%20Kuningan%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta%2012950!5e0!3m2!1sen!2sid!4v1779089793373!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-5 justify-items-center">

                <div class="w-full ">
                    <a><img src="{{asset('assets/images/jakarta/4.jpg')}}"
                            class="w-full max-h-64 object-cover rounded-xl shadow-md saturate-150"
                            alt="venue jakarta "></a>
                </div>
                <div class="w-full ">
                    <a><img src="{{asset('assets/images/jakarta/5.jpg')}}"
                            class="w-full max-h-64 object-cover rounded-xl shadow-md saturate-150"
                            alt="venue jakarta "></a>
                </div>
                <div class="w-full ">
                    <a><img src="{{asset('assets/images/jakarta/6.jpg')}}"
                            class="w-full max-h-64 object-cover object-top rounded-xl shadow-md sepia-50"
                            alt="venue jakarta "></a>
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

        const targetTime = new Date(2026, 10, 7, 8, 0, 0);

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