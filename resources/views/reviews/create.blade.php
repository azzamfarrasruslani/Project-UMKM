<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Review Baru</h1>
        <form method="POST" action="{{ route('reviews.store') }}">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <div class="relative">
                    <input type="text" id="nama" name="nama" class="w-full rounded-lg custom-border" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="occupation" class="block text-gray-700">Status</label>
                <div class="relative">
                    <input type="text" id="occupation" name="occupation" class="w-full rounded-lg custom-border" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Pesan</label>
                <div class="relative">
                    <textarea id="message" name="message" class="w-full rounded-lg custom-border" required></textarea>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Rating</label>
                <div class="flex items-center space-x-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <span onclick="rate({{ $i }})" class="star text-3xl cursor-pointer">&#9733;</span>
                    @endfor
                </div>
                <input type="hidden" id="rating" name="rating" value="0" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Submit</button>
        </form>
    </div>
    <script>
        function rate(rating) {
            const stars = document.querySelectorAll('.star');
            for (let i = 0; i < stars.length; i++) {
                stars[i].style.color = i < rating ? 'gold' : 'gray';
            }
            document.getElementById('rating').value = rating;
        }
    </script>
</x-app-layout>
