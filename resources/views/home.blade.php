@section('title', 'Home')
<x-guest-layout>
    @include('homePage.promo.modalDetail')
    <section class="main_visual relative h-auto overflow-hidden mt-24 mb-40">
        <div class="swiper-container1 visSwiper relative">
            @if (!empty($hero) && $hero->count() > 0)
                <!-- Wrapper -->
                <div class="swiper-wrapper">
                    @foreach ($hero->sortByDesc('created_at')->take(5) as $item)
                        @if ($item->status_hero == 'aktif')
                            <div class="swiper-slide">
                                <a data-promotion-id="606" data-promotion-location="top-main" data-promotion-title=""
                                    href="">
                                    <span class="img block">
                                        <img class="w-full object-cover  h-[300px] max-h-[690px] sm:min-h-[400px] md:min-h-[600px] lg:min-h-[770px]"
                                            src="{{ Storage::url($item->gambar_hero) }}" alt="Promotion Image">
                                    </span>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!-- Navigation Controls -->
                <div
                    class="swiper-pagination mx-5 my-5 md:mx-20 md:my-10 flex justify-start absolute left-0 z-10 text-white bg-black bg-opacity-50 rounded-lg p-2 text-xl max-w-max">
                    <span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">6</span>
                </div>
                <div
                    class="swiper-button-prev absolute top-1/2  left-5 transform -translate-y-1/2 bg-opacity-50 text-white rounded-full p-4 invisible sm:visible">
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






    <section aria-label="Promotional Deals Section mb-20" class="mx-20">
        <div class="flex flex-wrap gap-5 justify-between font-bold max-md:mr-2.5 max-md:max-w-full">
            <h2 class="text-4xl text-stone-800 max-md:max-w-full">Promo</h2>
            <a href="{{ route('promo.indexHome') }}" class="my-auto text-lg text-rose-700 hover:underline "
                tabindex="0">
                View All
            </a>
        </div>
        <div data-aos="zoom-in" class="mt-10 w-full swiper">
            <!-- Wrapper -->
            <div class="swiper-wrapper">
                @if (!empty($promo) && !is_array($promo))
                    @foreach ($promo as $index => $item)
                        <a href="javascript:;"
                            onclick="openDetailPromo(`{{ $item->judul }}`, `{{ strip_tags($item->deskripsi_promo) }}`, `{{ strip_tags($item->syarat_ketentuan) }}`, `{{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d F Y') }}`, `{{ \Carbon\Carbon::parse($item->tanggal_akhir)->format('d F Y') }}`, `{{ Storage::url($item->gambar_promo) }}`)"
                            class="swiper-slide hover:shadow-xs hover:-translate-y-px active:opacity-85 transition-transform duration-300 ease-in-out hover:scale-105">
                            <img loading="lazy" src="{{ Storage::url($item->gambar_promo) }}"
                                alt="Special promotional deal offer"
                                class="object-contain grow w-full aspect-[1.97] max-md:mt-4 max-md:max-w-full" />
                        </a>
                    @endforeach
                @else
                    <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                @endif
            </div>
        </div>
        <div class="flex mt-5 justify-center gap-2">
            <button id="swiper-button-prev"
                class="border border-solid border-customRed-100 text-customRed-100 py-2 px-4 rounded-lg hover:bg-customRed-100 hover:text-white transition duration-300">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button id="swiper-button-next"
                class="border border-solid border-customRed-100 text-customRed-100 py-2 px-4 rounded-lg ml-2 hover:bg-customRed-100 hover:text-white transition duration-300">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper', {
                slidesPerView: 1, // Default untuk mobile
                spaceBetween: 10, // Jarak antar slide
                navigation: {
                    nextEl: '#swiper-button-next',
                    prevEl: '#swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2, // 2 card pada layar medium
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3, // Maksimal 3 card pada layar besar
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>



    {{-- Outlet Section --}}
    <section id="outlet" class="mt-30 mb-50">
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
                        <img class="max-w-full" src="{{ asset('assets/images/Riau Map.png') }}" alt="Map of outlets" />
                    </div>
                </div>

                <!-- Branch Statistics -->
                <div class="mt-10 mx-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 text-center text-white">
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
                    targetValue: {{ $totalOutlets }},
                    duration: 2
                },
                {
                    id: "totalKaryawan",
                    targetValue: {{ $totalEmployees }},
                    duration: 2
                },
                {
                    id: "berdiriSejak",
                    targetValue: {{ $oldestOutletYear }},
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

    {{-- Pesan Online Section --}}
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
                        alt="GrabFood Logo" class="w-32 md:w-40 mx-auto md:mx-0 mb-5" />

                    <a href="{{ route('outlet.indexHome') }}"
                        class="bg-black text-white  py-3 px-6 rounded hover:bg-gray-800 mb-5">
                        Pesan Sekarang
                    </a>
                </div>

                <!-- Right Content -->
                <div class="md:w-1/2 flex justify-center items-center mt-8 md:mt-0">
                    <div class="relative">
                        {{-- <img data-aos="zoom-in-down" src="{{ asset('assets/images/PhoneMockup.png') }}"
                            alt="Phone Mockup" class=" w-100 md:w-135 " /> --}}

                        <!-- Foto bagian kiri -->
                        <div class="flex items-center lg:items-end lg:w-1/2 relative gap-10 mt-10">
                            <div data-aos="zoom-in"
                                class="px-[22px] pt-[22.50px] pb-[72px] origin-top-left  flex-col justify-start items-start inline-flex">
                                <img class="w-100 md:w-135 object-cover"
                                    src="{{ asset('assets/images/Phone.png') }}" />
                            </div>

                            <div data-aos="zoom-in-left"
                                class="pt-[22.50px] pb-[72px] origin-top-left rotate-[6deg]  flex-col justify-start items-start inline-flex absolute top-10 right-1 ">
                                <img class="w-90 h-full md:h-full object-cover"
                                    src="{{ asset('assets/images/Teh.png') }}" />
                            </div>
                            <div data-aos="zoom-in-right"
                                class="px-[22.50px] pt-[22.50px] pb-[72px] origin-top-left rotate-[5deg]  flex-col justify-start items-start inline-flex absolute top-20 left-72">
                                <img class="w-80 h-full md:h-full object-cover"
                                    src="{{ asset('assets/images/Ayam Geprek.png') }}" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Testimoni Section --}}
    <section id="reviewSection" class="py-12">
        <div class="flex flex-col justify-center text-center px-4">
            <div data-aos="zoom-in">
                <h2 class="text-yellow-500 text-3xl font-bold mb-4">Apa Kata Pelanggan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                    Kepuasan Pelanggan adalah Prioritas Kami
                </p>
            </div>
            @if (!empty($testimoni) && !is_array($testimoni))
                <div class="swiper-container2 mt-10 mb-10">
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $index => $item)
                            <div class="swiper-slide">
                                <div data-aos="flip-left"
                                    class="bg-customRed-50 text-white p-6 rounded-2xl shadow-md relative mb-5">
                                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                        <div
                                            class="w-16 h-16 bg-customRed-50 flex items-center justify-center rounded-full shadow-3xl">
                                            <span class="text-yellow-400 text-5xl mt-5">“</span>
                                        </div>
                                    </div>
                                    <p class="text-center mt-6 mb-4 italic">
                                        "{{ $item->pesan }}"
                                    </p>
                                    <div class="text-center">
                                        <p class="font-bold">{{ $item->nama }}</p>
                                        <p class="text-sm">{{ $item->asal_testimoni }}</p>
                                        <div class="mt-2">
                                            <div class="flex justify-center mb-4">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <span class="text-2xl"
                                                        style="color: {{ $i <= $item->rating ? 'gold' : 'gray' }};">&#9733;</span>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="text-gray-600 text-center">Tidak ada data yang tersedia.</p>
            @endif
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper2 = new Swiper('.swiper-container2', {
                loop: true,
                autoplay: {
                    delay: 4000,
                },
                slidesPerView: 1,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>






    {{-- Kontak Section --}}
    <section
        class="flex overflow-hidden relative flex-col justify-center items-center px-20 py-40 mt-28 w-full min-h-[1124px] max-md:px-5 max-md:py-24 max-md:mt-10"
        role="region" aria-label="Download Pizza Hut Mobile App">
        <img loading="lazy" src="{{ asset('assets/images/Bg Kontak.png') }}"
            class="object-cover absolute inset-0 size-full" alt="Bg Kontak" role="img" />

        <div
            class="flex flex-col z-10 items-center px-6 py-20 rounded-3xl  w-[1600px] max-w-[95%] max-md:px-4 max-md:py-16 max-md:mb-2.5">
            <h2 class="text-4xl font-bold text-white text-center mb-4">Kontak Kami</h2>
            <p class="text-center text-gray-100 mb-8 max-w-2xl">Kami terbuka untuk kritik, saran, atau
                pertanyaan demi meningkatkan layanan kami.</p>

            <div
                class="flex flex-col lg:flex-row w-full max-w-[1200px] gap-8 m-10 px-6 max-md:flex-col max-md:m-0 max-md:gap-6">
                <!-- Form Section -->
                <div class="flex flex-col w-full lg:w-2/3 p-6 bg-white rounded-lg shadow-md max-md:px-4 max-md:py-6">
                    <form class="space-y-6" method="POST" action="{{ route('pesanSaran.store') }}">
                        @csrf <!-- Menambahkan token CSRF untuk keamanan -->
                        <div class="flex flex-col md:flex-row gap-6">
                            <input type="text" name="nama" placeholder="Nama"
                                class="flex-1 p-4 placeholder-slate-700 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                                title="Masukkan nama lengkap Anda" required>
                            <input type="email" name="email" placeholder="Email"
                                class="flex-1 p-4 placeholder-slate-700 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                                title="Masukkan email aktif Anda" required>
                        </div>
                        <select name="subjek"
                            class="w-full p-4 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                            title="Pilih subjek pesan Anda" required>
                            <option class="text-slate-700" value="" disabled selected>Silakan pilih subjek
                            </option>
                            <option value="pertanyaan">Pertanyaan?</option>
                            <option value="keluhan">Keluhan!</option>
                            <option value="pujian">Pujian 😊</option>
                            <option value="lainnya">Lainnya</option>
                        </select>

                        <textarea id="pesan" name="pesan" placeholder="Pesan" rows="5"
                            class="w-full p-4 placeholder-slate-700 border border-gray-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                            title="Ketik pesan Anda di sini" required></textarea>
                        <button type="submit"
                            class="w-full bg-yellow-500 text-white font-bold py-4 px-6 rounded-md hover:bg-yellow-600 focus:outline-none transition duration-300 ease-in-out shadow-lg">
                            Kirim
                        </button>
                    </form>

                </div>

                <!-- Info Section -->
                <div
                    class="flex flex-col items-center justify-center w-full lg:w-1/3 p-6 bg-white rounded-lg shadow-lg text-center max-md:px-4 max-md:py-6">
                    <h3 class="text-2xl font-semibold text-yellow-500 mb-6">Hubungi Kami</h3>
                    <p class="text-gray-700 text-sm mb-6">
                        Jika memiliki pertanyaan mendesak, hubungi kami melalui salah satu platform berikut:
                    </p>


                    <!-- Ikon Media Sosial -->
                    <div class="flex gap-6 justify-center">
                        @foreach ($kontak as $index => $item)
                            @if ($item->social_media == 'Facebook')
                            <a target="0" href="{{$item->link}}"
                                class="flex items-center justify-center w-12 h-12 bg-customRed-100 text-white rounded-full hover:bg-customRed-50 transition duration-300 ease-in-out">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            @endif
                            @if ($item->social_media == 'WhatsApp')
                            <a target="0" href="{{$item->link}}"
                                class="flex items-center justify-center w-12 h-12 bg-customRed-100 text-white rounded-full hover:bg-customRed-50 transition duration-300 ease-in-out">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            @endif
                            {{-- <a href="#"
                                class="flex items-center justify-center w-12 h-12 bg-customRed-100 text-white rounded-full hover:bg-customRed-50transition duration-300 ease-in-out">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center w-12 h-12 bg-customRed-100 text-white rounded-full hover:bg-customRed-50 transition duration-300 ease-in-out">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center w-12 h-12 bg-customRed-100 text-white rounded-full hover:bg-customRed-50 transition duration-300 ease-in-out">
                                <i class="fab fa-whatsapp"></i>
                            </a> --}}
                        @endforeach
                    </div>

                    <!-- Catatan -->
                    <div class="mt-6">
                        <p class="text-sm text-gray-600">
                            Kami akan merespons pesan Anda sesegera mungkin pada jam kerja: <br />
                            <span class="font-medium">Senin - Jumat, 09:00 - 17:00 WIB</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>






    </main>
    </div>
</x-guest-layout>
