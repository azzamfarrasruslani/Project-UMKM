<x-app-layout>
    @section('title', 'Edit')

    <div class=" w-full mx-auto ">
        <div class="w-full px-1 py-6 mx-auto">
            <div class="flex-none w-full max-w-full px-4">
                <div class="relative flex flex-col min-w-0 mb-6 pb-5 bg-white border-0 shadow-xl rounded-2xl">
                    <div class="p-6 pb-3 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center w-full max-w-full px-3">
                                <h6 class="text-xl md:text-2xl font-bold mb-4">Edit</h6>
                            </div>
                        </div>
                    </div>
                    <div class="px-8 mt-6 text-slate-700 lg:mt-0 bg-white">
                        <form action="{{ route('blog.update', $blog->id_blog) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1  gap-4 mb-4">
                                {{-- Judul Blog --}}
                                <div>
                                    <label for="judul_blog" class="block text-sm font-medium">Nama Menu</label>
                                    <input type="text" name="judul_blog" id="judul_blog" value="{{ $blog->judul_blog }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('judul_blog') }}" required />
                                    @error('judul_blog')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Konten Blog --}}
                            <div class="mb-4">
                                <label for="konten_blog" class="block text-sm font-medium">Konten Blog</label>
                                <textarea name="konten_blog" id="konten_blog" rows="5"
                                    class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500" required>{{ $blog->konten_blog }}</textarea>
                                @error('konten_blog')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Gambar --}}

                            <div class="mb-4">
                                <label for="gambar_blog" class="block text-sm font-medium">Gambar Blog</label>
                                @if ($blog->gambar_blog)
                                <img src="{{ Storage::url($blog->gambar_blog) }}"
                                class="w-60 object-cover rounded-t-xl" alt="Gambar Menu">
                                @else
                                    <p class="text-gray-500 text-sm">Belum ada gambar.</p>
                                @endif
                                <input value="{{ $blog->gambar_blog }}" type="file" name="gambar_blog"
                                    id="gambar_blog"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_blog')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>


                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('blog.index') }}" type="button"
                                        class="rounded-md shadow-sm px-6 py-2 bg-gradient-to-tl from-red-600 to-orange-600 text-white hover:bg-orange-500 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                        Batal
                                    </a>
                                    <button type="submit"
                                        class="rounded-md shadow-sm px-6 py-2 bg-blue-500 text-white hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Simpan
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script>
            ClassicEditor
                .create(document.querySelector('#konten_blog'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="konten_blog"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

</x-app-layout>
