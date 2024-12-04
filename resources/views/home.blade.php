@section('title', 'Home')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/LogoAyamGeprek.png') }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Open+Sans:300,400,600,700|Baloo+Thambi+2|Barlow+Semi+Condensed:ital,wght@1,100|Montserrat:wght@200;300;500;700|Poppins:wght@100;200;300;500;700|Roboto:wght@300|Noto+Sans+JP:wght@100&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 ">
    {{-- Link ke WA --}}
    <a href=""
        class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-green-500 transition-transform duration-300 ease-in-out hover:scale-105">
        <i class="py-6 pointer-events-none fa-brands fa-whatsapp fa-2xl"></i>
    </a>

    {{-- Layout Utama --}}
    <div class="bg-customWhite-300 text-black/50 dark:bg-black dark:text-white/50">
        @include('layouts.navbar')

        <main class="transition-all duration-200 ease-in-out">
            <!-- Container Carousel -->

            <section class="relative mt-20 min-h-screen flex items-center justify-center flex-col">
                <div class="carousel-container bg-no-repeat relative w-full overflow-hidden">
                    <!-- Carousel Items Desktop -->
                    <div
                        class="carousel carousel1 w-full  transition-transform duration-500 ease-in-out mb-12 hidden sm:flex">
                        <img src="https://www.kfckorea.com/nas/banner/2024/08/30/TIxTsOHAm0SA.png"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="https://www.kfckorea.com/nas/banner/2024/10/29/fWve1unP3mEJ.png"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="https://www.preksu.com/assets/img/slider/P2.png"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="{{ asset('assets/images/banner/Banner1.png') }}"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                    </div>

                    <!-- Carousel Items Mobile -->
                    <div
                        class="carousel carousel2 w-full flex transition-transform duration-500 ease-in-out mb-12 sm:hidden">
                        <img src="{{ asset('assets/images/banner/Banner2.png') }}"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="{{ asset('assets/images/banner/Banner2.png') }}"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="{{ asset('assets/images/banner/Banner2.png') }}"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="{{ asset('assets/images/banner/Banner2.png') }}"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                    </div>

                    <!-- Indicator Circles -->
                    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20 mb-4">
                        <span class="indicator w-3 h-3 bg-red-500 rounded-full cursor-pointer"></span>
                        <span class="indicator w-3 h-3 bg-red-500 rounded-full cursor-pointer"></span>
                        <span class="indicator w-3 h-3 bg-red-500 rounded-full cursor-pointer"></span>
                        <span class="indicator w-3 h-3 bg-red-500 rounded-full cursor-pointer"></span>
                    </div>
                </div>



                <script>
                    let currentIndex = 0;

                    // Get carousel containers
                    const carouselDesktop = document.querySelector('.carousel1');
                    const carouselMobile = document.querySelector('.carousel2');
                    const indicators = document.querySelectorAll('.indicator');

                    // Update carousel position and indicators
                    function updateCarousel(container) {
                        const images = container.querySelectorAll('img');
                        const totalImages = images.length;

                        // Auto scroll functionality
                        function autoScroll() {
                            currentIndex++;
                            if (currentIndex >= totalImages) {
                                currentIndex = 0;
                            }
                            moveCarousel();
                        }

                        // Move the carousel
                        function moveCarousel() {
                            container.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateIndicators();
                        }

                        // Update indicator styles
                        function updateIndicators() {
                            indicators.forEach((indicator, index) => {
                                indicator.classList.toggle('bg-orange-500', index === currentIndex);
                                indicator.classList.toggle('bg-red-500', index !== currentIndex);
                            });
                        }

                        // Event listener for image click
                        images.forEach((image, index) => {
                            image.addEventListener('click', () => {
                                currentIndex = index;
                                moveCarousel();
                            });
                        });

                        // Indicator click functionality
                        indicators.forEach((indicator, index) => {
                            indicator.addEventListener('click', () => {
                                currentIndex = index;
                                moveCarousel();
                            });
                        });

                        // Start auto scroll
                        setInterval(autoScroll, 5000);
                    }

                    // Initialize carousel based on screen size
                    function initializeCarousel() {
                        if (window.innerWidth >= 640) {
                            updateCarousel(carouselDesktop);
                        } else {
                            updateCarousel(carouselMobile);
                        }
                    }

                    // Reinitialize on resize
                    window.addEventListener('resize', () => {
                        currentIndex = 0; // Reset index
                        initializeCarousel();
                    });

                    // Initial call
                    initializeCarousel();
                </script>


                <div class="max-w-full lg:px-10 mb-6 w-full flex-none">
                    <div
                        class="relative flex flex-col min-w-0  break-words  border-0 border-transparent border-solid  dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap lg:flex-nowrap justify-between">
                                <!-- Di sini diubah menjadi flex-nowrap dan justify-between -->
                                <div class="w-full max-w-full px-3 mb-6">
                                    <a a href="javascript:;" onclick="openAddTelur()"
                                        class="relative flex flex-row items-center p-6 py-19 break-words shadow-lg bg-red-500 border border-solid rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                        {{-- <h6 class="mb-0 dark:text-white">Tambah Telur</h6> --}}
                                    </a>
                                </div>
                                <div class="w-full max-w-full px-3 mb-6">
                                    <a a href="javascript:;" onclick="openAddTelur()"
                                        class="relative flex flex-row items-center p-6 py-19 break-words shadow-lg bg-black border border-solid rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">

                                    </a>
                                </div>
                                <div class="w-full max-w-full px-3 mb-6">
                                    <a a href="javascript:;" onclick="openAddTelur()"
                                        class="relative flex flex-row items-center p-6 py-19 break-words shadow-lg bg-gray-500 border border-solid rounded-xl border-slate-100 dark:border-slate-700 bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </section>



            <section id="menu" class="menu-section py-8 px-6 min-h-screen ">
                <div class="flex flex-row justify-between mb-8 mx-5 mt-20">
                    <h2 class="text-start  text-4xl font-extrabold font-notoSans ">Menu Kami</h2>
                    <div class="ml-10 flex">
                        <button id="swiper-button-prev" class="border border-solid border-red-500 py-2 px-4 rounded-lg">
                            <i class="fa-solid fa-chevron-left text-red-500"></i>
                        </button>
                        <button id="swiper-button-next"
                            class="border border-solid border-red-500 py-2 px-4 rounded-lg ml-2">
                            <i class="fa-solid fa-chevron-right text-red-500"></i>
                        </button>
                    </div>
                </div>
                <div class="swiper-container overflow-x-hidden mx-4">
                    <div class="swiper-wrapper flex w-1/2">
                        <div class="swiper-slide bg-white shadow-3xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/2342857" class="block">
                                <div
                                    class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="{{ asset('assets/images/menu/menu1.png') }}" alt="버터 비스켓"
                                        class="w-full h-75 object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">Ayam Geprek Saus Keju</h3>
                                    <p class="text-gray-600">버터비스켓+딸기잼</p>
                                    <p class="font-bold text-lg">2,600₩</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide bg-white shadow-2xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/1345860" class="block">
                                <div
                                    class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="{{ asset('assets/images/menu/menu2.png') }}" alt="코울슬로"
                                        class="w-full h-75 object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">Ayam Geprek Saus Terasi</h3>
                                    <p class="text-gray-600">버터비스켓+딸기잼</p>
                                    <p class="font-bold text-lg">2,100₩</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide bg-white shadow-2xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/1345860" class="block">
                                <div
                                    class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="{{ asset('assets/images/menu/menu3.png') }}" alt="코울슬로"
                                        class="w-full h-75 object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">Ayam Geprek Mozarella</h3>
                                    <p class="text-gray-600">버터비스켓+딸기잼</p>
                                    <p class="font-bold text-lg">2,100₩</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide bg-white shadow-2xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/1345860" class="block">
                                <div
                                    class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="{{ asset('assets/images/menu/menu4.png') }}" alt="코울슬로"
                                        class="w-full h-75 object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">Ayam Geprek Original</h3>
                                    <p class="text-gray-600">버터비스켓+딸기잼</p>
                                    <p class="font-bold text-lg">2,100₩</p>
                                </div>
                            </a>
                        </div>
                        <!-- Tambahkan slide lainnya di sini -->
                    </div>
                </div>
            </section>

            <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1, // Default untuk semua ukuran
                    spaceBetween: 10, // Default jarak antar card
                    navigation: {
                        nextEl: '#swiper-button-next',
                        prevEl: '#swiper-button-prev',
                    },
                    breakpoints: {
                        641: { // Ukuran 641 ke atas
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        1024: { // Ukuran 1024 ke atas
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                    },
                    touchEventsTarget: 'container',
                    simulateTouch: true,
                    grabCursor: true,
                });
            </script>

    </div>

    </main>
    @include('layouts.footer')
    </div>
</body>

</html>
