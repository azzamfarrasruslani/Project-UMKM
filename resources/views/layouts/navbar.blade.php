<!-- Container Navbar -->
<div class="w-full sticky top-0 z-sticky">
    <div class="flex flex-wrap">
        <div class="w-full">
            <!-- Navbar -->
            <nav id="navbar"
                class="w-full bg-customWhite-50 shadow-lg  absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center py-5 mb-0 p-8  transition-all duration-300 ease-in-out lg:flex-nowrap lg:justify-start">
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
                        <ul
                            class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto lg:space-x-7 uppercase">
                            <li>
                                <a class="relative flex items-center text-xl text-customBlack-50  px-4 py-2 mr-2 font-extrabold font-notoSans transition-all ease-in-out lg-max:opacity-0 duration-250 lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:before:w-full hover:before:scale-x-100"
                                    aria-current="page" href="">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-customBlack-50  px-4 py-2 mr-2 font-extrabold transition-all ease-in-out lg-max:opacity-0 duration-250 lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:before:w-full hover:before:scale-x-100"
                                    aria-current="page" href="#menu">
                                    Menu
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-customBlack-50 px-4 py-2 mr-2 font-extrabold transition-all ease-in-out lg-max:opacity-0 duration-250 lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:before:w-full hover:before:scale-x-100"
                                    aria-current="page" href="#menu">
                                    Promo
                                </a>
                            </li>
                            <li>
                                <a class="relative flex items-center text-xl text-customBlack-50 px-4 py-2 mr-2 font-extrabold transition-all ease-in-out lg-max:opacity-0 duration-250 lg:px-2 before:content-[''] before:absolute before:bottom-0 before:left-1/2 before:w-0 before:h-[2px] before:bg-red-500 before:transition-all before:duration-300 before:transform before:-translate-x-1/2 hover:before:w-full hover:before:scale-x-100"
                                    aria-current="page" href="#menu">
                                    Tentang Kami
                                </a>
                            </li>
                        </ul>
                        <li class="flex items-center pr-5">
                            {{-- <a class="leading-pro bg-red-500 text-white text-sm  tracking-tight-rem bg-150 bg-x-25 rounded-3.5xl hover:border-red-500 hover:-translate-y-px hover:text-red-500 active:hover:-translate-y-px active:hover:text-red-500 active:shadow-xs mr-2 mb-0 inline-block cursor-pointer border border-solid py-2 px-8 text-center align-middle font-extrabold capitalize shadow-none transition-all hover:bg-transparent hover:opacity-75 hover:shadow-none active:scale-100 active:text-white active:hover:bg-transparent active:hover:opacity-75 active:hover:shadow-none"
                                href="{{ 'login' }}">
                                <span class="pr-1"><i class="fa-solid fa-user"></i></span>
                                Sign In</a> --}}
                            <a href="javascript:;" dropdown-trigger aria-expanded="false"
                                class="relative w-12 h-12 bg-white  rounded-full flex items-center justify-center  transition duration-300 sm:mr-4 shadow-2xl">
                                <img class="w-6 h-6" src="{{ asset('assets/icon/shop.png') }}" alt="login">
                                <span
                                    class="absolute top-0 right-0 inline-block w-3 h-3 bg-red-600 rounded-full border-2 border-white"></span>
                            </a>
                            <a href="{{ 'login' }}"
                                class="relative w-12 h-12 bg-white  rounded-full flex items-center justify-center  transition duration-300 sm:mr-4 shadow-2xl">
                                <img class="w-6 h-6" src="{{ asset('assets/icon/user.png') }}" alt="login">
                            </a>
                        </li>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<!-- <script>
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
</script> -->
