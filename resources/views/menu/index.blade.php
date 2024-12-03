<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Menu</h1>
        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-sm">
                {{ session()->get('success') }}
            </div>
        @endif

        <a href="{{ route('menu.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Menu
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($menus as $menu)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">

                    {{-- Gambar menu --}}
                    <img src="{{ Storage::url($menu->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Menu" />
                    <div class="p-4">

                        {{-- Informasi menu --}}
                        <h2 class="text-lg font-bold">{{ $menu->nama }}</h2>
                        <p class="text-gray-600 mt-2">{!! Str::limit($menu->deskripsi, 100) !!}</p>

                        {{-- Harga menu --}}
                        <p class="text-gray-800 font-semibold mt-2">Harga: Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>

                        {{-- Tombol Aksi --}}
                        <div class="mt-4">
                            <a href="{{ route('menu.edit', $menu->id) }}" class="text-white bg-blue-500 px-4 py-1 rounded-lg hover:-translate-y-px hover:shadow-xs">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            {{-- Link untuk edit Menu --}}
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-4 py-1 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                    <i class="fa-solid fa-trash mr-1"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Menghilangkan alert setelah 1.5 detik
        setTimeout(function () {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 1500);
    </script>
</x-app-layout>
