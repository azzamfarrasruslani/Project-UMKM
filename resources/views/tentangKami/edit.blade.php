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
                        <form action="{{ route('tentangKami.update', $tentangKami->id_tK) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Input Judul Tentang Kami --}}
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Judul</label>
                                <input type="text" name="judul_tK"
                                    class="mt-1 block w-full border-gray-300 rounded-md"
                                    value="{{ $tentangKami->judul_tK }}" required />
                                @error('judul_tK')
                                    <span class="text-red-500 text-sm">Judul tidak boleh melebihi 255 karakter</span>
                                @enderror
                            </div>

                            {{-- Input Deskripsi Tentang Kami --}}
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Deskripsi</label>
                                <textarea name="deskripsi_tK" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"
                                    required>{{ $tentangKami->deskripsi_tK }}</textarea>
                                @error('deskripsi_tK')
                                    <span class="text-red-500 text-sm">Deskripsi wajib diisi</span>
                                @enderror
                            </div>

                            {{-- Input Gambar Tentang Kami --}}
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Gambar</label>
                                <input type="file" name="gambar_tK" class="mt-1 block w-full" accept="image/*" />
                                @error('gambar_tK')
                                    <span class="text-red-500 text-sm">Gambar tidak boleh melebihi 2MB</span>
                                @enderror
                            </div>

                            <div class="flex justify-end gap-2">
                                <a href="{{ route('tentangKami.index') }}" type="button"
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
                        document.querySelector('textarea[name="deskripsi_tK"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
</x-app-layout>
