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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Mochiy+Pop+P+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <!--Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-outfit antialiased dark:bg-black dark:text-white/50 ">
    {{-- Link ke WA --}}
    <a href=""
        class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-green-500 transition-transform duration-300 ease-in-out hover:scale-105">
        <i class="py-6 pointer-events-none fa-brands fa-whatsapp fa-2xl"></i>
    </a>
    {{-- Layout Utama --}}

    <main class="transition-all duration-200 ease-in-out bg-neutral-100">
        <!-- Main Visual Section -->

        @include('layouts.navbar')
        <div class="mt-10">
            {{ $slot }}
        </div>



        @include('layouts.footer')
    </main>

    <!-- Script untuk AOS -->
    <script src="{{ asset('build/assets/libs/aos/aos.js') }}"></script>
    <script>
        // Animation on Scroll (Plugin)
        AOS.init({
            // once: true // Animasi hanya berjalan sekali per elemen
        });
    </script>

    </div>
    <script src="{{ 'build/assets/js/plugins/perfect-scrollbar.min.js' }}"></script>

    <!-- Tambahkan file JS argon -->
    <script src="{{ asset('build/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" defer></script>
</body>

</html>
