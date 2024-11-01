<nav x-data="{ open: false }" class="bg-black dark:bg-black-800 border-b border-gray-100 dark:border-white-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8" style="padding-left: 110px;">
        <div class="flex justify-between items-center h-200" style="width: 100%;">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="/dashboard">
                    <img src="/webim/Logo.png" style="width: 120px; display: block; margin: 0 auto;">
                    </a>
                </div>

                <!-- Menu Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex" style="gap: 40px; font-family: Courier, monospace;">
                    <a href="product/iphone" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('iPhone') }}</a>
                    <a href="product/ipad" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('iPad') }}</a>
                    <a href="product/airpods" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('AirPods') }}</a>
                    <a href="product/mac" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('Mac') }}</a>
                    <a href="product/tv" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('TV') }}</a>
                    <a href="product/watch" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('Watch') }}</a>
                    <a href="product/accessories" class="flex items-center" style="font-size: 18px; color: white; text-decoration: none;" onmouseover="this.style.fontWeight='bold'" onmouseout="this.style.fontWeight='normal'">{{ __('Accessories') }}</a>
                    <a href="product/cart" class="flex items-center" style="color: gray; text-decoration: none;" onmouseover="this.style.color='white'" onmouseout="this.style.color='gray'">
                        <i class="fa fa-shopping-cart" style="font-size: 24px;"></i>
                    </a>
                    <div>
                

                <!-- Navigation Links -->
                <!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> -->
            

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 dark:bg-white-800 hover:text-white dark:hover:text-white focus:outline-none transition ease-in-out duration-150"
                        style="font-size: 16px">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
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
            </div>
            </div>
            <!-- Hamburger -->
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

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
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
