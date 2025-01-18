<x-app-layout>
    @include('blog.modalAdd') <!-- Include the modal here -->

    <div class="flex flex-wrap justify-center">
        <div class="w-full px-6 py-6 mx-auto">
            <!-- Card Judul -->
            <div class="w-full max-w-full px-3 xl:mb-0">
                <div class="relative flex flex-col min-w-0 break-words bg-customRed-50 shadow-2xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern" class="absolute inset-0 w-full h-full object-cover rounded-2xl z-0 opacity-50">
                    <div class="relative z-10 flex-auto p-9">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-extrabold text-4xl leading-normal uppercase dark:text-white dark:opacity-60 text-white">
                                        Daftar Blog
                                    </p>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 text-right">
                                <button onclick="openAddBlog()" class="bg-white text-customRed-50 py-2 px-4 rounded-lg focus:outline-none hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Tambah Blog
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap px-2 py-6 rounded-2xl">
                <div class="w-full px-3">
                    <div id="blogTabContent" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($blogs as $blog)
                            <div class="p-4 bg-white rounded-lg shadow">
                                <img src="{{ Storage::url($blog->gambar_blog) }}" class="h-48 w-full object-cover rounded-md" alt="Blog Image">
                                <h3 class="text-lg font-semibold mt-2">{{ $blog->judul_blog }}</h3>
                                <p class="text-gray-600 text-sm">{{ Str::limit($blog->konten_blog, 100) }}</p>
                                <div class="flex justify-between mt-4">
                                    <a href="{{ route('blog.edit', $blog->id_blog) }}" class="bg-blue-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-blue-600 transition">
                                        Edit
                                    </a>
                                    <form action="{{ route('blog.destroy', $blog->id_blog) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white text-sm py-2 px-3 rounded-lg hover:bg-red-600 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="paginationContainer" class="flex justify-center mt-4 bg-red-500"></div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
