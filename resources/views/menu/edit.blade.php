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
                        <form action="{{ route('hero.update', $menu->id_menu) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                               {{-- Nama Menu --}}
                                <div>
                                    <label for="nama_menu" class="block text-sm font-medium">Nama Menu</label>
                                    <input type="text" name="nama_menu" id="nama_menu" value="{{ $menu->nama_menu }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama_menu') }}" required />
                                    @error('nama_menu')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Harga Menu --}}
                                <div>
                                    <label for="diskon" class="block text-sm font-medium">Harga Menu</label>
                                    <input type="number" name="harga_menu" id="harga_menu" value="{{ $menu->harga_menu }}"
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
                                        <option selected value="{{ $menu->status_menu }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>{{ $menu->status_menu}}
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
                                        <option selected value="{{ $menu->status_menu }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>{{ $menu->status_menu}}
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
                                    class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500" required>{{$menu->deskripsi_menu}}</textarea>
                                @error('deskripsi_menu')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Gambar --}}

                            <div class="mb-4">
                                <label for="gambar_hero" class="block text-sm font-medium">Gambar Menu</label>
                                <img src="{{ Storage::url($menu->gambar_menu) }}"
                                class="w-60 object-cover rounded-t-xl" alt="Gambar Menu">

                                <input value="{{ $menu->gambar_menu}}" type="file" name="gambar_hero" id="gambar_hero"
                                    class="mt-1 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    accept="image/*" />
                                @error('gambar_hero')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end gap-2">
                                <a href="{{ route('menu.index') }}" type="button"
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
