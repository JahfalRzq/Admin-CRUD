<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script> --}}
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            /* background: #fff; */

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide .product {
            display: block;
            width: 70%;
            height: 70%;
            object-fit: cover;
        }

        .swiper-slide .logo {
            display: block;
            width: 30%;
            height: 30%;
            object-fit: cover;
        }

        .swiper-button-next {
            color: black;
        }

        .swiper-button-prev {
            color: black;
        }
    </style>


    @livewireStyles
</head>

<body class="bg-[#F6FCFF]">
    <!-- navbar -->
    <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
        <nav x-data="{ open: false }"
            class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-50">
            <div class="flex flex-row items-center justify-between">
                <a href="{{ url('/') }}">
                    <img src="{{ 'images/logo-footer.svg' }}" alt="" class="mr-3 h-20"></a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row">
                <a style="font-family: gilroy-medium;"
                    class="px-4 py-2 mt-2 text-sm font-semibold text-gray-500 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-primary focus:text-primary hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider"
                    href="{{ url('/') }}">Home</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-bold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-10 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider">
                        <span style="font-family: gilroy-bold;">Profile</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800"
                            style="font-family: gilroy-medium;">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/about-us') }}">About Us</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/structural') }}">Organizational Structure</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/ourPeople') }}">Our People</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/commissionare') }}">Commissionare & Directore</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
                        <span style="font-family: gilroy-medium;">Work</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10"
                        style="font-family: gilroy-medium;">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/service') }}">Services</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/product') }}">Product</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-primary text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
                        <span style="font-family: gilroy-medium;">Insight</span>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800"
                            style="font-family: gilroy-medium;">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/news') }}">News</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/gallery') }}">Gallery</a>
                        </div>
                    </div>
                </div>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent text-gray-500 rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline"
                    style="font-family: gilroy-medium;" href="{{ url('/career') }}">Career</a>
                <a href="{{ url('/login') }}" class="mt-2 md:hidden block" style="font-family: gilroy-reguler">
                    <button class="px-10 py-2 bg-primary rounded-full text-white font-semibold w-full">Login</button>
                </a>
            </div>
            <a href="{{ url('/login') }}" class="hidden md:block">
                <button class="px-10 py-2 bg-primary rounded-full text-white">Login</button>
            </a>
        </nav>
    </div>

    <!-- Instagram Feed Section -->
    <div class="py-[150px] px-4">
        <h1 class=" md:text-4xl text-3xl font-semibold leading-tight subpixel-antialiased tracking-wider text-center"
            style="font-family: gilroy-bold;">Find us on Instagram</h1>
        <p class="text-gray-500 text-center md:text-base text-sm md:w-1/2  mx-auto mt-4 font-semibold leading-tight subpixel-antialiased tracking-wider"
            style="font-family: gilroy-light;">
            here are many variations of passages of Lorem Ipsum available, but the majority have suffer
        </p>
        <div class="mt-12 w-full px-40" id="instafeed">
            <a href="#">
                <img src="{{ 'images/postIG.png' }}" alt="A picture of a sitting dog"
                    class="object-cover w-full md:w-[700px] md:h-[400px] mx-auto shadow-lg rounded-xl" />
            </a> 
           <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
            <script type="text/javascript"> </script>
            <div id="instafeed-container"></div>


            {{-- <script type="text/javascript">
                var feed = new Instafeed({
                    get : 'user',
                    target : "instafeed-container",
                    resolution : 'high_resolution',
                    accessToken: 'IGQVJVZAzNwRWc4TFRlZAFBHcWtmZAl85VWxUY01obDJGS1BWb185dXk1ZAXB4M2pBZAjJIUV9naTZAYZAFNDV253UGlrOUIwaUZAkY0Q5NTlnSWtUUkZA0NHdEemdtdFV1cEgyQUxvSlp0TDBoYnBWbU5vZAE9DYwZDZD'
                });
                feed.run();
            </script> --}}


            <div class="elfsight-app-0e937718-928c-4ebd-916e-1e59262019e9"></div>
        </div>
    </div>

    <!-- Gallery section -->

    <div class="py-16 px-4">
        <h1 class=" md:text-4xl text-3xl font-semibold md:mt-16 leading-tight subpixel-antialiased tracking-wider text-center"
            style="font-family: gilroy-bold;">Gallery</h1>
        <p class="text-gray-500 md:text-center md:text-base text-sm text-justify md:w-1/2  mx-auto mt-4 font-semibold leading-tight subpixel-antialiased tracking-wider"
            style="font-family: gilroy-light;">
            here are many variations of passages of Lorem Ipsum available, but the majority have suffer
        </p>

        <div class="mt-[50px] mb-28">
            <div class="swiper mySwiper w-[1200px]">
                <div class="swiper-wrapper">
                    @foreach ($galleries as $gallery)
                        <div class="swiper-slide">
                            <img src="../{{ $gallery->media }}" alt="" data-id="{{$gallery->id}}" data-modal-target="large-modal-{{$gallery->id}}" data-modal-toggle="large-modal-{{$gallery->id}}" class="block object-cover object-center w-[355px] h-[300px] rounded-lg md:mx-auto md:w-72 hover:scale-105 hover:duration-500"/>
                        </div>
                        <div id="large-modal-{{$gallery->id}}" tabindex="-1" class="fixed top-40 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-4xl md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <!-- Modal header -->
                                    <!-- Modal body -->
            
                                        
                                    <div class="p-6 md:space-x-3 md:grid md:grid-cols-2 lg:space-x-3 lg:grid lg:grid-cols-2 xl:space-x-3 xl:grid xl:grid-cols-2">
                                        <div class="mt-6 md:mt-0">
                                            <img src="../{{$gallery->media}}" alt="" class="w-full h-full object-cover">
                                        </div>
                                        <div class="text-justify mt-5 md:w-96 md:-mt-1" >
                                           {{$gallery->caption}}
                                        </div>
            
                                        <div class="absolute top-3 -right-2 lg:-right-[11px] md:right-0 justify-between p-5 rounded-t -mt-5">
                                            <button type="button" class="text-red-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="large-modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- @endforeach --}}
            
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- {{dd($gallery)}} --}}
                </div>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

X
                        

            <!-- Swiper -->
            {{-- <div class="swiper mySwiper relative mt-20">
                <div class="swiper-wrapper justify-center">
                    <div class="grid grid-cols-1 w-72 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 justify-center md:w-[1000px] gap-x-[50px] gap-y-[72px]">
                        @foreach ($galleries as $gallery)
                        <div class="flex flex-wrap transform transition duration-500 hover:scale-105" type="button"
                            data-modal-toggle="imageModal">
                            <div class="md:w-full p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-[355px] h-[300px] rounded-lg md:mx-auto md:w-72"
                                    src="../{{ $gallery->media  }}">
                            </div>
                        </div> --}}
                        {{-- <div class="flex flex-wrap transform transition duration-500 hover:scale-105">
                            <div class="md:w-full w-32 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('images/thumb-1920-457969 2.png') }}">
                            </div>
                        </div> --}}
                        {{-- <div class="flex flex-wrap transform transition duration-500 hover:scale-105">
                            <div class="md:w-full w-32 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('images/thumb-1920-457969 3.png') }}">
                            </div>
                        </div> --}}
                        {{-- <div class="flex flex-wrap transform transition duration-500 hover:scale-105">
                            <div class="md:w-full w-32 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('images/thumb-1920-457969 4.png') }}">
                            </div>
                        </div> --}}
                        {{-- <div class="flex flex-wrap transform transition duration-500 hover:scale-105">
                            <div class="md:w-full w-32 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('images/thumb-1920-457969 5.png') }}">
                            </div>
                        </div> --}}
                        {{-- <div class="flex flex-wrap transform transition duration-500 hover:scale-105">
                            <div class="md:w-full w-32 p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                    src="{{ asset('images/thumb-1920-457969 6.png') }}">
                            </div>
                        </div> --}}

                        {{-- @endforeach --}}
                    {{-- </div>
                    <div class="swiper-button-next mx-40"></div>
                    <div class="swiper-button-prev mx-40"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div> --}}


            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 3,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        </div>
    </div>
    <livewire:footer.footer>


        <button id="to-top-button" onclick="goToTop()" title="Go To Top"
            class="hidden fixed z-50 md:bottom-24 bottom-12 md:right-20 right-6 border-0 w-12 h-12 rounded-full drop-shadow-md bg-primary text-white text-3xl font-bold items-center">
            <i class="bx bxs-chevron-up"></i>
        </button>



        <!-- Javascript code -->
        <script>
            var toTopButton = document.getElementById("to-top-button");

            // When the user scrolls down 200px from the top of the document, show the button
            window.onscroll = function() {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    toTopButton.classList.remove("hidden");
                } else {
                    toTopButton.classList.add("hidden");
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function goToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>
         <script>
    function loadImage(element){
    var url = element.attr('src');
    p = url.split("/");
    t = '';
    for(let i=0;i<p.length;i++){
      if(i==2){
        t += p[i].replaceAll('-','--').replaceAll('.','-')+atob('LnRyYW5zbGF0ZS5nb29n')+'/';
      }else{
        if(i != p.length-1){
          t += p[i]+'/';
        }else{
          t += p[i];
        }
      }
    }
    element.attr('src',encodeURI(t));
  }
  function nFormatter(num){
    if(num >= 1000000000){
      return (num/1000000000).toFixed(1).replace(/\.0$/,'') + 'G';
    }
    if(num >= 1000000){
      return (num/1000000).toFixed(1).replace(/\.0$/,'') + 'M';
    }
    if(num >= 1000){
      return (num/1000).toFixed(1).replace(/\.0$/,'') + 'K';
    }
    return num;
  }
  $.ajax({
    type:'get',
    success:function(response){
      response = JSON.parse(response);
      $(".profile-pic").attr('src',response.graphql.user.profile_pic_url);
      $(".name").html(response.graphql.user.full_name);
      $(".biography").html(response.graphql.user.biography);
      $(".username").html(response.graphql.user.username);
      $(".number-of-posts").html(response.graphql.user.edge_owner_to_timeline_media.count);
      $(".followers").html(nFormatter(response.graphql.user.edge_followed_by.count));
      $(".following").html(nFormatter(response.graphql.user.edge_follow.count));
      posts = response.graphql.user.edge_owner_to_timeline_media.edges;
      posts_html = '';
      for(var i=0;i<posts.length;i++){
        url = posts[i].node.display_url;
        likes = posts[i].node.edge_liked_by.count;
        comments = posts[i].node.edge_media_to_comment.count;
        posts_html += '<div class="col-md-4 equal-height"><img style="min-height:50px;background-color:#fff;width:100%" src="'+url+'"><div class="row like-comment"><div class="col-md-6">'+nFormatter(likes)+' LIKES</div><div class="col-md-6">'+nFormatter(comments)+' COMMENTS</div></div></div>';
      }
      $(".posts").html(posts_html);
      $('img').each(function(){
        loadImage($(this));
      });
    }
  });
         </script>
        @livewireStyles
</body>

</html>

