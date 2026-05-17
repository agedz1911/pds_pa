<ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:text-[#FFDE17] hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-message') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#FFDE17]">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-message" wire:navigate
                    class="{{ request()->is('welcome-message') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF] ">Welcome
                    Message <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF] ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/faculties" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF] ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#FFDE17]">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">

            <li>
                <a href="/topics" wire:navigate
                    class="{{ request()->is('topics') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">
                    Topics <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/program-at-glance" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/scientific-schedule" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:text-[#FFDE17] hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:text-[#FFDE17] hover:underline">Accommodation
        </a>
    </li>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('submission')  || request()->is('presentation-schedule')  ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#FFDE17]">
            Free Paper <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            {{-- <li>
                <a href="/presentation-schedule" wire:navigate
                    class="{{ request()->is('presentation-schedule') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FFDE17]">
                    Free Paper Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" class="justify-between hover:text-[#FFDE17]">Free Paper Presentation Submission <i
                        class="fa-solid fa-angle-right"></i></a>
            </li> --}}
            <li>
                <a href="/submission" wire:navigate
                    class="{{ request()->is('submission') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">Abstract
                    Submission<i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#FFDE17]">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/visiting" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">
                    Bandung <i class="fa-solid fa-angle-right"></i></a>
            </li>
            {{-- <li>
                <a href="/visiting"
                    class="{{ request()->is('visiting#venue') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FFDE17]">Conference
                    Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/social-program" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FFDE17]">Social
                    Program <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
    </div>

</ul>