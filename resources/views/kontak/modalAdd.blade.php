<div id="addKontakModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg px-8 py-6 text-slate-700" id="modalKontak">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Kontak Baru
                    </h1>
                    <div class="mt-2">
                        <form id="kontakForm" action="{{ route('kontak.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1  gap-4 mb-4">
                                {{-- Judul Blog --}}
                                <div>
                                    <label for="social_media" class="block text-sm font-medium">Pilih Media
                                        Sosial</label>
                                    <select name="social_media" id="social_media"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih Media Sosial</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="GrabFood">GrabFood</option>
                                        <option value="ShopeeFood">ShopeeFood</option>
                                        <option value="GoFood">GoFood</option>
                                    </select>
                                    @error('social_media')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1  gap-4 mb-4">
                                {{-- Link Kontak --}}
                                <div>
                                    <label for="link" class="block text-sm font-medium">Link Sosial Media</label>
                                    <input type="text" name="link" id="link"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('link') }}" required />
                                    @error('link')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeAddKontak()"
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
    function openAddKontak() {
        const modal = document.getElementById("addKontakModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddKontak() {
        const modal = document.getElementById("addKontakModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalKontak");
        if (!modalContent.contains(event.target)) {
            closeAddKontak();
        }
    }
</script>
