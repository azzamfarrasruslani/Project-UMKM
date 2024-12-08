<!-- Blog Modal -->
<div id="addBlogModal" class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300" onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2xl px-8 py-6 text-slate-700" id="modalBlog">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Blog Baru
                    </h1>
                    <div class="mt-2">
                        <form id="blogForm" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Blog Title -->
                            <div class="mb-4">
                                <label for="judul_blog" class="block text-sm font-medium">Judul Blog</label>
                                <input type="text" name="judul_blog" id="judul_blog" class="mt-1 block w-full border-gray-800 rounded-md" required />
                            </div>
                            <!-- Blog Content -->
                            <div class="mb-4">
                                <label for="konten_blog" class="block text-sm font-medium">Konten Blog</label>
                                <textarea name="konten_blog" id="konten_blog" rows="5" class="mt-1 block w-full border-gray-800 rounded-md" required></textarea>
                            </div>
                            <!-- Blog Image -->
                            <div class="mb-4">
                                <label for="gambar_blog" class="block text-sm font-medium">Gambar Blog</label>
                                <input type="file" name="gambar_blog" id="gambar_blog" class="mt-1 block w-full" accept="image/*" />
                            </div>
                            <!-- Buttons -->
                            <div class="flex justify-end mb-4 gap-2">
                                <button type="button" onclick="closeAddBlog()" class="rounded-md border border-transparent shadow-sm px-6 py-2 bg-red-600 text-white">
                                    Batal
                                </button>
                                <button type="submit" class="rounded-md border border-transparent shadow-sm px-6 py-2 bg-blue-500 text-white">
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
