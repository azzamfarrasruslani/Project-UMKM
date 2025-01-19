<div id="addTentangKamiModal" class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300" onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2xl px-8 py-6 text-slate-700 w-full max-w-4xl" id="modalTentangKami">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Tentang Kami Baru
                    </h1>
                    <div class="mt-2">
                        <form id="tentangKamiForm" action="{{ route('tentangKami.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Layout Grid -->
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Judul Tentang Kami -->
                                <div class="col-span-2">
                                    <label for="judul_tK" class="block text-sm font-medium">Judul Tentang Kami</label>
                                    <input type="text" name="judul_tK" id="judul_tK" class="mt-1 block w-full border-gray-800 rounded-md" required />
                                </div>
                                <!-- Sejarah Singkat -->
                                <div class="col-span-2">
                                    <label for="sejarah_singkat" class="block text-sm font-medium">Sejarah Singkat</label>
                                    <textarea name="sejarah_singkat" id="sejarah_singkat" rows="3" class="mt-1 block w-full border-gray-800 rounded-md" required></textarea>
                                </div>
                                <!-- Visi -->
                                <div>
                                    <label for="visi" class="block text-sm font-medium">Visi</label>
                                    <textarea name="visi" id="visi" rows="2" class="mt-1 block w-full border-gray-800 rounded-md"></textarea>
                                </div>
                                <!-- Misi -->
                                <div>
                                    <label for="misi" class="block text-sm font-medium">Misi</label>
                                    <textarea name="misi" id="misi" rows="2" class="mt-1 block w-full border-gray-800 rounded-md"></textarea>
                                </div>
                                <!-- Gambar Utama -->
                                <div>
                                    <label for="gambar_tK1" class="block text-sm font-medium">Gambar Utama</label>
                                    <input type="file" name="gambar_tK1" id="gambar_tK1" class="mt-1 block w-full" accept="image/*" />
                                </div>
                                <!-- Gambar Kedua -->
                                <div>
                                    <label for="gambar_tK2" class="block text-sm font-medium">Gambar Kedua</label>
                                    <input type="file" name="gambar_tK2" id="gambar_tK2" class="mt-1 block w-full" accept="image/*" />
                                </div>
                            </div>
                            <!-- Buttons -->
                            <div class="flex justify-end mt-4 gap-2">
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
