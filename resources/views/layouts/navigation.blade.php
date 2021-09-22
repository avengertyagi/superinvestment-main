<div class="md:mx-20 flex items-center h-full px-8 sm:justify-between xl:px-0">

    <!-- Logo -->
    <!--a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none"-->
    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>

    <!--/a-->
    @guest
    <nav id="nav" class="absolute bg-white border-gray-200 border-t md:grid-flow-col left-0 lg:text-base md:bg-transparent md:shadow-none shadow-lg z-10 md:border-none md:mt-0 md:py-0 md:relative mt-24 pt-5 text-center text-gray-800 text-sm top-0 w-full hidden md:grid"
        >
        <div>
            <a href="{{ url('/invest') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">How to invest</a>
        </div>
        <div>
            <a href="{{ url('/deals') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">Deals</a>
        </div>
        <div>
            <a href="{{ url('/about-us') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">About Us</a>
        </div>
        <div>
            <a href="{{ url('/faq') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">FAQ</a>
        </div>
    </nav>
    @endguest
    @auth
    <nav id="nav" class="absolute bg-white border-gray-200 border-t md:grid-flow-col left-0 lg:text-base md:bg-transparent md:shadow-none shadow-lg z-10 md:border-none md:mt-0 md:py-0 md:relative mt-24 pt-5 text-center text-gray-800 text-sm top-0 w-full hidden md:grid" 
        >
        <div>
            <a href="{{ url('/invest') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">How to invest</a>
        </div>
        <div>
            <a href="{{ route('deals') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">Deals</a>
        </div>
        <div>
            <a href="{{ url('/about-us') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">About Us</a>
        </div>
        <div>
            <a href="{{ url('/faq') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">FAQ</a>
        </div>
        <div>
            <a href="{{ route('portfolio') }}" class="duration-100 font-semibold menu md:p-0 mr-0 p-4 text-medium transition-color">My Portfolio</a>
        </div>
    </nav>
    @endauth
    <div
        class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
        @unless (Auth::check())

        <button class="relative inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-red-500 rounded shadow-md fold-bold sm:w-full lg:shadow-none hover:shadow-xl"
           @click="showLogin = true"
        >
            Login/Register</button>

        @endunless

        @auth

        <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->email }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>



                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth

    </div>

    <div x-on:click="mobmenu = ! mobmenu" id="nav-mobile-btn"
         class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
        <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
        <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
    </div>

</div>