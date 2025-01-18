@section('title', 'Edit')
<x-app-layout>
    <div class=" w-full mx-auto ">
        <div class="w-full px-1 py-6 mx-auto">
            <div class="flex-none w-full max-w-full px-4">
                <div class="relative flex flex-col min-w-0 mb-6 pb-5 bg-white border-0 shadow-xl rounded-2xl">
                    <div class="p-6 pb-3 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center w-full max-w-full px-3">
                                <h6 class="text-xl md:text-2xl font-bold mb-4">Edit</h6>

                            </div>
                            {{-- <div class="w-full max-w-full px-3 text-right mb-3">
                                <a href="{{ route('outlet.index') }}"
                                    class="bg-customRed-50 text-white py-2 px-4 rounded-lg  focus:outline-none hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Keluar
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="px-8 mt-6 text-slate-700 lg:mt-0 bg-white">
                        <form action="{{ route('outlet.update', $outlet->id_outlet) }}" method="POST"   enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                                {{-- Nama Outlet --}}
                                <div class="mb-4">
                                    <label for="nama_outlet" class="block text-sm font-medium">Nama Outlet</label>
                                    <input type="text" name="nama_outlet" id="nama_outlet" value="{{ $outlet->nama_outlet}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama_outlet') }}" required />
                                    @error('nama_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Jumlah Karyawan --}}
                                <div class="mb-4">
                                    <label for="jumlah_karyawan" class="block text-sm font-medium">Jumlah Karyawan</label>
                                    <input type="number" name="jumlah_karyawan" id="jumlah_karyawan" value="{{ $outlet->jumlah_karyawan}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('jumlah_karyawan') }}" required />
                                    @error('jumlah_karyawan')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Alamat Outlet --}}
                                <div class="mb-4">
                                    <label for="alamat_outlet" class="block text-sm font-medium">Alamat Outlet</label>
                                    <input type="text" name="alamat_outlet" id="alamat_outlet" value="{{ $outlet->alamat_outlet}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('alamat_outlet') }}" required />
                                    @error('alamat_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Nomor HP --}}
                                <div class="mb-4">
                                    <label for="no_hp" class="block text-sm font-medium">Nomor HP</label>
                                    <input type="text" name="no_hp" id="no_hp" value="{{ $outlet->no_hp}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('no_hp') }}" required />
                                    @error('no_hp')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Tanggal Berdiri --}}
                                <div class="mb-4">
                                    <label for="tanggal_berdiri" class="block text-sm font-medium">Tanggal Berdiri</label>
                                    <input type="date" name="tanggal_berdiri" id="tanggal_berdiri" value="{{ $outlet->tanggal_berdiri}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('tanggal_berdiri') }}" required />
                                    @error('tanggal_berdiri')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Status --}}
                                <div class="mb-4">
                                    <label for="status_outlet" class="block text-sm font-medium">Status</label>
                                    <select name="status_outlet" id="status_outlet"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option selected value="{{ $outlet->status_outlet }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>{{ $outlet->status_outlet}}
                                        <option value="aktif" {{ old('status_outlet') === 'aktif' ? 'selected' : '' }}>Aktif
                                        </option>
                                        <option value="non-aktif"
                                            {{ old('status_outlet') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif</option>
                                    </select>
                                    @error('status_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Embed Map (iframe) --}}
                                <div class="mb-4 sm:col-span-2">
                                    <label for="iframe_map" class="block text-sm font-medium">Embed Map (iframe)</label>
                                    <textarea name="iframe_map" id="iframe_map"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">{{ $outlet->iframe_map}}</textarea>
                                    @error('iframe_map')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Link Layanan Online --}}
                                <div class="mb-4 sm:col-span-2">
                                    <label for="link_pesan_online" class="block text-sm font-medium">Link Layanan Online</label>
                                    <textarea name="link_pesan_online" id="link_pesan_online"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">{{ $outlet->link_pesan_online}}</textarea>
                                    @error('link_pesan_online')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Gambar Layanan Online --}}
                            <div class="mb-4">
                                <label for="gambar_pesan_online" class="block text-sm font-medium">Logo Layanan online</label>
                                @if ($outlet->gambar_pesan_online)
                                    <img src="{{ Storage::url($outlet->gambar_pesan_online) }}"
                                        class="w-60 h-50 object-cover rounded-t-xl" alt="Gambar Layanan online">
                                @else
                                    <p class="text-gray-500 text-sm">Belum ada gambar.</p>
                                @endif
                                <input type="file" name="gambar_pesan_online" id="gambar_pesan_online"
                                    class="mt-3 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_pesan_online')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end mt-6 gap-2">
                                <button type="button" onclick="closeAddOutlet()"
                                    class="rounded-md px-6 py-2 bg-red-600 text-white hover:bg-red-700 transition">Batal</button>
                                <button type="submit"
                                    class="rounded-md px-6 py-2 bg-blue-500 text-white hover:bg-blue-600 transition">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>
