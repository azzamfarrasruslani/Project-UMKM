<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Pesan dan Saran</h1>
        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-sm">
                {{ session()->get('success') }}
            </div>
        @endif

        <a href="{{ route('pesansaran.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Pesan Saran
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($pesansarans as $pesansaran)
                <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
                    <h2 class="text-lg font-bold">{{ $pesansaran->nama }}</h2>
                    <p class="text-gray-600 mt-2">{{ $pesansaran->subjek }}</p>
                    <p class="text-gray-600 mt-2 text-sm">{{ Str::limit($pesansaran->pesan, 100) }}</p>

                    <div class="mt-4">
                        <a href="{{ route('pesansaran.edit', $pesansaran->id) }}" class="text-white bg-blue-500 px-4 py-1 rounded-lg hover:shadow-xs">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        <form action="{{ route('pesansaran.destroy', $pesansaran->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </button>
                        </form>
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
