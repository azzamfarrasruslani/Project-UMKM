@section('title', 'Menu')
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
                        <div class="flex justify-between items-center">
                            <h1 class="text-4xl font-extrabold text-white">Daftar Menu</h1>
                            <a href="javascript:;" onclick="openAddMenu()"
                                class="bg-white text-red-600 py-2 px-4 rounded-lg shadow hover:shadow-md transition transform hover:scale-105">
                                Tambah Menu
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Buttons -->
            <div class="flex justify-center my-6 space-x-4">
                <button data-category="all" class="filter-btn bg-gray-600 text-white py-2 px-4 rounded-lg"
                    onclick="filterMenu('all')">Semua</button>
                <button data-category="Paket Komplit" class="filter-btn bg-gray-200 text-gray-700 py-2 px-4 rounded-lg"
                    onclick="filterMenu('Paket Komplit')">Paket Komplit</button>
                <button data-category="Makanan" class="filter-btn bg-gray-200 text-gray-700 py-2 px-4 rounded-lg"
                    onclick="filterMenu('Makanan')">Makanan</button>
                <button data-category="Minuman" class="filter-btn bg-gray-200 text-gray-700 py-2 px-4 rounded-lg"
                    onclick="filterMenu('Minuman')">Minuman</button>
            </div>

            <!-- Data Menu -->
            <div class="flex flex-wrap px-2 py-6 rounded-2xl">
                <div class="w-full px-3">
                    @if (!empty($menu) && !is_array($menu))
                        <div id="menuContainer"
                            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 bg-white px-5 py-10 rounded-2xl">
                            @foreach ($menu as $item)
                                <div class="menu-item card-kandang bg-white shadow-lg rounded-xl hover:shadow-2xl"
                                    data-category="{{ $item->kategori_menu }}">
                                    <img src="{{ Storage::url($item->gambar_menu) }}"
                                        class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Menu">
                                    <div class="p-4">
                                        <div class="flex justify-between mb-1">
                                            <p class="text-slate-700">{{ $item->nama_menu }}</p>
                                            @if ($item->status_menu == 'aktif')
                                                <div
                                                    class="flex items-center text-white bg-green-500 max-h-8 px-2 rounded-lg">
                                                    {{ $item->status_menu }}
                                                </div>
                                            @else
                                                <div
                                                    class="flex items-center text-white bg-red-500 max-h-8 px-2 rounded-lg">
                                                    {{ $item->status_menu }}
                                                </div>
                                            @endif
                                        </div>

                                        <p class="">{{ $item->kategori_menu }}</p>
                                        <p class="text-slate-700">Rp.
                                            {{ number_format($item->harga_menu, 2, ',', '.') }}</p>
                                        <div class="flex justify-between gap-2">
                                            <button
                                                onclick="openDetailMenu('{{ $item->nama_menu }}', '{{ $item->deskripsi_menu }}')"
                                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 border border-green-500 hover:bg-gray-100">
                                                <i class="fa-solid fa-info-circle fa-lg text-green-500"></i>
                                                Detail
                                            </button>

                                            <a href="{{ route('menu.edit', $item->id_menu) }}"
                                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 border border-blue-500 hover:bg-gray-100">
                                                <i class="fa-solid fa-edit fa-lg text-blue-500"></i>
                                                Edit
                                            </a>
                                            <form id="deleteForm" action="{{ route('menu.destroy', $item->id_menu) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:;" type="button" data-id="{{ $item->id_menu }}"
                                                    data-url="{{ route('menu.destroy', $item->id_menu) }}"
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
                        <p class="text-gray-600">Tidak ada data yang tersedia.</p>
                    @endif
                </div>
            </div>
           @include('menu.modalDetail')
        </div>
    </div>

    <script>
        function filterMenu(category) {
            const menuItems = document.querySelectorAll('.menu-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // Filter menu items
            menuItems.forEach(item => {
                const itemCategory = item.dataset.category;

                if (category === 'all' || itemCategory === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });

            // Update button styles
            buttons.forEach(button => {
                button.classList.remove('bg-gray-600', 'text-white');
                button.classList.add('bg-gray-200', 'text-gray-700');
                if (button.dataset.category === category) {
                    button.classList.remove('bg-gray-200', 'text-gray-700');
                    button.classList.add('bg-gray-600', 'text-white');
                }
            });
        }

        // Tampilkan semua menu saat pertama kali halaman dimuat
        document.addEventListener('DOMContentLoaded', () => {
            filterMenu('all');
        });
    </script>
</x-app-layout>
