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
                            @if ($item->status_hero == "aktif")
                            <div class="swiper-slide">
                                <a data-promotion-id="606" data-promotion-location="top-main"
                                    data-promotion-title="" href="">
                                    <span class="img block">
                                        <img class="w-full object-cover  h-[300px] max-h-[690px] sm:min-h-[400px] md:min-h-[600px] lg:min-h-[660px] "
                                            src="{{ Storage::url($item->gambar_hero) }}" alt="Promotion Image">
                                    </span>
                                </a>
                            </div>
                            @endif

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
                            class="swiper-button-prev absolute top-1/2 left-5  transform -translate-y-1/2 bg-opacity-50 text-white rounded-full p-4 invisible sm:visible">
                        </div>
                        <div
                            class="swiper-button-next absolute top-1/2 right-5 transform -translate-y-1/2 bg-opacity-50 text-white rounded-full p-4 invisible sm:visible">
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

            {{-- <section class="best-menu flex flex-col items-center pb-24" aria-labelledby="best-menu-heading">
                <div class="container">
                    <!-- Heading -->
                    <div class="flex items-center justify-between">
                        <h2 id="best-menu-heading" class="mt-5 text-4xl font-bold text-stone-800">MENU</h2>
                        <div class="flex">
                            <button id="swiper-button-prev"
                                class="border border-solid border-red-500 text-red-500 py-2 px-4 rounded-lg hover:bg-red-500 hover:text-white transition duration-300">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button id="swiper-button-next"
                                class="border border-solid border-red-500 text-red-500 py-2 px-4 rounded-lg ml-2 hover:bg-red-500 hover:text-white transition duration-300">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Menu Slider -->
                    @if (!empty($menu) && is_iterable($menu))
                        <div class="swiper relative">
                            <div class="swiper-wrapper">
                                @foreach ($menu as $item)
                                    <div class="swiper-slide flex justify-center items-center py-10">
                                        <article
                                            class="menu-item bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-2 flex flex-col items-center">
                                            <div class="max-w-[500px] w-full aspect-[4/3] overflow-hidden rounded-lg">
                                                <img loading="lazy" src="{{ Storage::url($item->gambar_menu) }}"
                                                    alt="{{ $item->nama_menu }}" class="w-full h-full object-cover">
                                            </div>

                                            <h3
                                                class="overflow-hidden mt-8 text-2xl font-bold leading-6 text-neutral-800">
                                                BARU Paket Komplit</h3>
                                            <p class="overflow-hidden mt-1 text-base leading-5 text-stone-500 ">Ayam +
                                                Teh</p>
                                            <p class="mt-2 text-xl font-medium text-red-700 text-center">
                                                Rp {{ number_format($item->harga_menu, 2, ',', '.') }}
                                            </p>
                                        </article>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @else
                        <p class="text-gray-600 text-center mt-10">Tidak ada data yang tersedia.</p>
                    @endif

                    <!-- View All Button -->
                    <a href="{{ route('menu.indexHome') }}"
                        class="block mt-10 mx-auto px-8 py-4 text-center text-white bg-stone-900 hover:bg-stone-700 rounded-xl text-xl font-bold max-w-xs focus:outline-none focus:ring-2 focus:ring-stone-600">
                        Lihat Menu
                    </a>
                </div>
            </section>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const swiper = new Swiper('.swiper', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '#swiper-button-next',
                            prevEl: '#swiper-button-prev',
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 40,
                            },
                        },
                    });
                });
            </script> --}}







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


            <section id="onlineOrder" class="relative bg-customRed-50 py-0 mb-30">
                <!-- Background Pattern -->
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="Background Pattern"
                        class="w-full h-full object-cover opacity-30" />
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
                    <h2 class="text-yellow-500 text-3xl font-bold mb-4">Apa Kata Pelanggan Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                        Kepuasan Pelanggan adalah Prioritas Kami
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





            {{-- <section class="relative min-h-[640px]  text-white" aria-label="Delivery promotion">
                <img src="https://www.pizzahut.co.id/assets/dfooter-BAbdTqkz.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true">
                <div class="relative px-16 py-64 max-md:px-5 max-md:py-24">
                    <h2 class="text-5xl leading-[81px] max-md:text-4xl max-md:leading-[70px]">
                        No time to dine in? Don't<br>
                        worry, we've got you!
                    </h2>
                </div>
            </section> --}}

            <section
                class="flex overflow-hidden relative flex-col justify-center items-center px-20 py-80 mt-28 w-full min-h-[1124px] max-md:px-5 max-md:py-24 max-md:mt-10 max-md:max-w-full"
                role="region" aria-label="Download Pizza Hut Mobile App">
                <img loading="lazy"
                    src="{{ asset('assets/images/Footer BG-1.png') }}"
                    class="object-cover absolute inset-0 size-full" alt="Pizza Hut Mobile App Background"
                    role="img" />

                {{-- <div class="flex relative flex-col justify-center items-end px-14 py-28 mb-0 max-w-full bg-white rounded-3xl w-[1600px] max-md:px-5 max-md:py-24 max-md:mb-2.5"
                    tabindex="0">
                    <div class="mb-0 max-w-full w-[644px] max-md:mb-2.5">
                        <div class="flex gap-5 max-md:flex-col">
                            <div class="flex flex-col w-[62%] max-md:ml-0 max-md:w-full">
                                <div class="flex flex-col self-stretch my-auto text-neutral-900 max-md:mt-10">
                                    <h2
                                        class="text-5xl font-bold leading-[62px] max-md:text-4xl max-md:leading-[59px]">
                                        Download
                                        <br />
                                        Pizza Hut Mobile
                                    </h2>
                                    <p class="mt-5 text-lg font-medium leading-7 max-md:mr-2.5">
                                        Get various exclusive promos & redeem
                                        <br />
                                        prizes with Pizza Hut Mobile application.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col ml-5 w-[38%] max-md:ml-0 max-md:w-full">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/13d2b3a29e989a3d24620540535cd74de2a92bfe31d50f063635552145000d27?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain w-full aspect-square max-md:mt-8"
                                    alt="Pizza Hut Mobile App Interface Preview" role="img" />
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="flex relative flex-col justify-center items-center px-14 py-28 mb-0 max-w-full bg-white rounded-3xl w-[1600px] max-md:px-5 max-md:py-24 max-md:mb-2.5" tabindex="0">
                    <div class="mb-0 max-w-full w-[644px] max-md:mb-2.5">
                        <div class="flex flex-col gap-5 max-md:flex-col">
                            <div class="flex flex-col w-full max-md:ml-0">
                                <h2 class="text-5xl font-bold leading-[62px] max-md:text-4xl max-md:leading-[59px] text-center">
                                    Contact Us
                                </h2>
                                <p class="mt-5 text-lg font-medium leading-7 text-center max-md:mr-2.5">
                                    Feel free to reach out to us for any inquiries or feedback.
                                </p>
                                <form class="mt-8 space-y-5 w-full">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" id="name" name="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Name" required />
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" id="email" name="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Email" required />
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Phone Number" />
                                    </div>
                                    <div>
                                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="w-full bg-indigo-500 text-white py-3 px-6 rounded-lg font-semibold shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="flex relative flex-col justify-center items-center px-14 py-28 mb-0 max-w-full bg-white rounded-3xl w-[1600px] max-md:px-5 max-md:py-24 max-md:mb-2.5" tabindex="0">
                    <h2 class="text-3xl font-bold text-yellow-400 text-center mb-4">Kontak Kami</h2>
                    <p class="text-center text-gray-200 mb-6">Kritik dan saran untuk meningkatkan layanan kami</p>
                    <div class="mb-0 max-w-full w-[1200px]   flex flex-col lg:flex-row">
                        <div class="flex flex-col w-full lg:w-2/3 p-8">

                            <form class="space-y-4">
                                <div class="flex gap-4">
                                    <input type="text" placeholder="Nama" class="flex-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                                    <input type="email" placeholder="Email" class="flex-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                                </div>
                                <input type="text" placeholder="Subjek" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                                <textarea placeholder="Pesan" rows="5" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-400 focus:outline-none"></textarea>
                                <button type="submit" class="bg-yellow-400 text-white font-bold py-3 px-6 rounded-md hover:bg-yellow-500 focus:outline-none">Kirim</button>
                            </form>
                        </div>
                        <div class="hidden lg:block lg:w-1/3 bg-yellow-400 rounded-r-lg"></div>
                    </div>
                </div>


            </section>
        </main>
    </div>
</x-guest-layout>
