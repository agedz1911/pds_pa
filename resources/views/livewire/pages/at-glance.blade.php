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
                        {{-- <button x-on:click="openTab = 5" :class="{ 'bg-[#FF47AF] text-white': openTab === 5 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">8
                            October</button> --}}
                        <button x-on:click="openTab = 1" :class="{ 'bg-[#FF47AF] text-white': openTab === 1 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">8
                            October</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-[#FF47AF] text-white': openTab === 2 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">9
                            October</button>
                        <button x-on:click="openTab = 3" :class="{ 'bg-[#FF47AF] text-white': openTab === 3 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">10
                            October</button>
                        <button x-on:click="openTab = 4" :class="{ 'bg-[#FF47AF] text-white': openTab === 4 }"
                            class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">11
                            October</button>

                    </div>

                    <div x-show="openTab === 1"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room1)
                                            @if ($room1->room == 'ROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room1_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room1->category_sesi}}</div>
                                                    <br>
                                                    {{$room1->time}} <br>
                                                    {{$room1->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room1_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room1->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room1->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room1->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room1->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room1->moderator}}
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
                                                                @foreach ($room1->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room2)
                                            @if ($room2->room == 'ROOM 2')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room2_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room2->category_sesi}}</div>
                                                    <br>
                                                    {{$room2->time}} <br>
                                                    {{$room2->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room2_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room2->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room2->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room2->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room2->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room2->moderator}}
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
                                                                @foreach ($room2->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room3)
                                            @if ($room3->room == 'ROOM 3')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room3_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room3->category_sesi}}</div>
                                                    <br>
                                                    {{$room3->time}} <br>
                                                    {{$room3->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room3_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room3->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room3->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room3->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room3->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room3->moderator}}
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
                                                                @foreach ($room3->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room4)
                                            @if ($room4->room == 'ROOM 4')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room4_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room4->category_sesi}}</div>
                                                    <br>
                                                    {{$room4->time}} <br>
                                                    {{$room4->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room4_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room4->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room4->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room4->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room4->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room4->moderator}}
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
                                                                @foreach ($room4->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room5)
                                            @if ($room5->room == 'ROOM 5')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room5_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room5->category_sesi}}</div>
                                                    <br>
                                                    {{$room5->time}} <br>
                                                    {{$room5->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room5_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room5->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room5->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room5->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room5->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room5->moderator}}
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
                                                                @foreach ($room5->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room6)
                                            @if ($room6->room == 'ROOM 6')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room6_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room6->category_sesi}}</div>
                                                    <br>
                                                    {{$room6->time}} <br>
                                                    {{$room6->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room6_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room6->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room6->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room6->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room6->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room6->moderator}}
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
                                                                @foreach ($room6->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room7)
                                            @if ($room7->room == 'ROOM 7')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room7_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room7->category_sesi}}</div>
                                                    <br>
                                                    {{$room7->time}} <br>
                                                    {{$room7->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room7_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room7->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room7->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room7->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room7->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room7->moderator}}
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
                                                                @foreach ($room7->schedules as $schedule)
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
                                        <td class="align-top">
                                            {{-- @dd($delapan) --}}
                                            @foreach ($delapan as $room8)
                                            @if ($room8->room == 'ROOM 8')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room8_8{{$loop->index}}.showModal()">
                                                <div class="px-0 border border-sky-200 py-4 w-full rounded-md bg-sky-50">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room8->category_sesi}}</div>
                                                    <br>
                                                    {{$room8->time}} <br>
                                                    {{$room8->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room8_8{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3 ">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room8->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room8->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room8->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room8->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room8->moderator}}
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
                                                                @foreach ($room8->schedules as $schedule)
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

                    <div x-show="openTab === 2"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                        <th style="width: 12%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($sembilan as $room91)
                                            @if ($room91->room == 'ROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room91_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room91->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room91->time}} <br>
                                                    {{$room91->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room91_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room91->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room91->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room91->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room91->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room91->moderator}}
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
                                                                @foreach ($room91->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room92)
                                            @if ($room92->room == 'ROOM 2')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room92_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room92->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room92->time}} <br>
                                                    {{$room92->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room92_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room92->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room92->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room92->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room92->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room92->moderator}}
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
                                                                @foreach ($room92->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room93)
                                            @if ($room93->room == 'ROOM 3')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room93_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room93->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room93->time}} <br>
                                                    {{$room93->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room93_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room93->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room93->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room93->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room93->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room93->moderator}}
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
                                                                @foreach ($room93->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room94)
                                            @if ($room94->room == 'ROOM 4')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room94_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room94->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room94->time}} <br>
                                                    {{$room94->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room94_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room94->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room94->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room94->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room94->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room94->moderator}}
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
                                                                @foreach ($room94->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room95)
                                            @if ($room95->room == 'ROOM 5')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room95_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room95->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room95->time}} <br>
                                                    {{$room95->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room95_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room95->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room95->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room95->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room95->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room95->moderator}}
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
                                                                @foreach ($room95->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room96)
                                            @if ($room96->room == 'ROOM 6')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room96_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room96->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room96->time}} <br>
                                                    {{$room96->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room96_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room96->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room96->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room96->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room96->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room96->moderator}}
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
                                                                @foreach ($room96->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room97)
                                            @if ($room97->room == 'ROOM 7')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room97_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room97->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room97->time}} <br>
                                                    {{$room97->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room97_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room97->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room97->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room97->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room97->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room97->moderator}}
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
                                                                @foreach ($room97->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sembilan as $room98)
                                            @if ($room98->room == 'ROOM 8')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room98_9{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-info mb-2">{{$room98->category_sesi}}
                                                    </div>
                                                    <br>
                                                    {{$room98->time}} <br>
                                                    {{$room98->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room98_9{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room98->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room98->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room98->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room98->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room98->moderator}}
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
                                                                @foreach ($room98->schedules as $schedule)
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

                    <div x-show="openTab === 3"
                        class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-[#262262]">

                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr class="text-base font-semibold mb-2">
                                        <th style="width: 20%;">Ballroom 1,2,3</th>
                                        <th style="width: 20%;">Ballroom 1</th>
                                        <th style="width: 20%;">Ballroom 2</th>
                                        <th style="width: 20%;">Ballroom 3</th>
                                        <th style="width: 20%;">Room 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($sepuluh as $ballroomall10)
                                            @if ($ballroomall10->room == 'BALLROOM 1,2,3')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroomall_10{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroomall10->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroomall10->time}} <br>
                                                    {{$ballroomall10->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroomall_10{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroomall10->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroomall10->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroomall10->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroomall10->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroomall10->moderator}}
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
                                                                @foreach ($ballroomall10->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sepuluh as $ballroom110)
                                            @if ($ballroom110->room == 'BALLROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom1_10{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom110->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom110->time}} <br>
                                                    {{$ballroom110->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom1_10{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom110->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom110->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom110->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom110->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom110->moderator}}
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
                                                                @foreach ($ballroom110->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sepuluh as $ballroom210)
                                            @if ($ballroom210->room == 'BALLROOM 2')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom2_10{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom210->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom210->time}} <br>
                                                    {{$ballroom210->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom2_10{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom210->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom210->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom210->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom210->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom210->moderator}}
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
                                                                @foreach ($ballroom210->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sepuluh as $ballroom310)
                                            @if ($ballroom310->room == 'BALLROOM 3')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom3_10{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom310->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom310->time}} <br>
                                                    {{$ballroom310->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom3_10{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom310->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom310->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom310->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom310->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom310->moderator}}
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
                                                                @foreach ($ballroom310->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sepuluh as $room110)
                                            @if ($room110->room == 'ROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room1_10{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-warning mb-2">{{$room110->category_sesi}}</div>
                                                    <br>
                                                    {{$room110->time}} <br>
                                                    {{$room110->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room1_10{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room110->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room110->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room110->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room110->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room110->moderator}}
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
                                                                @foreach ($room110->schedules as $schedule)
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
                                <thead>
                                    <tr class="text-base font-semibold mb-2">

                                        <th style="width: 20%;">Ballroom 1,2,3</th>
                                        <th style="width: 20%;">Ballroom 1</th>
                                        <th style="width: 20%;">Ballroom 2</th>
                                        <th style="width: 20%;">Ballroom 3</th>
                                        <th style="width: 20%;">Room 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="align-top">
                                            @foreach ($sebelas as $ballroomall11)
                                            @if ($ballroomall11->room == 'BALLROOM 1,2,3')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroomall_11{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroomall11->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroomall11->time}} <br>
                                                    {{$ballroomall11->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroomall_11{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroomall11->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroomall11->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroomall11->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroomall11->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroomall11->moderator}}
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
                                                                @foreach ($ballroomall11->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sebelas as $ballroom111)
                                            @if ($ballroom111->room == 'BALLROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom1_11{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom111->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom111->time}} <br>
                                                    {{$ballroom111->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom1_11{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom111->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom111->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom111->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom111->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom111->moderator}}
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
                                                                @foreach ($ballroom111->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sebelas as $ballroom211)
                                            @if ($ballroom211->room == 'BALLROOM 2')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom2_11{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom211->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom211->time}} <br>
                                                    {{$ballroom211->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom2_11{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom211->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom211->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom211->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom211->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom211->moderator}}
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
                                                                @foreach ($ballroom211->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sebelas as $ballroom311)
                                            @if ($ballroom311->room == 'BALLROOM 3')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="ballroom3_11{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-success mb-2">{{$ballroom311->category_sesi}}</div>
                                                    <br>
                                                    {{$ballroom311->time}} <br>
                                                    {{$ballroom311->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="ballroom3_11{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($ballroom311->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$ballroom311->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$ballroom311->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$ballroom311->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$ballroom311->moderator}}
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
                                                                @foreach ($ballroom311->schedules as $schedule)
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
                                        <td class="align-top">
                                            @foreach ($sebelas as $room111)
                                            @if ($room111->room == 'ROOM 1')
                                            <button class="hover:shadow-md block w-full my-1"
                                                onclick="room1_11{{$loop->index}}.showModal()">
                                                <div class="border px-0 py-4 w-full rounded-md bg-sky-50 border-sky-200 ">
                                                    <div class="badge badge-sm badge-warning mb-2">{{$room111->category_sesi}}</div>
                                                    <br>
                                                    {{$room111->time}} <br>
                                                    {{$room111->title_ses}}
                                                </div>
                                            </button>
                                            @endif

                                            <dialog id="room1_11{{$loop->index}}" class="modal">
                                                <div class="modal-box w-11/12 max-w-5xl text-start">
                                                    <div class="flex justify-between mb-3">
                                                        <div class="text-start">
                                                            <h3 class="mb-0">Date: <span class="">
                                                                    {{\Carbon\Carbon::parse($room111->date)->format('d
                                                                    F
                                                                    Y')}}</span></h3>
                                                            <h3 class="mb-0">Time: <span class="">
                                                                    {{$room111->time}}</span></h3>
                                                        </div>
                                                        <div>
                                                            <p class="">Room :<span class="">
                                                                    {{$room111->room}}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">Session : <span class="">
                                                            {{$room111->title_ses}}</span></p>
                                                    <p class="">Moderator : <span class="">
                                                            {{$room111->moderator}}
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
                                                                @foreach ($room111->schedules as $schedule)
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