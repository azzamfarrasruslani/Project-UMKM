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
                        <form action="{{ route('kontak.update', $kontak->id_kontak) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1  gap-4 mb-4">
                                {{-- Judul Blog --}}
                                <div>
                                    <label for="social_media" class="block text-sm font-medium">Pilih Media
                                        Sosial</label>
                                    <select name="social_media" id="social_media"
                                        class="mt-1 block w-full border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                                        <option value="{{ $kontak->social_media }}" selected>{{ $kontak->social_media }}</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="GrabFood">GrabFood</option>
                                        <option value="ShopeeFood">ShopeeFood</option>
                                        <option value="GoFood">GoFood</option>
                                    </select>
                                    @error('social_media')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1  gap-4 mb-4">
                                {{-- Link Kontak --}}
                                <div>
                                    <label for="link" class="block text-sm font-medium">Link Sosial Media</label>
                                    <input type="text" name="link" id="link" value="{{ $kontak->link }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('link') }}" required />
                                    @error('link')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end gap-2">
                                <a href="{{ route('kontak.index') }}" type="button"
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
