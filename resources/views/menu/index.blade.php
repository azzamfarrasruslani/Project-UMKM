@section('title', 'Menu')
<x-app-layout>
    @include('menu.modalAdd')
    <!-- Layout utama -->
    <div class="flex flex-wrap justify-center">
        <div class="w-full px-6 py-6 mx-auto">
            {{-- @include('layouts.flash') --}}
            <!-- Card Judul -->
            <div class="w-full max-w-full px-3 xl:mb-0 ">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-red-500 shadow-2xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    {{-- Gambar Pattern --}}
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                        class="absolute inset-0 w-full h-full object-cover rounded-2xl z-0 opacity-50">
                    <div class="relative z-10 flex-auto p-9">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans font-extrabold text-4xl leading-normal uppercase dark:text-white dark:opacity-60 text-white">
                                        Daftar Menu
                                    </p>

                                </div>

                            </div>
                            <div class="w-full max-w-full px-3 text-right">
                                <a href="javascript:;" onclick="openAddMenu()"
                                    class="bg-white text-customRed-50 py-2 px-4 rounded-lg  focus:outline-none hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Tambah Menu
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap  px-2 py-6 rounded-2xl">
                <!-- Bagian Data Kandang -->
                <div class="w-full  px-3">
                    <!-- Container untuk card kandang -->
                    <div id="kandangTabContent" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        @if (!empty($menu) && !is_array($menu))
                            @foreach ($menu as $index => $item)
                            <div class="card-kandang hidden" data-tab="tab-<?= ceil(($index + 1) / 6) ?>">
                                <div
                                    class="relative flex flex-col bg-white w-full px-4 py-4 shadow-lg rounded-xl transition-all duration-300 hover:shadow-2xl">
                                    <!-- Image Section -->
                                    <img src="{{ Storage::url($item->gambar_menu) }}"
                                        class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Menu">

                                    <!-- Content Section -->
                                    <div class="p-4">
                                        <!-- Menu Title -->
                                        <h3 class="text-lg font-semibold text-green-900 dark:text-white mb-2">
                                            {{ $item->nama_menu }}
                                        </h3>

                                        <!-- Price and Status -->
                                        <div class="flex justify-between items-center text-sm mb-4">
                                            <p class="text-gray-700 font-medium">Rp. {{ number_format($item->harga_menu, 2, ',', '.') }}</p>
                                            <span
                                                class="px-3 py-1 rounded-lg text-xs font-bold <?= $item['status'] == 'tidak aktif' ? 'bg-red-500' : 'bg-green-500' ?> text-white">
                                                {{ $item->status_menu == 1 ? 'Aktif' : 'Tidak Aktif' }}
                                            </span>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="flex justify-between gap-2">
                                            <a class="bg-yellow-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-yellow-600 transition"
                                                href="">
                                                Lihat Detail
                                            </a>
                                            <a class="bg-blue-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-blue-600 transition"
                                                href="">
                                                Edit
                                            </a>
                                            <form action="{{ route('menu.destroy', $item->id_menu) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-red-600 transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        @else
                            <p>No data available in table</p>
                        @endif

                    </div>
                    <!-- Pagination -->
                    <div id="paginationContainer" class="flex justify-center mt-4 bg-red-500"></div>
                </div>
                <!-- Card Menu -->
                <ul class="flex justify-start ml-5 " id="kandangTabs" role="tablist">
                    <!-- Tab buttons akan ditambahkan secara dinamis oleh JS -->
                </ul>
            </div>



        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-kandang');
            const kandangTabs = document.getElementById('kandangTabs');
            const itemsPerPage = 6;
            const totalTabs = Math.ceil(cards.length / itemsPerPage);

            // Membuat tab navigasi
            for (let i = 1; i <= totalTabs; i++) {
                const tabButton = document.createElement('li');
                tabButton.classList.add('mr-1');
                tabButton.innerHTML = `
                <button
                    class="inline-block py-3 px-4 text-xs font-medium text-center text-gray-700 bg-gray-100 rounded-lg border-b-2 border-transparent dark:bg-neutral-900 dark:text-white"
                    id="tab-${i}-button"
                    role="tab"
                    data-tab-target="tab-${i}">
                    ${i}
                </button>
            `;
                kandangTabs.appendChild(tabButton);
            }

            // Fungsi untuk menampilkan card berdasarkan tab yang aktif
            function showTab(tab) {
                // Sembunyikan semua card
                cards.forEach(card => card.classList.add('hidden'));

                // Tampilkan card yang sesuai dengan tab yang dipilih
                const visibleCards = document.querySelectorAll(`[data-tab="tab-${tab}"]`);
                visibleCards.forEach(card => card.classList.remove('hidden'));

                // Atur ulang gaya pada tab yang aktif dan yang tidak aktif
                const tabButtons = kandangTabs.querySelectorAll('button');
                tabButtons.forEach(button => {
                    button.classList.remove('bg-red-500', 'font-bold', 'text-white', 'bg-white');
                    button.classList.add('text-gray-700',
                        'bg-gray-100'
                    ); // Kembalikan ke warna default dan bg-gray-100 untuk tab yang tidak aktif
                });

                // Tambahkan efek pada tab yang aktif
                const activeButton = document.getElementById(`tab-${tab}-button`);
                activeButton.classList.add('bg-red-500', 'font-bold', 'text-white');
                activeButton.classList.remove('text-gray-700',
                    'bg-gray-100'); // Hilangkan warna default dan bg-gray-100 pada tab yang aktif
            }

            // Set tab pertama sebagai tab default yang aktif
            showTab(1);

            // Tambahkan event listener untuk setiap tab
            kandangTabs.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function() {
                    const tab = this.getAttribute('data-tab-target').split('-')[1];
                    showTab(tab);
                });
            });
        });
    </script>


</x-app-layout>
