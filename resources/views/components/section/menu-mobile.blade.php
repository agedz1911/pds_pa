{{-- <nav class="space-y-4">

    <ul class="flex flex-col gap-5">
        <li>
            <a href="/" wire:navigate
                class="{{ request()->is('/') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Home
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#welcome-message" wire:navigate
                class="{{ request()->is('welcome-message') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Welcome
                Message
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#organizing-committee" wire:navigate
                class="{{ request()->is('organizing-committee') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Organizing
                Committee <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#faculties" wire:navigate
                class="{{ request()->is('faculties') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Faculties
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/topics" wire:navigate
                class="{{ request()->is('topics') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">
                Topics <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#program-at-glance" wire:navigate
                class="{{ request()->is('program-at-glance') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Program
                at Glance <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#scientific-schedule" wire:navigate
                class="{{ request()->is('scientific-schedule') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Scientific
                Schedule <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#registration" wire:navigate
                class="{{ request()->is('registration') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Registration
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/accommodation" wire:navigate
                class="{{ request()->is('accommodation') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Accommodation
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/presentation-schedule" wire:navigate
                class="{{ request()->is('presentation-schedule') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Free
                Paper Schedule
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#"
                class=" justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Free
                Paper Presentation Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#abstract-submission" wire:navigate
                class="{{ request()->is('submission') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Abstract
                Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/visiting" wire:navigate
                class="{{ request()->is('visiting') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Visiting
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/visiting#venue"
                class="{{ request()->is('visiting') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Conference
                Venue
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/social-program" wire:navigate
                class="{{ request()->is('social-program') ? 'text-[#FF47AF]' : '' }} justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Social
                Program
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
    </ul>
</nav> --}}

<nav class="space-y-4" x-data="{ 
        activeHash: window.location.hash.replace('#', '') || 'home',
        updateHash() {
            this.activeHash = window.location.hash.replace('#', '') || 'home';
            window.addEventListener('hashchange', () => {
                this.activeHash = window.location.hash.replace('#', '') || 'home';
            });
        }
    }" x-init="updateHash()">

    <ul class="flex flex-col gap-5">
        <!-- Home -->
        <li>
            <a href="/" wire:navigate
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'home' || activeHash === '' ? 'text-[#FF47AF]' : ''">
                Home
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'home' || activeHash === '' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Welcome Message -->
        <li>
            <a href="#welcome-message" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'welcome-message' ? 'text-[#FF47AF]' : ''">
                Welcome Message
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'welcome-message' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Organizing Committee -->
        <li>
            <a href="#organizing-committee" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'organizing-committee' ? 'text-[#FF47AF]' : ''">
                Organizing Committee
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'organizing-committee' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Faculties -->
        <li>
            <a href="#faculties" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'faculties' ? 'text-[#FF47AF]' : ''">
                Faculties
                <i class="fa-solid fa-angle-right" :class="activeHash === 'faculties' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Program at Glance -->
        <li>
            <a href="#program-at-glance" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'program-at-glance' ? 'text-[#FF47AF]' : ''">
                Program at Glance
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'program-at-glance' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Scientific Schedule -->
        <li>
            <a href="#scientific-schedule" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'scientific-schedule' ? 'text-[#FF47AF]' : ''">
                Scientific Schedule
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'scientific-schedule' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Registration -->
        <li>
            <a href="#registration" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'registration' ? 'text-[#FF47AF]' : ''">
                Registration
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'registration' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>

        <!-- Abstract Submission -->
        <li>
            <a href="#abstract-submission" 
                class="justify-between font-normal hover:text-[#FF47AF] after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-[#FF47AF] hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full"
                :class="activeHash === 'abstract-submission' ? 'text-[#FF47AF]' : ''">
                Abstract Submission
                <i class="fa-solid fa-angle-right"
                    :class="activeHash === 'abstract-submission' ? 'text-[#FF47AF]' : ''"></i></a>
        </li>
    </ul>
</nav>