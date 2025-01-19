<div id="addBlogModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg px-8 py-6 text-slate-700" id="modalBlog">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Blog Baru
                    </h1>
                    <div class="mt-2">
                        <form id="blogForm" action="{{ route('blog.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 gap-4 mb-4">
                                {{-- Judul Blog --}}
                                <div>
                                    <label for="judul_blog" class="block text-sm font-medium">Judul Blog</label>
                                    <input type="text" name="judul_blog" id="judul_blog"
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
                                    class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500" required>{{ old('deskripsi_menu') }}</textarea>
                                @error('konten_blog')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Gambar Blog --}}
                            <div class="mb-4">
                                <label for="gambar_menu" class="block text-sm font-medium">Gambar Blog</label>
                                <input type="file" name="gambar_blog" id="gambar_blog"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_blog')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeAddBlog()"
                                    class="rounded-md shadow-sm px-6 py-2 bg-gradient-to-tl from-red-600 to-orange-600 text-white hover:bg-orange-500 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                    Batal
                                </button>
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

    function openAddBlog() {
        const modal = document.getElementById("addBlogModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddBlog() {
        const modal = document.getElementById("addBlogModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalBlog");
        if (!modalContent.contains(event.target)) {
            closeAddBlog();
        }
    }



</script>
