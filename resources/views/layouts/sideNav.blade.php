<!-- sidenav  -->

<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-2  overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-2xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="flex flex-col h-full">
        <div class="sticky top-0 h-20 z-50 bg-white dark:bg-slate-850">
            <i class="hidden absolute top-0 right-0 p-4 cursor-pointer fas fa-times dark:text-white text-slate- bg-opacity-20 xl:hidden"
                sidenav-close></i>
            <a class="flex justify-center px-4 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                href="" target="_blank">
                <img src="{{ asset('assets/images/LogoAyamGeprek.png') }}"
                    class="h-full max-w-full  transition-all duration-200 dark:hidden  max-h-16" alt="main_logo" />
            </a>
        </div>
        <hr
            class="h-px mt-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto max-h-screen grow basis-full overflow-y-visible">
            <ul class="flex flex-col pl-0 mb-0 h-full">
                <!-- Dashboard -->
                <li class="mt-0.5 w-full">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <x-icon-link :active="request()->routeIs('dashboard')">
                                <i class="relative top-0 text-sm leading-normal fa-solid fa-gauge fa-lg"></i>
                            </x-icon-link>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{ __('Dashboard') }}</span>
                    </x-nav-link>
                </li>
                <li class="w-full mt-4">
                    <h6 class="pl-3 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Data</h6>
                </li>
                <!-- Menu -->
                <li class="mt-0.5 w-full">
                    <x-nav-link :href="route('menu.index')" :active="request()->routeIs('menu.index')">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-utensils fa-lg"></i>

                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Menu</span>
                    </x-nav-link>
                </li>
                {{-- Promo --}}
                <li class="mt-0.5 w-full">
                    <x-nav-link :href="route('promo.index')" :active="request()->routeIs('promo.index')">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-ticket fa-lg"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Promo</span>
                    </x-nav-link>
                </li>
                {{-- Outlet --}}
                <li class="mt-0.5 w-full">
                    <x-nav-link :href="route('outlet.index')" :active="request()->routeIs('outlet.index') ||
                        request()->routeIs('outlet.detail') ||
                        request()->routeIs('outlet.edit')">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-newspaper fa-lg"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Outlet</span>
                    </x-nav-link>
                </li>

                {{-- Blog --}}
                <li class="mt-0.5 w-full">
                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-newspaper fa-lg"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Blog</span>
                    </x-nav-link>
                </li>



                <li class="w-full mt-4">
                    <h6 class="pl-3 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                        Pengaturan</h6>
                </li>
                <!-- Hero -->
                <li class="mt-0.5 w-full">
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="flex items-center justify-between w-full px-4 py-2 text-left hover:bg-customRed-50 hover:rounded-lg hover:text-white dark:hover:bg-slate-700">
                            <div class="flex items-center">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="fa-solid fa-house-signal fa-lg"></i>
                                </div>
                                <span class="ml-1 duration-300 opacity-100 text-sm pointer-events-none ease">Pengaturan
                                    Home</span>
                            </div>
                            <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fa-solid"></i>
                        </button>
                        <ul x-show="open" x-cloak x-transition class="mt-2 space-y-2  rounded-lg  dark:bg-slate-800">
                            {{-- Hero Section --}}
                            <li class="mt-0.5 w-full">
                                <x-nav-link :href="route('hero.index')" :active="request()->routeIs('hero.index')">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i class="fa-solid fa-image"></i>
                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Hero
                                        Section</span>
                                </x-nav-link>
                            </li>
                            {{-- Tentang Kami --}}
                            <li class="mt-0.5 w-full">
                                <x-nav-link :href="route('tentangKami.index')" :active="request()->routeIs('tentangKami.index')">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i class="fa-solid fa-info-circle fa-lg"></i>
                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tentang
                                        Kami</span>
                                </x-nav-link>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="w-full mt-4">
                    <h6 class="pl-3 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Akun</h6>
                </li>

                <li class="mt-0.5 w-full">
                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal fa-solid fa-user"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{ __('Profile') }}</span>
                    </x-nav-link>
                </li>
                <form method="POST" action="{{ route('logout') }}" class="mt-auto">
                    @csrf
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80"
                        href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Keluar</span>
                    </a>
                </form>
            </ul>

        </div>
    </div>
</aside>
