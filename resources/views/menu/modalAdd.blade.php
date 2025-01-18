<div id="addMenuModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2 px-8 py-3 text-slate-700" id="modalMenu">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0  sm:text-left">
                    <h1 class="text-start mb-5 text-xl  leading-10 font-bold" id="modal-title">
                        Tambah Menu Baru
                    </h1>
                    <div class="mt-2">
                        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                            {{-- CSRF --}}
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                              {{-- Nama Menu --}}
                                <div>
                                    <label for="nama_menu" class="block text-sm font-medium">Nama Menu</label>
                                    <input type="text" name="nama_menu" id="nama_menu"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama_menu') }}" required />
                                    @error('nama_menu')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                               {{-- Harga Menu --}}
                                <div>
                                    <label for="harga_menu" class="block text-sm font-medium">Harga Menu</label>
                                    <input type="number" name="harga_menu" id="harga_menu"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('harga_menu') }}" />
                                    @error('harga_menu')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                {{-- Kategori Menu --}}
                                <div>
                                    <label for="kategori_menu" class="block text-sm font-medium">Kategori Menu</label>
                                    <select name="kategori_menu" id="kategori_menu"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="Paket Komplit">Paket Komplit</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                    @error('kategori_menu')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Status Menu --}}
                                <div>
                                    <label for="status_menu" class="block text-sm font-medium">Status Menu</label>
                                    <select name="status_menu" id="status_menu"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="aktif" {{ old('status_menu') === 'aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="non-aktif"
                                            {{ old('status_menu') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif
                                        </option>
                                    </select>
                                    @error('status_menu')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Deskripsi Menu --}}
                            <div class="mb-4">
                                <label for="deskripsi_menu" class="block text-sm font-medium">Deskripsi Menu</label>
                                <textarea name="deskripsi_menu" id="deskripsi_menu" rows="5"
                                    class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500" required>{{ old('deskripsi_menu') }}</textarea>
                                @error('deskripsi_menu')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Gambar Menu --}}
                            <div class="mb-4">
                                <label for="gambar_menu" class="block text-sm font-medium">Gambar Menu</label>
                                <input type="file" name="gambar_menu" id="gambar_menu"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_menu')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeAddMenu()"
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
    function openAddMenu() {
        const modal = document.getElementById("addMenuModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddMenu() {
        const modal = document.getElementById("addMenuModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalMenu");
        if (!modalContent.contains(event.target)) {
            closeAddMenu();
        }
    }
</script>
