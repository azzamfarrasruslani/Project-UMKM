<div id="addKarirModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-xl px-8 py-6 text-slate-700 w-full max-w-4xl max-h-screen overflow-y-auto"
            id="modalKarir">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Form Karir
                    </h1>
                    <div class="mt-2">
                        <form id="karirForm" action="{{ route('karir.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Layout Grid -->
                            <div class="grid grid-cols-2 gap-4">

                                <!-- Posisi -->
                                <div>
                                    <label for="nama_posisi" class="block text-sm font-medium">Posisi</label>
                                    <input type="text" name="nama_posisi" id="nama_posisi"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                    @error('nama_posisi')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Lokasi -->
                                <div>
                                    <label for="lokasi" class="block text-sm font-medium">Lokasi Penempatan</label>
                                    <input type="text" name="lokasi" id="lokasi"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                    @error('lokasi')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Tipe Kerja -->
                                <div>
                                    <label for="tipe_kerja" class="block text-sm font-medium">Tipe Kerja</label>
                                    <select name="tipe_kerja" id="tipe_kerja"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih Posisi</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Full Time">Full Time</option>
                                    </select>
                                    @error('tipe_kerja')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Gaji -->
                                <div>
                                    <label for="gaji" class="block text-sm font-medium">Gaji</label>
                                    <input type="number" name="gaji" id="gaji"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                    @error('gaji')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="col-span-2">
                                    <label for="status_menu" class="block text-sm font-medium">Status Karir</label>
                                    <select name="status" id="status"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="aktif" {{ old('status_menu') === 'aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="non-aktif"
                                            {{ old('status_menu') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif
                                        </option>
                                    </select>
                                </div>

                                <!-- Kualifikasi -->
                                <div class="col-span-2">
                                    <label for="kualifikasi" class="block text-sm font-medium">Kualifikasi</label>
                                    <textarea name="kualifikasi" id="kualifikasi" rows="3" class="mt-1 block w-full border-gray-300 rounded-md"
                                        required></textarea>
                                    @error('iframe_map')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Deskripsi Tugas -->
                                <div>
                                    <label for="deskripsi_tugas" class="block text-sm font-medium">Deskripsi
                                        Tugas</label>
                                    <textarea name="deskripsi_tugas" id="deskripsi_tugas" rows="3"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                                    @error('iframe_map')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Benefit -->
                                <div>
                                    <label for="benefit" class="block text-sm font-medium">Benefits</label>
                                    <textarea name="benefit" id="benefit" rows="3" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
                                    @error('iframe_map')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <!-- Buttons -->
                            <div class="flex justify-end mt-4 gap-2">
                                <button type="button" onclick="closeAddKarir()"
                                    class="rounded-md border border-transparent shadow-sm px-6 py-2 bg-red-600 text-white">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="rounded-md border border-transparent shadow-sm px-6 py-2 bg-blue-500 text-white">
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
        .create(document.querySelector('#kualifikasi'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                // Update the textarea value when the content changes
                document.querySelector('textarea[name="kualifikasi"]').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#benefit'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                // Update the textarea value when the content changes
                document.querySelector('textarea[name="benefit"]').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#deskripsi_tugas'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                // Update the textarea value when the content changes
                document.querySelector('textarea[name="deskripsi_tugas"]').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });


    function openAddKarir() {
        const modal = document.getElementById("addKarirModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddKarir() {
        const modal = document.getElementById("addKarirModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalKarir");
        if (!modalContent.contains(event.target)) {
            closeAddKarir();
        }
    }
</script>
