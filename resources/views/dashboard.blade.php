@section('title', 'Dashboard')
<x-app-layout>
    <div class="w-full px-5 py-6 overflow-x-hidden">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 xl:mb-0 xl:w-1/2">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-red-500 shadow-2xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <!-- Gambar -->
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                        class="absolute inset-0 w-full h-full object-cover rounded-2xl z-0 opacity-50">

                    <!-- Konten -->
                    <div class="relative z-10 flex-auto p-9">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans font-extrabold text-4xl leading-normal uppercase dark:text-white dark:opacity-60 text-white">
                                        Selamat Datang
                                    </p>
                                    <h5 class="mb-2 font-bold dark:text-white">
                                        <!-- Tambahkan isi jika ada -->
                                    </h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-red-600">%</span>

                                    </p>
                                </div>
                            </div>
                            {{-- <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="leading-none fa-solid fa-egg text-xl relative top-3.5 text-white"></i>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="flex flex-wrap mt-6 -mx-3">
            <!--Chart Produksi Telur -->
            <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none mb-4">
                <div
                    class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                        <h6 class="capitalize dark:text-white"></h6>
                        <!-- <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                        <i class="fa fa-arrow-up text-emerald-500"></i>
                        <span class="font-semibold">4% more</span> in 2021
                    </p> -->
                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="chart-line2" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart Penjualan Telur -->
            <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                        <h6 class="capitalize dark:text-white"></h6>

                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="" height=""></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
