@section('title', 'Detail Outlet')
<x-app-layout>
    <div class=" w-full mx-auto ">
        <div class="w-full px-1 py-6 mx-auto">
            <div class="flex-none w-full max-w-full px-4">
                <div class="relative flex flex-col min-w-0 mb-6 pb-5 bg-white border-0 shadow-xl rounded-2xl">
                    <div class="p-6 pb-3 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center w-full max-w-full px-3">
                                <h6 class="text-xl md:text-2xl font-bold mb-4">Detail</h6>

                            </div>
                            <div class="w-full max-w-full px-3 text-right mb-3">
                                <a href="{{ route('outlet.index') }}"
                                    class="bg-customRed-50 text-white py-2 px-4 rounded-lg  focus:outline-none hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                    Keluar
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-8 mt-6 lg:mt-0 bg-white">
                        {!! $outlet->iframe_map !!}
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>
