<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Promo</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-sm">
                {{ session()->get('success') }}
            </div>
        @endif

        <a href="{{ route('promo.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Promo
        </a>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($promo as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    @if ($item->gambar)
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Promo" />
                    @endif
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mt-2">{{ Str::limit($item->deskripsi, 100) }}</p>
                        <div class="mt-4">
                            <a href="{{ route('promo.edit', $item->id_promo) }}" class="text-white bg-blue-500 px-4 py-1 rounded-lg">
                                Edit
                            </a>
                            <form action="{{ route('promo.destroy', $item->id_promo) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-lg">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        setTimeout(function () {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 1500);
    </script>
</x-app-layout>
