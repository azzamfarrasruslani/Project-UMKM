<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-6">Edit Review</h1>

        @if (session()->has('success'))
            <div id="success-alert" class="bg-green-500 text-white p-3 mb-4 rounded-sm">
                {{ session()->get('success') }}
            </div>
        @endif

        <form action="{{ route('reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ $review->nama }}" class="w-full rounded-lg border-gray-300" required />
                @error('nama')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Input Status -->
            <div class="mb-4">
                <label for="occupation" class="block text-gray-700 font-medium">Status</label>
                <input type="text" id="occupation" name="occupation" value="{{ $review->occupation }}" class="w-full rounded-lg border-gray-300" required />
                @error('occupation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Input Pesan -->
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-medium">Pesan</label>
                <textarea id="message" name="message" rows="5" class="w-full rounded-lg border-gray-300" required>{{ $review->message }}</textarea>
                @error('message')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Input Gambar -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Gambar</label>
                @if ($review->gambar)
                    <img src="{{ Storage::url($review->gambar) }}" class="mb-2 w-32 h-32 object-cover rounded-lg" alt="Gambar Review">
                @endif
                <input type="file" name="gambar" class="w-full rounded-lg border-gray-300" accept="image/*" />
                @error('gambar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Input Rating -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Rating</label>
                <div class="flex items-center space-x-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <span onclick="setRating({{ $i }})" id="star-{{ $i }}" class="star text-3xl cursor-pointer">&#9733;</span>
                    @endfor
                </div>
                <input type="hidden" id="rating" name="rating" value="{{ $review->rating }}" required />
                @error('rating')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan Perubahan</button>
        </form>
    </div>

    <script>
        function setRating(value) {
            const stars = document.querySelectorAll('.star');
            stars.forEach((star, index) => {
                star.style.color = index < value ? 'gold' : 'gray';
            });
            document.getElementById('rating').value = value;
        }

        // Inisialisasi rating awal
        setRating({{ $review->rating }});

        // Menghilangkan alert setelah 1.5 detik
        setTimeout(function () {
            const successAlert = document.getElementById('success-alert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 1500);
    </script>
</x-app-layout>
