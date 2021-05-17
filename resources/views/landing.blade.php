<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- favicon --}}
    <link rel="icon" href="{{ asset('images/favicon.png') }}">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
{{-- Header --}}
{{-- <header class="text-gray-600 body-font" id="home" >
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto ">
            <a class="mr-5 hover:text-gray-900" href="#home" >Home</a>
            <a class="mr-5 hover:text-gray-900" href="#features" >Features</a>
            <a class="mr-5 hover:text-gray-900" href="#testimonial" >Testimonial</a>
            <a class="mr-5 hover:text-gray-900">Pricing</a>
            <a class="hover:text-gray-900">Contact</a>
        </nav>
        <a
           class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <img src="{{ asset('images/logo.svg') }}" alt="img">
</a>
<div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
    <button
            class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
             class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
    </button>
</div>
</div>
</header> --}}


{{-- <nav class="bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300" href="#">
                    <img src="{{ asset('images/logo.svg') }}" alt="img">
</a>
</div>

<!-- Mobile menu button -->
<div class="flex md:hidden">
    <button type="button"
            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
            aria-label="toggle menu">
        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
            <path fill-rule="evenodd"
                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
            </path>
        </svg>
    </button>
</div>
</div>

<!-- Mobile Menu open: "block", Menu closed: "hidden" -->
<div class="items-center md:flex">
    <div class="flex flex-col md:flex-row md:mx-6">
        <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
           href="#">Home</a>
        <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
           href="#">Shop</a>
        <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
           href="#">Contact</a>
        <a class="my-1 text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
           href="#">About</a>
    </div>

    <div class="flex justify-center md:block">
        <a class="relative text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="#">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="absolute top-0 left-0 p-1 text-xs text-white bg-indigo-500 rounded-full"></span>
        </a>
    </div>
</div>
</div>
</nav> --}}

<!-- component -->
<div class="bg-grayDark" x-data="{ atTop: true }"
     x-on:scroll.window="atTop =( window.pageYOffset > 10) ? false : true ">
    <div class="w-full text-gray-700 bg-white h-20 fixed top-0 animated z-40"
         x-bind:class='{ "bg-black shadow-lg": !atTop }'>
        <div x-data="{ open: false }"
             class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-between md:flex-row">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="home.html" class="tracking-widest rounded-lg focus:outline-none focus:shadow-outline">
                    <img src="{{ asset('images/logo.svg') }}" alt="img" class="w-56 ">
                    <path fill="currentColor"
                          d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z">
                    </path>
                    </svg>
                </a>
                <a href="#">Hello</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <span class="text-lg text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                          </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                 class="flex-col flex-grow pb-4 hidden bg-white shadow-lg rounded-b">
                <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="#">Home</a>
                <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="#">Features</a>
                <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="#">Testimonial</a>
                <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="#">Notifikasi 1</a>
            </nav>
            <nav class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row bg-white">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="flex flex-row items-center w-full px-3 py-1 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:mt-0 md:ml-2 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span class="text-lg text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                              </svg>
                        </span>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow">
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                              </svg> Home
                            </a>
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                              </svg> Features
                            </a>
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                              </svg> Testimonial
                            </a>
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg> Pricing
                            </a>
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                              </svg> Contact
                            </a>
                            <hr>
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                              </svg> login
                            </a>
                            <a class="block px-4 py-2 mt-2  bg-transparent rounded-lg  text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                              </svg> Register
                            </a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>






<body class="font-sans antialiased">
    {{-- Hero section --}}

    {{-- Header2 --}}
    <section id="Hero" class="text-gray-100 body-font">
        <div
             class="mx-auto flex px-5 py-96 items-center justify-center flex-col bg-black bg-center bg-cover bg-opacity-75">
            {{-- <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1529270296466-b09d5f5c2bab?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWVudXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"> --}}
            <div class="text-center lg:w-2/3 w-full group">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-100 wow fadeInUp" data-wow-delay="1s" >Your Menu</h1>
                <p class="mb-8 leading-relaxed wow slideInLeft " data-wow-delay="1.3s" >Present your menu the right way!</p>
                <div class="flex justify-center">
                    <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                </div>
            </div>
        </div>
    </section>
    {{-- End  --}}

    {{-- End of hero  --}}
    {{-- Features section  --}}
    <section id="features" class="text-gray-600 body-font">

        <h2 class="title-font sm:text-4xl text-3xl mb-4 font-medium
        text-gray-700 text-center py-12 wow slideInLeft " >How it works?</h2>

        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                <img alt="feature" class="object-cover object-center h-4/5 w-full rounded-lg wow slideInLeft"
                     src="{{ asset('images/Spash.jpg') }}">
            </div>
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                         class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange text-white mb-5 wow slideInRight">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3 wow slideInRight ">Prepare your Menu</h2>
                        <p class="leading-relaxed text-base wow slideInRight ">Prepare your menu in a simple and painless way.</p>
                        <a class="mt-3 text-teal inline-flex items-center wow slideInRight ">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                         class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-teal text-white mb-5
                         wow slideInRight">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                        </svg>

                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3 wow slideInRight">Your client arrives</h2>
                        <p class="leading-relaxed text-base wow slideInRight">Let your client scan the menu QR code.</p>
                        <a class="mt-3 text-teal inline-flex items-center wow slideInRight">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                         class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange text-white mb-5
                         wow slideInRight">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3 wow slideInRight">Happy User</h2>
                        <p class="leading-relaxed text-base wow slideInRight">Let the menu present it self to the user. </p>
                        <a class="mt-3 text-teal inline-flex items-center wow slideInRight">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End Feature --}}

    {{-- testimonial --}}

    <section class="text-gray-600 body-font bg-gray-100 " id="testimonial">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial"
                             class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                             src="https://dummyimage.com/302x302">
                        <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki
                            taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote
                            bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-purple-700 mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                        <p class="text-gray-500">Senior Product Designer</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial"
                             class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                             src="https://dummyimage.com/300x300">
                        <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki
                            taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote
                            bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-teal mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
                        <p class="text-gray-500">UI Develeoper</p>
                    </div>
                </div>
                <div class="lg:w-1/3 lg:mb-0 p-4">
                    <div class="h-full text-center">
                        <img alt="testimonial"
                             class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100"
                             src="https://dummyimage.com/305x305">
                        <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki
                            taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote
                            bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                        <span class="inline-block h-1 w-10 rounded bg-orange mt-6 mb-4"></span>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
                        <p class="text-gray-500">CTO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End of testimonial  --}}

    {{-- Pricing --}}
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Whatever cardigan tote bag tumblr
                    hexagon brooklyn asymmetrical.</p>
                <div class="flex mx-auto border-2 border-indigo-500 rounded overflow-hidden mt-6">
                    <button class="py-1 px-4 bg-indigo-500 text-white focus:outline-none">Monthly</button>
                    <button class="py-1 px-4 focus:outline-none">Annually</button>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">START</h2>
                        <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">Free</h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>
                        <button
                                class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Button
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.
                        </p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div
                         class="h-full p-6 rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
                        <span
                              class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">PRO</h2>
                        <h1
                            class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$38</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>
                        <button
                                class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Button
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.
                        </p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
                        <h1
                            class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$56</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>
                        <button
                                class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Button
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.
                        </p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SPECIAL</h2>
                        <h1
                            class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$72</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tumeric plaid portland
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hexagon neutra unicorn
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Vexillologist pitchfork
                        </p>
                        <p class="flex items-center text-gray-600 mb-6">
                            <span
                                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Mixtape chillwave tumeric
                        </p>
                        <button
                                class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Button
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End of pricing --}}
    {{-- Contact --}}
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                    scrolling="no"
                    src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div
                 class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion
                    axe</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                    artisan.</p>
            </div>
        </div>
    </section>
    {{-- End of contact  --}}
    {{-- Footer --}}
    <footer class="text-gray-600 body-font">
        <div
             class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                         stroke-linejoin="round" stroke-width="2"
                         class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Tailblocks</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                       target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>

</body>

<style>
    #Hero {
        background-image: url("https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80");
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        z-index: -1;
    }

</style>

<script src="{{ asset('js/wow.js') }}"></script>
<script>
  new WOW().init();
</script>

</html>
