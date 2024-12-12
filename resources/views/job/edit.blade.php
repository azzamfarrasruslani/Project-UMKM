<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">{{ isset($job) ? 'Edit Lowongan' : 'Tambah Lowongan' }}</h1>
        <form action="{{ isset($job) ? route('job.update', $job->id) : route('job.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($job)) @method('PUT') @endif

            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Posisi</label>
                <input type="text" name="nama_posisi" value="{{ $job->nama_posisi ?? '' }}" required class="w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Lokasi</label>
                <input type="text" name="lokasi" value="{{ $job->lokasi ?? '' }}" required class="w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Tipe Kerja</label>
                <select name="tipe_kerja" required class="w-full border-gray-300 rounded-md">
                    <option value="Full-time" {{ (isset($job) && $job->tipe_kerja == 'Full-time') ? 'selected' : '' }}>Full-time</option>
                    <option value="Part-time" {{ (isset($job) && $job->tipe_kerja == 'Part-time') ? 'selected' : '' }}>Part-time</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Kualifikasi</label>
                <textarea name="kualifikasi" class="w-full border-gray-300 rounded-md">{{ $job->kualifikasi ?? '' }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Tugas</label>
                <textarea name="deskripsi_tugas" class="w-full border-gray-300 rounded-md">{{ $job->deskripsi_tugas ?? '' }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gaji</label>
                <input type="text" name="gaji" value="{{ $job->gaji ?? '' }}" class="w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Benefit</label>
                <textarea name="benefit" class="w-full border-gray-300 rounded-md">{{ $job->benefit ?? '' }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="w-full border-gray-300 rounded-md" accept="image/*" />
                @if (isset($job) && $job->gambar)
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $job->gambar) }}" alt="Gambar Lowongan" class="w-32 h-32 object-cover rounded-md">
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Status</label>
                <select name="status" required class="w-full border-gray-300 rounded-md">
                    <option value="1" {{ (isset($job) && $job->status) ? 'selected' : '' }}>Dibuka</option>
                    <option value="0" {{ (isset($job) && !$job->status) ? 'selected' : '' }}>Ditutup</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
