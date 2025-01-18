<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4">
        <h1 class="text-xl font-bold text-center mb-6">Daftar Pesan Saran</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-md text-center">
                {{ session()->get('success') }}
            </div>
        @endif

        <!-- Tabel Pesan Saran -->
        <div class="bg-white shadow-md rounded-lg p-4 overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border border-gray-300 px-4 py-2">#</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Subjek</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesansaran as $item)
                        <tr class="text-center hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->nama }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->subjek }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('pesansaran.edit', $item->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-all">Edit</a>
                                <form action="{{ route('pesansaran.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-all" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
