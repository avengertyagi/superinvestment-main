<div x-show="open" class="fixed inset-0 flex z-40 md:hidden"
    x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
    aria-modal="true">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75"
        x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." @click="open = false"
        aria-hidden="true"></div>


    <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        x-description="Off-canvas menu, show/hide based on off-canvas menu state."
        class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">

        <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            x-description="Close button, show/hide based on off-canvas menu state."
            class="absolute top-0 right-0 -mr-12 pt-2">
            <button
                class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                @click="open = false">
                <span class="sr-only">Close sidebar</span>
                <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="flex items-center h-16 flex-shrink-0 bg-gray-900">
            <a href="{{ route('admin.dashboard') }}">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>
        </div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
            <nav class="px-2 space-y-1">

                <a href="#"
                    class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                    x-state:on="Current" x-state:off="Default"
                    x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;text-gray-300&quot;, Default: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>


                <a href="{{ route('admin.deals.index') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Deals
                </a>


                <a href="{{ route('admin.faqs.index') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    FAQs
                </a>

                <a href="{{ route('admin.compares.index') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Compares
                </a>

                <a href="{{ route('admin.customers') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Customers
                </a>


                <a href="{{ route('admin.assets') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Assets
                </a>

                <a href="{{ route('admin.payments') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Payments
                </a>

                <a href=""
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                        x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                        x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    Ledger
                </a>


                <div x-data="{ open: false }" class="space-y-1">
                    <button type="button"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        x-state:on="Current" x-state:off="Default" aria-controls="sub-menu-1" @click="open = !open"
                        aria-expanded="false" x-bind:aria-expanded="open.toString()"
                        x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="flex-1">Access </span>
                        <svg class="text-gray-300 ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150"
                            viewBox="0 0 20 20" x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true"
                            :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }">
                            <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                        </svg>
                    </button>
                    <div x-description="Expandable link section, show/hide based on state." class="space-y-1"
                        id="sub-menu-1" x-show="open">

                        <x-nav-link :href="route('admin.users.index')"
                            :active="request()->routeIs('admin.users.index')">
                            {{ __('Users') }}
                        </x-nav-link>

                        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.roles.index')">
                            {{ __('Roles') }}
                        </x-nav-link>

                        <x-nav-link :href="route('admin.dashboard')"
                            :active="request()->routeIs('admin.permissions.index')">
                            {{ __('Permissions') }}
                        </x-nav-link>

                    </div>
                </div>

                <a href="{{ route('admin.dashboard') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    Settings
                </a>

                <a href="{{ route('admin.dashboard') }}"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                    x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    Admin Log
                </a>

            </nav>
        </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col h-0 flex-1">
            <div class="flex items-center h-16 flex-shrink-0 bg-gray-900">
                <a href="{{ route('admin.dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <div class="flex-1 flex flex-col overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800 space-y-1">

                    <a href="#"
                        class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" x-state:on="Current" x-state:off="Default"
                            x-state-description="Current: &quot;text-gray-300&quot;, Default: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('admin.deals.index') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                        Deals
                    </a>
                    <a href="{{ route('admin.faqs.index') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                        FAQs
                    </a>

                    <a href="{{ route('admin.compares.index') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                        Compares
                    </a>



                    <a href="{{ route('admin.customers') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Customers
                    </a>


                    <a href="{{ route('admin.assets') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Assets
                    </a>

                    <a href="{{ route('admin.payments') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Payments
                    </a>












                    <a href=""
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                            x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;"
                            x-description="Heroicon name: outline/chart-bar" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                        Ledger
                    </a>




                    <div x-data="{ open: false }" class="space-y-1">
                        <button type="button"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            x-state:on="Current" x-state:off="Default" aria-controls="sub-menu-1" @click="open = !open"
                            aria-expanded="false" x-bind:aria-expanded="open.toString()"
                            x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex-1">Access </span>
                            <svg class="text-gray-300 ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150"
                                viewBox="0 0 20 20" x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true"
                                :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div x-description="Expandable link section, show/hide based on state." class="space-y-1"
                            id="sub-menu-1" x-show="open">

                            <x-nav-link :href="route('admin.users.index')"
                                :active="request()->routeIs('admin.users.index')">
                                {{ __('Users') }}
                            </x-nav-link>

                            <x-nav-link :href="route('admin.dashboard')"
                                :active="request()->routeIs('admin.roles.index')">
                                {{ __('Roles') }}
                            </x-nav-link>

                            <x-nav-link :href="route('admin.dashboard')"
                                :active="request()->routeIs('admin.permissions.index')">
                                {{ __('Permissions') }}
                            </x-nav-link>

                        </div>
                    </div>



                    <a href="{{ route('admin.show.settings') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        Settings
                    </a>



                    <a href="{{ route('admin.dashboard') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Admin Log
                    </a>

                </nav>
            </div>
        </div>
    </div>
</div>
