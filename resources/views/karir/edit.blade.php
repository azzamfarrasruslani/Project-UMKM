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
                        <form action="{{ route('karir.update', $karir->id_karir) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-2 gap-4">

                                <!-- Posisi -->
                                <div>
                                    <label for="nama_posisi" class="block text-sm font-medium">Posisi</label>
                                    <input type="text" name="nama_posisi" id="nama_posisi" value="{{ $karir->nama_posisi }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                    @error('nama_posisi')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Lokasi -->
                                <div>
                                    <label for="lokasi" class="block text-sm font-medium">Lokasi Penempatan</label>
                                    <input type="text" name="lokasi" id="lokasi" value="{{ $karir->lokasi }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                    @error('lokasi')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Tipe Kerja -->
                                <div>
                                    <label for="tipe_kerja" class="block text-sm font-medium">Tipe Kerja</label>
                                    <select name="tipe_kerja" id="tipe_kerja"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="{{ $karir->tipe_kerja }}" selected>{{ $karir->tipe_kerja }}</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Full Time">Full Time</option>
                                    </select>
                                    @error('tipe_kerja')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Gaji -->
                                <div>
                                    <label for="gaji" class="block text-sm font-medium">Gaji</label>
                                    <input type="number" name="gaji" id="gaji" value="{{ $karir->gaji }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                                    @error('gaji')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                 <!-- Status -->
                                 <div class="col-span-2">
                                    <label for="status" class="block text-sm font-medium">Status Karir</label>
                                    <select name="status" id="status"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option selected value="{{ $karir->status }}"
                                            {{ old('status') === 'aktif' ? 'selected' : '' }}>{{ $karir->status }}
                                        <option value="aktif" {{ old('status') === 'aktif' ? 'selected' : '' }}>
                                            Aktif</option>
                                        <option value="non-aktif"
                                            {{ old('status') === 'non-aktif' ? 'selected' : '' }}>Non-Aktif
                                        </option>
                                    </select>
                                </div>

                                <!-- Kualifikasi -->
                                <div class="col-span-2">
                                    <label for="kualifikasi" class="block text-sm font-medium">Kualifikasi</label>
                                    <textarea name="kualifikasi" id="kualifikasi" rows="3" class="mt-1 block w-full border-gray-300 rounded-md"
                                        required> {{ $karir->kualifikasi }}</textarea>
                                    @error('kualifikasi')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Deskripsi Tugas -->
                                <div>
                                    <label for="deskripsi_tugas" class="block text-sm font-medium">Deskripsi
                                        Tugas</label>
                                    <textarea name="deskripsi_tugas" id="deskripsi_tugas" rows="3"
                                        class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $karir->deskripsi_tugas }}</textarea>
                                    @error('deskripsi_tugas')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Benefit -->
                                <div>
                                    <label for="benefit" class="block text-sm font-medium">Benefits</label>
                                    <textarea name="benefit" id="benefit" rows="3" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $karir->benefit }}</textarea>
                                    @error('benefit')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="flex justify-end gap-2 mt-4">
                                <a href="{{ route('karir.index') }}" type="button"
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
                .create(document.querySelector('#kualifikasi'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="kualifikasi"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#benefit'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="benefit"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#deskripsi_tugas'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        // Update the textarea value when the content changes
                        document.querySelector('textarea[name="deskripsi_tugas"]').value = editor.getData();
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
</x-app-layout>
