<x-app-layout>
    <div class="max-w-2xl mx-auto py-8 px-4">
        <h1 class="text-xl font-bold text-center mb-6">Edit Pesan Saran</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-md text-center">
                {{ session()->get('success') }}
            </div>
        @endif

        <!-- Form Edit Pesan Saran -->
        <form action="{{ route('pesansaran.update', $pesansaran->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <!-- Nama dan Email dalam satu baris -->
            <div class="flex flex-wrap -mx-2 mb-4">
                <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ $pesansaran->nama }}" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ $pesansaran->email }}" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>

            <!-- Subjek -->
            <div class="mb-4">
                <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                <input type="text" name="subjek" id="subjek" value="{{ $pesansaran->subjek }}" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Pesan -->
            <div class="mb-4">
                <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $pesansaran->pesan }}</textarea>
            </div>

            <!-- Tombol Simpan -->
            <div class="text-center">
                <button type="submit" class="bg-orange-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-orange-600 transition-all">Simpan Perubahan</button>
                <a href="{{ route('pesansaran.index') }}" class="bg-gray-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-gray-600 transition-all">Kembali</a>
            </div>
        </form>
    </div>

    <script>
        // Menghilangkan alert setelah 1.5 detik
        setTimeout(function () {
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 1500);
    </script>
</x-app-layout>
