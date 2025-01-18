<x-guest-layout>
    @section('title', 'Outlets')

    <section class="flex flex-col mt-30 w-full tracking-tight max-md:max-w-full" aria-labelledby="delivery-menu-title">
        <!-- Header Section -->
        <div class="relative bg-black text-white">
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
                        <li class="text-lg capitalize leading-normal text-white before:text-gray-DEFAULT-400">
                            <a href="{{ route('home') }}"
                                class="text-white opacity-75 hover:opacity-100 after:content-['/'] after:p-2"> Home </a>
                            @yield('title')
                        </li>
                    </ol>
                </nav>
                <h1 id="delivery-menu-title" class="mt-1 text-4xl font-bold leading-[60px] text-white md:text-6xl">
                    NEWS
                </h1>
            </div>
        </div>
    </section>



    <section aria-labelledby="portal-title" class="flex flex-col max-w-[992px]">
        <h1 id="portal-title" class="pb-4 text-lg font-bold leading-9 uppercase text-slate-950 max-md:max-w-full">
          PORTAL BERITA
        </h1>

        <div role="region" aria-labelledby="press-releases-title">
          <h2 id="press-releases-title" class="mt-10 text-2xl leading-none text-slate-950">
            Press Releases
          </h2>
          <div class="mt-7 w-full max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-7 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d9fa1edb871bb8b009aa59824dc16e15839db8284ac27806f523e698fbdf226e?apiKey=f781ef58ccc745818b538ded84512a35&" alt="KFC 2024 Holiday Bucket" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Press Release</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC® Unveils 2024 Holiday Bucket and Strategy
                    </h3>
                    <time datetime="2024-12-10" class="mt-1.5 leading-none">December 10, 2024</time>
                  </div>
                </div>
              </article>

              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-7 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4b224228fff6d1129b7fbb0ec58c40967b18592c14c141da354584a52d3398b1?apiKey=f781ef58ccc745818b538ded84512a35&" alt="KFC Sign Language Initiative" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Press Release</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC Pioneers QSR Industry-first Sign Language Initiative
                    </h3>
                    <time datetime="2024-11-06" class="mt-1.5 leading-none">November 06, 2024</time>
                  </div>
                </div>
              </article>

              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-7 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/29ba9e563ccdfba0d6159fa34cb266b9df873c5447e2ddf11d566d4cefb0fdd7?apiKey=f781ef58ccc745818b538ded84512a35&" alt="KFC Punta Arenas Location" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Press Release</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC Punta Arenas: The End of the World's Location
                    </h3>
                    <time datetime="2024-10-17" class="mt-1.5 leading-none">October 17, 2024</time>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <div class="mt-8 w-full max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-7 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bdb0cbec55ccfbfb1d4d2518189f83b9d668f6d11e51d8a7e3e2801009375d0a?apiKey=f781ef58ccc745818b538ded84512a35&" alt="KFC Tenders Campaign" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Press Release</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC Issues Battle Cry to Tenders Rivals
                    </h3>
                    <time datetime="2024-10-14" class="mt-1.5 leading-none">October 14, 2024</time>
                  </div>
                </div>
              </article>

              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-6 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ff5d42ed472ee5ab346e81e94d69bf59ea70c32f24c1be7b46567c4cfefa0ab?apiKey=f781ef58ccc745818b538ded84512a35&" alt="Catherine Tan-Gillespie Announcement" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Press Release</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC® U.S. Names Catherine Tan-Gillespie as CMO
                    </h3>
                    <time datetime="2024-08-29" class="mt-1.5 leading-none">August 29, 2024</time>
                  </div>
                </div>
              </article>

              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-6 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a1f55991b52b991e9e43f0eb27d11dab670f63b43e377ae6508e459a6229e192?apiKey=f781ef58ccc745818b538ded84512a35&" alt="KFC Youth Support Initiative" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Press Release</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC Strengthens Ongoing Support of Youth
                    </h3>
                    <time datetime="2024-08-12" class="mt-1.5 leading-none">August 12, 2024</time>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <button class="self-center px-16 py-5 mt-12 text-xl leading-snug text-center rounded-full border border-black border-solid text-slate-950 max-md:px-5 max-md:mt-10 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-400" aria-label="View more press releases">
            View More
          </button>
        </div>

        <div role="region" aria-labelledby="drumstick-diaries-title">
          <h2 id="drumstick-diaries-title" class="mt-24 text-2xl leading-none text-slate-950 max-md:mt-10">
            Drumstick Diaries
          </h2>
          <div class="mt-7 w-full max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-6 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/68a4a0bdb22c1ce4a2d0fa6b1a13f4133cf69d75cd8470dea2cd51bd3b598003?apiKey=f781ef58ccc745818b538ded84512a35&" alt="QSR Evolution Conference 2024" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Blog</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      QSR Evolution Conference 2024: Takeaways
                    </h3>
                    <time datetime="2024-09-19" class="mt-1.5 leading-none">September 19, 2024</time>
                  </div>
                </div>
              </article>

              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-6 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9330c8a5bbc9e6775008b6e7acabe18607bb0bc9c7c206efc35c19493c0f01cb?apiKey=f781ef58ccc745818b538ded84512a35&" alt="QSR Evolution Conference 2023" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Blog</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      QSR Evolution Conference 2023: Taking a Look Back
                    </h3>
                    <time datetime="2023-09-18" class="mt-1.5 leading-none">September 18, 2023</time>
                  </div>
                </div>
              </article>

              <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden flex-col grow pb-6 w-full bg-white rounded-3xl max-md:mt-8">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/eebef7f3578aa687579f9cbe736a8296ed1643ffc973e97203ceda83ae367df6?apiKey=f781ef58ccc745818b538ded84512a35&" alt="KFC Egypt Youth Leadership Program" class="object-contain w-full aspect-[1.79]"/>
                  <div class="flex flex-col items-start px-6 mt-8 text-sm text-slate-950 max-md:px-5">
                    <span class="leading-none uppercase">Blog</span>
                    <h3 class="self-stretch pt-2 pb-3 mt-1 font-bold leading-6 uppercase">
                      KFC Egypt Launches Feeding Minds Youth Leadership
                    </h3>
                    <time datetime="2023-09-09" class="mt-1.5 leading-none">September 09, 2023</time>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <button class="self-center px-16 py-5 mt-12 text-xl leading-snug text-center rounded-full border border-black border-solid text-slate-950 max-md:px-5 max-md:mt-10 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-400" aria-label="View more blog posts">
            View More
          </button>
        </div>

        <div role="region" aria-labelledby="media-contacts-title">
          <h2 id="media-contacts-title" class="pt-16 pb-4 mt-12 text-lg font-bold leading-9 uppercase text-slate-950 max-md:mt-10 max-md:max-w-full">
            Media Contacts And Public Relations
          </h2>
          <p class="self-start mt-6 text-xl leading-snug text-black max-md:max-w-full">
            Looking to get in touch with our PR team or download brand assets? You've come to the right place.
          </p>
          <div class="flex flex-wrap gap-8 mt-5 max-w-full text-xl text-slate-950 w-[515px]">
            <a href="#contact-info" class="flex flex-1 gap-2 items-center leading-none min-h-[30px] hover:underline focus:outline-none focus:ring-2 focus:ring-slate-400" aria-label="View media contact information">
              <span class="self-stretch pb-0.5 my-auto">View Media Contact Info</span>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2418531df4ffbe046e0a4a0cc70d5f77dece34958295103a15f0e25010824f30?apiKey=f781ef58ccc745818b538ded84512a35&" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" aria-hidden="true"/>
            </a>
            <a href="#downloads" class="flex flex-1 gap-2 items-center leading-none min-h-[30px] hover:underline focus:outline-none focus:ring-2 focus:ring-slate-400" aria-label="View media downloads">
              <span class="self-stretch pb-0.5 my-auto">View Media Downloads</span>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ca70a6500127d9f067ef85b4fd7e4e4aa716a73696d098e341708a19cf5af5ff?apiKey=f781ef58ccc745818b538ded84512a35&" alt="" class="object-contain shrink-0 self-stretch my-auto w-6 aspect-square" aria-hidden="true"/>
            </a>
          </div>
        </div>
      </section>




</x-guest-layout>
