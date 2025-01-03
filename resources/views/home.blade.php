@section('title', 'Home')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/LogoAyamGeprek.png') }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- Animation on Scroll css -->
    <link href="{{ asset('build/assets/libs/aos/aos.css') }}" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Open+Sans:300,400,600,700|Baloo+Thambi+2|Barlow+Semi+Condensed:ital,wght@1,100|Montserrat:wght@200;300;500;700|Poppins:wght@100;200;300;500;700|Roboto:wght@300|Noto+Sans+JP:wght@100&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            <!-- Main Visual Section -->

            <section class="main_visual relative h-auto overflow-hidden mt-20">
                <div class="swiper-container1 visSwiper relative">
                    @if (!empty($hero) && $hero->count() > 0)
                        <!-- Wrapper -->
                        <div class="swiper-wrapper">
                            @foreach ($hero as $item)
                                <div class="swiper-slide">
                                    <a data-promotion-id="606" data-promotion-location="top-main"
                                        data-promotion-title="하프앤하프" href="">
                                        <span class="img block">
                                            <img class="w-full object-cover  h-[300px] max-h-[690px] sm:min-h-[400px] md:min-h-[600px] lg:min-h-[660px] "
                                                src="{{ Storage::url($item->gambar_hero) }}" alt="하프앤하프">
                                        </span>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination and Navigation Controls -->
                        <div
                            class="swiper-pagination mx-20 my-10 flex justify-start absolute left-1/2 transform -translate-x-1/2 z-10 text-white text-xl">
                            <span class="swiper-pagination-current">1</span> / <span
                                class="swiper-pagination-total">6</span>
                            {{-- <button class="swiper-state stop"><span>sdfsd</span></button> --}}
                        </div>
                        <div
                            class="swiper-button-prev absolute top-1/2 left-5 transform -translate-y-1/2 bg-opacity-50 text-white rounded-full p-2 invisible sm:visible">
                        </div>
                        <div
                            class="swiper-button-next absolute top-1/2 right-5 transform -translate-y-1/2 bg-opacity-50 text-white rounded-full p-2 invisible sm:visible">
                        </div>
                    @else
                        <p class="text-gray-600">Tidak ada gambar yang tersedia.</p>
                    @endif
                </div>
            </section>


            <script>
                var swiper1 = new Swiper('.swiper-container1', {
                    loop: true,
                    autoplay: {
                        delay: 5000,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'fraction',
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
            {{-- Card --}}
            <section class="mb-20">
                <div class="max-w-full lg:px-10 w-full flex-none top-0 left-0 right-0">
                    <div
                        class="relative flex flex-col min-w-0 break-words border-0 border-transparent dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap lg:flex-nowrap justify-between ">
                                <div data-aos="fade-up" class="w-full max-w-full px-3 mb-6">
                                    <div
                                        class="relative flex flex-row break-words py-5 lg:py-8 bg-white shadow-2xl rounded-2xl overflow-hidden bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                        <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                                            class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                                        <div class="relative z-10 p-9">
                                            <a href="javascript:;" onclick=""
                                                class="relative flex flex-row items-center p-6  break-words shadow-md bg-white border border-solid rounded-2xl border-slate-100 dark:border-slate-700 bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="w-full max-w-full px-3 mb-6">
                                    <div
                                        class="relative flex flex-row break-words py-5 lg:py-8 bg-red-500 shadow-2xl rounded-2xl overflow-hidden bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                        <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                                            class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                                        <div class="relative z-10 p-9">
                                            <a href="javascript:;" onclick=""
                                                class="relative flex flex-row items-center p-6  break-words shadow-md bg-white border border-solid rounded-2xl border-slate-100 dark:border-slate-700 bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="w-full max-w-full px-3 mb-6">
                                    <div
                                        class="relative flex flex-row break-words py-5 lg:py-8 bg-red-500 shadow-2xl rounded-2xl overflow-hidden bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                        <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                                            class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                                        <div class="relative z-10 p-9">
                                            <a href="javascript:;" onclick=""
                                                class="relative flex flex-row items-center p-6  break-words shadow-md bg-white border border-solid rounded-2xl border-slate-100 dark:border-slate-700 bg-clip-border hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="outlet">
                <div class="mx-2 lg:mx-30 py-16 bg-Outlet-bg bg-red-700 bg-cover bg-no-repeat rounded-3xl mb-10">
                    <div class="container mx-auto px-6">
                        <div class="flex flex-wrap mx-6">
                            <!-- Left Column -->
                            <div class="w-full lg:w-1/2 px-6 flex flex-col justify-center text-white">
                                <h1 class="text-yellow-400 text-4xl font-extrabold">Ayam Geprek</h1>
                                <h1 class="text-5xl text-white font-bold">Keysia</h1>
                                <h1 class="text-yellow-400 text-4xl font-bold">Outlets</h1>
                                <div class="my-4">
                                    <p>
                                        Menyebarkan kebahagiaan di sekitar kota dengan 3 cabang Ayam Geprek Keysia dan
                                        terus berkembang! Bergabunglah dalam perjalanan penuh cita rasa bersama kami!
                                    </p>
                                </div>
                                <a href="/about-us/#outlet"
                                    class="inline-block bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                    <i class="fa-solid fa-store mr-3"></i>Lihat Outlets Kami
                                </a>
                            </div>
                            <!-- Right Column -->
                            <div data-aos="zoom-in" class="w-full lg:w-1/2 px-6 flex justify-center">
                                <img class="max-w-full" src="{{ asset('assets/images/Riau Map.png') }}"
                                    alt="Map of outlets" />
                            </div>
                        </div>

                        <!-- Branch Statistics -->
                        <div
                            class="mt-10 mx-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 text-center text-white">
                            <!-- Total Cabang -->
                            <div data-aos="zoom-in" class="py-6 rounded-lg ">
                                <h3 class="text-xl font-semibold text-white">TOTAL CABANG</h3>
                                <div class="text-5xl font-bold text-yellow-400"id="totalCabang">0</div>
                                <p class="text-lg font-semibold">AYAM GEPREK KEYSIA</p>
                                <p class="text-sm mt-2">Di Jalan Nelayan, Jalan Kuburan, dan Jalan Umban Sari</p>
                            </div>

                            <!-- Jumlah Karyawan -->
                            <div data-aos="zoom-in" class="py-6 rounded-lg ">
                                <h3 class="text-xl font-semibold text-white">TOTAL KARYAWAN</h3>
                                <div class="text-5xl font-bold text-yellow-400"id="totalKaryawan">0</div>
                                <p class="text-lg font-semibold">DI SEMUA CABANG</p>
                                <p class="text-sm mt-2">Bekerja untuk memberikan pelayanan terbaik</p>
                            </div>

                            <!-- Tanggal Berdiri -->
                            <div data-aos="zoom-in" n class="py-6 rounded-lg ">
                                <h3 class="text-xl font-semibold text-white">BERDIRI SEJAK</h3>
                                <div class="text-5xl font-bold text-yellow-400" id="berdiriSejak">0</div>
                                <p class="text-lg font-semibold">AYAM GEPREK KEYSIA</p>
                                <p class="text-sm mt-2">Mulai dari Jalan Nelayan hingga terus berkembang</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <script>
                // Fungsi untuk menginisialisasi animasi counter
                function animateCounter(id, targetValue, duration) {
                    const counter = {
                        value: 0
                    };
                    gsap.to(counter, {
                        value: targetValue,
                        duration: duration,
                        onUpdate: () => {
                            document.getElementById(id).textContent = Math.floor(counter.value);
                        }
                    });
                }

                // Menggunakan Intersection Observer untuk mendeteksi elemen
                document.addEventListener("DOMContentLoaded", () => {
                    const observerOptions = {
                        root: null, // viewport
                        rootMargin: "0px",
                        threshold: 0.5 // 50% elemen terlihat
                    };

                    const counters = [{
                            id: "totalCabang",
                            targetValue: 3,
                            duration: 2
                        },
                        {
                            id: "totalKaryawan",
                            targetValue: 6,
                            duration: 2
                        },
                        {
                            id: "berdiriSejak",
                            targetValue: 2019,
                            duration: 2
                        }
                    ];

                    const observer = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                const target = entry.target;
                                const counterData = counters.find(c => c.id === target.id);
                                if (counterData) {
                                    animateCounter(counterData.id, counterData.targetValue, counterData
                                        .duration);
                                    observer.unobserve(
                                        target); // Hentikan pengamatan setelah animasi selesai
                                }
                            }
                        });
                    }, observerOptions);

                    // Memulai pengamatan untuk setiap elemen counter
                    counters.forEach(counter => {
                        const element = document.getElementById(counter.id);
                        if (element) {
                            observer.observe(element);
                        }
                    });
                });
            </script>
    </div>
    </main>
    <!-- Script untuk AOS -->
    <script src="{{ asset('build/assets/libs/aos/aos.js') }}"></script>
    <script>
        // Animation on Scroll (Plugin)
        AOS.init();
    </script>
    @include('layouts.footer')
    </div>
</body>

</html>
