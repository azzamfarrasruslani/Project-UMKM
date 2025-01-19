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
                        <form action="{{ route('tentangKami.update', $tentangKami->id_tK) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Layout Grid -->
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Judul Tentang Kami -->
                                <div class="col-span-2">
                                    <label for="judul_tK" class="block text-sm font-medium">Judul Tentang Kami</label>
                                    <input type="text" name="judul_tK" id="judul_tK" value="{{$tentangKami->judul_tK}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                </div>
                                <!-- Sejarah Singkat -->
                                <div class="col-span-2">
                                    <label for="sejarah_singkat" class="block text-sm font-medium">Sejarah
                                        Singkat</label>
                                    <textarea name="sejarah_singkat" id="sejarah_singkat" rows="3"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required>{!! $tentangKami->sejarah_singkat !!}</textarea>
                                </div>
                                <!-- Visi -->
                                <div>
                                    <label for="visi" class="block text-sm font-medium">Visi</label>
                                    <textarea name="visi" id="visi" rows="2" class="mt-1 block w-full border-gray-300 rounded-md">{!! $tentangKami->visi !!}</textarea>
                                </div>
                                <!-- Misi -->
                                <div>
                                    <label for="misi" class="block text-sm font-medium">Misi</label>
                                    <textarea name="misi" id="misi" rows="2" class="mt-1 block w-full border-gray-300 rounded-md">{!! $tentangKami->misi !!}</textarea>
                                </div>
                                <!-- Gambar Utama -->
                                <div>
                                    <label for="gambar_tK1" class="block text-sm font-medium">Gambar Utama</label>
                                    <input type="file" name="gambar_tK1" id="gambar_tK1" class="mt-1 block w-full"
                                        accept="image/*" />
                                </div>
                                <!-- Gambar Kedua -->
                                <div>
                                    <label for="gambar_tK2" class="block text-sm font-medium">Gambar Kedua</label>
                                    <input type="file" name="gambar_tK2" id="gambar_tK2" class="mt-1 block w-full"
                                        accept="image/*" />
                                </div>
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
                .create(document.querySelector('#sejarah_singkat'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="sejarah_singkat"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#visi'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="visi"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#misi'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="misi"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        </script>

</x-app-layout>
