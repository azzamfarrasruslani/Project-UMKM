@section('title', 'Sign up')
<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <main class="mt-0 transition-all duration-200 ease-in-out">
    <section class="min-h-screen">
      <div
        class="bg-center relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl "
        style="background-image: url('/assets/images/login-bg.svg');">
        <span
          class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-800 to-gray-700 opacity-50"></span>
        <div class="container z-10">
          <div class="flex flex-wrap justify-center -mx-3">
            <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
              <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
              <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic culpa accusamus
                fugiat?</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
          <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
            <div
              class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
              <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                <h5>Register with</h5>
              </div>

              <div class="mx-5 max-w-full px-10">
                <!-- Tombol Login dengan Google -->
                <a href="{{ route('google.login') }}"
                  class="flex items-center justify-center w-full px-5 py-2.5 mb-2 font-bold text-center text-gray-200 capitalize transition-all border-2 border-red-300 rounded-lg cursor-pointer hover:-translate-y-px hover:border-red-300 hover:text-blue-500 ease-in-out duration-200">
                  <!-- Ikon Google -->
                  <svg width="24px" height="24px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
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
                  <span class="ml-2 text-slate-400 text-base">Sign up with Google</span>
                </a>
                <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                  <p class="z-20 inline px-4 mb-0 font-semibold leading-normal  text-base text-slate-400">
                    or
                  </p>
                </div>
              </div>
              <div class="flex-auto p-6">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <!-- Name -->
                  <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name"
                      class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                      type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>

                  <!-- Email Address -->
                  <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email"
                      class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                      type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>

                  <!-- Password -->
                  <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password"
                      class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                      type="password" name="password" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>

                  <!-- Confirm Password -->
                  <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation"
                      class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                      type="password" name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>


                  <!-- <div class="min-h-6 pl-7 mb-0.5 block">
                    <input
                      class="w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                      type="checkbox" value="" checked />
                    <label class="mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700" for="flexCheckDefault"> I
                      agree the <a href="javascript:;" class="font-bold text-slate-700">Terms and Conditions</a>
                    </label>
                  </div> -->
                  <x-primary-button class="w-full px-6 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-red-400  border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 flex justify-center">
                  {{ __('Sign up') }}
                  </x-primary-button>
                 
                  <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="{{route('login')}}"
                      class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Sign in</a></p>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</x-guest-layout>