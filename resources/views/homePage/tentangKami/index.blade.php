<x-guest-layout>
    @section('title', 'Tentang Kami')

    <!-- Header Section -->
    <div class="relative bg-black text-white mt-30">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/images/pattern/Pattern1.png') }}" alt="Background Pattern"
                class="w-full h-full object-cover opacity-30" />
        </div>
        <!-- Content -->

        <div class="relative flex flex-col px-10 py-12 max-w-screen-xl mx-auto max-md:px-5 z-10">
            <nav class="mb-2">
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <!-- Icon Home yang mengarah ke dashboard.index -->
                    <!-- Link ke Data Kandang jika berada di halaman detail kandang -->
                    <li class="text-lg  capitalize leading-normal text-white before:text-gray-DEFAULT-400">
                        <a href="{{ route('home') }}"
                            class="text-white opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> Home </a>
                        @yield('title')
                    </li>
                </ol>

            </nav>
            {{-- <p class="text-xl font-light leading-5">Ayam Geprek Keysia</p> --}}
            <h1 id="delivery-menu-title" class="mt-1 text-4xl font-bold leading-[60px] text-white md:text-6xl">
                TENTANG KAMI
            </h1>
        </div>
    </div>



    <section data-aos="fade-up" class="p-10 mt-30" aria-labelledby="sejarah-heading">
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <!-- Foto bagian kiri -->
            <div   class="flex items-center lg:items-end lg:w-1/2 relative gap-10 mt-10">
                <div
                    class="px-[22px] pt-[22.50px] pb-[72px] origin-top-left rotate-[-15deg] bg-gradient-to-b from-white to-[#e9e9e9] shadow-sm flex-col justify-start items-start inline-flex">
                    <img class="w-full h-[202.5px] md:h-[405px] object-cover"
                        src="https://www.pizzahut.co.id/assets/party-1-BVA393nO.jpg" />
                </div>

                <div
                    class="px-[22.50px] pt-[22.50px] pb-[72px] origin-top-left rotate-[4.61deg] bg-gradient-to-b from-white to-[#e9e9e9] shadow-lg flex-col justify-start items-start inline-flex absolute top-0 right-0">
                    <img class="w-full h-[161.675px] md:h-[323.35px] object-cover"
                        src="https://www.pizzahut.co.id/assets/party-3-D0eSiv0P.jpg" />
                </div>
            </div>

            <!-- Tulisan bagian kanan -->
            <div data-aos="fade-right" class="lg:w-1/2 mt-10 lg:mt-0 lg:ml-10 text-center lg:text-left">
                <h1 id="sejarah-heading" class="text-4xl md:text-5xl font-bold text-yellowCustom-50">
                    Sejarah Singkat
                </h1>
                <h2 class="mt-4 text-2xl md:text-3xl font-semibold text-neutral-800">
                    Ayam Geprek Keysia
                </h2>
                <p class="mt-6 text-sm md:text-xl font-light leading-relaxed text-gray-700 text-justify">
                    Ayam Geprek Keysia adalah UMKM yang didirikan pada <span class="font-semibold">17 Agustus
                        2019</span> oleh Ibu Lina, seorang ibu rumah tangga. Nama <em>"Keysia"</em> diambil dari
                    anak ketiganya, yang menjadi inspirasi utama usaha ini. Berawal dari hobi memasak, Ayam Geprek
                    Keysia kini telah berkembang dengan tiga cabang di Pekanbaru. Kami berkomitmen menjaga kualitas
                    dan memberikan harga terjangkau, dengan setiap porsi hanya <span class="font-semibold">10
                        ribu</span>, menjadikan kami pilihan favorit bagi anak kos dan masyarakat sekitar.
                </p>
            </div>
        </div>
    </section>




    <section aria-labelledby="visi-misi-heading" class="mt-30 max-md:mt-10 mx-10 mb-10">
        <h2 id="visi-misi-heading"
            class="self-center text-5xl font-bold leading-none text-center text-yellowCustom-50 max-md:text-4xl">Visi &
            Misi
        </h2>
        <div class="mt-14 w-full max-w-[1200px] mx-auto max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap gap-10 md:flex-nowrap max-md:gap-6">
                <!-- Bagian Visi -->
                <div data-aos="fade-right" class="flex flex-col md:w-6/12 w-full">
                    <div
                        class="flex flex-col grow items-start px-14 py-14 w-full text-4xl font-thin text-black bg-amber-400 rounded-2xl max-md:px-5 max-md:py-8">
                        <h3 class="leading-none text-black">Visi Kami</h3>
                        <span class="mt-10 text-8xl leading-none max-md:mt-6 md:text-8xl">”</span>
                        <p class="tracking-wide leading-10  text-3xl max-md:text-base">
                            Menjadikan Ayam Geprek Keysia yang memiliki cita rasa menarik dengan harga yang terjangkau
                            agar bisa diminati oleh kalangan menengah ke bawah.
                        </p>
                    </div>
                </div>

                <!-- Bagian Misi -->
                <div data-aos="fade-left"
                    class="flex flex-col md:w-6/12 w-full bg-white rounded-2xl px-12 py-8 max-md:py-6 max-md:px-6">
                    <h3 class="text-4xl leading-none text-black max-md:text-2xl">Misi Kami</h3>
                    <ul class="w-full list-none">
                        <!-- Misi 1 -->
                        <li class="flex gap-8 mt-14 max-md:mt-6 max-md:flex-col max-md:gap-4">
                            <div
                                class="flex flex-col text-base leading-loose text-center text-black text-opacity-50 max-md:flex-row max-md:items-center">
                                <span
                                    class="bg-white border-2 border-solid border-black border-opacity-10 h-[30px] rounded-[100px] w-[30px] max-md:w-[40px] max-md:h-[40px]">
                                    1</span>
                                <div
                                    class="flex shrink-0 self-center w-px bg-black bg-opacity-10 h-[93px] max-md:hidden">
                                </div>
                            </div>
                            <div class="flex flex-col grow shrink-0 mt-0 basis-0">
                                <h4 class="text-lg leading-loose text-black max-md:text-base">Kepuasan Pelanggan</h4>
                                <p class="mt-0 text-base leading-7 text-black text-opacity-50 max-md:text-sm">
                                    Mengutamakan kepuasan pelanggan khususnya anak sekolah, orang bekerja, dan anak
                                    kost.
                                </p>
                            </div>
                        </li>
                        <!-- Misi 2 -->
                        <li class="flex gap-6 max-md:mt-6 max-md:flex-col max-md:gap-4">
                            <div
                                class="flex flex-col text-base leading-loose text-center text-black text-opacity-50 max-md:flex-row max-md:items-center">
                                <span
                                    class="bg-white border-2 border-solid border-black border-opacity-10 h-[30px] rounded-[100px] w-[30px] max-md:w-[40px] max-md:h-[40px]">
                                    2</span>
                                <div
                                    class="flex shrink-0 self-center mt-1 w-px bg-black bg-opacity-10 h-[93px] max-md:hidden">
                                </div>
                            </div>
                            <div class="flex flex-col grow shrink-0 mt-0 basis-0">
                                <h4 class="text-lg leading-loose text-black max-md:text-base">Menjaga Cita Rasa</h4>
                                <p class="mt-0 text-base leading-7 text-black text-opacity-50 max-md:text-sm">
                                    Tetap menjaga cita rasa Ayam Geprek Keysia dan bertahan dengan harga 10 ribu rupiah.
                                </p>
                            </div>
                        </li>
                        <!-- Misi 3 -->
                        <li class="flex gap-6 max-md:mt-6 max-md:flex-col max-md:gap-4">
                            <span
                                class="text-base leading-loose text-center bg-white border-2 border-solid border-black border-opacity-10 h-[30px] rounded-[100px] text-black text-opacity-50 w-[30px] max-md:w-[40px] max-md:h-[40px]">
                                3</span>
                            <div class="flex flex-col grow shrink-0 mt-0 basis-0">
                                <h4 class="text-lg leading-loose text-black max-md:text-base">Menjaga Kebersihan &
                                    Keamanan</h4>
                                <p class="mt-0 text-base leading-7 text-black text-opacity-50 max-md:text-sm">
                                    Menjaga kebersihan dan keamanan makanan untuk melindungi kesehatan pelanggan.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
