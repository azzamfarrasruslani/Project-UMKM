<x-guest-layout>
    @section('title', 'Menu')

    <section class="flex flex-col mt-30 w-full tracking-tight max-md:max-w-full" aria-labelledby="delivery-menu-title">
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
                        <li class="text-lg capitalize leading-normal text-white before:text-gray-DEFAULT-400">
                            <a href="{{ route('home') }}"
                                class="text-white opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> Home </a>
                            @yield('title')
                        </li>
                    </ol>
                </nav>
                <h1 id="delivery-menu-title" class="mt-1 text-4xl font-bold leading-[60px] text-white md:text-6xl">
                    MENU KAMI
                </h1>
            </div>
        </div>

        <!-- Navigation Section -->
        <nav class="sticky top-20 flex flex-col text-center text-neutral-800 text-lg leading-5 mt-10 whitespace-nowrap max-md:mt-10 mb-5 border-b-2 border-solid border-neutral-300 bg-neutral-100 z-10">
            <div class="flex flex-wrap justify-center gap-5 px-5 mx-auto max-w-[950px]">
                @foreach ([['#paket-komplit', 'PAKET KOMPLIT'], ['#makanan', 'MAKANAN'], ['#minuman', 'MINUMAN']] as $menu)
                    <a href="{{ $menu[0] }}"
                        class="nav-link flex items-center mt-5 px-4 py-2 font-extrabold hover:opacity-100 focus:outline-none active:border-b-red-500">
                        {{ $menu[1] }}
                    </a>
                @endforeach
            </div>
        </nav>




        <!-- Recommended Menu Section -->
        <section id="paket-komplit" class="flex flex-col px-5 max-w-[1280px] mx-auto"
            aria-labelledby="recommended-menu">
            <h2 id="recommended-menu" class="text-3xl font-bold text-neutral-800 mb-5">Paket Komplit</h2>
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
        <section id="makanan" class="flex flex-col px-5 mt-10 max-w-[1280px] mx-auto"
            aria-labelledby="recommended-menu">
            <h2 id="recommended-menu" class="text-3xl font-bold text-neutral-800 mb-5">Makanan</h2>
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
        <section id="minuman" class="flex flex-col px-5 mt-10 max-w-[1280px] mx-auto mb-10"
            aria-labelledby="recommended-menu">
            <h2 id="recommended-menu" class="text-3xl font-bold text-neutral-800 mb-5">Minuman</h2>
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

    <script>
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        const offset = 135; // Sesuaikan jarak offset di sini
        const targetPosition = target.offsetTop - offset;

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth',
        });

        // Hapus kelas aktif dari semua link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('text-black', 'border-b-2', 'border-red-500');
            link.classList.add('text-opacity-50'); // Kembalikan opacity untuk semua link
        });

        // Tambahkan kelas aktif pada link yang dipilih
        this.classList.add('text-black', 'border-b-2', 'border-red-500');
        this.classList.remove('text-opacity-50'); // Hapus opacity untuk link aktif
    });
});

// Menambahkan active class pada link navigasi saat scroll
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    const offset = 150; // Tambahkan offset untuk mendeteksi active class
    const scrollPos = window.scrollY + offset;

    sections.forEach(section => {
        if (
            scrollPos >= section.offsetTop &&
            scrollPos < section.offsetTop + section.offsetHeight
        ) {
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('text-black', 'border-b-2', 'border-red-500');
                link.classList.add('text-opacity-50'); // Kembalikan opacity untuk semua link
            });
            const activeLink = document.querySelector(
                `nav a[href="#${section.id}"]`
            );
            if (activeLink) {
                activeLink.classList.add('text-black', 'border-b-2', 'border-red-500');
                activeLink.classList.remove('text-opacity-50'); // Hapus opacity untuk link aktif
            }
        }
    });
});

    </script>

</x-guest-layout>
