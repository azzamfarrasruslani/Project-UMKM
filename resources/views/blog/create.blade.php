<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Blog</h1>
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Input Judul Blog --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul Blog</label>
                <input type="text" name="judul_blog" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('judul_blog')
                    <span class="text-red-500 text-sm">Judul tidak boleh melebihi 255 Karakter</span>
                @enderror
            </div>

            {{-- Input Konten Blog --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Konten Blog</label>
                <textarea name="konten_blog" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            {{-- Input Gambar Blog --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Blog</label>
                <input type="file" name="gambar_blog" class="mt-1 block w-full" accept="image/*" />
                @error('gambar_blog')
                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
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

                    document.querySelector('textarea[name="konten_blog"]').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
