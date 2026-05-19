<div>
    {{-- <section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-t from-[#27AAE1]/80 to-[#FF47AF]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class=" uppercase text-2xl font-bold tracking-wide lg:text-4xl">program at glance</h2>
        </div>
    </section> --}}
    <h2 class="md:text-4xl text-xl font-semibold uppercase text-center mt-10">program at <span
            class="text-[#FF47AF]">glance
        </span></h2>

    <div class="px-5 lg:px-10 mt-10">
        <label class="input input-lg input-secondary rounded-lg w-full">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live='search' type="text" class="grow" placeholder="Search Topics, And Sessions" />
        </label>
    </div>

    <section class="px-5 md:px-10 pt-0 pb-10 md:py-20 bg-competition">

        <div class="flex flex-wrap items-center justify-center">
            <div x-data="{ openTab: 3 }" class="lg:w-11/12 w-full mx-auto">
                <div class="">
                    <div class="mb-4 flex flex-wrap space-x-4 p-2 bg-white rounded-lg shadow-md">
                        {{-- <button x-on:click="openTab = 5" :class="{ 'bg-[#262262] text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">8
                            October</button> 
                        <button x-on:click="openTab = 1" :class="{ 'bg-[#262262] text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">8
                            October</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-[#262262] text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">9
                            October</button> --}}
                        <button x-on:click="openTab = 3" :class="{ 'bg-[#262262] text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">7
                            November</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-[#262262] text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">8
                            November</button>

                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">
                        tab 1
                    </div>

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">

                        tab 2

                    </div>

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($tujuh as $ballroom)
                                            @if ($ballroom->room == 'BALLROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom_1{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-indigo-50 border-indigo-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom->time}} <br>
                                                    {{$ballroom->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom_1{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div x-show="openTab === 4"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($delapan as $ballroom8)
                                            @if ($ballroom8->room == 'BALLROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom_8{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-indigo-50 border-indigo-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom8->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom8->time}} <br>
                                                    {{$ballroom8->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom8->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom8->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom8->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom8->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom8->moderator}}
                                                        </span></p>
                                                    <div class="overflow-x-auto mt-5">
                                                        <table class="table">
                                                            <!-- head -->
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 18%">Time</th>
                                                                    <th>Topic</th>
                                                                    <th>Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom8->schedules as $schedule)
                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-action">
                                                        <form method="dialog">
                                                            <!-- if there is a button in form, it will close the modal -->
                                                            <button class="btn">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div x-show="openTab === 5"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">

                        <p>tgl 28</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="px-4 md:px-10 mt-10">
            <p class="text-sm text-error italic">
                Note: <br>
                The scientific schedule is provisional and may be adjusted as required.
            </p>
        </div>
    </section>
</div>