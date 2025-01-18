<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Review</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-sm">
                {{ session()->get('success') }}
            </div>
        @endif

        <!-- Tombol Tambah Review -->
        <a href="{{ route('reviews.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Review
        </a>

        <!-- Grid Review -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($reviews as $review)
                <div class="bg-[#b2231c] text-white shadow-md rounded-lg overflow-hidden text-center p-6">
                    
                    <!-- Border Bulat di Atas -->
                    <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-[#b2231c] w-10 h-10 rounded-full flex items-center justify-center shadow-lg border-4 border-white">
                        <span class="text-white text-xl font-bold">"</span>
                    </div>
                    <!-- Pesan Review -->
                    <div class="mb-4">
                        <p class="text-lg italic">"{{ $review->message }}"</p>
                    </div>
                    <!-- Nama Reviewer -->
                    <div class="font-bold text-xl mb-2">
                        {{ $review->nama }}
                    </div>
                    <!-- Pekerjaan Reviewer -->
                    <div class="text-sm text-gray-200 mb-4">
                    {{ $review->occupation ?? 'Status tidak tersedia' }}
                    </div>
                    <!-- Menampilkan Rating dengan Bintang -->
                    <div class="flex justify-center mb-4">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="text-2xl" style="color: {{ $i <= $review->rating ? 'gold' : 'white' }};">&#9733;</span>
                        @endfor
                    </div>
                    <!-- Tombol Aksi -->
                    <div class="flex justify-center space-x-2">
                        <a href="{{ route('reviews.edit', $review->id) }}" class="text-white bg-blue-500 px-4 py-1 rounded-lg hover:bg-blue-600">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-1 bg-red-500 text-white rounded-lg hover:bg-red-700">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
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
