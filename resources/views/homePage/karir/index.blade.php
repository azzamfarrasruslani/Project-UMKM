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
                    KARIR
                </h1>
            </div>
        </div>

        <div class="flex flex-col pb-8" role="region" aria-label="Job Search Section">
            <div class="flex flex-col justify-center items-center px-72 py-10 w-full bg-red-600 max-md:px-5 max-md:max-w-full"
                role="banner">
                <div class="flex flex-col items-start px-6 pt-3.5 w-full max-w-[1368px] max-md:px-5 max-md:max-w-full">
                    <h1
                        class="text-5xl font-bold leading-none uppercase border-2 border-white border-solid max-md:text-4xl">
                        Job search
                    </h1>
                    <h2
                        class="mt-8 text-6xl font-bold leading-tight text-white uppercase max-md:max-w-full max-md:text-4xl">
                        You ready? Bring it.
                    </h2>
                    <form
                        class="flex z-10 flex-wrap gap-4 justify-center self-stretch py-10 pr-4 pl-6 mt-14 bg-white max-md:pl-5 max-md:mt-10"
                        role="search" aria-label="Job search form">
                        <div
                            class="flex flex-col grow shrink self-start pb-px min-w-[240px] w-[496px] max-md:max-w-full">
                            <div class="flex flex-col w-full max-md:max-w-full">
                                <label for="jobRole" class="text-lg font-bold leading-none text-black uppercase">
                                    Job role
                                </label>
                                <input type="text" id="jobRole" placeholder="Keywords"
                                    class="flex overflow-hidden justify-center items-start py-4 pr-16 pl-3.5 w-full text-lg whitespace-nowrap bg-white min-h-[56px] text-black text-opacity-50 max-md:pr-5 max-md:max-w-full border border-gray-300"
                                    aria-label="Enter job role keywords" />
                            </div>
                        </div>
                        <div
                            class="flex flex-col grow shrink pr-2 pl-4 text-black max-w-[644px] min-w-[240px] w-[520px] max-md:max-w-full">
                            <label for="teamSelect" class="text-lg font-bold leading-loose uppercase">
                                Team
                            </label>
                            <div class="relative">
                                <select id="teamSelect"
                                    class="flex flex-col pb-px w-full text-lg leading-snug appearance-none bg-white border border-gray-300 py-4 px-4 min-h-[56px] max-md:max-w-full"
                                    aria-label="Select team">
                                    <option value="">Select teams</option>
                                </select>
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e82f78171bc5bde3deb67dbc65fb5676900a6f437791b3f5382d32877b1999a?placeholderIfAbsent=true&apiKey=f781ef58ccc745818b538ded84512a35"
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 object-contain w-[15px]"
                                    alt="" aria-hidden="true" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <section class="flex flex-col self-center px-2 w-full max-w-[1336px] min-h-[689px] max-md:max-w-full"
                aria-label="Job listings">
                <div class="flex-1 shrink pt-10 pb-6 w-full text-sm font-medium leading-10 text-black uppercase max-md:max-w-full"
                    role="status" aria-live="polite">
                    4 jobs found
                </div>
                <div class="flex flex-col w-full max-md:max-w-full">
                    <article
                        class="flex flex-wrap gap-5 justify-between items-start pt-6 pb-12 w-full max-md:max-w-full">
                        <div class="flex flex-col mt-1.5 text-black">
                            <p class="self-start text-sm">Finance</p>
                            <h3 class="mt-6 text-2xl font-bold">Senior Financial Analyst</h3>
                        </div>
                        <a href="#"
                            class="z-10 self-stretch px-10 py-4 text-lg font-bold leading-loose text-white uppercase bg-red-600 min-w-[160px] max-md:px-5 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            role="button">
                            View job
                        </a>
                    </article>
                    <article
                        class="flex flex-wrap gap-5 justify-between items-start pt-6 pb-12 w-full max-md:max-w-full">
                        <div class="flex flex-col mt-1.5 text-black">
                            <p class="self-start text-sm">Finance</p>
                            <h3 class="mt-7 text-2xl font-bold">Strategy Analyst</h3>
                        </div>
                        <a href="#"
                            class="z-10 self-stretch px-10 py-4 text-lg font-bold leading-loose text-white uppercase bg-red-600 min-w-[160px] max-md:px-5 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            role="button">
                            View job
                        </a>
                    </article>
                    <article
                        class="flex flex-wrap gap-5 justify-between items-start pt-6 pb-12 w-full max-md:max-w-full">
                        <div class="flex flex-col mt-1.5 text-black max-md:max-w-full">
                            <p class="self-start text-sm">Development</p>
                            <h3 class="mt-6 text-2xl font-bold max-md:max-w-full">
                                Manager, Restaurant Design & Customer Experience
                            </h3>
                        </div>
                        <a href="#"
                            class="z-10 self-stretch px-10 py-4 text-lg font-bold leading-loose text-white uppercase bg-red-600 min-w-[160px] max-md:px-5 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            role="button">
                            View job
                        </a>
                    </article>
                    <article
                        class="flex flex-wrap gap-5 justify-between items-start pt-6 pb-12 w-full max-md:max-w-full">
                        <div class="flex flex-col mt-1.5 text-black">
                            <p class="self-start text-sm">Human Resources</p>
                            <h3 class="mt-6 text-2xl font-bold">
                                Manager, Team Member Experience
                            </h3>
                        </div>
                        <a href="#"
                            class="z-10 self-stretch px-10 py-4 text-lg font-bold leading-loose text-white uppercase bg-red-600 min-w-[160px] max-md:px-5 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            role="button">
                            View job
                        </a>
                    </article>
                </div>
            </section>
        </div>

</x-guest-layout>
