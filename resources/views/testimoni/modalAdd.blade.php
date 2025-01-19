<div id="addTestimoniModal"
    class="w-full fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-75 opacity-0 invisible transition-opacity duration-300"
    onclick="closeModalOnOutsideClick(event)">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6 sm:p-8 lg:p-10 text-slate-700" id="modalTestimoni">
            <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                    <h1 class="text-start mb-5 text-xl leading-10 font-bold" id="modal-title">
                        Tambah Testimoni
                    </h1>
                    <div class="mt-2">
                        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                {{-- Nama --}}
                                <div>
                                    <label for="nama" class="block text-sm font-medium">Nama</label>
                                    <input type="text" name="nama" id="nama"
                                        class="mt-1 block w-full border-gray-300 rounded-md  focus:ring-blue-500 focus:border-blue-500"
                                        value="{{ old('nama') }}" required />
                                    @error('judul')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Asal Testimoni --}}
                                <div>
                                    <label for="asal_testimoni" class="block text-sm font-medium">Asal Testimoni</label>
                                    <input type="text" name="asal_testimoni" id="asal_testimoni"
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
                                <input type="text" name="pesan" id="pesan"
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
                                        <span onclick="rate({{ $i }})"
                                            class="star text-3xl cursor-pointer">&#9733;</span>
                                    @endfor
                                </div>
                                <input type="hidden" id="rating" name="rating" value="0" required>
                            </div>


                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="closeAddTestimoni()"
                                    class="rounded-md shadow-sm px-6 py-2 bg-gradient-to-tl from-red-600 to-orange-600 text-white hover:bg-orange-500 focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                    Batal
                                </button>
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
    </div>
</div>



<script>
    function rate(rating) {
        const stars = document.querySelectorAll('.star');
        for (let i = 0; i < stars.length; i++) {
            stars[i].style.color = i < rating ? 'gold' : 'gray';
        }
        document.getElementById('rating').value = rating;
    }




    function openAddTestimoni() {
        const modal = document.getElementById("addTestimoniModal");
        modal.classList.remove("opacity-0", "invisible");
        modal.classList.add("opacity-100", "visible");
    }

    function closeAddTestimoni() {
        const modal = document.getElementById("addTestimoniModal");
        modal.classList.add("opacity-0", "invisible");
        modal.classList.remove("opacity-100", "visible");
    }

    function closeModalOnOutsideClick(event) {
        const modalContent = document.getElementById("modalTestimoni");
        if (!modalContent.contains(event.target)) {
            closeAddTestimoni();
        }
    }
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                // Update the textarea value when the content changes
                document.querySelector('textarea[name="deskripsi"]').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>
