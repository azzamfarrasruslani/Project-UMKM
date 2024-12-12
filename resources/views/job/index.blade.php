<x-app-layout>
    <div class="max-w-6xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Lowongan Kerja</h1>
        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-3 mb-4 rounded">
                {{ session()->get('success') }}
            </div>
        @endif

        <a href="{{ route('job.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Tambah Lowongan</a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($jobs as $job)
                <div class="bg-white shadow-md rounded-lg p-4">
                    {{-- Tampilkan gambar jika ada --}}
                    @if ($job->gambar)
                        <img src="{{ asset('storage/' . $job->gambar) }}" alt="{{ $job->nama_posisi }}" class="w-full h-40 object-cover rounded-md mb-4">
                    @else
                        <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md mb-4">
                            <span class="text-gray-500 text-sm">Tidak ada gambar</span>
                        </div>
                    @endif

                    <h2 class="text-lg font-bold">{{ $job->nama_posisi }}</h2>
                    <p class="text-gray-600">Lokasi: {{ $job->lokasi }}</p>
                    <p class="text-gray-600">Tipe Kerja: {{ $job->tipe_kerja }}</p>
                    <div class="mt-4">
                        <a href="{{ route('job.edit', $job->id) }}" class="bg-blue-500 text-white px-4 py-1 rounded">Edit</a>
                        <form action="{{ route('job.destroy', $job->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
