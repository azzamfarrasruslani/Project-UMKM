<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Open+Sans:300,400,600,700|Baloo+Thambi+2|Barlow+Semi+Condensed:ital,wght@1,100|Montserrat:wght@200;300;500;700|Poppins:wght@100;200;300;500;700|Roboto:wght@300&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c23fedd423.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 font-sans antialiased font-normal bg-custonWhite-50 text-start text-base leading-default text-slate-900">
    
        <!-- <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div> -->
        {{ $slot }}
        <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
           
        </div> -->
    </div>
</body>

</html>