<x-guest-layout>
    @section('title', 'Tentang Kami')

    <section class="min-h-screen">
        <!-- Header Section -->
        <div
          class="bg-center relative flex items-start pt-12 pb-56 overflow-hidden bg-cover min-h-50-screen rounded-xl"
          style="background-image: url('/assets/images/BG-AboutUs.png');">
          <span
            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-800 to-gray-900 opacity-60"></span>
          <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
              <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                <h1 class="mt-30 mb-2 text-yellowCustom-50 text-5xl font-bold">Tentang Kami</h1>
                <p class="text-white text-lg">Ayam Geprek Keysia, pilihan cita rasa khas dengan harga terjangkau untuk semua kalangan.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="max-md:max-w-full p-20" aria-labelledby="sejarah-heading">
        <div class="flex gap-5 max-md:flex-col">
          <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
            <div class="flex z-10 flex-col items-start self-stretch my-auto mr-0 font-bold max-md:mt-10 max-md:max-w-full">
              <h1 id="sejarah-heading" class="text-5xl leading-none text-center text-amber-400 max-md:max-w-full max-md:text-4xl">Sejarah Singkat</h1>
              <h2 class="mt-7 text-3xl leading-none text-neutral-800">Ayam Geprek Keysia</h2>
              <p class="self-stretch mt-12 text-xl font-extralight text-justify tracking-wider leading-10 text-black max-md:mt-10 max-md:max-w-full">
                Ayam Geprek Keysia adalah UMKM yang didirikan pada 17 Agustus 2019 oleh Ibu Lina, seorang ibu rumah tangga. Nama "Keysia" diambil dari anak ketiganya, yang menjadi inspirasi utama usaha ini. Berawal dari hobi memasak, Ayam Geprek Keysia kini telah berkembang dengan tiga cabang di Pekanbaru. Kami berkomitmen menjaga kualitas dan memberikan harga terjangkau, dengan setiap porsi hanya seharga 10 ribu, menjadikan kami pilihan favorit bagi anak kos dan masyarakat sekitar.
              </p>
            </div>
          </div>
          {{-- <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow items-end px-20 w-full bg-red-800 rounded-[50px_0px_0px_50px] max-md:max-w-full">
              <div class="flex shrink-0 max-w-full bg-red-800 h-[666px] w-[699px]" role="img" aria-label="Decorative background"></div>
            </div>
          </div> --}}
        </div>
      </section>




      <section aria-labelledby="visi-misi-heading" class="mt-36 max-md:mt-10 mx-10">
        <h2 id="visi-misi-heading" class="self-center text-5xl font-bold leading-none text-center text-amber-400 max-md:text-4xl">Visi & Misi</h2>
        <div class="mt-14 w-full max-w-[1478px] mx-auto max-md:mt-10 max-md:max-w-full gap-4">
          <div class="flex  gap-5 max-md:flex-col">
            <!-- Bagian Visi -->
            <div data-aos="fade-right" class="flex flex-col w-6/12 max-md:w-full">
              <div class="flex flex-col grow items-start px-14 py-14 w-full text-4xl font-thin text-black bg-amber-400 rounded-2xl max-md:px-5 max-md:mt-8">
                <h3 class="leading-none">Visi Kami</h3>
                <span class="mt-10 text-8xl tracking-wide leading-none max-md:mt-10 max-md:text-4xl">"</span>
                <p class="mt-7 tracking-wide leading-10 max-md:leading-7 max-md:text-base">
                  Menjadikan Ayam Geprek Keysia yang memiliki cita rasa menarik dengan harga yang terjangkau agar bisa diminati oleh kalangan menengah ke bawah.
                </p>
              </div>
            </div>

            <!-- Bagian Misi -->
            <div data-aos="fade-left" class="flex flex-col w-6/12 max-md:w-full">
              <div class="flex flex-col grow w-full font-thin rounded-2xl bg-white shadow-md max-md:mt-8">
                <div class="flex flex-col items-start px-12 py-8 w-full bg-white max-md:px-5">
                  <h3 class="text-4xl leading-none text-black">Misi Kami</h3>
                  <ul class="w-full list-none">
                    <!-- Misi 1 -->
                    <li class="flex gap-8 mt-14 max-md:mt-10">
                      <div class="flex flex-col text-base leading-loose text-center text-black text-opacity-50">
                        <span class="px-3.5 bg-white border-2 border-solid border-black border-opacity-10 h-[30px] rounded-[100px] w-[30px]">1</span>
                        <div class="flex shrink-0 self-center w-px bg-black bg-opacity-10 h-[93px]"></div>
                      </div>
                      <div class="flex flex-col grow shrink-0 mt-2.5 basis-0">
                        <h4 class="text-lg leading-loose text-black">Kepuasan Pelanggan</h4>
                        <p class="mt-4 text-base leading-7 text-black text-opacity-50">
                          Mengutamakan kepuasan pelanggan khususnya anak sekolah, orang bekerja, dan anak kost.
                        </p>
                      </div>
                    </li>
                    <!-- Misi 2 -->
                    <li class="flex gap-6">
                      <div class="flex flex-col text-base leading-loose text-center text-black text-opacity-50">
                        <span class="px-3 bg-white border-2 border-solid border-black border-opacity-10 h-[30px] rounded-[100px] w-[30px]">2</span>
                        <div class="flex shrink-0 self-center mt-1 w-px bg-black bg-opacity-10 h-[93px]"></div>
                      </div>
                      <div class="flex flex-col grow shrink-0 mt-2.5 basis-0">
                        <h4 class="text-lg leading-loose text-black">Menjaga Cita Rasa</h4>
                        <p class="mt-6 text-base leading-7 text-black text-opacity-50">
                          Tetap menjaga cita rasa Ayam Geprek Keysia dan bertahan dengan harga 10 ribu rupiah.
                        </p>
                      </div>
                    </li>
                    <!-- Misi 3 -->
                    <li class="flex gap-6">
                      <span class="px-3 text-base leading-loose text-center bg-white border-2 border-solid border-black border-opacity-10 h-[30px] rounded-[100px] text-black text-opacity-50 w-[30px]">3</span>
                      <div class="flex flex-col grow shrink-0 mt-2.5 basis-0">
                        <h4 class="text-lg leading-loose text-black">Menjaga Kebersihan & Keamanan</h4>
                        <p class="mt-5 text-base leading-7 text-black text-opacity-50">
                          Menjaga kebersihan dan keamanan makanan untuk melindungi kesehatan pelanggan.
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


</x-guest-layout>
