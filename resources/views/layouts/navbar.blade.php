<!-- Container Navbar -->

{{-- <div class="fixed top-0 z-sticky w-full bg-white shadow">
    <div class="flex flex-wrap">
        <div class="w-full">

            <!-- Navbar -->
            <nav id="navbar"
                class="w-full bg-customWhite-50 shadow-lg  absolute top-0 left-0 right-0 z-30 flex flex-col py-3 mb-0 p-8  transition-all duration-300 ease-in-out lg:flex-nowrap lg:justify-start">
                <div class="flex gap-3 justify-end border-b border-zinc-900 border-opacity-10 pb-1">
                    <a href="/rewards" class="flex items-center gap-2 group focus:ring-2 focus:ring-blue-500">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/46a4b2ec9eef2f5e0f19a51e4558d3f60e57f7acd77bbde3049032f9cc59f64b?apiKey=f781ef58ccc745818b538ded84512a35"
                            class="w-[23px] aspect-[1.04] object-contain" alt="Rewards icon" />
                        <span class="text-base font-bold text-zinc-900 group-hover:text-opacity-100">Promo</span>
                    </a>


                    <a href="/login" class="flex items-center gap-2 group focus:ring-2 focus:ring-blue-500">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/abbc932fe7625b8aeced7ffa17d0f7bcacf300c0869d54f8ad055e3e14d38fa6?apiKey=f781ef58ccc745818b538ded84512a35"
                            class="w-[23px] aspect-square object-contain" alt="Login icon" />
                        <span class="text-base font-bold text-zinc-900 group-hover:text-opacity-100">Login/Sign
                            Up</span>
                    </a>
                </div>
                <div class="flex items-center justify-between w-full p-0 mx-auto flex-wrap-inherit">
                    <img class="inline-flex items-center justify-center text-sm text-white transition-all duration-200 ease-in-out w-19 rounded-xl object-cover pr-2"
                        src="{{ asset('assets/images/LogoAyamGeprek.png') }}" alt="logo">
                    <button navbar-trigger
                        class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                        type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                            <span bar1
                                class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            <span bar2
                                class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            <span bar3
                                class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                        </span>
                    </button>


                    <div navbar-menu
                        class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto lg:space-x-7">
                            <li>
                                <a class="relative flex items-center text-xl text-slate-850 font-extrabold font-notoSans transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('home') ? 'text-customRed-50 before:w-full' : 'text-customBlack-50' }}"
                                    href="{{ route('home') }}">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-slate-850 font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('menu.indexHome') ? 'text-customRed-50 before:w-full' : 'text-customBlack-50' }}"
                                    href="{{ route('menu.indexHome') }}">
                                    Menu
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-slate-850 font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('tentangKami.indexHome') ? 'text-customRed-50 before:w-full' : 'text-customBlack-50' }}"
                                    href="{{ route('tentangKami.indexHome') }}">
                                    Tentang Kami
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-slate-850 font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('outlet.indexHome') ? 'text-customRed-50 before:w-full' : 'text-customBlack-50' }}"
                                    href="{{ route('outlet.indexHome') }}">
                                    Outlets
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-slate-850 font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('') ? 'text-customRed-50 before:w-full' : 'text-customBlack-50' }}"
                                    href="{{ route('outlet.indexHome') }}">
                                    News
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-slate-850 font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->is('#menu') ? 'text-customRed-50 before:w-full' : 'text-customBlack-50' }}"
                                    href="#menu">
                                    Karir
                                </a>
                            </li>
                        </ul>

                        <li class="flex items-center pr-5">
                            <a href="javascript:;" dropdown-trigger aria-expanded="false"
                                class="relative w-12 h-12 bg-white  rounded-full flex items-center justify-center sm:mr-4 shadow-2xl transition-transform duration-300 ease-in-out hover:scale-105">
                                <img class="w-6 h-6" src="{{ asset('assets/icon/shop.png') }}" alt="login">
                                <span
                                    class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-600 rounded-full border-2 border-white"></span>
                            </a>
                            <a href="{{ 'login' }}"
                                class="relative w-12 h-12 bg-white  rounded-full flex items-center justify-center  sm:mr-4 shadow-2xl transition-transform duration-300 ease-in-out hover:scale-105">
                                <img class="w-6 h-6" src="{{ asset('assets/icon/user.png') }}" alt="login">
                            </a>
                        </li>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div> --}}

<!-- Container Navbar -->
<div class="w-full fixed top-0 z-sticky">
    <div class="flex flex-wrap">
        <!-- Navbar -->
        <nav id="navbar"
            class="w-full bg-customWhite-50 shadow-lg  absolute top-0 left-0 right-0 z-30 flex flex-col py-3 mb-0 p-8  transition-all duration-300 ease-in-out lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full p-0 mx-auto flex-wrap-inherit">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#">
                        <img src="{{asset('assets/images/LogoAyamGeprek.png')}}" alt="logo" class="inline-flex items-center justify-center text-sm text-white transition-all duration-200 ease-in-out w-19 rounded-xl object-cover pr-2">
                    </a>
                </div>

                <div
                    class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                    <ul
                        class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto lg:space-x-7 capitalize">
                        <li>
                            <a class="relative flex items-center text-xl font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('home') ? 'text-customRed-50 before:w-full' : 'text-slate-850' }}"
                                aria-current="page" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="relative flex items-center text-xl font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('menu.indexHome') ? 'text-customRed-50 before:w-full' : 'text-slate-850' }}"
                                href="{{ route('menu.indexHome') }}">
                                Menu
                            </a>
                        </li>
                        <li>
                            <a class="relative flex items-center text-xl font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('tentangKami.indexHome') ? 'text-customRed-50 before:w-full' : 'text-slate-850' }}"
                                href="{{ route('tentangKami.indexHome') }}">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a class="relative flex items-center text-xl font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('outlet.indexHome') ? 'text-customRed-50 before:w-full' : 'text-slate-850' }}"
                                href="{{ route('outlet.indexHome') }}">
                                Outlets
                            </a>
                        </li>
                        <li>
                            <a class="relative flex items-center text-xl font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('karir.indexHome') ? 'text-customRed-50 before:w-full' : 'text-slate-850' }}"
                                  href="{{ route('karir.indexHome') }}">
                                Karir
                            </a>
                        </li>
                        {{-- <li>
                            <a class="relative flex items-center text-xl font-extrabold transition-all ease-in-out lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:text-customRed-50 hover:before:w-full {{ request()->routeIs('') ? 'text-customRed-50 before:w-full' : 'text-slate-850' }}"
                                href="{{ route('outlet.indexHome') }}">
                                Blog
                            </a>
                        </li> --}}

                    </ul>
                    {{-- <li class="flex items-center pr-5">
                        <a href="{{ route('login') }}"
                            class="relative w-12 h-12 bg-white  rounded-full flex items-center justify-center  sm:mr-4 shadow-2xl transition-transform duration-300 ease-in-out hover:scale-105">
                            <img class="w-6 h-6" src="{{ asset('assets/icon/user.png') }}" alt="login">
                        </a>
                    </li> --}}
                </div>
            </div>
        </nav>
        <!-- Navbar -->
        <nav id=""
            class="w-full absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center py-3 lg:py-2 px-4 mb-0 transition-all duration-300 ease-in-out lg:flex-nowrap lg:justify-start   bg-customWhite-200 lg:hidden">
            <div class="flex items-center justify-between w-full p-0 mx-auto flex-wrap-inherit">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#">
                        <img src="{{asset('build/assets/images/FanatisLogo.png')}}" alt="logo" class="w-24">
                    </a>
                </div>
                <!-- Navbar Trigger Button -->
                <button navbar-trigger
                    class="px-3 py-1 ml-auto leading-none transition-all ease-in-out bg-transparent rounded-lg cursor-pointer "
                    type="button" aria-label="Toggle navigation">
                    <span class="inline-block w-6 h-6">
                        <span bar1 class="block w-6 h-0.5 bg-gray-600 transition-transform duration-300"></span>
                        <span bar2 class="block w-6 h-0.5 bg-gray-600 mt-1.5 transition-transform duration-300"></span>
                        <span bar3 class="block w-6 h-0.5 bg-gray-600 mt-1.5 transition-transform duration-300"></span>
                    </span>
                </button>
                <!-- Sidebar Menu -->
                <div id="navbar-menu"
                    class="fixed top-0 right-0 h-full w-64 bg-white rounded-xl shadow-lg transform translate-x-full transition-transform duration-300 ">
                    <div class="p-5 flex flex-col h-full">
                        <a href="#" class="mb-4 text-lg font-bold text-green-900">Home</a>
                        <a href="#tentang" class="mb-4 text-lg font-bold text-green-900">Tentang Kami</a>
                        <a href="#contact" class="mb-4 text-lg font-bold text-green-900">Artikel</a>
                        <a href="#contact" class="mb-4 text-lg font-bold text-green-900">Kontak</a>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</div>






{{-- <div class="fixed top-0 z-sticky w-full bg-white shadow">
    <!-- Top Bar -->
    <nav aria-label="User navigation"
        class="flex items-center justify-end p-4 border-b border-zinc-900 border-opacity-10 gap-5">

        <a href="/rewards" class="flex items-center gap-2 group focus:ring-2 focus:ring-blue-500">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/46a4b2ec9eef2f5e0f19a51e4558d3f60e57f7acd77bbde3049032f9cc59f64b?apiKey=f781ef58ccc745818b538ded84512a35"
                class="w-[23px] aspect-[1.04] object-contain" alt="Rewards icon" />
            <span class="text-base font-bold text-zinc-900 group-hover:text-opacity-100">Promo</span>
        </a>


        <a href="/login" class="flex items-center gap-2 group focus:ring-2 focus:ring-blue-500">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/abbc932fe7625b8aeced7ffa17d0f7bcacf300c0869d54f8ad055e3e14d38fa6?apiKey=f781ef58ccc745818b538ded84512a35"
                class="w-[23px] aspect-square object-contain" alt="Login icon" />
            <span class="text-base font-bold text-zinc-900 group-hover:text-opacity-100">Login/Sign Up</span>
        </a>
    </nav>

    <!-- Main Navigation -->
    <nav class="flex items-center justify-between px-4 py-2 md:px-8">
        <a href="/" class="flex items-center">
            <img src="{{ asset('assets/images/LogoAyamGeprek.png') }}"
                class="w-[54px] object-contain" alt="Company Logo" />
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-8">
            <div class="flex gap-6">
                <a href="{{ route('home') }}" class="font-bold uppercase text-stone-800">Home</a>
                <a href="{{ route('menu.indexHome') }}" class="font-bold uppercase text-stone-800">Menu</a>
                <a href="{{ route('tentangKami.indexHome') }}" class="font-bold uppercase text-stone-800">Tentang Kami</a>
                <a href="/brand-story" class="font-bold uppercase text-stone-800">Brand Story</a>
                <a href="/party" class="font-bold uppercase text-stone-800">Party</a>
            </div>



            <button class="px-6 py-2.5 text-white bg-rose-700 rounded-lg">Order Now</button>
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="hamburger-menu" class="md:hidden flex flex-col items-center justify-center gap-1">
            <span class="block w-6 h-0.5 bg-black"></span>
            <span class="block w-6 h-0.5 bg-black"></span>
            <span class="block w-6 h-0.5 bg-black"></span>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col bg-white border-t border-zinc-900 border-opacity-10">
        <a href="/" class="py-2 px-4 font-bold uppercase text-stone-800">Home</a>
        <a href="/menu" class="py-2 px-4 font-bold uppercase text-stone-800">Menu</a>
        <a href="/brand-story" class="py-2 px-4 font-bold uppercase text-stone-800">Brand Story</a>
        <a href="/party" class="py-2 px-4 font-bold uppercase text-stone-800">Party</a>
        <button class="px-4 py-2 text-white bg-rose-700 rounded-lg">Order Now</button>
    </div>
</div>

<script>
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerMenu.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script> --}}







{{-- <!-- <script>
    window.onscroll = function() {
        const navbar = document.getElementById("navbar");

        if (window.scrollY > 50) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-white", "shadow-md");
        } else {
            navbar.classList.remove("bg-white", "shadow-md");
            navbar.classList.add("bg-transparent");
        }
    };
</script> --> --}}
