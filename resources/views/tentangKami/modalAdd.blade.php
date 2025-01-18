<div id="addTentangKamiModal" class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300" onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2xl px-8 py-6 text-slate-700" id="modalTentangKami">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Tentang Kami Baru
                    </h1>
                    <div class="mt-2">
                        <form id="tentangKamiForm" action="{{ route('tentangKami.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Judul Tentang Kami -->
                            <div class="mb-4">
                                <label for="judul_tK" class="block text-sm font-medium">Judul Tentang Kami</label>
                                <input type="text" name="judul_tK" id="judul_tK" class="mt-1 block w-full border-gray-800 rounded-md" required />
                            </div>
                            <!-- Deskripsi Tentang Kami -->
                            <div class="mb-4">
                                <label for="deskripsi_tK" class="block text-sm font-medium">Deskripsi Tentang Kami</label>
                                <textarea name="deskripsi_tK" id="deskripsi_tK" rows="5" class="mt-1 block w-full border-gray-800 rounded-md" required></textarea>
                            </div>
                            <!-- Gambar Tentang Kami -->
                            <div class="mb-4">
                                <label for="gambar_tK" class="block text-sm font-medium">Gambar Tentang Kami</label>
                                <input type="file" name="gambar_tK" id="gambar_tK" class="mt-1 block w-full" accept="image/*" />
                            </div>
                            <!-- Buttons -->
                            <div class="flex justify-end mb-4 gap-2">
                                <button type="button" onclick="closeAddTentangKami()" class="rounded-md border border-transparent shadow-sm px-6 py-2 bg-red-600 text-white">
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
    function openAddTentangKami() {
        const modal = document.getElementById("addTentangKamiModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddTentangKami() {
        const modal = document.getElementById("addTentangKamiModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalTentangKami");
        if (!modalContent.contains(event.target)) {
            closeAddTentangKami();
        }
    }
</script>
