@section('title', 'Tentang Kami')
<x-app-layout>
    @include('tentangKami.modalAdd')

    <div class="flex flex-wrap justify-center">
        <div class="w-full px-6 py-6 mx-auto">

            <div class="w-full max-w-full px-3 xl:mb-0">
                <div class="relative flex flex-col min-w-0 break-words bg-red-500 shadow-2xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern" class="absolute inset-0 w-full h-full object-cover rounded-2xl z-0 opacity-50">
                    <div class="relative z-10 flex-auto p-9">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-extrabold text-4xl leading-normal uppercase dark:text-white dark:opacity-60 text-white">
                                        Daftar Tentang Kami
                                    </p>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 text-right">
                                <button onclick="openAddTentangKami()" class="bg-white text-red-700 py-2 px-4 rounded-lg focus:outline-none hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Tambah Tentang Kami
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="flex flex-wrap px-2 py-6 rounded-2xl">
                <div class="w-full px-3">
                    <div id="tentangKamiTabContent" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($tentangKamis as $tentangKami)
                            <div class="p-4 bg-white rounded-lg shadow">
                                <img src="{{ Storage::url($tentangKami->gambar_tK1) }}" class="h-48 w-full object-cover rounded-md" alt="Gambar Utama">
                                <div class="grid grid-cols-2 gap-2 mt-4">
                                    @if ($tentangKami->gambar_tK2)
                                        <img src="{{ Storage::url($tentangKami->gambar_tK2) }}" class="h-24 w-full object-cover rounded-md" alt="Gambar 2">
                                    @endif
                                    @if ($tentangKami->gambar_tK3)
                                        <img src="{{ Storage::url($tentangKami->gambar_tK3) }}" class="h-24 w-full object-cover rounded-md" alt="Gambar 3">
                                    @endif
                                </div>
                                <h3 class="text-lg font-semibold mt-2">{{ $tentangKami->judul_tK }}</h3>
                                <p class="text-gray-600 text-sm">{{ Str::limit($tentangKami->sejarah_singkat, 100) }}</p>

                                <div class="mt-4">
                                    <h4 class="font-semibold text-sm text-gray-800">Visi:</h4>
                                    <p class="text-gray-600 text-sm">{{ Str::limit($tentangKami->visi, 100) }}</p>
                                </div>

                                <div class="mt-2">
                                    <h4 class="font-semibold text-sm text-gray-800">Misi:</h4>
                                    <p class="text-gray-600 text-sm">{{ Str::limit($tentangKami->misi, 100) }}</p>
                                </div>

                                <div class="flex justify-between mt-4">
                                    <a href="{{ route('tentangKami.edit', $tentangKami->id_tK) }}" class="bg-blue-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-blue-600 transition">
                                        Edit
                                    </a>
                                    <form action="{{ route('tentangKami.destroy', $tentangKami->id_tK) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-red-600 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
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
