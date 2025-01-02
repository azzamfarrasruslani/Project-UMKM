<x-app-layout>
    <div class="max-w-6xl mx-auto py-6">
        <h1 class="text-3xl font-extrabold text-center mb-6 text-gray-800">Daftar Lowongan Kerja</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-6 rounded-lg shadow-md text-center">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('job.create') }}" class="inline-block bg-blue-500 text-white px-5 py-2 rounded-lg shadow-md hover:bg-blue-600">
                Tambah Lowongan
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($jobs as $job)
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300">

                    {{-- Gambar --}}
                    @if($job->gambar)
                        <img src="{{ Storage::url($job->gambar) }}" class="w-full h-40 object-cover" alt="Gambar Lowongan">
                    @else
                        <img src="https://via.placeholder.com/400x200" class="w-full h-40 object-cover" alt="Gambar Placeholder">
                    @endif

                    <div class="p-4">
                        {{-- Judul dan Lokasi --}}
                        <h2 class="text-xl font-bold text-gray-800">{{ $job->nama_posisi }}</h2>
                        <p class="text-gray-500 text-sm mt-1"><i class="fa-solid fa-location-dot"></i> {{ $job->lokasi }}</p>

                        {{-- Informasi Lowongan --}}
                        <div class="mt-3">
                            <p class="text-gray-600 text-sm"><strong>Tipe Kerja:</strong> {{ $job->tipe_kerja }}</p>
                            <p class="text-gray-600 text-sm"><strong>Gaji:</strong> Rp {{ number_format($job->gaji, 0, ',', '.') }}</p>
                            <p class="text-gray-600 text-sm"><strong>Benefit:</strong> {{ $job->benefit }}</p>
                            <p class="text-gray-600 text-sm"><strong>Status:</strong>
                                {!! $job->status ? '<span class="text-green-600 font-semibold">Dibuka ✅</span>' : '<span class="text-red-600 font-semibold">Ditutup ❌</span>' !!}
                            </p>
                        </div>

                        {{-- Deskripsi dan Kualifikasi --}}
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-800">Deskripsi Tugas:</h3>
                            <p class="text-gray-600 text-sm mt-2">{!! Str::limit($job->deskripsi_tugas, 120) !!}</p>
                        </div>

                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-800">Kualifikasi:</h3>
                            <p class="text-gray-600 text-sm mt-2">{!! Str::limit($job->kualifikasi, 120) !!}</p>
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="flex justify-between items-center mt-6">
                            <a href="{{ route('job.edit', $job->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600 shadow">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <form action="{{ route('job.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus lowongan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm hover:bg-red-600 shadow">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 text-center col-span-3">Belum ada lowongan pekerjaan yang tersedia.</p>
            @endforelse
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
