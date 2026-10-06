<div>
    {{--<section class="breadcrumbs relative pb-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#FF47AF]/80 to-[#78c9bb]/10"></div>
        <div class="py-16 lg:py-28 text-center relative">
            <h2 class="text-accent uppercase text-2xl font-semibold tracking-wide lg:text-4xl">Free Paper Schedule</h2>
        </div>
    </section> --}}
    <h2 class="md:text-4xl text-xl font-semibold uppercase text-center mt-10"> <span
            class="text-[#FF47AF]">LIST of E-Poster
        </span></h2>

    <section class="px-5 md:px-10 py-10 md:py-20">
        <div class="p-5 mb-5">
            <form>
                <div class="flex justify-end items-center gap-3">
                    <div class="dropdown dropdown-hover dropdown-center">
                        <div tabindex="0" role="button" class="fa fa-filter m-1"></div>
                        <ul tabindex="-1" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a href="#" wire:click.prevent="resetFilter()"
                                    class="{{ $selectedCategory == '' ? 'text-[#FF47AF]' : '' }}">
                                    All Categories
                                </a>
                            </li>
                            <li><a href="#" wire:click.prevent="filterByCategory('Poster')"
                                    class="{{ $selectedCategory == 'Poster' ? 'text-[#FF47AF]' : '' }}">
                                    Poster
                                </a>
                            </li>
                            <li><a href="#" wire:click.prevent="filterByCategory('Moderated Poster')"
                                    class="{{ $selectedCategory == 'Moderated Poster' ? 'text-[#FF47AF]' : '' }}">
                                    Moderated Poster
                                </a>
                            </li>
                            <li><a href="#" wire:click.prevent="filterByCategory('Unmoderated Poster')"
                                    class="{{ $selectedCategory == 'Unmoderated Poster' ? 'text-[#FF47AF]' : '' }}">
                                    Unmoderated Poster
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <label class="input">
                            <i class="fa fa-search"></i>
                            <input wire:model.live.debounce.500ms='search' type="search" class="grow "
                                placeholder="Search code, name, title, category" />
                        </label>
                    </div>
                </div>
                <!-- Tampilkan filter yang aktif -->
                @if($selectedCategory)
                <div class="">
                    <div class="flex items-center">
                        <span class="me-2">Filtered by:</span>
                        <span class="badge badge-accent me-2">{{ $selectedCategory }}</span>
                        <button type="button" class="btn btn-error btn-sm" wire:click="resetFilter()">
                            <i class="fa fa-times"></i> Clear Filter
                        </button>
                    </div>
                </div>
                @endif
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Abstract Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title</th>
                        <th scope="col">Insitution</th>
                        <th scope="col">Country</th>
                        {{-- <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Room</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($paperSchedules as $paper)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$paper->code_abstract}}</td>
                        <td>{{$paper->name_participant}}</td>
                        <td>
                            <span class="">{{$paper->paperCategory->name}}</span>     
                        </td>
                        <td>{{$paper->title}}</td>
                        <td>{{$paper->institution}}</td>
                        <td>{{$paper->country}}</td>
                        {{-- <td>{{ \Carbon\Carbon::parse($paper->date_presenter)->Format('d F Y') }}</td>
                        <td>{{$paper->time_presenter}}</td>
                        <td>{{$paper->room}}</td> --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            <div class="py-4">
                                <i class="fa fa-search fa-2x text-muted mb-2"></i>
                                <p class="text-muted">No papers found matching your criteria.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $paperSchedules->links() }}
        </div>

    </section>

    {{--
    <livewire:section.free-paper-api /> --}}

</div>