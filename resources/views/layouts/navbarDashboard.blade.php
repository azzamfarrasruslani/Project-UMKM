<nav class="relative flex flex-wrap items-center justify-between mt-2 px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <!-- Breadcrumb di bagian navigasi -->
        <nav class="sm:block">
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <!-- Icon Home yang mengarah ke dashboard.index -->
                <!-- Link ke Data Kandang jika berada di halaman detail kandang -->
                @if (Route::currentRouteName() == 'outlet.detail' ||Route::currentRouteName() == 'outlet.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('outlet.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Outlet
                        </a> @yield('title')
                    </li>
                @elseif (Route::currentRouteName() == 'hero.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('hero.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Hero
                        </a> @yield('title')
                    </li>
                    </li>
                @elseif (Route::currentRouteName() == 'promo.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('promo.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Promo
                        </a> @yield('title')
                    </li>
                @elseif (Route::currentRouteName() == 'tentangKami.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('tentangKami.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Tentang Kami
                        </a> @yield('title')
                    </li>
                @elseif (Route::currentRouteName() == 'menu.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('menu.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Menu
                        </a> @yield('title')
                    </li>
                @elseif (Route::currentRouteName() == 'blog.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('blog.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Blog
                        </a> @yield('title')
                    </li>
                @elseif (Route::currentRouteName() == 'kontak.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('kontak.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Kontak
                        </a> @yield('title')
                    </li>
                @elseif (Route::currentRouteName() == 'karir.edit')
                    <li class="text-sm capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-600 hover:opacity-100"></i> </a>
                        <a href="{{ route('karir.index') }}"
                            class="text-slate-600 opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Karir
                        </a> @yield('title')
                    </li>
                @else
                    <li class="text-sm  capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                        <a href="{{ route('dashboard') }}"
                            class="text-slate-700 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> <i
                                class="fa-solid fa-house text-slate-700 hover:opacity-100"></i> </a> @yield('title')
                    </li>
                @endif
            </ol>
            <!-- Judul halaman -->
            <h6 class="mb-4 font-bold text-slate-700 capitalize">
                @yield('title')
            </h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4 w-full sm:w-auto sm:justify-between">
                <a href="javascript:;"
                    class="bg-white w-10 h-10 mr-5 flex-shrink-0 flex items-center justify-center rounded-full text-sm text-green-1000 transition-all ease-nav-brand hover:shadow-xs hover:-translate-y-px active:opacity-85 lg:hidden"
                    sidenav-trigger>
                    <div class="w-4.5">
                        <i class="block w-full h-0.5 mb-0.75 bg-green-1000"></i>
                        <i class="block w-full h-0.5 mb-0.75 bg-green-1000"></i>
                        <i class="block w-full h-0.5 mb-0.75 bg-green-1000"></i>
                    </div>
                </a>
                <div class="flex items-center ml-auto space-x-4 sm:ml-0">
                    {{-- <div class="hidden sm:flex items-center w-full sm:w-auto">
                        <div class="relative flex flex-wrap items-stretch transition-all rounded-lg ease">
                            <span
                                class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search text-white"></i>
                            </span>
                            <input type="text"
                                class="pl-10 text-sm max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg relative block flex-auto rounded-full bg-customRed-50 py-2 pr-3 text-white placeholder:text-white border-none focus:shadow-primary hover:shadow-xs"
                                placeholder="Search" />
                        </div>
                    </div> --}}
                    <a href="javascript:;"
                        class="relative w-10 h-10 bg-customRed-50  text-white rounded-full flex items-center justify-center hover:bg-green-900 transition duration-300 ease-nav-brand">
                        <i fixed-plugin-button-nav class="fa fa-cog"></i>
                    </a>
                    <a href="javascript:;" dropdown-trigger aria-expanded="false"
                        class="relative w-10 h-10 bg-customRed-50  text-white rounded-full flex items-center justify-center hover:bg-green-900 transition duration-300 sm:mr-4">
                        <i class="fa-regular fa-bell"></i>
                        <span
                            class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-600 rounded-full border-2 border-white"></span>
                    </a>
                    <li class="relative flex items-center">
                        <p class="hidden transform-dropdown-show"></p>
                        <ul dropdown-menu
                            class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-50 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                            <!-- Notifikasi Data Telur -->
                            <li class="relative mb-2 'hidden extra-notif' : '' ?>">
                                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                                    href="javascript:;">
                                    <div class="flex py-1">
                                        <div class="my-auto">
                                            <i class="inline-flex items-center justify-center h-9 w-9 max-w-none rounded-xl mb-0 mr-4 fa-solid fa-egg fa-xl"
                                                style="color: #63E6BE;"></i>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                                                <span class="font-semibold">Tambahkan Data Telur</span>
                                            </h6>
                                            <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                <i class="mr-1 fa fa-clock"></i>

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                </div>
            </div>
        </div>
    </div>
</nav>
