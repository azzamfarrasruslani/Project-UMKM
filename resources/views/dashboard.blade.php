@section('title', 'Dashboard')
<x-app-layout>
    <div class="w-full px-5 py-6 overflow-x-hidden">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 xl:mb-0 xl:w-1/2">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-customRed-50 shadow-2xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <!-- Gambar -->
                    <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="pattern"
                        class="absolute inset-0 w-full h-full object-cover rounded-2xl z-0 opacity-70">

                    <!-- Konten -->
                    <div class="relative z-10 flex-auto p-9">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans font-extrabold text-4xl leading-normal uppercase dark:text-white dark:opacity-60 text-white">
                                        Selamat Datang
                                    </p>
                                    <p
                                        class="mb-0 font-sans font-extrabold text-2xl leading-normal capitalize dark:text-white dark:opacity-60 text-white">
                                        {{ Auth::user()->name }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-4">
            <!-- Total Cabang -->
            <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-850 flex items-center">
                <i class="fas fa-store-alt text-customRed-50 text-4xl mr-6"></i>
                <div>
                    <h5 class="text-slate-700 dark:text-white">Total Cabang</h5>
                    <p class="text-3xl font-bold text-slate-700">3</p>
                </div>
            </div>
            <!-- Total Menu -->
            <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-850 flex items-center">
                <i class="fas fa-utensils text-customRed-50 text-4xl mr-6"></i>
                <div>
                    <h5 class="text-slate-700 dark:text-white">Total Menu</h5>
                    <p class="text-3xl font-bold text-slate-700">10</p>
                </div>
            </div>
            <!-- Total Karyawan -->
            <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-850 flex items-center">
                <i class="fas fa-user text-customRed-50 text-4xl mr-6"></i>
                <div>
                    <h5 class="text-slate-700 dark:text-white">Total Karyawan</h5>
                    <p class="text-3xl font-bold text-slate-700">10</p>
                </div>
            </div>
            <!-- Rating Rata-rata -->
            <div class="p-6 bg-white rounded-lg shadow-md dark:bg-slate-850 flex items-center">
                <i class="fas fa-star text-customRed-50 text-4xl mr-6"></i>
                <div>
                    <h5 class="text-slate-700 dark:text-white">Rating Rata-rata</h5>
                    <p class="text-3xl font-bold text-slate-700">4.8/5</p>
                </div>
            </div>

        </div>
</x-app-layout>
