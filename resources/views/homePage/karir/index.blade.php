<x-guest-layout>
    @section('title', 'Karir')

    <section class="flex flex-col mt-30 w-full tracking-tight max-md:max-w-full" aria-labelledby="delivery-menu-title">
        <!-- Header Section -->
        <div class="relative bg-gradient-to-r from-red-500 to-red-900 text-white">
            <!-- Background Pattern -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="Background Pattern"
                    class="w-full h-full object-cover opacity-40" />
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
                    KARIR
                </h1>
            </div>
        </div>



        <section class="flex flex-col self-center px-4 w-full max-w-[1336px] min-h-[689px] max-md:max-w-full mt-14"
            aria-label="Job listings">
            <div data-aos="zoom-in" class="flex flex-col items-center text-center pt-6 mb-5 w-full">
                <h1 id="deals-heading"
                    class="pb-2 text-4xl font-extrabold leading-[1.2] text-black  font-bebas uppercase tracking-widest">
                    Peluang Karir Tersedia
                </h1>
                <div class="w-20 h-1 bg-yellowCustom-50 mt-2 rounded"></div>
                <p class="mt-4 text-lg text-neutral-500 max-w-xl">
                    Jelajahi berbagai peluang karir yang tersedia dan bergabunglah dengan tim kami untuk masa depan yang
                    lebih baik.
                </p>
            </div>
            <div class="grid grid-cols-1 gap-10 w-full max-md:max-w-full md:grid-cols-2">

                @if (!empty($karir) && !is_array($karir))
                    @foreach ($karir as $index => $item)
                        <article data-aos="fade-up"
                            class="flex flex-col gap-6 justify-between items-start pt-6 pb-12 bg-white shadow-lg rounded-lg p-8 mb-6 hover:shadow-xl transition-shadow duration-300">
                            <div class="flex flex-col mt-1.5 text-black">
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-customRed-100 rounded">{{ $item->tipe_kerja }}</span>
                                </div>
                                <h3 class="mt-4 text-2xl font-bold text-gray-900">{{ $item->nama_posisi }}</h3>
                                <div class="mt-2 space-x-4 text-sm text-gray-500">
                                    <p><i class="fa-solid fa-location-dot mr-2"></i> Location: {{ $item->lokasi }}</p>

                                </div>
                                <p class="mt-2 text-gray-600"><i class="fa-solid fa-briefcase mr-2"></i> Tugas :{!! $item->deskripsi_tugas !!}</p>

                                @if ($item->gaji)
                                    <p class="mt-2 text-gray-600"><i class="fa-solid fa-money-bill-wave mr-2"></i> Gaji:
                                        Rp{{ number_format($item->gaji, 0, ',', '.') }}</p>
                                @endif
                                @if ($item->benefit)
                                    <p class="mt-2 text-gray-600"><i class="fa-solid fa-gift mr-2"></i> Benefit:
                                        {!! $item->benefit !!}</p>
                                @endif
                                <p class="mt-2 text-gray-600"><i class="fa-solid fa-info-circle mr-2"></i> Status:
                                    {{ ucfirst($item->status) }}</p>
                                <p><i class="fa-regular fa-clock mr-2"></i> Posted on:
                                    {{ $item->created_at->format('M d, Y') }}</p>
                            </div>

                        </article>
                    @endforeach
                @else
                    <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                @endif
            </div>
        </section>


        </div>

</x-guest-layout>
