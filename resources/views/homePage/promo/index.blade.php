<x-guest-layout>
    @section('title', 'Karir')

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
                    PROMO
                </h1>
            </div>
        </div>
        <section class="mx-10 mt-10 mb-10">
            <div class="flex flex-wrap h-full" role="main" aria-labelledby="deals-heading">
                <div class="flex flex-col grow shrink text-black min-w-[240px] w-[248px]">
                    <nav aria-label="Breadcrumb">
                        <ol class="flex w-full text-sm font-medium leading-5">
                            <li><a href="/" class="hover:underline">Home</a></li>
                            <li class="mx-2">/</li>
                            <li aria-current="page">Our Deals</li>
                        </ol>
                    </nav>
                    <div class="flex flex-col pt-3.5 w-full">
                        <h1 id="deals-heading" class="pb-px w-full text-4xl leading-[77.5px]">Our Deals</h1>
                    </div>
                </div>
                <div class="flex flex-col grow shrink min-w-[240px] w-[698px] max-md:max-w-full">
                    <div role="tablist" aria-label="Filter deals by category"
                        class="flex flex-wrap gap-2.5 justify-center pr-96 pl-6 w-full text-sm font-medium leading-5 text-neutral-950 text-opacity-70 max-md:px-5 max-md:max-w-full">
                        <button role="tab" aria-selected="true"
                            class="grow shrink py-2 pr-3.5 pl-4 w-9 text-white whitespace-nowrap bg-rose-700 rounded-full border border-rose-700 border-solid focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                            All
                        </button>
                        <button role="tab" aria-selected="false"
                            class="grow shrink py-2 pr-3.5 pl-4 whitespace-nowrap rounded-full border border-solid border-neutral-200 w-[49px] hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                            PHD
                        </button>
                        <button role="tab" aria-selected="false"
                            class="grow shrink py-2 pr-3.5 pl-4 rounded-full border border-solid border-neutral-200 w-[83px] hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                            Pizza Hut
                        </button>
                        <button role="tab" aria-selected="false"
                            class="grow shrink px-3.5 py-2 whitespace-nowrap rounded-full border border-solid border-neutral-200 w-[89px] hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                            Ristorante
                        </button>
                    </div>
                    <div class="flex flex-col mt-6 w-full max-md:max-w-full">
                        <div class="max-md:-mr-1.5 max-md:max-w-full">
                            <div class="flex gap-5 max-md:flex-col">
                                <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/aade03cbd2d27e31292563cc82c0e24c90fb86762a53353f1a2186ba9f172965?apiKey=f781ef58ccc745818b538ded84512a35&"
                                        alt="Pizza deal promotion"
                                        class="object-contain grow w-full aspect-[2.03] min-h-[183px] max-md:mt-5" />
                                </div>
                                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/903aaee34903ec3b737324edc080a32be25b8774b146f737eb598ab5ed1cde74?apiKey=f781ef58ccc745818b538ded84512a35&"
                                        alt="Special offer promotion"
                                        class="object-contain grow w-full aspect-[2.04] min-h-[183px] max-md:mt-5" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 max-md:-mr-1.5 max-md:max-w-full">
                            <div class="flex gap-5 max-md:flex-col">
                                <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd4a2e6aebaf3dbc668c2abbccecbc189c5f6ab69e69792c0ddf9e360ffb7b92?apiKey=f781ef58ccc745818b538ded84512a35&"
                                        alt="Restaurant discount offer"
                                        class="object-contain grow w-full aspect-[2.03] min-h-[183px] max-md:mt-5" />
                                </div>
                                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/9e6da57f0adbd238288f1b7cee14e2f592a124169ce5de8bdbc153a2ab14e170?apiKey=f781ef58ccc745818b538ded84512a35&"
                                        alt="Limited time deal"
                                        class="object-contain grow w-full aspect-[2.04] min-h-[183px] max-md:mt-5" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 max-md:-mr-1.5 max-md:max-w-full">
                            <div class="flex gap-5 max-md:flex-col">
                                <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/f14b1a5c9d756c7dfc199260088c2805760452ce37af46c3f1da757fd19512f8?apiKey=f781ef58ccc745818b538ded84512a35&"
                                        alt="Seasonal promotion"
                                        class="object-contain grow w-full aspect-[2.02] min-h-[183px] max-md:mt-5" />
                                </div>
                                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/a08477ec36ed88470ba7c51d8e180c87eff07cde2f98be3c9812326517a77477?apiKey=f781ef58ccc745818b538ded84512a35&"
                                        alt="Special menu deal"
                                        class="object-contain grow w-full aspect-[2.03] min-h-[183px] max-md:mt-5" />
                                </div>
                            </div>
                        </div>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/89215c881c38f94bfb5d335b76266b4b4e1e3154cf5427d99749dacc984f8227?apiKey=f781ef58ccc745818b538ded84512a35&"
                            alt="Featured promotion"
                            class="object-contain mt-5 max-w-full aspect-[2.03] min-h-[183px] w-[372px]" />
                    </div>
                </div>
            </div>
        </section>
</x-guest-layout>
