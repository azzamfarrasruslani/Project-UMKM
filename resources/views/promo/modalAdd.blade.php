<div id="addPromoModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">


        <div class="bg-white rounded-2 px-16 py-3 text-slate-700" id="modalPromo">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0  sm:text-left">
                    <h1 class="text-start mb-5 text-xl  leading-10 font-bold" id="modal-title">
                        Tambah Promo Baru
                    </h1>
                    <div class="mt-2">
                        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                            {{-- CSRF --}}
                            @csrf

                            <div class="mb-4">
                                <label for="judul" class="block text-sm font-medium">Judul Promo</label>
                                <input type="text" name="judul" id="judul"
                                    class="mt-1 block w-full border-gray-800 rounded-md" value="{{ old('judul') }}"
                                    required />
                                @error('judul')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="diskon" class="block text-sm font-medium">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="5" class="mt-1 block w-full border-gray-800 rounded-md" required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="diskon" class="block text-sm font-medium">Diskon (%)</label>
                                <input type="number" name="diskon" id="diskon"
                                    class="mt-1 block w-full border-gray-800 rounded-md" value="{{ old('diskon') }}"
                                    step="0.01" min="0" max="100" />
                                @error('diskon')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-3">
                                <!-- Kandang -->
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="diskon" class="block text-sm font-medium">Tanggal Awal Promo</label>
                                    <div class="relative">
                                        <input type="date" name="tanggal_mulai" id="tanggal_mulai"
                                            class="mt-1 block w-full border-gray-800 rounded-md"
                                            value="{{ old('tanggal_mulai') }}" required />
                                        @error('tanggal_mulai')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Jml Telur -->
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label for="diskon" class="block text-sm font-medium">Tanggal Akhir Promo</label>
                                    <input type="date" name="tanggal_akhir" id="tanggal_akhir"
                                        class="mt-1 block w-full border-gray-800 rounded-md"
                                        value="{{ old('tanggal_akhir') }}" required />
                                    @error('tanggal_akhir')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="gambar" class="block text-sm font-medium">Gambar Promo</label>
                                <input type="file" name="gambar" id="gambar" class="mt-1 block w-full"
                                    accept="image/*" />
                                @error('gambar')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                    </div>
                    <!-- Button -->
                    <div class="flex justify-end mb-4 gap-2">

                        <button type="button" onclick="closeAddPromo()"
                            class="justify-items-start mb-4 rounded-md border border-transparent shadow-sm px-6 py-2 bg-gradient-to-tl from-red-600 to-orange-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none border-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm hover:shadow-xs hover:-translate-y-px active:opacity-85">
                            Batal
                        </button>
                        <button type="submit"
                            class="justify-items-start mb-4 rounded-md border border-transparent shadow-sm px-6 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none border-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm hover:shadow-xs hover:-translate-y-px active:opacity-85">
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
