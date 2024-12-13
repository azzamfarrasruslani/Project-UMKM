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
                    <div class="px-8 mt-6 lg:mt-0 bg-white">
                        <form action="{{ route('outlet.update', $outlet->id_outlet) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label for="kode_outlet" class="block text-sm font-medium">Kode Outlet</label>
                                    <input value="{{ $outlet->kode_outlet }}" type="text" name="kode_outlet"
                                        id="kode_outlet"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('kode_outlet') }}" required />
                                    @error('kode_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="nama_outlet" class="block text-sm font-medium">Nama Outlet</label>
                                    <input value="{{ $outlet->nama_outlet }}" type="text" name="nama_outlet"
                                        id="nama_outlet"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama_outlet') }}" required />
                                    @error('nama_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="lokasi_outlet" class="block text-sm font-medium">Lokasi Outlet</label>
                                    <input value="{{ $outlet->lokasi_outlet }}" value="{{ $outlet->nama_outlet }}"
                                        type="text" name="lokasi_outlet" id="lokasi_outlet"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('lokasi_outlet') }}" required />
                                    @error('lokasi_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="no_hp" class="block text-sm font-medium">Nomor HP</label>
                                    <input value="{{ $outlet->no_hp }}" type="text" name="no_hp" id="no_hp"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('no_hp') }}" required />
                                    @error('no_hp')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email_outlet" class="block text-sm font-medium">Email Outlet</label>
                                    <input value="{{ $outlet->email_outlet }}" type="email" name="email_outlet"
                                        id="email_outlet"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('email_outlet') }}" />
                                    @error('email_outlet')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="tanggal_berdiri" class="block text-sm font-medium">Tanggal
                                        Berdiri</label>
                                    <input value="{{ $outlet->tanggal_berdiri }}" type="date" name="tanggal_berdiri"
                                        id="tanggal_berdiri"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('tanggal_berdiri') }}" required />
                                    @error('tanggal_berdiri')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4 sm:col-span-2">
                                    <label for="status" class="block text-sm font-medium">Status</label>
                                    <select name="status" id="status"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option selected value="{{ $outlet->status }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>{{ $outlet->status }}
                                        </option>
                                        <option value="aktif" {{ old('status') === 'aktif' ? 'selected' : '' }}>Aktif
                                        </option>
                                        <option value="non-aktif"
                                            {{ old('status') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif</option>
                                    </select>
                                    @error('status')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4 sm:col-span-2">
                                    <label for="iframe_map" class="block text-sm font-medium">Embed Map (iframe)</label>
                                    <textarea value="" name="iframe_map" id="iframe_map"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"> {{ $outlet->iframe_map }}</textarea>
                                    @error('iframe_map')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end mt-6 gap-2">
                                <a href="{{ route('outlet.index') }}" type="button"
                                    class="rounded-md px-6 py-2 bg-red-600 text-white hover:bg-red-700 transition">Batal</a>
                                <button type="submit"
                                    class="rounded-md px-6 py-2 bg-blue-500 text-white hover:bg-blue-600 transition">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>
