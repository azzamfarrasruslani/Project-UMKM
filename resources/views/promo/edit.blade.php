<x-app-layout>
    @section('title', 'Edit')

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
                        <form action="{{ route('hero.update', $promo->id_promo) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                {{-- Judul Promo --}}
                                <div>
                                    <label for="judul" class="block text-sm font-medium">Judul</label>
                                    <input value="{{ $promo->judul }}" type="text" name="judul" id="judul"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('judul_promo') }}" required />
                                    @error('judul')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Judul Promo --}}
                                <div>
                                    <label for="diskon_promo" class="block text-sm font-medium">Diskon</label>
                                    <input value="{{ $promo->diskon_promo }}" type="text" name="diskon_promo"
                                        id="diskon_promo"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('diskon_promo') }}" required />
                                    @error('diskon_promo')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                {{-- Tanggal Mulai --}}
                                <div>
                                    <label for="tanggal_mulai" class="block text-sm font-medium">Tanggal Mulai
                                        Promo</label>
                                    <input value="{{ $promo->tanggal_mulai }}" type="date" name="tanggal_mulai"
                                        id="tanggal_mulai"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('tanggal_mulai') }}" required />
                                    @error('tanggal_mulai')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Tanggal Akhir --}}
                                <div>
                                    <label for="tanggal_akhir" class="block text-sm font-medium">Tanggal Akhir
                                        Promo</label>
                                    <input value="{{ $promo->tanggal_akhir }}" type="text" name="tanggal_akhir"
                                        id="tanggal_akhir"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('tanggal_akhir') }}" required />
                                    @error('tanggal_akhir')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="grid grid-cols-1  gap-4 mb-4">
                                {{-- Status Promo --}}
                                <div>
                                    <label for="status promo" class="block text-sm font-medium">Status Promo</label>
                                    <select name="status_promo" id="status_promo"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option selected value="{{ $promo->status_promo }}"
                                            {{ old('status_promo') === 'aktif' ? 'selected' : '' }}>
                                            {{ $promo->status_promo }}
                                        <option value="aktif" {{ old('status_promo') === 'aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="non-aktif"
                                            {{ old('status_promo') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif
                                        </option>
                                    </select>
                                    @error('status_promo')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            {{-- Dekripsi Promo --}}
                            <div class="grid grid-cols-1  gap-4 mb-4">
                                <label class="block text-sm font-medium">Deskripsi Promo</label>
                                <textarea  name="deskripsi_promo" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"
                                    required>{{ $promo->deskripsi_promo }}</textarea>
                                @error('deksripsi_promo')
                                    <span class="text-red-500 text-sm">Deskripsi Promo tidak boleh melebhi 255
                                        Karakter</span>
                                @enderror

                                {{-- Gambar --}}
                                <div class="mb-4">
                                    <label for="gambar_promo" class="block text-sm font-medium">Gambar Promo</label>
                                    @if ($promo->gambar_promo)
                                        <img src="{{ Storage::url($promo->gambar_promo) }}"
                                            class="w-full h-48 object-cover rounded-t-xl" alt="Gambar Promo">
                                    @else
                                        <p class="text-gray-500 text-sm">Belum ada gambar.</p>
                                    @endif
                                    <input type="file" name="gambar_promo" id="gambar_promo"
                                        class="mt-3 block w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        accept="image/*" />
                                    @error('gambar_promo')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('promo.index') }}" type="button"
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
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="deskripsi_promo"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

</x-app-layout>
