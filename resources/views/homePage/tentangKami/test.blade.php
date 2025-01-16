<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Hut Indonesia - Official Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex flex-col bg-white min-h-screen">
    <header class="w-full bg-white shadow-sm" role="banner">
        <div class="flex flex-wrap gap-7 items-center justify-end pt-3 pr-20 pb-3.5 max-md:px-5">
            <div class="flex shrink-0 self-stretch my-auto h-[26px] w-[75px]"></div>
            <a href="/rewards" class="flex items-center gap-2.5 py-0.5 hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-rose-700" aria-label="Rewards Program">
                <span class="w-[23px] h-[23px]">
                    <img src="/images/rewards-icon.svg" alt="" class="w-full h-full object-contain" aria-hidden="true">
                </span>
                <span class="text-base font-bold text-zinc-900/80">Rewards</span>
            </a>
            <a href="/login" class="flex items-center gap-2.5 py-0.5 hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-rose-700" aria-label="Login or Sign Up">
                <span class="w-[23px] h-[23px]">
                    <img src="/images/user-icon.svg" alt="" class="w-full h-full object-contain" aria-hidden="true">
                </span>
                <span class="text-base font-bold text-zinc-900/80">Login/Sign Up</span>
            </a>
        </div>

        <nav class="flex justify-between items-center px-16 py-4 max-md:px-5" aria-label="Main navigation">
            <a href="/" class="focus:outline-none focus:ring-2 focus:ring-rose-700" aria-label="Pizza Hut Home">
                <img src="/images/pizza-hut-logo.svg" alt="Pizza Hut" class="w-[54px] h-[54px] object-contain">
            </a>

            <div class="flex items-center gap-5">
                <ul class="flex items-center gap-10" role="menubar">
                    <li role="none">
                        <a href="/" class="text-base font-bold uppercase text-stone-800 hover:text-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-700" role="menuitem">Home</a>
                    </li>
                    <li role="none">
                        <a href="/menu" class="text-base font-bold uppercase text-stone-800 hover:text-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-700" role="menuitem">Menu</a>
                    </li>
                    <li role="none">
                        <a href="/brand-story" class="text-base font-bold uppercase text-stone-800 hover:text-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-700" role="menuitem">Brand Story</a>
                    </li>
                    <li role="none">
                        <a href="/party" class="text-base font-bold uppercase text-stone-800 hover:text-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-700" role="menuitem">Party</a>
                    </li>
                </ul>

                <button class="flex items-center gap-3.5 px-7 py-4 hover:bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-700" aria-expanded="false" aria-haspopup="true">
                    <img src="/images/location-pin.svg" alt="" class="w-6 h-6" aria-hidden="true">
                    <div class="flex flex-col text-left">
                        <span class="text-xs font-medium text-black">Deliver To</span>
                        <span class="text-base font-bold text-neutral-950">Choose Location</span>
                    </div>
                </button>

                <a href="/order" class="py-2.5 px-6 text-base font-bold text-white bg-rose-700 rounded-lg hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2 transition-colors">
                    Order Now
                </a>
            </div>
        </nav>
    </header>

    <main role="main">
        <section class="relative min-h-[720px] mt-8" aria-label="Hero section">
            <img src="/images/hero-background.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true">

            <div class="relative px-40 pt-20 max-md:px-5">
                <div class="flex flex-col items-start max-w-[1600px]">
                    <div class="flex overflow-hidden rounded-lg bg-white text-center">
                        <button class="px-16 py-4 font-bold text-white bg-rose-700 hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2" aria-pressed="true">PHR</button>
                        <button class="px-16 py-4 font-medium text-neutral-950/70 border border-neutral-200 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2">Ristorante</button>
                        <button class="px-16 py-4 font-medium text-neutral-950/70 border border-neutral-200 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2">PHD</button>
                    </div>

                    <h1 class="mt-28 text-5xl text-white leading-loose max-md:mt-10">
                        Dine In at Pizza Hut
                    </h1>

                    <p class="mt-8 text-lg text-white leading-7">
                        Whether it's a casual weekday treat or a<br>
                        planned occasion, create your special moment<br>
                        at Pizza Hut with your loved one
                    </p>

                    <div class="flex gap-5 mt-8">
                        <a href="/menu" class="px-20 py-3 text-white border border-white rounded-lg hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 transition-colors">
                            View Menu
                        </a>
                        <a href="/locations" class="px-20 py-3 text-white bg-rose-700 rounded-lg hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2 transition-colors">
                            View Location
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-14 px-20 bg-stone-100 max-md:px-5" aria-labelledby="menu-section">
            <div class="max-w-[1271px] mx-auto text-center">
                <h2 id="menu-section" class="text-4xl text-stone-800 leading-loose">Our Menu</h2>

                <p class="mt-7 text-base font-medium text-neutral-950/70">
                    View our complete menu, from our favorite<br>
                    Pizza & Pasta to our selection of appetizers & snacks
                </p>

                <div class="mt-8 grid grid-cols-2 gap-5 max-md:grid-cols-1">
                    <img src="/images/menu-1.jpg" alt="Featured menu item 1" class="w-full rounded-lg aspect-[0.68] object-cover">
                    <img src="/images/menu-2.jpg" alt="Featured menu item 2" class="w-full rounded-lg aspect-[0.68] object-cover">
                </div>

                <div class="flex justify-center items-center gap-5 mt-5">
                    <button class="p-2 hover:bg-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-rose-700" aria-label="Previous page">
                        <img src="/images/arrow-left.svg" alt="" class="w-6 h-6" aria-hidden="true">
                    </button>
                    <span class="text-lg font-medium">Page 1 of 30</span>
                    <button class="p-2 hover:bg-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-rose-700" aria-label="Next page">
                        <img src="/images/arrow-right.svg" alt="" class="w-6 h-6" aria-hidden="true">
                    </button>
                </div>
            </div>
        </section>

        <section class="mt-20 max-md:mt-10" aria-labelledby="activities-section">
            <div class="max-w-[1600px] mx-auto px-5">
                <h2 id="activities-section" class="text-4xl text-center text-neutral-900 mb-11">
                    Experience fun activities with us
                </h2>

                <div class="grid grid-cols-2 gap-10 max-md:grid-cols-1">
                    <article class="text-center">
                        <img src="/images/junior-program.jpg" alt="Children enjoying Pizza Hut Junior program" class="w-full rounded-2xl aspect-square object-cover">
                        <h3 class="mt-7 text-2xl font-bold text-stone-800">Pizza Hut Junior</h3>
                        <p class="mt-5 text-sm font-medium text-stone-800">
                            Create an unforgettable experience<br>
                            for your little ones at Pizza Hut
                        </p>
                    </article>

                    <article class="text-center">
                        <img src="/images/party-program.jpg" alt="Party celebration at Pizza Hut" class="w-full rounded-2xl aspect-square object-cover">
                        <h3 class="mt-7 text-2xl font-bold text-stone-800">Party at Pizza Hut</h3>
                        <p class="mt-4 text-sm font-medium text-stone-800">
                            Celebrate the best moment and<br>
                            share with your loved ones.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="mt-20 px-12 py-16 bg-stone-800 rounded-3xl max-w-[1600px] mx-auto max-md:px-5" aria-labelledby="rewards-section">
            <div class="grid grid-cols-4 gap-5 max-md:grid-cols-1">
                <div class="col-span-1">
                    <h2 id="rewards-section" class="text-2xl text-white leading-10">
                        Dine in with us and<br>
                        get more with every bite!
                    </h2>
                    <p class="mt-6 font-medium text-white/70">
                        Earn various rewards by dining in our restaurants
                    </p>
                    <a href="/rewards" class="inline-block px-36 py-2.5 mt-5 font-bold text-white bg-rose-700 rounded-lg hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-rose-700 focus:ring-offset-2 transition-colors max-md:px-5">
                        Learn More
                    </a>
                </div>

                <div class="col-span-3 grid grid-cols-3 gap-5 max-md:grid-cols-1">
                    <div class="text-center">
                        <div class="w-[72px] h-[72px] mx-auto flex items-center justify-center border border-gray-200 rounded-lg">
                            <img src="/images/slices-icon.svg" alt="" class="w-[45px] h-[45px]" aria-hidden="true">
                        </div>
                        <h3 class="mt-5 text-2xl font-bold text-white">Earn Slices</h3>
                        <p class="mt-5 text-sm font-medium text-white/70">
                            Earn Slices every Rp10.000 you spend to<br>
                            exchange with various delights.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-[72px] h-[72px] mx-auto flex items-center justify-center border border-gray-200 rounded-lg">
                            <img src="/images/treasure-icon.svg" alt="" class="w-[45px] h-[45px]" aria-hidden="true">
                        </div>
                        <h3 class="mt-5 text-2xl font-bold text-white">Amazing Treasure</h3>
                        <p class="mt-4 text-sm font-medium text-white/70">
                            A chance to get treasures with every<br>
                            online transaction you made.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-[72px] h-[72px] mx-auto flex items-center justify-center border border-gray-200 rounded-lg">
                            <img src="/images/deals-icon.svg" alt="" class="w-[45px] h-[45px]" aria-hidden="true">
                        </div>
                        <h3 class="mt-5 text-2xl font-bold text-white">Deals & Promotions</h3>
                        <p class="mt-5 text-sm font-medium text-white/70">
                            Get exclusive offers for<br>
                            HUT REWARDS members
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative min-h-[640px] mt-20 text-white" aria-label="Delivery promotion">
            <img src="/images/delivery-hero.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true">
            <div class="relative px-16 py-64 max-md:px-5 max-md:py-24">
                <h2 class="text-5xl leading-[81px] max-md:text-4xl max-md:leading-[70px]">
                    No time to dine in? Don't<br>
                    worry, we've got you!
                </h2>
            </div>
        </section>
    </main>

    <footer class="bg-stone-800 px-40 py-14 mt-auto max-md:px-5" role="contentinfo">
        <div class="max-w-[1600px] mx-auto">
            <div class="grid grid-cols-4 gap-5 pb-6 max-md:grid-cols-2">
                <div>
                    <img src="/images/pizza-hut-logo-white.svg" alt="Pizza Hut" class="w-[108px]">
                    <div class="flex gap-5 mt-11">
                        <a href="https://facebook.com/pizzahut" class="w-[27px] h-[27px] hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-white" aria-label="Facebook">
                            <img src="/images/facebook-icon.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="https://twitter.com/pizzahut" class="w-[27px] h-[27px] hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-white" aria-label="Twitter">
                            <img src="/images/twitter-icon.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="https://instagram.com/pizzahut" class="w-[27px] h-[27px] hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-white" aria-label="Instagram">
                            <img src="/images/instagram-icon.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="https://youtube.com/pizzahut" class="w-[27px] h-[27px] hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-white" aria-label="YouTube">
                            <img src="/images/youtube-icon.svg" alt="" aria-hidden="true">
                        </a>
                        <a href="https://tiktok.com/@pizzahut" class="w-[27px] h-[27px] hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-white" aria-label="TikTok">
                            <img src="/images/tiktok-icon.svg" alt="" aria-hidden="true">
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl text-white mb-11">General</h3>
                    <nav aria-label="General links">
                        <ul class="space-y-7 text-base font-medium text-white">
                            <li><a href="/faq" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">FAQ</a></li>
                            <li><a href="/chat" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Live Chat</a></li>
                            <li><a href="/contact" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <h3 class="text-xl text-white mb-11">About Us</h3>
                    <nav aria-label="About us links">
                        <ul class="space-y-7 text-base font-medium text-white">
                            <li><a href="/brand-story" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Brand Story</a></li>
                            <li><a href="/indonesia-story" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Pizza Hut Indonesia Story</a></li>
                            <li><a href="/halal" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Halal Certificate</a></li>
                            <li><a href="/csr" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">CSR</a></li>
                            <li><a href="/party" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Party by Pizza Hut</a></li>
                            <li><a href="/news" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Newsroom</a></li>
                            <li><a href="/locations" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Outlet Location</a></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <h3 class="text-2xl text-white mb-10">Policy</h3>
                    <nav aria-label="Policy links">
                        <ul class="space-y-7 text-base font-medium text-white">
                            <li><a href="/terms" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Terms & Conditions</a></li>
                            <li><a href="/privacy" class="hover:text-rose-300 focus:outline-none focus:ring-2 focus:ring-white">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <p class="text-sm font-medium text-gray-500 mt-6">
                © Pizza Hut Indonesia 2025. All Rights Reserved.
            </p>
        </div>
    </footer>
</div>
</body>
</html>
