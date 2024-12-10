<div id="editPromoModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6 sm:p-8 lg:p-10 text-slate-700" id="modalEditPromo">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Edit Promo
                    </h1>
                    <div class="mt-2">
                        <form id="editPromoForm" method="POST" action="">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_promo" id="edit_id_promo">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Judul -->
                                <div>
                                    <label for="edit_judul" class="block text-sm font-medium">Judul Promo</label>
                                    <input type="text" name="judul" id="edit_judul"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                        required />
                                </div>
                                <!-- Diskon -->
                                <div>
                                    <label for="edit_diskon" class="block text-sm font-medium">Diskon (%)</label>
                                    <input type="number" name="diskon" id="edit_diskon"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                        step="0.01" min="0" max="100" />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Tanggal Awal -->
                                <div>
                                    <label for="edit_tanggal_mulai" class="block text-sm font-medium">Tanggal Awal
                                        Promo</label>
                                    <input type="date" name="tanggal_mulai" id="edit_tanggal_mulai"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                        required />
                                </div>
                                <!-- Tanggal Akhir -->
                                <div>
                                    <label for="edit_tanggal_akhir" class="block text-sm font-medium">Tanggal Akhir
                                        Promo</label>
                                    <input type="date" name="tanggal_akhir" id="edit_tanggal_akhir"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                        required />
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="mb-4">
                                <label for="edit_status" class="block text-sm font-medium">Status</label>
                                <select name="status" id="edit_status"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak aktif">Nonaktif</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="edit_deskripsi" class="block text-sm font-medium">Deskripsi</label>
                                <textarea name="deskripsi" id="edit_deskripsi" rows="5"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="edit_gambar" class="block text-sm font-medium">Gambar Promo</label>
                                <input type="file" name="gambar" id="edit_gambar"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeEditPromo()"
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
    //  function openEditModal(id_promo) {
    //         // Ambil data telur via Ajax
    //         fetch(`/promo/${id_promo}/edit`)
    //             .then(response => response.json())
    //             .then(data => {
    //                 if (data.item) {
    //                     // Isi form dengan data yang diambil
    //                     document.getElementById('edit_id_promo').value = data.item.id_promo;
    //                     document.getElementById('edit_judul').value = data.item.judul;
    //                     document.getElementById('edit_diskon').value = data.item.diskon;
    //                     document.getElementById('edit_tanggal_mulai').value = data.item.tanggal_mulai;
    //                     document.getElementById('edit_tanggal_akhir').value = data.item.tanggal_akhir;
    //                     document.getElementById('edit_status').value = data.item.status;
    //                     document.getElementById('edit_deskripsi').value = data.item.deskripsi;

    //                     // Set form action ke route update
    //                     document.getElementById('editPromoForm').action = `/promo/${id_promo}`;

    //                     // Tampilkan modal
    //                     const modal = document.getElementById("editPromoModal");
    //                     modal.classList.remove("opacity-0", "invisible");
    //                     modal.classList.add("opacity-100", "visible");
    //                 }
    //             })
    //             .catch(error => console.error('Error:', error));
    //     }
    function openEditModal(id_promo) {
        console.log("Fetching data for promo ID:", id_promo);
        fetch(`/promo/${id_promo}/edit`)
            .then(response => {
                console.log("Response status:", response.status);
                return response.json();
            })
            .then(data => {
                console.log("Data fetched:", data);
                if (data.item) {
                    document.getElementById('edit_id_promo').value = data.item.id_promo;
                    document.getElementById('edit_judul').value = data.item.judul;
                    document.getElementById('edit_diskon').value = data.item.diskon;
                    document.getElementById('edit_tanggal_mulai').value = data.item.tanggal_mulai;
                    document.getElementById('edit_tanggal_akhir').value = data.item.tanggal_akhir;
                    document.getElementById('edit_status').value = data.item.status;
                    document.getElementById('edit_deskripsi').value = data.item.deskripsi;

                    document.getElementById('editPromoForm').action = `/promo/${id_promo}`;

                    const modal = document.getElementById("editPromoModal");
                    modal.classList.remove("opacity-0", "invisible");
                    modal.classList.add("opacity-100", "visible");
                }
            })
            .catch(error => console.error('Error:', error));
    }


    function closeEditModal() {
        const modal = document.getElementById("editPromoModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }
</script>
