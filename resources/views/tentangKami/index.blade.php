@section('title', 'Tentang Kami')
<x-app-layout>
    @include('tentangKami.modalAdd') <!-- Include the modal here -->
    <div class="w-full mx-auto">
        <div class="w-full px-4 py-6">
            <div class="flex-none w-full max-w-full">
                @include('layouts.flash')
                @include('layouts.deleteModal')
                <!-- Card Judul -->
                <div class="w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-red-500 shadow-2xl rounded-2xl overflow-hidden">
                        <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                            class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                        <div class="relative z-10 p-9">
                            <div class="flex justify-between items-center">
                                <h1 class="text-4xl font-extrabold  text-white">Data Tentang Kami</h1>
                                <a href="javascript:;" onclick="openAddHero()"
                                    class="bg-white text-red-600 py-2 px-4 rounded-lg shadow hover:shadow-md transition transform hover:scale-105">
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Hero -->
                <div class="flex flex-wrap px-2 py-6 rounded-2xl">
                    <div class="w-full px-3">
                        @if (!empty($tentangKami) && !is_array($tentangKami))
                            <div id="kandangTabContent"
                                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 bg-white px-5 py-10 rounded-2xl">

                                @foreach ($tentangKami as $index => $item)
                                    <div class="card-kandang hidden" data-tab="tab-{{ ceil(($index + 1) / 6) }}">
                                        <div
                                            class="relative flex flex-col bg-white shadow-lg rounded-xl  hover:shadow-2xl">
                                            <img src="{{ Storage::url($item->gambar_tK) }}"
                                                class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Menu">
                                            <div class="p-4">
                                                <div class="flex mb-2">
                                                    <p class="text-slate-700 text-sm">{!! Str::limit($item->deskripsi_tK, 100) !!}</p>
                                                </div>
                                                <div class="flex justify-between gap-2">
                                                    <a href="{{ route('tentangKami.edit', $item->id_tK) }}"
                                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 border border-blue-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                                                        <i class="fa-solid fa-edit fa-lg text-blue-500"></i>
                                                        Edit
                                                    </a>
                                                    <form id="deleteForm"
                                                        action="{{ route('tentangKami.destroy', $item->id_tK) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="javascript:;" type="button"
                                                            data-id="{{ $item->id_hero }}"
                                                            data-url="{{ route('tentangKami.destroy', $item->id_tK) }}"
                                                            class="delete-button flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 border border-red-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                                                            <i class="fa-solid fa-trash fa-lg text-red-500"></i>
                                                            Hapus
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        @else
                            <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                        @endif
                        <!-- Pagination -->
                        <div class="flex justify-center  items-center mt-6  space-x-2">
                            <button
                                class="pagination-btn bg-gray-200 text-gray-700 py-2 px-3 rounded-md hover:bg-gray-300 transition shadow-md"
                                data-tab="first" aria-label="First Page">«</button>
                            <button
                                class="pagination-btn bg-gray-200 text-gray-700 py-2 px-3 rounded-md hover:bg-gray-300 transition shadow-md"
                                data-tab="prev" aria-label="Previous">‹</button>
                            <div id="pagination-numbers" class="flex space-x-1"></div>
                            <button
                                class="pagination-btn bg-gray-200 text-gray-700 py-2 px-3 rounded-md hover:bg-gray-300 transition shadow-md"
                                data-tab="next" aria-label="Next">›</button>
                            <button
                                class="pagination-btn bg-gray-200 text-gray-700 py-2 px-3 rounded-md hover:bg-gray-300 transition shadow-md"
                                data-tab="last" aria-label="Last Page">»</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-kandang');
            const kandangTabContent = document.getElementById('kandangTabContent');
            const paginationContainer = document.getElementById('pagination-numbers');
            const itemsPerPage = 8;
            const totalPages = Math.ceil(cards.length / itemsPerPage);
            let currentPage = 1;

            // Buat tombol pagination
            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.classList.add('pagination-btn', 'bg-gray-200', 'text-gray-700', 'py-2', 'px-3', 'rounded-md',
                    'hover:bg-gray-300', 'transition', 'shadow-md');
                btn.textContent = i;
                btn.dataset.page = i;
                paginationContainer.appendChild(btn);
            }

            const paginationBtns = document.querySelectorAll('.pagination-btn');

            function showPage(page) {
                currentPage = page;

                // Reset konten yang tampil
                cards.forEach(card => card.classList.add('hidden'));
                const startIdx = (page - 1) * itemsPerPage;
                const endIdx = startIdx + itemsPerPage;
                cards.forEach((card, idx) => {
                    if (idx >= startIdx && idx < endIdx) card.classList.remove('hidden');
                });

                // Atur state tombol aktif
                paginationBtns.forEach(btn => btn.classList.remove('bg-red-500', 'text-white'));
                const activeBtn = [...paginationContainer.children].find(btn => btn.dataset.page == page);
                if (activeBtn) activeBtn.classList.add('bg-red-500', 'text-white', 'px-3', 'py-2', 'rounded-md',
                    'shadow-md');
            }

            // Tambahkan event listener untuk navigasi
            document.querySelectorAll('.pagination-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const action = this.dataset.tab;

                    if (action === 'first') currentPage = 1;
                    else if (action === 'last') currentPage = totalPages;
                    else if (action === 'prev') currentPage = Math.max(1, currentPage - 1);
                    else if (action === 'next') currentPage = Math.min(totalPages, currentPage + 1);
                    else currentPage = parseInt(this.dataset.page);

                    showPage(currentPage);
                });
            });

            // Tampilkan halaman pertama saat load
            showPage(1);
        });
    </script>
</x-app-layout>

