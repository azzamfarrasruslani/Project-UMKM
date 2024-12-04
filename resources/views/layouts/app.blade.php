<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/LogoAyamGeprek.png') }}">

    <title>@yield('title')</title>

    <!-- Fonts & Icon -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Open+Sans:300,400,600,700|Baloo+Thambi+2|Barlow+Semi+Condensed:ital,wght@1,100|Montserrat:wght@200;300;500;700|Poppins:wght@100;200;300;500;700|Roboto:wght@300&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
    <link href="{{asset('build/assets/css/nucleo-icons.css')}}" rel="stylesheet">

    <!-- Link CSS DataTables -->
    <link href="https://cdn.datatables.net/2.1.4/css/dataTables.tailwindcss.css" rel="stylesheet">
    <link href="{{asset('build/assets/css/dataTableCustom.css')}}" rel="stylesheet">
    <!-- Calendar -->
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/main.min.css" rel="stylesheet" />
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-white text-slate-300 ">
    <div class="absolute bg-y-50 w-full top-0 bg-custom-bg5 bg-cover min-h-75"
        >
        <span class="absolute top-0 left-0 w-full h-full  opacity-20"></span>
    </div>
    @include('layouts.sideNav')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl ">
        @include('layouts.navbarDashboard')
        {{ $slot }}
        <!-- Footer Start -->
        {{-- <footer class="pt-5 ml-10">
            <div class="w-full px-6 mx-auto">
                <div class=" flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full  mt-0 mb-6 ">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            made with by
                            <a href="https://pcr.ac.id/" class="font-semibold text-slate-700 dark:text-white"
                                target="_blank">Azzam Farras Ruslani</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        </div>
        <!-- Footer End -->
        <div fixed-plugin>
            <a fixed-plugin-button
                class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
                <i class="py-2 pointer-events-none fa fa-cog"> </i>
            </a>
            <!-- -right-90 in loc de 0-->
            <div fixed-plugin-card
                class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200">
                <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                    <div class="float-left">
                        <h5 class="mt-4 mb-0 dark:text-white">Pengaturan</h5>
                        <p class="dark:text-white dark:opacity-80">See our dashboard options.</p>
                    </div>
                    <div class="float-right mt-6">
                        <button fixed-plugin-close-button
                            class="inline-block p-0 mb-4 text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem bg-150 bg-x-25 active:opacity-85 dark:text-white text-slate-700">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr
                    class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0 dark:text-white">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)">
                        <div class="my-2 text-left" sidenav-colors>
                            <span
                                class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-500 to-violet-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                active-color data-color="blue" onclick="sidebarColor(this)"></span>
                            <span
                                class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color="gray" onclick="sidebarColor(this)"></span>
                            <span
                                class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-blue-700 to-cyan-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color="cyan" onclick="sidebarColor(this)"></span>
                            <span
                                class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-emerald-500 to-teal-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color="emerald" onclick="sidebarColor(this)"></span>
                            <span
                                class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-orange-500 to-yellow-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color="orange" onclick="sidebarColor(this)"></span>
                            <span
                                class="py-2.2 text-xs rounded-circle h-5.6 mr-1.25 w-5.6 ease-in-out bg-gradient-to-tl from-red-600 to-orange-600 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700"
                                data-color="red" onclick="sidebarColor(this)"></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-4">
                        <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
                        <p class="text-sm leading-normal dark:text-white dark:opacity-80">Choose between 2 different
                            sidenav
                            types.
                        </p>
                    </div>
                    <div class="flex">
                        <button transparent-style-btn
                            class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
                            data-class="bg-transparent" active-style>White</button>
                        <button white-style-btn
                            class="inline-block w-full px-4 py-2.5 mb-2 ml-2 font-bold leading-normal text-center text-blue-500 capitalize align-middle transition-all bg-transparent border border-blue-500 border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-none hover:border-blue-500"
                            data-class="bg-white">Dark</button>
                    </div>
                    <p class="block mt-2 text-sm leading-normal dark:text-white dark:opacity-80 xl:hidden">You can
                        change
                        the
                        sidenav type just on desktop view.</p>
                    <!-- Navbar Fixed -->
                    <div class="flex my-4">
                        <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
                        <div class="block pl-0 ml-auto min-h-6">
                            <input navbarFixed
                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                type="checkbox" />
                        </div>
                    </div>
                    <hr
                        class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent " />
                    <div class="flex mt-2 mb-12">
                        <h6 class="mb-0 dark:text-white">Light / Dark</h6>
                        <div class="block pl-0 ml-auto min-h-6">
                            <input dark-toggle
                                class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                type="checkbox" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.tailwindcss.js"></script>
    <script src="{{'build/assets/js/plugins/perfect-scrollbar.min.js'}}"></script>

    <!-- Tambahkan file JS argon -->
    <script src="{{ asset('build/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" defer></script>
</body>

</html>
