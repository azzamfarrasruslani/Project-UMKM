@section('title', 'Kontak')
<x-app-layout>
    @include('kontak.modalAdd')
    <!-- Layout utama -->
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
                            <h1 class="text-4xl font-extrabold  text-white">Daftar Kontak</h1>
                            <a href="javascript:;" onclick="openAddKontak()"
                                class="bg-white text-red-600 py-2 px-4 rounded-lg shadow hover:shadow-md transition transform hover:scale-105">
                                Tambah Kontak
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex flex-col min-w-0 mb-6 py-10 pb-5 bg-white border-0 shadow-xl rounded-lg mt-5">
                {{-- <div class="p-6 pb-3 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">

                </div> --}}

                <div class="px-8 mt-6 lg:mt-0 ">
                    @if (!empty($kontak))
                        <table id="example" class="stripe hover w-full">
                            <thead>
                                <tr class="capitalize ">
                                    <th>Sosial Media</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kontak as $index => $item)
                                    <tr>
                                        <td>{{ $item->social_media }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td>
                                            <!-- Tombol untuk Memicu Dropdown Pop-up -->
                                            <div class="hs-dropdown relative inline-flex">
                                                <button id="hs-dropdown-{{ $index }}" type="button"
                                                    class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gradient-to-tl from-customRed-50 to-customRed-50 text-white hover:bg-gray-50 hover:shadow-xl hover:-translate-y-px active:opacity-85 focus:outline-none focus:ring-2 focus:ring-white active:ring-2 active:ring-white"
                                                    data-hs-dropdown="#dropdown-menu-{{ $index }}">
                                                    <svg class="flex-none size-4.5 text-white dark:text-neutral-500 transition-transform duration-300 ease-in-out"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="2" />
                                                        <circle cx="12" cy="5" r="2" />
                                                        <circle cx="12" cy="19" r="2" />
                                                    </svg>
                                                </button>
                                                <div id="dropdown-menu-{{ $index }}"
                                                    class="hs-dropdown-menu hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 divide-y divide-gray-200"
                                                    style="position: absolute; z-index: 1000;">
                                                    <div class="py-2 first:pt-0 last:pb-0">
                                                        <span
                                                            class="block pt-2 pb-1 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                                            Aksi
                                                        </span>
                                                        <a href="{{ route('kontak.edit', $item->id_kontak) }}"
                                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                                                            <i
                                                                class="fa-solid fa-pen-to-square fa-lg text-blue-500"></i>
                                                            Edit
                                                        </a>

                                                        <form id="deleteForm"
                                                            action="{{ route('kontak.destroy', $item->id_kontak) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="javascript:;" type="button"
                                                                data-id="{{ $item->id_kontak }}"
                                                                data-url="{{ route('kontak.destroy', $item->id_kontak) }}"
                                                                class="delete-button flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                                                                <i class="fa-solid fa-trash fa-lg text-red-500"></i>
                                                                Hapus
                                                            </a>
                                                        </form>


                                                    </div>

                                                </div>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center mt-10">Tidak ada data yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

<!-- Script JS DataTables -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
{{-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script> --}}

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            scrollX: true, // Mengaktifkan scroll horizontal
            responsive: true, // Mengaktifkan tabel responsif
            dom: '<"flex flex-wrap justify-between items-center mb-4"' +
                '<"order-1 md:order-1 pl-3"l>' + // pageLength di kiri atas pada desktop/tablet
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
                lengthMenu: "_MENU_",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                infoFiltered: "(difilter dari _MAX_ total entri)",
            }
        });
    });
</script>

</x-app-layout>
