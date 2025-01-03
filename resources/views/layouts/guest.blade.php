<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <main class="transition-all duration-200 ease-in-out">
        <!-- Main Visual Section -->

            @include('layouts.navbar')
            <div class="mt-10">
                {{ $slot }}
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
    <script src="{{ 'build/assets/js/plugins/perfect-scrollbar.min.js' }}"></script>

    <!-- Tambahkan file JS argon -->
    <script src="{{ asset('build/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" defer></script>
</body>

</html>
