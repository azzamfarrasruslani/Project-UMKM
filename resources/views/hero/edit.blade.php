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
                        </div>
                    </div>
                    <div class="px-8 mt-6 text-slate-700 lg:mt-0 bg-white">
                        <form action="{{ route('hero.update', $hero->id_hero) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <!-- Nama Hero -->
                                <div>
                                    <label for="judul" class="block text-sm font-medium">Nama Hero</label>
                                    <input value="{{ $hero->nama_hero }}" type="text" name="nama_hero" id="nama_hero"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama_hero') }}" required />
                                    @error('nama_hero')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Jenis Tampilan -->
                                <div>
                                    <label for="jenis_tampilan" class="block text-sm font-medium">Jenis Tampilan</label>
                                    <select name="jenis_tampilan" id="jenis_tampilan"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option selected value="{{ $hero->jenis_tampilan }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>
                                            {{ $hero->jenis_tampilan }}
                                        <option value="desktop"
                                            {{ old('jenis_tampilan') === 'dekstop' ? 'selected' : '' }}>Desktop</option>
                                        <option value="mobile"
                                            {{ old('jenis_tampilan') === 'mobile' ? 'selected' : '' }}>Mobile</option>

                                    </select>
                                    @error('diskon')
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
                                        <option selected value="{{ $hero->status_hero }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>{{ $hero->status_hero }}
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
                                @if ($hero->gambar_hero)
                                    <img src="{{ Storage::url($hero->gambar_hero) }}"
                                        class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Menu">
                                @else
                                    <p class="text-gray-500 text-sm">Belum ada gambar.</p>
                                @endif
                                <input type="file" name="gambar_hero" id="gambar_hero"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_hero')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="mb-4">
                                <label for="gambar_hero" class="block text-sm font-medium">Gambar Hero</label>
                                <img src="{{ Storage::url($hero->gambar_hero) }}"
                                class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Menu">
                                <input value="{{ $hero->gambar_hero}}" type="file" name="gambar_hero" id="gambar_hero"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_hero')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="flex justify-end gap-2">
                                <a href="{{ route('hero.index') }}" type="button"
                                    class="rounded-md shadow-sm px-6 py-2 bg-gradient-to-tl from-red-600 to-orange-600 text-white hover:bg-orange-500 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                    Batal
                                </a>
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
</x-app-layout>
