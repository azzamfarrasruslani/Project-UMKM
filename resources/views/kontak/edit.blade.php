<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Kontak</h1>

        <form action="{{ route('kontak.update', $kontak) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Pilih Media Sosial</label>
                <select name="social_media" class="mt-1 block w-full border-gray-300 rounded-md" required>
                    <option value="Facebook" {{ $kontak->social_media == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                    <option value="Instagram" {{ $kontak->social_media == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                    <option value="Twitter" {{ $kontak->social_media == 'Twitter' ? 'selected' : '' }}>Twitter</option>
                    <option value="WhatsApp" {{ $kontak->social_media == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                    <option value="LinkedIn" {{ $kontak->social_media == 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
                    <option value="GrabFood" {{ $kontak->social_media == 'GrabFood' ? 'selected' : '' }}>GrabFood</option>
                    <option value="ShopeeFood" {{ $kontak->social_media == 'ShopeeFood' ? 'selected' : '' }}>ShopeeFood</option>
                    <option value="GoFood" {{ $kontak->social_media == 'GoFood' ? 'selected' : '' }}>GoFood</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Masukkan Link</label>
                <input type="url" name="link" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ $kontak->link }}" required />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Perbarui</button>
        </form>
    </div>
</x-app-layout>
