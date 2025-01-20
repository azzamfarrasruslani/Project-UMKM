

@section('title', 'Sign in')
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    <div class="flex flex-wrap -mx-3">
                        <div
                            class="flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-4">
                                    <h4 class="font-bold text-2xl">Sign In</h4>
                                </div>
                                <div class="mx-5 max-w-full px-10">
                                    <!-- Tombol Login dengan Google -->
                                    <a href="{{ route('google.login') }}"
                                        class="flex items-center justify-center w-full px-5 py-2.5 mb-2 font-bold text-center text-gray-200 capitalize transition-all border-2 border-red-300 rounded-lg cursor-pointer hover:-translate-y-px hover:border-red-300 hover:text-blue-500 ease-in-out duration-200">
                                        <!-- Ikon Google -->
                                        <svg width="24px" height="24px" viewBox="0 0 64 64"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd">
                                                <path
                                                    d="M57.812,30.152 C57.812,27.726 57.616,25.957 57.19,24.121 L29.496,24.121 L29.496,35.067 L45.752,35.067 C45.424,37.788 43.654,41.884 39.721,44.637 L39.666,45.004 L48.422,51.787 L49.029,51.848 C54.6,46.702 57.812,39.131 57.812,30.152 Z"
                                                    fill="#4285F4"></path>
                                                <path
                                                    d="M29.496,58.992 C37.46,58.992 44.146,56.37 49.029,51.848 L39.721,44.637 C37.231,46.374 33.888,47.587 29.496,47.587 C21.696,47.587 15.076,42.442 12.716,35.33 L3.265,42.405 L3.146,42.736 C7.997,52.372 17.96,58.992 29.496,58.992 Z"
                                                    fill="#34A853"></path>
                                                <path
                                                    d="M12.716,35.33 C12.093,33.494 11.733,31.528 11.733,29.496 C11.733,27.464 12.093,25.498 12.683,23.662 L12.667,23.272 L3.448,16.112 L3.146,16.255 C1.147,20.254 0,24.744 0,29.496 C0,34.248 1.147,38.738 3.146,42.736 L12.716,35.33 Z"
                                                    fill="#FBBC05"></path>
                                                <path
                                                    d="M29.496,11.405 C35.035,11.405 38.771,13.798 40.901,15.797 L49.226,7.669 C44.113,2.917 37.46,0 29.496,0 C17.96,0 7.997,6.62 3.146,16.255 L12.683,23.662 C15.076,16.551 21.696,11.405 29.496,11.405 Z"
                                                    fill="#EB4335"></path>
                                            </g>
                                        </svg>
                                        <!-- Teks Google -->
                                        <span class="ml-2 text-slate-400 text-base">Sign in with Google</span>
                                    </a>
                                    <!-- Pesan error jika akun Google tidak terdaftar -->
                                    @if (session('error'))
                                        <div class="text-red-600 mt-2">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                                    <p
                                        class="z-20 inline px-4 mb-0 font-semibold leading-normal  text-base text-slate-400">
                                        or
                                    </p>
                                </div>
                                <div class="flex-auto p-4">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="mb-4">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal  outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                type="email" name="email" :value="old('email')" required autofocus
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <!-- Password -->
                                        <div lass="mb-4">
                                            <x-input-label for="password" :value="__('Password')" />

                                            <x-text-input id="password"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal  outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                type="password" name="password" required
                                                autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                    name="remember">
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        {{-- <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif


                                        </div> --}}

                                        <div class="text-center">
                                            <!-- <button type="button"
                                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Sign
                                                in</button> -->
                                            <x-primary-button
                                                class="w-full px-6 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-red-400  border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 flex justify-center">
                                                {{ __('Sign in') }}
                                            </x-primary-button>


                                        </div>
                                    </form>
                                </div>
                                {{-- <div
                                    class="border-black/12.5 rounded-b-2xl  border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                                    <p class="mx-auto mb-6 leading-normal text-sm">Don't have an account? <a
                                            href="{{ route('register') }}"
                                            class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Sign
                                            up</a></p>
                                </div> --}}
                            </div>
                        </div>
                        <!-- <div
                            class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                            <div
                                class="bg-custom-bg1  relative flex flex-col justify-center h-full bg-cover bg-center px-24 m-4 overflow-hidden rounded-xl">
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-gradient-to-tl from-blue-500 to-violet-500 opacity-20"></span>
                                <h4 class="relative z-10 mt-12 font-bold text-white">"Attention is the new currency"
                                </h4>
                                <p class="relative z-10 text-white">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p>
                            </div>
                        </div> -->
                        <div
                            class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                            <div class="shadow-2xl relative flex flex-col justify-center h-full bg-cover bg-center px-24 m-4 overflow-hidden rounded-xl"
                                style="background-image: url('/assets/images/login-bg.svg');">
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-gradient-to-tl from-blue-500 to-violet-500 opacity-20"></span>
                                <h4 class="relative z-10 -mt-68 font-bold text-white">"Login"
                                </h4>
                                <p class="relative z-10 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Dignissimos nisi fugiat omnis?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
