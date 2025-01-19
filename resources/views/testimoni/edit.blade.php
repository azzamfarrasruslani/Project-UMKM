<x-app-layout>
    @section('title', 'Edit')

    <div class=" w-full mx-auto ">
        <div class="w-full px-1 py-6 mx-auto">
            <div class="flex-none w-full max-w-full px-4">
                <div class="relative flex flex-col min-w-0 mb-6 pb-5 bg-white border-0 shadow-xl rounded-2xl">
                    <div class="p-6 pb-3 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center w-full max-w-full px-3">
                                <h6 class="text-xl md:text-2xl font-bold mb-4">Edit</h6>
                            </div>
                        </div>
                    </div>
                    <div class="px-8 mt-6 text-slate-700 lg:mt-0 bg-white">
                        <form action="{{ route('testimoni.update', $testimoni->id_testimoni) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                {{-- Nama --}}
                                <div>
                                    <label for="nama" class="block text-sm font-medium">Nama</label>
                                    <input type="text" name="nama" id="nama" value="{{$testimoni->nama}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama') }}" required />
                                    @error('judul')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Asal Testimoni --}}
                                <div>
                                    <label for="asal_testimoni" class="block text-sm font-medium">Asal Testimoni</label>
                                    <input type="text" name="asal_testimoni" id="asal_testimoni" value="{{$testimoni->asal_testimoni}}"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('asal_testimoni') }}" required />
                                    @error('asal_testimoni')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            {{-- Pesan --}}
                            <div class="mb-4">
                                <label for="pesan" class="block text-sm font-medium">Pesan
                                    Promo</label>
                                <input type="text" name="pesan" id="pesan" value="{{$testimoni->pesan}}"
                                    class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                    value="{{ old('pesan') }}" required />
                                @error('pesan')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700">Rating</label>
                                <div class="flex items-center space-x-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span id="star-{{ $i }}" onclick="rate({{ $i }})"
                                            class="star text-3xl cursor-pointer">&#9733;</span>
                                    @endfor
                                </div>
                                <input type="hidden" id="rating" name="rating" value="{{ $testimoni->rating }}" required>
                            </div>

                            <div class="flex justify-end gap-2">
                                <a href="{{ route('testimoni.index') }}" type="button"
                                    class="rounded-md shadow-sm px-6 py-2 bg-gradient-to-tl from-red-600 to-orange-600 text-white hover:bg-orange-500 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="rounded-md shadow-sm px-6 py-2 bg-blue-500 text-white hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>

<script>
    function rate(value) {
        document.getElementById('rating').value = value;
        for (let i = 1; i <= 5; i++) {
            document.getElementById('star-' + i).style.color = i <= value ? 'gold' : 'gray';
        }
    }

    // Initialize the rating stars based on the current rating value
    document.addEventListener('DOMContentLoaded', function() {
        const currentRating = document.getElementById('rating').value;
        rate(currentRating);
    });
</script>
