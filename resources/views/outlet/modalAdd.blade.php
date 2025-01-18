<div id="addOutletModal" class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300" onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl px-8 py-6 text-slate-700" id="modalOutlet">
            <div class="sm:flex sm:items-start">
                <div class="text-left w-full">
                    <h1 class="text-lg font-bold mb-6" id="modal-title">Tambah Outlet Baru</h1>
                    <div>
                        <form action="{{ route('outlet.store') }}" method="POST">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="kode_outlet" class="block text-sm font-medium">Kode Outlet</label>
                                    <input type="text" name="kode_outlet" id="kode_outlet" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('kode_outlet') }}" required />
                                    @error('kode_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="nama_outlet" class="block text-sm font-medium">Nama Outlet</label>
                                    <input type="text" name="nama_outlet" id="nama_outlet" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('nama_outlet') }}" required />
                                    @error('nama_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="lokasi_outlet" class="block text-sm font-medium">Lokasi Outlet</label>
                                    <input type="text" name="lokasi_outlet" id="lokasi_outlet" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('lokasi_outlet') }}" required />
                                    @error('lokasi_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="no_hp" class="block text-sm font-medium">Nomor HP</label>
                                    <input type="text" name="no_hp" id="no_hp" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('no_hp') }}" required />
                                    @error('no_hp')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email_outlet" class="block text-sm font-medium">Email Outlet</label>
                                    <input type="email" name="email_outlet" id="email_outlet" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('email_outlet') }}" />
                                    @error('email_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="tanggal_berdiri" class="block text-sm font-medium">Tanggal Berdiri</label>
                                    <input type="date" name="tanggal_berdiri" id="tanggal_berdiri" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ old('tanggal_berdiri') }}" required />
                                    @error('tanggal_berdiri')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="status" class="block text-sm font-medium">Status</label>
                                    <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="aktif" {{ old('status') === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="non-aktif" {{ old('status') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif</option>
                                    </select>
                                    @error('status')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4 sm:col-span-2">
                                    <label for="iframe_map" class="block text-sm font-medium">Embed Map (iframe)</label>
                                    <textarea name="iframe_map" id="iframe_map" class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">{{ old('iframe_map') }}</textarea>
                                    @error('iframe_map')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end mt-6 gap-2">
                                <button type="button" onclick="closeAddOutlet()" class="rounded-md px-6 py-2 bg-red-600 text-white hover:bg-red-700 transition">Batal</button>
                                <button type="submit" class="rounded-md px-6 py-2 bg-blue-500 text-white hover:bg-blue-600 transition">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openAddOutlet() {
        const modal = document.getElementById("addOutletModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddOutlet() {
        const modal = document.getElementById("addOutletModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalOutlet");
        if (!modalContent.contains(event.target)) {
            closeAddOutlet();
        }
    }
</script>
