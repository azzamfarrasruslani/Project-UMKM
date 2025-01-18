@section('title', 'Kontak')
<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Kontak</h1>

        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Tambah Kontak -->
        <form action="{{ route('kontak.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Pilih Media Sosial</label>
                <select name="social_media" class="mt-1 block w-full border-gray-300 rounded-md" required>
                    <option value="Facebook">Facebook</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Twitter">Twitter</option>
                    <option value="WhatsApp">WhatsApp</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="GrabFood">GrabFood</option>
                    <option value="ShopeeFood">ShopeeFood</option>
                    <option value="GoFood">GoFood</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Masukkan Link</label>
                <input type="url" name="link" class="mt-1 block w-full border-gray-300 rounded-md" placeholder="https://example.com" required />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>

        <!-- Daftar Kontak -->
        <div class="grid grid-cols-1 gap-4">
            @foreach ($kontaks as $kontak)
                <div class="p-4 border rounded flex justify-between items-center">
                    <!-- Informasi Kontak -->
                    <div class="flex items-center">
                        <!-- Ikon dan Info -->
                        <div class="mr-4">
                            @switch($kontak->social_media)
                                @case('Facebook')
                                    <i class="fab fa-facebook text-blue-500 text-2xl"></i>
                                    @break
                                @case('Instagram')
                                    <i class="fab fa-instagram text-pink-500 text-2xl"></i>
                                    @break
                                @case('Twitter')
                                    <i class="fab fa-twitter text-blue-400 text-2xl"></i>
                                    @break
                                @case('WhatsApp')
                                    <i class="fab fa-whatsapp text-green-500 text-2xl"></i>
                                    @break
                                @case('LinkedIn')
                                    <i class="fab fa-linkedin text-blue-700 text-2xl"></i>
                                    @break
                                @case('GrabFood')
                                    <i class="fab fa-grab text-green-500 text-2xl"></i>
                                    @break
                                @case('ShopeeFood')
                                    <i class="fab fa-shopee text-red-500 text-2xl"></i>
                                    @break
                                @case('GoFood')
                                    <i class="fab fa-gojek text-green-600 text-2xl"></i>
                                    @break
                                @default
                                    <i class="fas fa-globe text-gray-500 text-2xl"></i>
                            @endswitch
                        </div>
                        <div>
                            <h2 class="text-lg font-bold">{{ $kontak->social_media }}</h2>
                            <a href="{{ $kontak->link }}" target="_blank" class="text-blue-500 underline">{{ $kontak->link }}</a>
                        </div>
                    </div>

                    <!-- Tombol Edit dan Hapus -->
                    <div>
                        @if (isset($kontak->id))
                            <a href="{{ route('kontak.edit', $kontak->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mr-2">Edit</a>
                            <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                            </form>
                        @else
                            <span class="text-gray-500">Invalid Kontak</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
