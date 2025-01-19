@section('title', 'Promo')
<x-app-layout>
    @include('karir.modalAdd')
    <!-- Layout utama -->
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
                        <div class="flex justify-between items-center">
                            <h1 class="text-4xl font-extrabold  text-white">Daftar Karir</h1>
                            <a href="javascript:;" onclick="openAddKarir()"
                                class="bg-white text-red-600 py-2 px-4 rounded-lg shadow hover:shadow-md transition transform hover:scale-105">
                                Tambah Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Hero -->
            <div class="flex flex-wrap px-2 py-6 mt-5 bg-white rounded-2xl">
                <div class="w-full px-3">
                    @if (!empty($karir) && !is_array($karir))
                        <div id="kandangTabContent"
                            class="grid grid-cols-1   gap-6  px-5 py-10 ">

                            @foreach ($karir as $index => $item)
                            <div class="card-kandang hidden" data-tab="tab-{{ ceil(($index + 1) / 6) }}">
                                <div class="p-4 bg-white shadow-lg rounded-2xl">
                                    {{-- Judul dan Lokasi --}}
                                    <h2 class="text-xl font-bold text-gray-800">{{ $item->nama_posisi }}</h2>
                                    <p class="text-gray-500 text-sm mt-1"><i class="fa-solid fa-location-dot"></i>
                                        {{ $item->lokasi }}</p>

                                    {{-- Informasi Lowongan --}}
                                    <div class="mt-3">
                                        <p class="text-gray-600 text-sm"><strong>Tipe Kerja:</strong>
                                            {{ $item->tipe_kerja }}</p>

                                        {{-- Format Gaji dengan pengecekan apakah ada atau tidak --}}
                                        <p class="text-gray-600 text-sm"><strong>Gaji:</strong>
                                            @if ($item->gaji)
                                                Rp {{ number_format(floatval($item->gaji), 0, ',', '.') }}
                                            @else
                                                Gaji belum ditentukan
                                            @endif
                                        </p>

                                        <p class="text-gray-600 text-sm"><strong>Benefit:</strong> {{ $item->benefit }}
                                        </p>

                                        {{-- Status --}}
                                        <p class="text-gray-600 text-sm"><strong>Status:</strong>
                                            {!! $item->status
                                                ? '<span class="text-green-600 font-semibold">Dibuka ✅</span>'
                                                : '<span class="text-red-600 font-semibold">Ditutup ❌</span>' !!}
                                        </p>
                                    </div>

                                    {{-- Deskripsi Tugas --}}
                                    <div class="mt-4">
                                        <h3 class="font-semibold text-gray-800">Deskripsi Tugas:</h3>
                                        <p class="text-gray-600 text-sm mt-2">{!! Str::limit($item->deskripsi_tugas, 120) !!}</p>
                                    </div>

                                    {{-- Kualifikasi --}}
                                    <div class="mt-4">
                                        <h3 class="font-semibold text-gray-800">Kualifikasi:</h3>
                                        <p class="text-gray-600 text-sm mt-2">{!! Str::limit($item->kualifikasi, 120) !!}</p>
                                    </div>

                                    {{-- Tombol Aksi --}}
                                    <div class="flex justify-between items-center mt-6">
                                        <a href="{{ route('karir.edit', $item->id_karir) }}"
                                            class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600 shadow">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </a>
                                        <form id="deleteForm" action="{{ route('karir.destroy', $item->id_karir) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="javascript:;" type="button" data-id="{{ $item->id_karir }}"
                                                data-url="{{ route('karir.destroy', $item->id_karir) }}"
                                                class="delete-button flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 border border-red-500 hover:bg-gray-100">
                                                <i class="fa-solid fa-trash fa-lg text-red-500"></i>
                                                Hapus
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    @else
                        <p class="text-center text-gray-600">Tidak ada data yang tersedia.</p>
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
