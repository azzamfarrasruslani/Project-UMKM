@section('title', 'Data Promo')
<x-app-layout>
    @include('promo.modalAdd')
    <!-- Data Table Section -->
    <div class=" w-full mx-auto ">
        <div class="w-full px-1 py-6 mx-auto">
            <div class="flex-none w-full max-w-full px-4">
                {{-- @include('layouts.flash')
                @include('layouts.deleteModal') --}}
                <div class="relative flex flex-col min-w-0 mb-6 pb-5 bg-white border-0 shadow-xl rounded-2xl">
                    <div class="p-6 pb-3 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center w-full max-w-full px-3">
                                <h6 class="text-xl md:text-2xl font-bold mb-4">Data Promo</h6>

                            </div>
                            <div class="w-full max-w-full px-3 text-right">
                                <a href="javascript:;" onclick="openAddPromo()"
                                    class="bg-red-400 text-white py-2 px-4 rounded-lg  focus:outline-none hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Tambah Promo
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" mx-5 py-4">
                        <div class="flex-col grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($promo as $item)
                                <div class="bg-white shadow-md rounded-lg overflow-hidden mb-2">
                                    @if ($item->gambar)
                                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Promo" />
                                    @endif
                                    <div class="p-4">
                                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                                        <p class="text-gray-600 mt-2">{{ Str::limit($item->deskripsi, 100) }}</p>
                                        <div class="mt-4">
                                            <a href="{{ route('promo.edit', $item->id_promo) }}" class="text-white bg-blue-500 px-4 py-1 rounded-lg">
                                                Edit
                                            </a>
                                            <form action="{{ route('promo.destroy', $item->id_promo) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded-lg">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<style>

</style>

    <!-- Script JS DataTables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.tailwindcss.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                scrollX: true, // Mengaktifkan scroll horizontal
                responsive: true, // Mengaktifkan tabel responsif
                dom: '<"flex flex-wrap justify-between items-center mb-4"' +
                    '<"order-1 md:order-1"l>' + // pageLength di kiri atas pada desktop/tablet
                    '<"order-3 md:order-2 md:ml-auto"f>' + // search di kanan atas pada desktop/tablet
                    '>' +
                    't' + // Isi tabel
                    '<"flex flex-wrap justify-between items-center mt-4"' +
                    '<"order-1 md:order-1"i>' + // info di kiri bawah pada desktop/tablet
                    '<"order-3 md:order-2 md:ml-auto"p>' + // paging di kanan bawah pada desktop/tablet
                    '>',
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Cari data...",
                    lengthMenu: " _MENU_ ",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    infoFiltered: "(difilter dari _MAX_ total entri)",
                }
            });
        });
    </script>
</x-app-layout>
