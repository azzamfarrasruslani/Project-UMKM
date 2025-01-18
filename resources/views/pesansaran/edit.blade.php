<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <div class="bg-white p-6 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-6 text-center">Edit Pesan Saran</h1>

            <form action="{{ route('pesansaran.update', $pesansaran->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                    <!-- Input Nama -->
                    <div>
                        <input type="text" name="nama" value="{{ old('nama', $pesansaran->nama) }}"
                            placeholder="Nama"
                            class="w-full border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">
                        @error('nama')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Input Email -->
                    <div>
                        <input type="email" name="email" value="{{ old('email', $pesansaran->email) }}"
                            placeholder="Email"
                            class="w-full border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Input Subjek -->
                <div class="mb-4">
                    <input type="text" name="subjek" value="{{ old('subjek', $pesansaran->subjek) }}"
                        placeholder="Subjek"
                        class="w-full border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">
                    @error('subjek')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Pesan -->
                <div class="mb-6">
                    <textarea name="pesan" rows="4" placeholder="Pesan"
                        class="w-full border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">{{ old('pesan', $pesansaran->pesan) }}</textarea>
                    @error('pesan')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit"
                        class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-yellow-500 transition">
                        Perbarui
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
