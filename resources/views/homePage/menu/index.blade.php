<x-guest-layout>
    @section('title', 'Menu')

    <section class="flex flex-col  mt-30  w-full tracking-tight max-md:max-w-full " aria-labelledby="delivery-menu-title">
        {{-- <nav class="sm:block px-10">
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <!-- Icon Home yang mengarah ke dashboard.index -->
                <!-- Link ke Data Kandang jika berada di halaman detail kandang -->
                <li class="text-xl  capitalize leading-normal text-slate-700 before:text-gray-DEFAULT-400">
                    <a href="{{ route('home') }}"
                        class="text-slate-700 opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> Home </a>
                    @yield('title')
                </li>
            </ol>

        </nav> --}}

        <!-- Header Section -->
        <div class="relative bg-black text-white">
            <!-- Background Pattern -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="Background Pattern"
                    class="w-full h-full object-cover opacity-30" />
            </div>
            <!-- Content -->
            <div class="relative flex flex-col px-10 py-12 max-w-screen-xl mx-auto max-md:px-5 z-10">
                <nav class="mb-2">
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <!-- Icon Home yang mengarah ke dashboard.index -->
                        <!-- Link ke Data Kandang jika berada di halaman detail kandang -->
                        <li class="text-lg  capitalize leading-normal text-white before:text-gray-DEFAULT-400">
                            <a href="{{ route('home') }}"
                                class="text-white opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> Home </a>
                            @yield('title')
                        </li>
                    </ol>

                </nav>
                {{-- <p class="text-xl font-light leading-5">Ayam Geprek Keysia</p> --}}
                <h1 id="delivery-menu-title" class="mt-1 text-6xl font-bold leading-[60px] text-white max-md:text-4xl">
                    MENU KAMI
                </h1>
            </div>
        </div>


        <!-- Navigation Section -->
        <nav class="flex flex-coltext-center text-neutral-800 text-xs leading-5 mt-10 whitespace-nowrap max-md:mt-10">
            <div class="flex flex-wrap justify-center gap-5 px-5 mx-auto max-w-[950px]">
                @foreach ([['#recommended', '추천메뉴', 'https://cdn.builder.io/api/v1/image/assets/TEMP/ff3f83445d266905934e371c45e917394285a4330cdd2aa70cd4f63e8bc899d4'], ['#chicken', '치킨&세트', 'https://cdn.builder.io/api/v1/image/assets/TEMP/3da48486f65dd7ac10976b81fcf2feb155cf6917f863bb84e341767ae29295cb'], ['#burger', '버거&세트', 'https://cdn.builder.io/api/v1/image/assets/TEMP/330496e3983dbb13c81d0dfc889b5a5d0b2fbd2ce585bc2a73af9bd86d32464f'], ['#snacks', '스낵&사이드', 'https://cdn.builder.io/api/v1/image/assets/TEMP/7d279a76c2749a8e13a0583dec4e776316b90fa41711d276db35d1789918889e'], ['#drinks', '음료', 'https://cdn.builder.io/api/v1/image/assets/TEMP/5b876dcc9eb515b17d9cfe761b01b34b55b59079d42857fbdd9dd6ad4bfa8d23']] as $menu)
                    <a href="{{ $menu[0] }}"
                        class="flex flex-col items-center p-4 text-red-700 hover:text-red-800 focus:outline-none focus:ring-2 focus:ring-red-600">
                        <img loading="lazy" src="{{ $menu[2] }}" class="object-contain aspect-square w-[81px]"
                            alt="{{ $menu[1] }}" />
                        <div class="mt-1.5">{{ $menu[1] }}</div>
                    </a>
                @endforeach
            </div>
        </nav>

        <!-- Recommended Menu Section -->
        <section id="recommended" class="flex flex-col px-5 mt-15 max-w-[1280px] mx-auto"
            aria-labelledby="recommended-menu">
            <h2 id="recommended-menu" class="text-2xl font-bold text-neutral-800 mb-5">추천 메뉴</h2>
            <div class="flex flex-wrap justify-between gap-5">
                @foreach ([['https://cdn.builder.io/api/v1/image/assets/TEMP/73904e44428fbafbb1782c2fad1ca113e058337ed55bf5389cdde1171212a065', '켄치밥징거타워팩', 'Zinger Tower Pack dengan Kentang dan Nasi', '₩9,000'], ['https://cdn.builder.io/api/v1/image/assets/TEMP/d681376f6022daf1271aec545f4b2f5beee9ff7358b85899048dd3d00b23edc4', '갓양념켄치밥징거팩', 'Zinger Pack dengan Saus Spesial', '₩8,500'], ['https://cdn.builder.io/api/v1/image/assets/TEMP/b49b3c0a0b21facbba517b7c80b7648a879d4ec5bd691114cd2a25c9d96a0ea5', '데리야끼켄치밥징거팩', 'Zinger Pack dengan Teriyaki', '₩8,000'], ['https://cdn.builder.io/api/v1/image/assets/TEMP/9f8ebd306aeb6f258f4b37ca7244408321f9d24ade6ab78c6447d1a7a12c3beb', '꿀조합파티팩', 'Party Pack dengan Kombinasi Madu', '₩12,000']] as $menu)
                    <article class="flex flex-col w-full sm:w-[23%] border rounded-lg shadow-md overflow-hidden">
                        <img loading="lazy" src="{{ $menu[0] }}" class="object-contain w-full aspect-[1.51]"
                            alt="{{ $menu[1] }}" />
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-neutral-800">{{ $menu[1] }}</h3>
                            <p class="text-sm text-neutral-600 mt-2">{{ $menu[2] }}</p>
                            <p class="text-lg font-semibold text-red-700 mt-2">{{ $menu[3] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
        <section id="chicken" class="flex flex-col px-5 mt-10 max-w-[1280px] mx-auto"
            aria-labelledby="recommended-menu">
            <h2 id="recommended-menu" class="text-2xl font-bold text-neutral-800 mb-5">추천 메뉴</h2>
            <div class="flex flex-wrap justify-between gap-5">
                @foreach ([['https://cdn.builder.io/api/v1/image/assets/TEMP/73904e44428fbafbb1782c2fad1ca113e058337ed55bf5389cdde1171212a065', '켄치밥징거타워팩', 'Zinger Tower Pack dengan Kentang dan Nasi', '₩9,000'], ['https://cdn.builder.io/api/v1/image/assets/TEMP/d681376f6022daf1271aec545f4b2f5beee9ff7358b85899048dd3d00b23edc4', '갓양념켄치밥징거팩', 'Zinger Pack dengan Saus Spesial', '₩8,500'], ['https://cdn.builder.io/api/v1/image/assets/TEMP/b49b3c0a0b21facbba517b7c80b7648a879d4ec5bd691114cd2a25c9d96a0ea5', '데리야끼켄치밥징거팩', 'Zinger Pack dengan Teriyaki', '₩8,000'], ['https://cdn.builder.io/api/v1/image/assets/TEMP/9f8ebd306aeb6f258f4b37ca7244408321f9d24ade6ab78c6447d1a7a12c3beb', '꿀조합파티팩', 'Party Pack dengan Kombinasi Madu', '₩12,000']] as $menu)
                    <article class="flex flex-col w-full sm:w-[23%] border rounded-lg shadow-md overflow-hidden">
                        <img loading="lazy" src="{{ $menu[0] }}" class="object-contain w-full aspect-[1.51]"
                            alt="{{ $menu[1] }}" />
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-neutral-800">{{ $menu[1] }}</h3>
                            <p class="text-sm text-neutral-600 mt-2">{{ $menu[2] }}</p>
                            <p class="text-lg font-semibold text-red-700 mt-2">{{ $menu[3] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </section>

    <!-- Smooth Scroll Script -->
    <script>
        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    </script>
</x-guest-layout>
