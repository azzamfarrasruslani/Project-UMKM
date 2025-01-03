<x-guest-layout>
    @section('title', 'Menu')

    <!-- Section Menu -->
<section id="menu" class="menu-section py-8 px-6 min-h-screen bg-gray-100">
    <!-- Header Menu -->
    <div class="flex flex-row justify-between mb-8 mx-5 mt-20">
        <h2 class="text-start text-4xl font-extrabold font-notoSans text-red-600">Menu Kami</h2>
        <div class="ml-10 flex">
            <button id="swiper-button-prev" class="border border-solid border-red-500 py-2 px-4 rounded-lg hover:bg-red-500 hover:text-white transition duration-300">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button id="swiper-button-next" class="border border-solid border-red-500 py-2 px-4 rounded-lg ml-2 hover:bg-red-500 hover:text-white transition duration-300">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Menu Content -->
    @if (!empty($menu) && !is_array($menu))
        <div class="swiper-container">
            <div id="kandangTabContent" class="swiper-wrapper">
                @foreach ($menu as $index => $item)
                    <div class="swiper-slide bg-white shadow-lg rounded-xl mb-5 transition-transform transform hover:scale-105">
                        <a href="/delivery/detail/N/{{ $item->id_menu }}" class="block">
                            <div class="relative">
                                <img src="{{ Storage::url($item->gambar_menu) }}" alt="{{ $item->nama_menu }}"
                                    class="w-full h-64 object-cover rounded-t-xl">
                                <div class="absolute inset-0 bg-black opacity-20 hover:opacity-0 transition duration-300"></div>
                            </div>
                            <div class="text-center mt-2 p-4">
                                <h3 class="font-bold text-xl text-gray-800">{{ $item->nama_menu }}</h3>
                                <p class="text-gray-600">{{ $item->status_menu }}</p>
                                <p class="font-bold text-lg text-red-600">Rp. {{ number_format($item->harga_menu, 2, ',', '.') }}</p>
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
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
</x-guest-layout>
