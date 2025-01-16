<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-6">Edit Review</h1>

        <form action="{{ route('review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Input Nama --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama</label>
                <input type="text" name="nama" value="{{ $review->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('nama')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Input Deskripsi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $review->deskripsi }}</textarea>
                @error('deskripsi')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Input Gambar --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                @if ($review->gambar)
                    <img src="{{ Storage::url($review->gambar) }}" class="mb-2 w-32 rounded" alt="Gambar Review">
                @endif
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @error('gambar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Input Rating --}}
            <div class="mb-4">
                <label class="block text-sm font-medium">Rating</label>
                <div class="flex space-x-2 text-2xl text-yellow-500">
                    @for ($i = 1; $i <= 5; $i++)
                        <span onclick="setRating({{ $i }})" class="cursor-pointer" id="star-{{ $i }}">&#9733;</span>
                    @endfor
                </div>
                <input type="hidden" name="rating" id="rating" value="{{ $review->rating }}" />
                @error('rating')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
        </form>
    </div>

    <script>
        function setRating(value) {
            document.getElementById('rating').value = value;
            for (let i = 1; i <= 5; i++) {
                document.getElementById('star-' + i).style.color = i <= value ? '#FFD700' : '#B0B0B0';
            }
        }

        // Inisialisasi rating awal
        setRating({{ $review->rating }});
    </script>
</x-app-layout>
