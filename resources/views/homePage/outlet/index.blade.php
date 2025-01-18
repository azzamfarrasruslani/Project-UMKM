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
                    OUTLETS KAMI
                </h1>
            </div>
        </div>
    </section>

    <section class="mx-10 mt-10 mb-10">
        <div class="flex overflow-hidden flex-col min-h-[945px]" role="region" aria-label="Store Locations">

            <div class="flex flex-wrap gap-5 justify-between py-3 pr-4 pl-1.5 mt-5 w-full text-sm bg-white rounded-lg border border-solid border-neutral-200 max-md:max-w-full"
                role="search" aria-label="Store location filters">
                <div class="flex overflow-hidden flex-col justify-center py-2 pr-4 pl-11 whitespace-nowrap rounded-sm min-h-[34px] text-neutral-400 max-md:pl-5"
                    role="region" aria-label="Location filter">
                    <div class="overflow-hidden w-full">Jakarta</div>
                </div>
                <div class="flex flex-wrap gap-1.5 leading-none text-center text-red-600 max-md:max-w-full"
                    role="group" aria-label="Store features">
                    <button class="self-stretch px-3.5 py-2 border border-red-600 border-solid rounded-[30px]"
                        tabindex="0">
                        KFC Drive Thru
                    </button>
                    <button class="self-stretch px-3.5 py-2 border border-red-600 border-solid rounded-[30px]"
                        tabindex="0">
                        KFC Coffee
                    </button>
                    <button class="self-stretch px-3.5 py-2 border border-red-600 border-solid rounded-[30px]"
                        tabindex="0">
                        KFC Breakfast (AM)
                    </button>
                    <button class="self-stretch px-3.5 py-2 border border-red-600 border-solid rounded-[30px]"
                        tabindex="0">
                        KFC Birthday
                    </button>
                </div>
            </div>
            <div class="mt-6 w-full max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col" role="list">
                    <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full" role="listitem">
                        <div
                            class="flex overflow-hidden flex-col px-4 pt-5 pb-9 mx-auto w-full bg-white rounded border border-solid shadow-sm border-zinc-300 max-md:mt-8">
                            <h2 class="self-start text-lg font-bold leading-none text-neutral-600">
                                ADAM MALIK MEDAN
                            </h2>
                            <div class="flex gap-4 items-center pt-1.5 pb-1.5 mt-3.5" role="group"
                                aria-label="Store features">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1871aa1ecc0a1d2e3c78838f290fa4f51a06f3d03cedb88b67532b8829024a2b?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[4.95] max-w-[98px] w-[99px]"
                                    alt="Drive thru available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/9ed03816df7aa45dcb8e1a7b23c59505f39ae9de8da3b666f51b1522da07dad1?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[2.85] max-w-[57px] w-[57px]"
                                    alt="Coffee service available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4108651323632b82c6b37f31917c3fe2bd4665df358b310298cb011bcb7f037?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[1.1] max-w-[22px] w-[22px]"
                                    alt="Breakfast service available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/887ed2eb3202823c9c01b63740571dc73aab453ef0fd4918457c44ec45d5de57?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[1.75] max-w-[35px] w-[35px]"
                                    alt="Birthday celebration available" />
                            </div>
                            <address class="overflow-hidden mt-4 text-sm leading-none text-neutral-600 not-italic">
                                JL.ADAM MALIK NO. 5 / 7 Medan Sumatera Utara
                            </address>
                            <div class="flex gap-2.5 mt-4 text-sm leading-none whitespace-nowrap text-neutral-600"
                                role="group" aria-label="Contact information">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/c637fb5f78e80254421989d79bdcf482413c481db8e820adcda68323030da347?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 my-auto aspect-[0.79] w-[11px]" alt="Phone icon" />
                                <a href="tel:+628117157358" class="overflow-hidden grow w-fit">+628117157358</a>
                            </div>
                            <div class="flex gap-2.5 self-start mt-2 text-sm leading-none text-neutral-600"
                                role="group" aria-label="Operating hours">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f139fa40bee3fbcb2d3440f34a057324acb772e3763be6f804f7be56a772c2e?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 w-3 aspect-[0.86]" alt="Clock icon" />
                                <time>07:00 - 23:59</time>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full" role="listitem">
                        <div
                            class="flex overflow-hidden flex-col px-4 pt-5 pb-9 mx-auto w-full bg-white rounded border border-solid shadow-sm border-zinc-300 max-md:mt-8">
                            <h2 class="self-start text-lg font-bold leading-none text-neutral-600">
                                ADAM MALIK MEDAN
                            </h2>
                            <div class="flex gap-4 items-center pt-1.5 pb-1.5 mt-3.5" role="group"
                                aria-label="Store features">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1871aa1ecc0a1d2e3c78838f290fa4f51a06f3d03cedb88b67532b8829024a2b?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[4.95] max-w-[98px] w-[99px]"
                                    alt="Drive thru available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/9ed03816df7aa45dcb8e1a7b23c59505f39ae9de8da3b666f51b1522da07dad1?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[2.85] max-w-[57px] w-[57px]"
                                    alt="Coffee service available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4108651323632b82c6b37f31917c3fe2bd4665df358b310298cb011bcb7f037?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[1.1] max-w-[22px] w-[22px]"
                                    alt="Breakfast service available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/887ed2eb3202823c9c01b63740571dc73aab453ef0fd4918457c44ec45d5de57?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[1.75] max-w-[35px] w-[35px]"
                                    alt="Birthday celebration available" />
                            </div>
                            <address class="overflow-hidden mt-4 text-sm leading-none text-neutral-600 not-italic">
                                JL.ADAM MALIK NO. 5 / 7 Medan Sumatera Utara
                            </address>
                            <div class="flex gap-2.5 mt-4 text-sm leading-none whitespace-nowrap text-neutral-600"
                                role="group" aria-label="Contact information">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/c637fb5f78e80254421989d79bdcf482413c481db8e820adcda68323030da347?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 my-auto aspect-[0.79] w-[11px]" alt="Phone icon" />
                                <a href="tel:+628117157358" class="overflow-hidden grow w-fit">+628117157358</a>
                            </div>
                            <div class="flex gap-2.5 self-start mt-2 text-sm leading-none text-neutral-600"
                                role="group" aria-label="Operating hours">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f139fa40bee3fbcb2d3440f34a057324acb772e3763be6f804f7be56a772c2e?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 w-3 aspect-[0.86]" alt="Clock icon" />
                                <time>07:00 - 23:59</time>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full" role="listitem">
                        <div
                            class="flex overflow-hidden flex-col px-4 pt-5 pb-9 mx-auto w-full bg-white rounded border border-solid shadow-sm border-zinc-300 max-md:mt-8">
                            <h2 class="self-start text-lg font-bold leading-none text-neutral-600">
                                ADAM MALIK MEDAN
                            </h2>
                            <div class="flex gap-4 items-center pt-1.5 pb-1.5 mt-3.5" role="group"
                                aria-label="Store features">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1871aa1ecc0a1d2e3c78838f290fa4f51a06f3d03cedb88b67532b8829024a2b?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[4.95] max-w-[98px] w-[99px]"
                                    alt="Drive thru available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/9ed03816df7aa45dcb8e1a7b23c59505f39ae9de8da3b666f51b1522da07dad1?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[2.85] max-w-[57px] w-[57px]"
                                    alt="Coffee service available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4108651323632b82c6b37f31917c3fe2bd4665df358b310298cb011bcb7f037?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[1.1] max-w-[22px] w-[22px]"
                                    alt="Breakfast service available" />
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/887ed2eb3202823c9c01b63740571dc73aab453ef0fd4918457c44ec45d5de57?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 self-stretch my-auto rounded-sm aspect-[1.75] max-w-[35px] w-[35px]"
                                    alt="Birthday celebration available" />
                            </div>
                            <address class="overflow-hidden mt-4 text-sm leading-none text-neutral-600 not-italic">
                                JL.ADAM MALIK NO. 5 / 7 Medan Sumatera Utara
                            </address>
                            <div class="flex gap-2.5 mt-4 text-sm leading-none whitespace-nowrap text-neutral-600"
                                role="group" aria-label="Contact information">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/c637fb5f78e80254421989d79bdcf482413c481db8e820adcda68323030da347?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 my-auto aspect-[0.79] w-[11px]" alt="Phone icon" />
                                <a href="tel:+628117157358" class="overflow-hidden grow w-fit">+628117157358</a>
                            </div>
                            <div class="flex gap-2.5 self-start mt-2 text-sm leading-none text-neutral-600"
                                role="group" aria-label="Operating hours">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f139fa40bee3fbcb2d3440f34a057324acb772e3763be6f804f7be56a772c2e?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="object-contain shrink-0 w-3 aspect-[0.86]" alt="Clock icon" />
                                <time>07:00 - 23:59</time>
                            </div>
                        </div>
                    </div>

                    <!-- Additional store locations follow the same pattern -->
                    <!-- Remaining store location cards omitted for brevity but follow identical structure -->
                </div>
            </div>
            {{-- <button
                class="self-center px-14 py-2 mt-12 text-base leading-none text-center text-white whitespace-nowrap bg-red-600 border border-red-600 border-solid rounded-[30px] max-md:px-5 max-md:mt-10"
                tabindex="0">
                More
            </button> --}}
        </div>
    </section>
</x-guest-layout>
