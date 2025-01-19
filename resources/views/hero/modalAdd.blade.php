<div id="addHeroModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6 sm:p-8 lg:p-10 text-slate-700" id="modalHero">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Hero Baru
                    </h1>
                    <div class="mt-2">
                        <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1  gap-4 mb-4">
                                <!-- Nama Hero -->
                                <div>
                                    <label for="judul" class="block text-sm font-medium">Nama Hero</label>
                                    <input type="text" name="nama_hero" id="nama_hero"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama_hero') }}" required />
                                    @error('nama_hero')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1  gap-4 mb-4">
                                <!-- Status Hero -->
                                <div>
                                    <label for="tanggal_mulai" class="block text-sm font-medium">Status Hero</label>
                                    <select name="status_hero" id="status_hero"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="aktif" {{ old('status_hero') === 'aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="non-aktif"
                                            {{ old('status_hero') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif
                                        </option>
                                    </select>
                                    @error('status_hero')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Gambar --}}
                            <div class="mb-4">
                                <label for="gambar_hero" class="block text-sm font-medium">Gambar Hero</label>
                                <input type="file" name="gambar_hero" id="gambar_hero"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_hero')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeAddHero()"
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
    function openAddHero() {
        const modal = document.getElementById("addHeroModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddHero() {
        const modal = document.getElementById("addHeroModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalHero");
        if (!modalContent.contains(event.target)) {
            closeAddHero();
        }
    }
</script>
