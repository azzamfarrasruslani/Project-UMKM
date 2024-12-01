@section('title', 'Home')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.jpg') }}">

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
    <div class="bg-customWhite-300 text-black/50 dark:bg-black dark:text-white/50">
        @include('layouts.navbar')

        <main class="transition-all duration-200 ease-in-out">
            <!-- Container Carousel -->

            <section class="relative mt-20 min-h-screen flex items-center justify-center flex-col">
                <div class="carousel-container bg-no-repeat relative w-full overflow-hidden mb-3">
                    <!-- Carousel Items -->
                    <div class="carousel w-full flex transition-transform duration-500 ease-in-out mb-12">
                        <img src="https://www.kfckorea.com/nas/banner/2024/08/30/TIxTsOHAm0SA.png"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="https://www.kfckorea.com/nas/banner/2024/09/09/3owwgyuQs0YB.png"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        <img src="https://www.kfckorea.com/nas/banner/2024/08/14/ddggpiDQyzHX.png"
                            class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                    </div>

                    <!-- Indicator Circles -->
                    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20 mb-4">
                        <span class="indicator p-1 bg-red-500 rounded-full cursor-pointer"></span>
                        <span class="indicator p-1 bg-red-500 rounded-full cursor-pointer"></span>
                        <span class="indicator p-1 bg-red-500 rounded-full cursor-pointer"></span>
                    </div>
                </div>
                <!-- Tambahkan class untuk memutus flex -->
                <div class="flex mt-5 flex-row gap-8">
                    <a href="" class="bg-red-500 px-56 py-19 justify-start rounded-xl flex items-center"></a>
                    <a href="" class="bg-red-500 px-56 py-19 justify-start rounded-xl flex items-center"></a>
                    <a href="" class="bg-red-500 px-56 py-19 justify-start rounded-xl flex items-center"></a>
                </div>



            </section>

            <script>
                let currentIndex = 0;
                const images = document.querySelectorAll('.carousel img');
                const totalImages = images.length;
                const carousel = document.querySelector('.carousel');
                const indicators = document.querySelectorAll('.indicator');

                // Function for automatic scrolling
                function autoScroll() {
                    currentIndex++;
                    if (currentIndex >= totalImages) {
                        currentIndex = 0;
                    }
                    updateCarousel();
                }

                // Function to update carousel position and active indicator
                function updateCarousel() {
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                    indicators.forEach((indicator, index) => {
                        indicator.style.backgroundColor = index === currentIndex ? '#fb6340' : '#fca5a5'; // Warna oranye saat aktif, lebih terang ketika tidak aktif
                    });
                }

                // Event listener for image click
                images.forEach((image) => {
                    image.addEventListener('click', () => {
                        currentIndex++;
                        if (currentIndex >= totalImages) {
                            currentIndex = 0;
                        }
                        updateCarousel();
                    });
                });

                // Update carousel when indicator is clicked
                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        currentIndex = index;
                        updateCarousel();
                    });
                });

                // Automatic scrolling every 5 seconds
                setInterval(autoScroll, 5000);
            </script>

            <section id="menu" class="menu-section py-8 min-h-screen ">
                <div class="flex flex-row justify-between mb-8 mx-5 mt-20">
                    <h2 class="text-start  text-4xl font-extrabold font-notoSans ">Daftar Menu</h2>
                    <div class="ml-10 flex">
                        <button id="swiper-button-prev"
                            class="border border-solid border-red-500 py-2 px-4 rounded-lg">
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
                                <div class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="https://kfcapi.inicis.com/kfcs_api_img/KFCS/goods/DL_2176810_20240613171511036.png"
                                        alt="버터 비스켓" class="w-full h-auto object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">버터 비스켓</h3>
                                    <!-- <p class="text-gray-600">버터비스켓+딸기잼</p> -->
                                    <p class="font-bold text-lg">2,600₩</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide bg-white shadow-2xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/1345860" class="block">
                                <div class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="https://kfcapi.inicis.com/kfcs_api_img/KFCS/goods/DL_1345860_20240314100906670.png"
                                        alt="코울슬로" class="w-full h-auto object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">코울슬로</h3>
                                    <p class="font-bold text-lg">2,100₩</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide bg-white shadow-2xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/1345860" class="block">
                                <div class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="https://kfcapi.inicis.com/kfcs_api_img/KFCS/goods/DL_2176811_20240613171555352.png"
                                        alt="코울슬로" class="w-full h-auto object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">코울슬로</h3>
                                    <p class="font-bold text-lg">2,100₩</p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide bg-white shadow-2xl rounded-xl mb-5 ">
                            <a href="/delivery/detail/N/1345860" class="block">
                                <div class="relative transform hover:scale-110 transition duration-300 ease-in-out hover:opacity-80">
                                    <img src="https://kfcapi.inicis.com/kfcs_api_img/KFCS/goods/DL_2278056_20240819141659065.png"
                                        alt="코울슬로" class="w-full h-auto object-cover">
                                </div>
                                <div class="text-center mt-2">
                                    <h3 class="font-bold text-xl">코울슬로</h3>
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
                    slidesPerView: 3, // Menampilkan 3 card pada desktop
                    spaceBetween: 30, // Jarak antar card
                    navigation: {
                        nextEl: '#swiper-button-next',  // Ganti kelas dengan ID
                        prevEl: '#swiper-button-prev',  // Ganti kelas dengan ID
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        1024: {
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

    <section id="about-us" class="py-12 bg-white">
        <div class="container mx-auto flex items-center justify-between px-4">
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-bold mb-4">About Us</h2>
                <p class="text-lg text-gray-700 border border-gray-300 p-6 rounded-lg shadow-md bg-gray-50">
                    Ayam Geprek Keysia adalah UMKM yang didirikan pada 17 Agustus 2019 oleh Lina,
                    seorang ibu rumah tangga. Nama "Keysia" diambil dari anak ketiganya, yang menjadi inspirasi utama
                    usaha ini. Berawal dari hobi memasak, Ayam Geprek Keysia kini telah berkembang dengan tiga cabang di Pekanbaru.
                    Kami berkomitmen menjaga kualitas dan memberikan harga terjangkau, dengan setiap porsi hanya seharga 10 ribu,
                    menjadikan kami pilihan favorit bagi anak kos dan masyarakat sekitar.
                </p>
            </div>

            <div class="w-full md:w-1/2 px-4 mt-8 md:mt-0">
                <div class="border border-gray-300 p-6 rounded-lg shadow-md bg-gray-50">
                    <img src="{{ asset('assets/images/ayam_geprek.jpg') }}" class="w-full h-auto object-cover rounded-lg" alt="Ayam Geprek Keysia">
                </div>
            </div>
        </div>
    </section>


    <section id="contact-us" class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
          <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
          <p class="text-lg text-gray-700 mb-6">
            Kami siap membantu Anda! Jika ada pertanyaan atau ingin melakukan pemesanan, jangan ragu untuk menghubungi kami.
          </p>
          <div class="flex justify-center space-x-8">
            <div>
              <h3 class="text-xl font-semibold mb-2">Phone</h3>
              <p><a href="tel:+628123456789" class="text-blue-500 hover:underline">+62 812-6639-6750</a></p>
            </div>
            <div>
              <h3 class="text-xl font-semibold mb-2">Address</h3>
              <p>Jalan Merpati No. 10, Pekanbaru</p>
            </div>
          </div>
        </div>
      </section>

    </main>
    @include('layouts.footer')
    </div>
</body>
<script src="https://unpkg.com/scrollreveal"></script>
<script>

    /*===== SCROLL REVEAL ANIMATION =====*/
    const sr = ScrollReveal({
        origin: 'top',
        distance: '60px',
        duration: 2000,
        delay: 200,
        //     reset: true
    });

    // sr.reveal('.about, .ket',{});
    sr.reveal('.judul1, .judul2', { delay: 400 });
    sr.reveal('.home__social-icon', { interval: 200 });
    sr.reveal('.skills__data, .work__img, .contact__input', { interval: 200 });
</script>

<!-- Script Java -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function parallaxEffect() {
            let scrollPosition = $(window).scrollTop();
            let elementHeight = $('.parallax-section').outerHeight();
            let offset = scrollPosition / elementHeight * 0.5; // Adjust this value for different speed

            $('.parallax-section').css('background-position', `center calc(50% + ${offset}px)`);
        }

        $(window).on('scroll', parallaxEffect);
    });
</script>

</html>
