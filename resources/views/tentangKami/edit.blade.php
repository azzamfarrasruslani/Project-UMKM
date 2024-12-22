<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Tentang Kami</h1>
        <form action="{{ route('tentangKami.update', $tentangKami->id_tK) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Input Judul Tentang Kami --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul_tK" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ $tentangKami->judul_tK }}" required />
                @error('judul_tK')
                    <span class="text-red-500 text-sm">Judul tidak boleh melebihi 255 karakter</span>
                @enderror
            </div>

            {{-- Input Deskripsi Tentang Kami --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi_tK" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $tentangKami->deskripsi_tK }}</textarea>
                @error('deskripsi_tK')
                    <span class="text-red-500 text-sm">Deskripsi wajib diisi</span>
                @enderror
            </div>

            {{-- Input Gambar Tentang Kami --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar_tK" class="mt-1 block w-full" accept="image/*" />
                @error('gambar_tK')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    document.querySelector('textarea[name="deskripsi_tK"]').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
