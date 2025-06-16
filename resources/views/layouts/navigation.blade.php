<nav x-data="{ open: false }" class="bg-gradient-to-r from-[#23079F] to-[#110645] border-b border-gray-100 dark:border-gray-700" style="padding: 10px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
    <!-- Primary Navigation Menu -->
    <div class="sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}" class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Cyber Rian Logo" class="h-10 w-auto">
                        <img src="{{ asset('images/name.png') }}" alt="Cyber Rian text" class="h-8 w-auto">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex h-full items-center">
                    <x-nav-link :href="route('learning-path')" :active="request()->routeIs('learning-path')">
                        {{ __('Learning Path') }}
                    </x-nav-link>
                    <x-nav-link :href="route('learn')" :active="request()->routeIs('learn')">
                        {{ __('Learn') }}
                    </x-nav-link>
                    <x-nav-link :href="route('train')" :active="request()->routeIs('train')">
                        {{ __('Train') }}
                    </x-nav-link>
                    <x-nav-link :href="route('challenge')" :active="request()->routeIs('challenge')">
                        {{ __('Challenge') }}
                    </x-nav-link>
                    <x-nav-link :href="route('certificate')" :active="request()->routeIs('certificate')">
                        {{ __('Certificate') }}
                    </x-nav-link>
                    <x-nav-link :href="route('ai')" :active="request()->routeIs('ai')" class="border-b-2 border-blue-500">
                        {{ __('AI') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Right side icons and profile dropdown -->
            <div class="flex items-center space-x-4 ml-auto">
                <!-- Search Icon -->
                <a href="#" class="text-gray-400 hover:text-white flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-700">
                    <i class="fi fi-rr-search text-xl"></i>
                </a>
                <!-- Notification Bell Icon -->
                <a href="#" class="text-gray-400 hover:text-white flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-700">
                    <i class="fi fi-rr-bell text-xl"></i>
                </a>
                <!-- Dashboard Button -->
                <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <i class="fi fi-br-stats mr-2"></i>{{ __('Dashboard') }}
                </a>

                <!-- Profile Icon -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                            @if (Auth::user()->profile_image)
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="{{ Auth::user()->name }}" />
                            @else
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('images/default_profile.png') }}" alt="{{ Auth::user()->name }}" />
                            @endif
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
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

            <!-- Hamburger (for responsive navigation - hidden on desktop) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (hidden on desktop) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
