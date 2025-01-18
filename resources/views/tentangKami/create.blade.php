<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Tentang Kami</h1>
        <form action="{{ route('tentangKami.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Tentang Kami --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul_tK" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('judul_tK')
                    <span class="text-red-500 text-sm">Judul tidak boleh melebihi 255 karakter</span>
                @enderror
            </div>

            {{-- Input Sejarah Singkat --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Sejarah Singkat</label>
                <textarea name="sejarah_singkat" id="editor-sejarah" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                @error('sejarah_singkat')
                    <span class="text-red-500 text-sm">Sejarah singkat wajib diisi</span>
                @enderror
            </div>

            {{-- Input Visi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Visi</label>
                <textarea name="visi" id="editor-visi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
                @error('visi')
                    <span class="text-red-500 text-sm">Visi wajib diisi</span>
                @enderror
            </div>

            {{-- Input Misi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Misi</label>
                <textarea name="misi" id="editor-misi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
                @error('misi')
                    <span class="text-red-500 text-sm">Misi wajib diisi</span>
                @enderror
            </div>

            {{-- Input Gambar Utama --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Utama</label>
                <input type="file" name="gambar_tK1" class="mt-1 block w-full" accept="image/*" />
                @error('gambar_tK1')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
                @enderror
            </div>

            {{-- Input Gambar Kedua --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Kedua</label>
                <input type="file" name="gambar_tK2" class="mt-1 block w-full" accept="image/*" />
                @error('gambar_tK2')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
                @enderror
            </div>

            {{-- Input Gambar Ketiga --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Ketiga</label>
                <input type="file" name="gambar_tK3" class="mt-1 block w-full" accept="image/*" />
                @error('gambar_tK3')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>

    <script>

        ClassicEditor
            .create(document.querySelector('#editor-sejarah'))
            .catch(error => console.error(error));

        ClassicEditor
            .create(document.querySelector('#editor-visi'))
            .catch(error => console.error(error));

    
        ClassicEditor
            .create(document.querySelector('#editor-misi'))
            .catch(error => console.error(error));
    </script>
</x-app-layout>
