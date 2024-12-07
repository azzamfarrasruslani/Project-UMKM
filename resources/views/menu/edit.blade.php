<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Menu</h1>
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Nama Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Menu</label>
                <input type="text" name="nama" class="mt-1 block w-full border-gray-300 rounded-md" required />

                {{-- @error('judul')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror --}}
                @error('nama')
                    <span class="text-red-500 text-sm">Judul tidak boleh melebhi 255 Karakter</span>
                @enderror
            </div>

            {{-- Input Deskripsi Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Isi Menu</label>
                <textarea name="deskripsi" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                {{-- @error('deskripsi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror --}}
                @error('nama')
                <span class="text-red-500 text-sm">Isi Menu tidak boleh melebhi 255 Karakter</span>
            @enderror

            {{-- Input Harga Menu --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Harga</label>
                <input type="number" name="harga" class="mt-1 block w-full border-gray-300 rounded-md" required />

                @error('harga')
                    <span class="text-red-500 text-sm">Harga harus berupa angka dan tidak boleh kosong</span>
                @enderror
            </div>

            {{-- Input Gambar Menu --}}
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                {{-- @error('gambar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror --}}
                @error('gambar')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebhi 2MB</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    // Update the textarea value when the content changes
                    document.querySelector('textarea[name="deskripsi"]').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
