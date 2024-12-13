@section('title', 'Promo')
<x-app-layout>
    @include('promo.modalAdd')
    @include('promo.modalEdit')
    <!-- Data Table Section -->
    <div class="w-full mx-auto">
        <div class="w-full px-4 py-6">
            <div class="flex-none w-full max-w-full">
                <!-- Card Judul -->
                <div class="w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-red-500 shadow-2xl rounded-2xl overflow-hidden">
                        <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                            class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                        <div class="relative z-10 p-9">
                            <div class="flex justify-between items-center">
                                <h1 class="text-4xl font-extrabold uppercase text-white">Daftar Promo</h1>
                                <a href="javascript:;" onclick="openAddPromo()"
                                    class="bg-white text-red-600 py-2 px-4 rounded-lg shadow hover:shadow-md transition transform hover:scale-105">
                                    Tambah Promo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Kandang -->
                <div class="flex flex-wrap px-2 py-6 rounded-2xl">
                    <div class="w-full px-3">
                        <div id="kandangTabContent" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            @if (!empty($promo) && !is_array($promo))
                                @foreach ($promo as $index => $item)
                                    <div class="card-kandang hidden" data-tab="tab-{{ ceil(($index + 1) / 6) }}">
                                        <div
                                            class="relative flex flex-col bg-white shadow-lg rounded-xl transition transform hover:scale-105 hover:shadow-2xl">
                                            <img src="{{ Storage::url($item->gambar) }}"
                                                class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Menu">
                                            <div class="p-4">
                                                <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                                    {{ $item->judul }}
                                                </h3>
                                                <p class="text-gray-600 mb-4">
                                                    {{ date('d M Y', strtotime($item->tanggal_mulai)) }} -
                                                    {{ date('d M Y', strtotime($item->tanggal_akhir)) }}
                                                </p>
                                                <div class="flex justify-between gap-2">
                                                    <a class="bg-yellow-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-yellow-600 transition"
                                                        href="">Lihat Detail</a>
                                                    <a href="javascript:;"
                                                        onclick="openEditModal({{ $item->id_promo }})"
                                                        class="bg-blue-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-blue-600 transition">
                                                        Edit
                                                    </a>


                                                    <form action="{{ route('promo.destroy', $item->id_promo) }}"
                                                        method="POST" class="inline">
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
                                <p class="text-gray-600">Tidak ada data promo tersedia.</p>
                            @endif
                        </div>

                        <!-- Pagination -->
                        <div id="paginationContainer" class="flex justify-center mt-6 space-x-2"></div>
                    </div>
                    <ul class="flex justify-center mt-4" id="kandangTabs" role="tablist">
                        <!-- Tab buttons akan ditambahkan oleh JS -->
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-kandang');
            const kandangTabs = document.getElementById('kandangTabs');
            const itemsPerPage = 6;
            const totalTabs = Math.ceil(cards.length / itemsPerPage);

            for (let i = 1; i <= totalTabs; i++) {
                const tabButton = document.createElement('li');
                tabButton.classList.add('mr-1');
                tabButton.innerHTML = `
                    <button
                        class="py-2 px-4 text-sm font-medium bg-gray-100 text-gray-700 rounded-lg hover:bg-red-500 hover:text-white transition"
                        id="tab-${i}-button"
                        data-tab-target="tab-${i}">
                        ${i}
                    </button>
                `;
                kandangTabs.appendChild(tabButton);
            }

            function showTab(tab) {
                cards.forEach(card => card.classList.add('hidden'));
                const visibleCards = document.querySelectorAll(`[data-tab="tab-${tab}"]`);
                visibleCards.forEach(card => card.classList.remove('hidden'));

                const tabButtons = kandangTabs.querySelectorAll('button');
                tabButtons.forEach(button => button.classList.remove('bg-red-500', 'text-white'));
                const activeButton = document.getElementById(`tab-${tab}-button`);
                activeButton.classList.add('bg-red-500', 'text-white');
            }

            showTab(1);

            kandangTabs.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function() {
                    const tab = this.getAttribute('data-tab-target').split('-')[1];
                    showTab(tab);
                });
            });
        });
    </script>
</x-app-layout>
