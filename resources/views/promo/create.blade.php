<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Promo</h1>
        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium">Judul Promo</label>
                <input type="text" name="judul" id="judul" class="mt-1 block w-full border-gray-300 rounded-md"
                    value="{{ old('judul') }}" required />
                @error('judul')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="diskon" class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="diskon" class="block text-sm font-medium">Diskon (%)</label>
                <input type="number" name="diskon" id="diskon" class="mt-1 block w-full border-gray-300 rounded-md"
                    value="{{ old('diskon') }}" step="0.01" min="0" max="100" />
                @error('diskon')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tanggal_mulai" class="block text-sm font-medium">Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" id="tanggal_mulai"
                    class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('tanggal_mulai') }}" required />
                @error('tanggal_mulai')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="tanggal_akhir" class="block text-sm font-medium">Tanggal Akhir</label>
                <input type="date" name="tanggal_akhir" id="tanggal_akhir"
                    class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('tanggal_akhir') }}" required />
                @error('tanggal_akhir')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="status" class="block text-sm font-medium">status</label>
                <select name="status" id="status">
                    <option value="true">Aktif</option>
                    <option value="false">Tidak Aktif</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div> --}}
            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full" accept="image/*" />
                @error('gambar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
