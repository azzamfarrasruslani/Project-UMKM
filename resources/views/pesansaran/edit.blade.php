<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Pesan Saran</h1>

        <form action="{{ route('pesansaran.update', $pesansaran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $pesansaran->nama) }}" class="w-full border-gray-300 rounded-lg">
                @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email', $pesansaran->email) }}" class="w-full border-gray-300 rounded-lg">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Subjek</label>
                <input type="text" name="subjek" value="{{ old('subjek', $pesansaran->subjek) }}" class="w-full border-gray-300 rounded-lg">
                @error('subjek') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Pesan</label>
                <textarea name="pesan" rows="4" class="w-full border-gray-300 rounded-lg">{{ old('pesan', $pesansaran->pesan) }}</textarea>
                @error('pesan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Perbarui</button>
        </form>
    </div>
</x-app-layout>
