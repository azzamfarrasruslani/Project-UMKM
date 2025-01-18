<div id="addPromoModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6 sm:p-8 lg:p-10 text-slate-700" id="modalPromo">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Promo Baru
                    </h1>
                    <div class="mt-2">
                        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Judul -->
                                <div>
                                    <label for="judul" class="block text-sm font-medium">Judul Promo</label>
                                    <input type="text" name="judul" id="judul"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('judul') }}" required />
                                    @error('judul')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Diskon -->
                                <div>
                                    <label for="diskon" class="block text-sm font-medium">Diskon (%)</label>
                                    <input type="number" name="diskon_promo" id="diskon_promo"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('deskripsi_promo') }}" step="0.01" min="0" max="100" />
                                    @error('deskripsi_promo')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Tanggal Awal -->
                                <div>
                                    <label for="tanggal_mulai" class="block text-sm font-medium">Tanggal Awal
                                        Promo</label>
                                    <input type="date" name="tanggal_mulai" id="tanggal_mulai"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('tanggal_mulai') }}" required />
                                    @error('tanggal_mulai')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Tanggal Akhir -->
                                <div>
                                    <label for="tanggal_akhir" class="block text-sm font-medium">Tanggal Akhir
                                        Promo</label>
                                    <input type="date" name="tanggal_akhir" id="tanggal_akhir"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('tanggal_akhir') }}" required />
                                    @error('tanggal_akhir')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi_promo" class="block text-sm font-medium">Deskripsi</label>
                                <textarea name="deskripsi_promo" id="deskripsi_promo" rows="5"
                                    class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500" required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi_promo')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="gambar_promo" class="block text-sm font-medium">Gambar Promo</label>
                                <input type="file" name="gambar_promo" id="gambar_promo"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_promo')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeAddPromo()"
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
    function openAddPromo() {
        const modal = document.getElementById("addPromoModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddPromo() {
        const modal = document.getElementById("addPromoModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalPromo");
        if (!modalContent.contains(event.target)) {
            closeAddPromo();
        }
    }
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
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
