{{-- <ul class="flex gap-6 uppercase">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:text-[#FFDE17] hover:underline ">Home
        </a>
    </li>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee*') || request()->is('faculties*') || request()->is('welcome-message*') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#FFDE17]">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="#welcome-message"
                    class="{{ request()->is('welcome-message') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF] ">Welcome
                    Message <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#organizing-committee"
                    class="{{ request()->is('organizing-committee') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF] ">Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#faculties"
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
                <a href="/topics"
                    class="{{ request()->is('topics') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">
                    Topics <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#program-at-glance"
                    class="{{ request()->is('program-at-glance') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#scientific-schedule"
                    class="{{ request()->is('scientific-schedule') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>


    <li>
        <a href="#registration"
            class="{{ request()->is('registration') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:text-[#FFDE17] hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation"
            class="{{ request()->is('accommodation') ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:text-[#FFDE17] hover:underline">Accommodation
        </a>
    </li>
    <li>
        <a href="#abstract-submission"
            class="{{ request()->is('submission') ? 'text-[#FFDE17]' : 'text-[#262262]' }}  hover:text-[#FFDE17] hover:underline">Abstract
            Submission</a>
    </li>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('submission')  || request()->is('presentation-schedule')  ? 'text-[#FFDE17]' : 'text-[#262262]' }} hover:cursor-pointer hover:text-[#FFDE17]">
            Free Paper <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/presentation-schedule"
                    class="{{ request()->is('presentation-schedule') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FFDE17]">
                    Free Paper Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" class="justify-between hover:text-[#FFDE17]">Free Paper Presentation Submission <i
                        class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/submission"
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
                <a href="/visiting"
                    class="{{ request()->is('visiting') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FF47AF]">
                    Bandung <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/visiting"
                    class="{{ request()->is('visiting#venue') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FFDE17]">Conference
                    Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/social-program"
                    class="{{ request()->is('social-program') ? 'text-[#FFDE17]' : '' }} justify-between hover:text-[#FFDE17]">Social
                    Program <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>

</ul> --}}

<ul class="flex gap-6 uppercase" x-data="{ 
        activeHash: window.location.hash.replace('#', '') || 'home',
        updateHash() {
            // Ambil hash tanpa tanda #, fallback ke 'home' jika kosong
            this.activeHash = window.location.hash.replace('#', '') || 'home';
            window.addEventListener('hashchange', () => {
                this.activeHash = window.location.hash.replace('#', '') || 'home';
            });
        }
    }" x-init="updateHash()">

    <!-- Home -->
    <li>
        <a href="/" wire:navigate class="hover:text-[#FF47AF] hover:underline transition-colors duration-200"
            :class="activeHash === 'home' || activeHash === '' ? 'text-[#FF47AF]' : 'text-[#262262]'">
            Home
        </a>
    </li>

    <!-- Congress Information Dropdown -->
    <div class="dropdown dropdown-hover">
        <div tabindex="0" class="hover:cursor-pointer hover:text-[#FF47AF] transition-colors duration-200"
            :class="(activeHash === 'welcome-message' || activeHash === 'organizing-committee' || activeHash === 'faculties') ? 'text-[#FF47AF]' : 'text-[#262262]'">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="#welcome-message" 
                    class="justify-between hover:text-[#FF47AF] transition-colors duration-200"
                    :class="activeHash === 'welcome-message' ? 'text-[#FF47AF] font-bold' : 'text-[#262262]'">
                    Welcome Message <i class="fa-solid fa-angle-right"
                        :class="activeHash === 'welcome-message' ? 'text-[#FF47AF]' : ''"></i></a>
            </li>
            <li>
                <a href="#organizing-committee" 
                    class="justify-between hover:text-[#FF47AF] transition-colors duration-200"
                    :class="activeHash === 'organizing-committee' ? 'text-[#FF47AF] font-bold' : 'text-[#262262]'">
                    Organizing Committee <i class="fa-solid fa-angle-right"
                        :class="activeHash === 'organizing-committee' ? 'text-[#FF47AF]' : ''"></i></a>
            </li>
            <li>
                <a href="#faculties" 
                    class="justify-between hover:text-[#FF47AF] transition-colors duration-200"
                    :class="activeHash === 'faculties' ? 'text-[#FF47AF] font-bold' : 'text-[#262262]'">
                    Faculties <i class="fa-solid fa-angle-right"
                        :class="activeHash === 'faculties' ? 'text-[#FF47AF]' : ''"></i></a>
            </li>
        </ul>
    </div>

    <!-- Scientific Program Dropdown -->
    <div class="dropdown dropdown-hover">
        <div tabindex="0" class="hover:cursor-pointer hover:text-[#FF47AF] transition-colors duration-200"
            :class="(activeHash === 'program-at-glance' || activeHash === 'scientific-schedule') ? 'text-[#FF47AF]' : 'text-[#262262]'">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="#program-at-glance" 
                    class="justify-between hover:text-[#FF47AF] transition-colors duration-200"
                    :class="activeHash === 'program-at-glance' ? 'text-[#FF47AF] font-bold' : 'text-[#262262]'">
                    Program at Glance <i class="fa-solid fa-angle-right"
                        :class="activeHash === 'program-at-glance' ? 'text-[#FF47AF]' : ''"></i></a>
            </li>
            <li>
                <a href="#scientific-schedule" 
                    class="justify-between hover:text-[#FF47AF] transition-colors duration-200"
                    :class="activeHash === 'scientific-schedule' ? 'text-[#FF47AF] font-bold' : 'text-[#262262]'">
                    Scientific Schedule <i class="fa-solid fa-angle-right"
                        :class="activeHash === 'scientific-schedule' ? 'text-[#FF47AF]' : ''"></i></a>
            </li>
        </ul>
    </div>

    <!-- Registration -->
    <li>
        <a href="#registration" 
            class="hover:text-[#FF47AF] hover:underline transition-colors duration-200"
            :class="activeHash === 'registration' ? 'text-[#FF47AF]' : 'text-[#262262]'">
            Registration
        </a>
    </li>

    <!-- Abstract Submission -->
    <li>
        <a href="#abstract-submission" 
            class="hover:text-[#FF47AF] hover:underline transition-colors duration-200"
            :class="activeHash === 'abstract-submission' ? 'text-[#FF47AF]' : 'text-[#262262]'">
            Abstract Submission
        </a>
    </li>
</ul>