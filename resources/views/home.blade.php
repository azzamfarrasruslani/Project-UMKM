@section('title', 'Home')
<x-guest-layout>


    {{-- Layout Utama --}}
    <div class="text-black/50 dark:bg-black dark:text-white/50">
        <main class="transition-all duration-200 ease-in-out">
            <!-- Main Visual Section -->

            <section class="main_visual relative h-auto overflow-hidden mt-20 mb-50">
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
            {{-- <section class="mb-20">
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
            </section> --}}
            <!-- Section Menu -->
            <section id="menu" class="menu-section py-8 px-6 min-h-screen">
                <!-- Header Menu -->
                <div class="flex flex-row justify-between mb-8 mx-5 mt-20">
                    <h2 class="text-start text-4xl font-extrabold font-notoSans text-red-600">Menu Kami</h2>
                    <div class="ml-10 flex">
                        <button id="swiper-button-prev"
                            class="border border-solid border-red-500 py-2 px-4 rounded-lg hover:bg-red-500 hover:text-white transition duration-300">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button id="swiper-button-next"
                            class="border border-solid border-red-500 py-2 px-4 rounded-lg ml-2 hover:bg-red-500 hover:text-white transition duration-300">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <!-- Menu Content -->
                @if (!empty($menu) && !is_array($menu))
                    <div class="swiper-container">
                        <div id="kandangTabContent" class="swiper-wrapper">
                            @foreach ($menu as $index => $item)
                                <div
                                    class="swiper-slide bg-white shadow-lg rounded-xl mb-5 transition-transform transform hover:scale-105">
                                    <a href="/delivery/detail/N/{{ $item->id_menu }}" class="block">
                                        <div class="relative">
                                            <img src="{{ Storage::url($item->gambar_menu) }}"
                                                alt="{{ $item->nama_menu }}"
                                                class="w-full h-64 object-cover rounded-t-xl">
                                            <div
                                                class="absolute inset-0 bg-black opacity-20 hover:opacity-0 transition duration-300">
                                            </div>
                                        </div>
                                        <div class="text-center mt-2 p-4">
                                            <h3 class="font-bold text-xl text-gray-800">{{ $item->nama_menu }}</h3>
                                            <p class="text-gray-600">{{ $item->status_menu }}</p>
                                            <p class="font-bold text-lg text-red-600">Rp.
                                                {{ number_format($item->harga_menu, 2, ',', '.') }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <!-- Navigation Buttons -->
                        <div class="swiper-button-prev" id="swiper-button-prev"></div>
                        <div class="swiper-button-next" id="swiper-button-next"></div>
                    </div>
                @else
                    <p class="text-gray-600 text-center mt-10">Tidak ada data yang tersedia.</p>
                @endif
            </section>



            <!-- Swiper.js -->
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






            <section id="outlet" class="mb-50">
                <div class="mx-2 lg:mx-30 py-16 bg-Outlet-bg bg-red-700 bg-cover bg-no-repeat rounded-3xl mb-10">
                    <div class="container mx-auto px-6">
                        <div class="flex flex-wrap mx-6">
                            <!-- Left Column -->
                            <div class="w-full lg:w-1/2 px-6 flex flex-col justify-center text-white">
                                <h1 class="text-yellowCustom-50 text-3xl md:text-6xl font-extrabold">Ayam Geprek</h1>
                                <h1 class="text-2xl md:text-4xl text-white font-bold">Keysia</h1>
                                <h1 class="text-yellowCustom-50 text-2xl md:text-4xl font-bold">Outlets</h1>
                                <div class="my-4">
                                    <p>
                                        Menyebarkan kebahagiaan di sekitar kota dengan 3 cabang Ayam Geprek Keysia
                                        dan
                                        terus berkembang! Bergabunglah dalam perjalanan penuh cita rasa bersama
                                        kami!
                                    </p>
                                </div>
                                {{-- <a href="/about-us/#outlet"
                                    class="inline-block bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                                    <i class="fa-solid fa-store mr-3"></i>Lihat Outlets Kami
                                </a> --}}
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


            <section id="onlineOrder" class="relative bg-customRed-50 py-12 mb-30">
                <!-- Background Pattern -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="Background Pattern"
                        class="w-full h-full object-cover opacity-20" />
                </div>

                <!-- Content -->
                <div class="relative z-10 container mx-auto px-6">
                    <div class="flex flex-col-reverse md:flex-row items-center justify-between">
                        <!-- Left Content -->
                        <div class="text-center md:text-left md:w-1/2">
                            <h2 class="text-white text-2xl md:text-3xl font-bold mb-4">
                                PESAN AYAM GEPREK KEYSIA
                            </h2>

                            <img data-aos="zoom-in-down" src="{{ asset('assets/images/grabfood-logo.png') }}"
                                alt="GrabFood Logo" class="w-32 md:w-40 mx-auto md:mx-0" />

                            <button class="mt-6 bg-black text-white py-2 px-6 rounded hover:bg-gray-800">
                                Pesan Sekarang
                            </button>
                        </div>

                        <!-- Right Content -->
                        <div class="md:w-1/2 flex justify-center items-center mt-8 md:mt-0">
                            <div class="relative">
                                <img data-aos="zoom-in-down" src="{{ asset('assets/images/PhoneMockup.png') }}"
                                    alt="Phone Mockup" class=" w-100 md:w-135 " />
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="reviewSection" class="py-12">
                <div class="flex flex-col justify-center text-center px-4">
                    <h2 class="text-yellow-500 text-3xl font-bold mb-4">Our Happy Customers</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, dolore?
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                        <!-- Card 1 -->
                        <div class="bg-customRed-50 text-white p-6 rounded-2xl shadow-md relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="w-16 h-16 bg-customRed-50  flex items-center justify-center rounded-full shadow-3xl">
                                    <span class="text-yellow-400 text-5xl mt-5">“</span>
                                </div>
                            </div>
                            <p class="text-center mt-6 mb-4">
                                "Lorem ipsum dolor sit amet consectetur. Suspendisse aliquet tellus
                                adipiscing condimentum donec blandit."
                            </p>
                            <div class="text-center">
                                <p class="font-bold">John</p>
                                <p class="text-sm">Business Man</p>
                                <div class="mt-2">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-customRed-50 text-white p-6 rounded-2xl  shadow-md relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="w-16 h-16 bg-customRed-50  flex items-center justify-center rounded-full shadow-3xl">
                                    <span class="text-yellow-400 text-5xl mt-5">“</span>
                                </div>
                            </div>
                            <p class="text-center mt-6 mb-4">
                                "Lorem ipsum dolor sit amet consectetur. Suspendisse aliquet tellus
                                adipiscing condimentum donec blandit."
                            </p>
                            <div class="text-center">
                                <p class="font-bold">John</p>
                                <p class="text-sm">Business Man</p>
                                <div class="mt-2">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-customRed-50 text-white p-6 rounded-2xl  shadow-md relative">
                            <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                <div
                                    class="w-16 h-16 bg-customRed-50  flex items-center justify-center rounded-full shadow-3xl">
                                    <span class="text-yellow-400 text-5xl mt-5">“</span>
                                </div>
                            </div>
                            <p class="text-center mt-6 mb-4">
                                "Lorem ipsum dolor sit amet consectetur. Suspendisse aliquet tellus
                                adipiscing condimentum donec blandit."
                            </p>
                            <div class="text-center">
                                <p class="font-bold">John</p>
                                <p class="text-sm">Business Man</p>
                                <div class="mt-2">
                                    ⭐⭐⭐⭐⭐
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>






        </main>
    </div>
</x-guest-layout>
