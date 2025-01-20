<x-guest-layout>
    @section('title', 'Outlets')

    <section class="flex flex-col mt-30 w-full tracking-tight max-md:max-w-full" aria-labelledby="delivery-menu-title">
        <!-- Header Section -->
        <div class="relative  bg-gradient-to-r from-red-500 to-red-900 text-white">
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
                    OUTLETS
                </h1>
            </div>
        </div>
    </section>

    <section class="mx-10 mt-10 mb-10">
        <div class="flex flex-col min-h-[945px]" role="region" aria-label="Store Locations">
            <div data-aos="zoom-in" class="flex flex-col items-center text-center pt-6 w-full">
                <h1 id="deals-heading"
                    class="pb-2 text-4xl font-extrabold leading-[1.2] text-black  font-bebas uppercase tracking-widest">
                    Kunjungi Outlets Kami
                </h1>
                <div class="w-20 h-1 bg-yellowCustom-50 mt-2 rounded"></div>
                <p class="mt-4 text-lg text-neutral-500 max-w-xl">
                    Jelajahi cabang Ayam Geprek Keysia di berbagai lokasi. Temukan cita rasa terbaik dengan suasana yang
                    nyaman!
                </p>
            </div>


            <div class="mt-6 w-full">
                <div data-aos="fade-up" class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" role="list">
                    <!-- Outlet Card 1 -->
                    @if (!empty($outlet) && !is_array($outlet))
                        @foreach ($outlet as $index => $item)
                            <div class="flex flex-col w-full" role="listitem">
                                <div class="flex flex-col w-full max-w-md bg-white rounded-lg shadow-lg border border-gray-300 transform transition-transform hover:scale-105 hover:shadow-xl">
                                    <div class="p-6">
                                        {!! $item->iframe_map !!}
                                    </div>
                                    <div class="p-6">
                                        <h2 class="text-lg font-bold text-neutral-800">{{ $item->nama_outlet }}</h2>
                                        @if ($item->gambar_pesan_online)
                                            <p class="text-sm text-green-600 font-semibold mt-1">Tersedia</p>
                                            <div class="flex gap-4 items-center mt-4">
                                                <a target="0" href="{{$item->link_pesan_online}}">
                                                <img loading="lazy" src="{{ Storage::url($item->gambar_pesan_online) }}"
                                                    class="object-contain h-12 rounded-sm" alt="GrabFood Logo"></a>
                                            </div>
                                        @endif

                                        <address class="mt-4 text-sm text-neutral-600">
                                            {{ $item->alamat_outlet }}
                                        </address>

                                        <div class="flex items-center gap-2 mt-4 text-sm text-neutral-600">
                                            <img loading="lazy"
                                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c637fb5f78e80254421989d79bdcf482413c481db8e820adcda68323030da347?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                                class="w-4 h-4" alt="Phone icon">
                                            <a href="tel:{{ $item->no_hp }}" class="hover:underline">
                                                {{ $item->no_hp }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                    @endif
                    {{--
                    @if (!empty($menu) && !is_array($menu))
                        @foreach ($menu as $index => $item)
                            @if ($item->kategori_menu == 'Minuman')
                                <article class="border rounded-lg shadow-md overflow-hidden">
                                    <img loading="lazy" src="{{ Storage::url($item->gambar_menu) }}"
                                        class="object-contain w-full aspect-[1.51]" alt="{{ $item->nama_menu }}" />
                                    <div class="p-4">
                                        <h3 class="text-lg font-bold text-neutral-800">{{ $item->nama_menu }}</h3>
                                        <p class="text-sm text-neutral-600 mt-2">{{ $item->deskripsi_menu }}</p>
                                        <p class="text-lg font-semibold text-red-700 mt-2">Rp.
                                            {{ number_format($item->harga_menu, 2, ',', '.') }}</p>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                        @for ($i = 0; $i < (4 - ($menu->where('kategori_menu', 'Paket Komplit')->count() % 4)) % 4; $i++)
                            <div class="border-none"></div>
                        @endfor
                    @else
                        <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                    @endif --}}
                    {{-- <!-- Outlet Card 1 -->
                    <div class="flex flex-col w-full" role="listitem">
                        <div class="flex flex-col w-full max-w-md bg-white rounded-lg shadow-md border border-gray-300">
                            <div class="p-6">
                                <h2 class="text-lg font-bold text-neutral-800">Ayam Geprek Keysia</h2>
                                <p class="text-sm text-green-600 font-semibold mt-1">Tersedia</p>

                                <div class="flex gap-4 items-center mt-4">
                                    <img loading="lazy" src="{{ asset('assets/images/GrabFoodLogo.png') }}"
                                        class="object-contain h-12 rounded-sm" alt="GrabFood Logo">
                                </div>

                                <address class="mt-4 text-sm text-neutral-600">
                                    JL.ADAM MALIK NO. 5 / 7 Medan Sumatera Utara
                                </address>

                                <div class="flex items-center gap-2 mt-4 text-sm text-neutral-600">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/c637fb5f78e80254421989d79bdcf482413c481db8e820adcda68323030da347?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                        class="w-4 h-4" alt="Phone icon">
                                    <a href="tel:+628117157358" class="hover:underline">+628117157358</a>
                                </div>

                                <div class="flex items-center gap-2 mt-2 text-sm text-neutral-600">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f139fa40bee3fbcb2d3440f34a057324acb772e3763be6f804f7be56a772c2e?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                        class="w-4 h-4" alt="Clock icon">
                                    <time>07:00 - 23:59</time>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Outlet Card 1 -->
                    <div class="flex flex-col w-full" role="listitem">
                        <div class="flex flex-col w-full max-w-md bg-white rounded-lg shadow-md border border-gray-300">
                            <div class="p-6">
                                <h2 class="text-lg font-bold text-neutral-800">Ayam Geprek Keysia</h2>
                                <p class="text-sm text-green-600 font-semibold mt-1">Tersedia</p>

                                <div class="flex gap-4 items-center mt-4">
                                    <img loading="lazy" src="{{ asset('assets/images/GrabFoodLogo.png') }}"
                                        class="object-contain h-12 rounded-sm" alt="GrabFood Logo">
                                </div>

                                <address class="mt-4 text-sm text-neutral-600">
                                    JL.ADAM MALIK NO. 5 / 7 Medan Sumatera Utara
                                </address>

                                <div class="flex items-center gap-2 mt-4 text-sm text-neutral-600">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/c637fb5f78e80254421989d79bdcf482413c481db8e820adcda68323030da347?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                        class="w-4 h-4" alt="Phone icon">
                                    <a href="tel:+628117157358" class="hover:underline">+628117157358</a>
                                </div>

                                <div class="flex items-center gap-2 mt-2 text-sm text-neutral-600">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f139fa40bee3fbcb2d3440f34a057324acb772e3763be6f804f7be56a772c2e?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                        class="w-4 h-4" alt="Clock icon">
                                    <time>07:00 - 23:59</time>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </div>
            </div>
        </div>
    </section>







</x-guest-layout>
