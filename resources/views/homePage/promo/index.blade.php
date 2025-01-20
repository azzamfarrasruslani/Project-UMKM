@section('title', 'Promo')
<x-guest-layout>
    @include('homePage.promo.modalDetail')
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
                                class="text-white opacity-75 hover:opacity-100 after:content-['/'] after:p-2">Home </a>
                            @yield('title')
                        </li>
                    </ol>
                </nav>
                <h1 id="delivery-menu-title" class="mt-1 text-4xl font-bold leading-[60px] text-white md:text-6xl">
                    PROMO
                </h1>
            </div>
        </div>
        <section class="mx-10 mt-10 mb-10">
            <div class="flex flex-wrap h-full" role="main" aria-labelledby="deals-heading">
                <div class="flex flex-col grow shrink text-black min-w-[240px] w-[248px]">
                    <div class="flex flex-col pt-3.5 w-full">
                        <h1 id="deals-heading"
                            class="pb-px w-full text-black font-bebas uppercase text-4xl leading-[77.5px]">
                            Promo yang Tersedia
                        </h1>
                        <p class="mt-2 text-lg text-gray-600">
                            Temukan promo menarik yang kami tawarkan untuk Anda. Jangan lewatkan kesempatan untuk
                            mendapatkan penawaran terbaik!
                        </p>
                    </div>
                </div>
                <div class="flex flex-col grow shrink min-w-[240px] w-[698px] max-md:max-w-full">
                    <div class="flex flex-col mt-6 w-full max-md:max-w-full">
                        <div class="max-md:-mr-1.5 max-md:max-w-full">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                @if (!empty($promo) && !is_array($promo))
                                    @foreach ($promo->sortByDesc('updated_at') as $index => $item)
                                        @if ($item->status_promo === 'aktif')
                                            @if (\Carbon\Carbon::parse($item->tanggal_akhir)->isFuture())
                                                <a href="javascript:;"
                                                    onclick="openDetailPromo(`{{ $item->judul }}`, `{{ strip_tags($item->deskripsi_promo) }}`, `{{ strip_tags($item->syarat_ketentuan) }}`, `{{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d F Y') }}`, `{{ \Carbon\Carbon::parse($item->tanggal_akhir)->format('d F Y') }}`, `{{ Storage::url($item->gambar_promo) }}`)"
                                                    class="flex flex-col w-full rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105">
                                                    <img src="{{ Storage::url($item->gambar_promo) }}"
                                                        alt="Pizza deal promotion"
                                                        class="object-contain grow w-full aspect-[2.03] min-h-[183px] max-md:mt-5 rounded-3xl" />
                                                </a>
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                    <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-guest-layout>
