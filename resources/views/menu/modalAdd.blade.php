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
                            {{-- nama menu --}}
                            <div class="mb-4">
                                <label for="nama_menu" class="block text-sm font-medium">Nama Menu</label>
                                <input type="text" name="nama_menu" id="nama_menu"
                                    class="mt-1 block w-full border-gray-800 rounded-md" value="{{ old('judul') }}"
                                    required />
                                @error('judul')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- deskirpsi menu --}}
                            <div class="mb-4">
                                <label for="deskripsi_menu" class="block text-sm font-medium">Deskripsi Menu</label>
                                <textarea name="deskripsi_menu" id="deskripsi_menu" rows="5" class="mt-1 block w-full border-gray-800 rounded-md"
                                    required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi_menu')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- harga menu --}}
                            <div class="mb-4">
                                <label for="harga_menu" class="block text-sm font-medium">Harga Menu</label>
                                <input type="number" name="harga_menu" id="harga_menu"
                                    class="mt-1 block w-full border-gray-800 rounded-md" value="{{ old('diskon') }}" />
                                @error('harga_menu')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- gambar menu --}}
                            <div class="mb-4">
                                <label for="gambar_menu" class="block text-sm font-medium">Gambar Menu</label>
                                <input type="file" name="gambar_menu" id="gambar_menu" class="mt-1 block w-full"
                                    accept="image/*" />
                                @error('gambar_menu')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                    </div>
                    <!-- Button -->
                    <div class="flex justify-end mb-4 gap-2">
                        <button type="button" onclick="closeAddMenu()"
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
