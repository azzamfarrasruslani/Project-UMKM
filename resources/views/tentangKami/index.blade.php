@section('title', 'Tentang Kami')
<x-app-layout>
    @include('tentangKami.modalAdd')

    <div class="flex flex-wrap justify-center">
        <div class="w-full px-6 py-6 mx-auto">
            @include('layouts.flash')
            @include('layouts.deleteModal')

            <!-- Card Judul -->
            <div class="w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-customRed-50 shadow-2xl rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                        class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                    <div class="relative z-10 p-9">
                        <div class="flex justify-between items-center">
                            <h1 class="text-4xl font-extrabold text-white">Tentang Kami</h1>
                            <a href="javascript:;" onclick="openAddTentangKami()"
                                class="bg-white text-red-600 py-2 px-4 rounded-lg shadow hover:shadow-md transition transform hover:scale-105">
                                Tambah Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Tentang Kami -->
            <div class="flex flex-wrap px-2 py-6 mt-5 bg-white rounded-2xl">
                <div class="w-full px-3">
                    @if (!empty($tentangKami) && !is_array($tentangKami))
                        <div id="kandangTabContent" class="flex flex-wrap gap-6 bg-white px-5 py-10 rounded-2xl">
                            @foreach ($tentangKami as $index => $item)
                                <div class="relative flex flex-col w-full mb-6">
                                    <img src="{{ Storage::url($item->gambar_tK1) }}" class="w-full h-64 object-cover shadow-lg rounded-t-lg" alt="Gambar Menu">
                                    <div class="px-6 py-4 bg-white shadow-lg rounded-b-lg">
                                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $item->judul }}</h2>
                                        <p class="text-slate-700 mb-4"><strong>Sejarah Singkat:</strong> {!!$item->sejarah_singkat !!}</p>
                                        <p class="text-slate-700 mb-4"><strong>Misi:</strong> {!! $item->misi !!}</p>
                                        <p class="text-slate-700 mb-4"><strong>Visi:</strong>{!!$item->visi !!}</p>
                                        <div class="flex justify-between gap-2 mt-4">
                                            <a href="{{ route('tentangKami.edit', $item->id_tK) }}" class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 border border-blue-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                <i class="fa-solid fa-edit fa-lg text-blue-500"></i>
                                                Edit
                                            </a>
                                            <form id="deleteForm" action="{{ route('tentangKami.destroy', $item->id_tK) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="javascript:;" type="button" data-id="{{ $item->id_tK }}" data-url="{{ route('tentangKami.destroy', $item->id_tK) }}" class="delete-button flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 border border-red-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                                    <i class="fa-solid fa-trash fa-lg text-red-500"></i>
                                                    Hapus
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-600">Tidak ada data yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
