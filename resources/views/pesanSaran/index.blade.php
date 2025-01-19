@section('title', 'Pesan & Saran')
<x-app-layout>
    @include('menu.modalAdd')

    <div class="flex flex-wrap justify-center">
        <div class="w-full px-6 py-6 mx-auto">
            @include('layouts.flash')
            @include('layouts.deleteModal')

            <!-- Card Judul -->
            <div class="w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-customRed-50 shadow-2xl rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                        class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                    <div class="relative z-10 p-9">
                        <h1 class="text-4xl font-extrabold text-white">Pesan & Saran</h1>
                    </div>
                </div>
            </div>


            <!-- Data Hero -->
            <div class="flex flex-wrap px-2 py-6 mt-5 bg-white rounded-2xl">
                <div class="w-full px-3">
                    @if (!empty($pesanSaran) && !is_array($pesanSaran))
                    <div id="kandangTabContent" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-8">
                        @foreach ($pesanSaran as $index => $item)
                            <div class="card-kandang hidden" data-tab="tab-{{ ceil(($index + 1) / 6) }}">
                                <div class="flex flex-col items-center justify-between p-6 border-l-4 border-red-400 rounded-lg shadow-lg">
                                    <!-- Header -->
                                    <div class="w-full text-center mb-4">
                                        <h1 class="text-xl font-bold text-red-700 tracking-wide">{{ $item->nama }}</h1>
                                        <p class="text-sm text-gray-600">{{ $item->email }}</p>
                                        <p class="text-sm text-red-500 font-medium">{{ $item->subjek }}</p>
                                    </div>

                                    <!-- Body -->
                                    <p class="mt-2 text-gray-700 text-center italic">
                                        "{{ $item->pesan }}"
                                    </p>

                                    <!-- Footer -->
                                    <div class="flex justify-center mt-6 w-full">
                                        <button
                                            class="btn-delete bg-red-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-red-700 transition focus:outline-none focus:ring focus:ring-red-300">
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-600 text-center py-10">Tidak ada data yang tersedia.</p>
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
