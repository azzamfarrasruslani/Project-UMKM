@section('title', 'Home')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Open+Sans:300,400,600,700|Baloo+Thambi+2|Barlow+Semi+Condensed:ital,wght@1,100|Montserrat:wght@200;300;500;700|Poppins:wght@100;200;300;500;700|Roboto:wght@300&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-customWhite-50 text-black/50 dark:bg-black dark:text-white/50">
        <!-- Container Navbar -->
<div class="container sticky top-0 z-sticky">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full flex-0">
            <!-- Navbar -->
            <nav id="navbar"
                class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 rounded-xl transition-all duration-300 ease-in-out  lg:flex-nowrap lg:justify-start">
                <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
                    <img class="inline-flex items-center justify-center text-sm text-white transition-all duration-200 ease-in-out h-9 w-14 rounded-xl object-cover"
                        src="{{asset('assets/images/logo.jpg')}}" alt="logo">
                    <button navbar-trigger
                        class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden"
                        type="button" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span
                            class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
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
                        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                            <li>
                                <a class="flex items-center text-lg text-red-900 px-4 py-2 mr-2 font-bold transition-all ease-in-out lg-max:opacity-0 duration-250  lg:px-2"
                                    aria-current="page" href="../pages/dashboard.html">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center text-lg text-red-900 px-4 py-2 mr-2 font-bold transition-all ease-in-out lg-max:opacity-0 duration-250   lg:px-2"
                                    aria-current="page" href="../pages/dashboard.html">
                                   Menu
                                </a>
                            </li>
                        </ul>
                        <li class="flex items-center">
                            <a class="leading-pro bg-red-500 text-white text-xs tracking-tight-rem bg-150 bg-x-25 rounded-3.5xl hover:border-red-500 hover:-translate-y-px hover:text-red-500  active:hover:-translate-y-px active:hover:text-red-500 active:opacity-85 active:shadow-xs active:bg-green-900 active:border-green-900 mr-2 mb-0 inline-block cursor-pointer border border-solid bg-transparent py-2 px-8 text-center align-middle font-bold uppercase shadow-none transition-all hover:bg-transparent hover:opacity-75 hover:shadow-none active:scale-100 active:text-white active:hover:bg-transparent active:hover:opacity-75 active:hover:shadow-none"
                                href="{{'login'}}">Sign In</a>
                        </li>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>
<script>
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

</script>
        <main class="transition-all duration-200 ease-in-out">
            <!-- Container Carousel -->
            <div class="bg-customWhite-50">
                <section class="relative min-h-screen flex items-center justify-center">
                    <div class="carousel-container bg-no-repeat relative w-full overflow-hidden">
                        <!-- Carousel Items -->
                        <div class="carousel w-full flex transition-transform duration-500 ease-in-out mb-2">
                            <img src="https://files.kfcku.com/uploads/media/kfcku-jagoan-puas-fanta-2000x650px.jpg"
                                class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                            <img src="https://files.kfcku.com/uploads/media/kfcku-jagoan-hemat-fanta-2024-2000x650px.jpg"
                                class="object-cover w-full h-[486px] flex-shrink-0 cursor-pointer">
                        </div>

                        <!-- Indicator Circles -->
                        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20 gap-2">
                            <span class="indicator p-1 bg-orange-300 rounded-full cursor-pointer"></span>
                            <span class="indicator p-1 bg-orange-300 rounded-full cursor-pointer"></span>
                        </div>
                    </div>
                </section>
            </div>

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
                        indicator.style.backgroundColor = index === currentIndex ? '#FF4500' : '#FFB74D'; // Warna oranye saat aktif, lebih terang ketika tidak aktif
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





            <!-- 
            <section>
                <h1>sdfsdf</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati placeat optio expedita debitis,
                    soluta
                    minima consectetur commodi fuga necessitatibus aut, fugiat voluptas incidunt odio aperiam eveniet
                    pariatur! Quos, deserunt iusto! Adipisci, itaque officiis. Tempore reprehenderit rerum amet modi hic
                    sapiente id explicabo facilis voluptas quasi neque officia repudiandae delectus, esse tenetur. Optio
                    quaerat amet atque minus qui eum, beatae accusamus adipisci molestias ab sed quae delectus eligendi
                    iste
                    rerum. Iusto, dolore nemo saepe ipsum aliquid aut inventore alias, optio repellat consequuntur
                    deleniti
                    nam sapiente eos voluptatibus numquam officia assumenda esse! Repudiandae, tempore error? Eos
                    laudantium
                    vero consectetur, ipsam praesentium magni.</p>
            </section> -->
        </main>
        <x-footer />
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