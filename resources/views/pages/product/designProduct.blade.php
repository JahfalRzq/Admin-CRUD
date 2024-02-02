<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$products_design->name}}</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <style>
        .swiper {
            width: 80%;
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

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            opacity: 1;
            background: rgba(0, 0, 0, 0.2);
        }

        .swiper-pagination-bullet-active {
            background: #000;
        }

        .swiper-button-next {
            color: transparent;
        }

        .swiper-button-prev {
            color: transparent;
        }

        body {
            background: url("{{ asset('images/Vector 80.png') }}");
            background-repeat: no-repeat;
            background-size: 100vmax;
        }
    </style>

    @livewireStyles
</head>

<body>
    <!-- navbar -->
    <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
        <nav x-data="{ open: false }" class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-40">
            <div class="flex flex-row items-center justify-between">
                <a href="{{ url('/') }}">
                    <img src="{{ 'images/logo-footer.svg' }}" alt="" class="mr-3 h-20"></a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div :class="{ 'flex': open, 'hidden': !open }" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row">
                <a style="font-family: gilroy-medium;" class="px-4 py-2 mt-2 text-sm font-semibold text-gray-500 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-primary focus:text-primary hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider" href="{{ url('/') }}">Home</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-bold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-10 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider">
                        <span style="font-family: gilroy-bold;">Profile</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800" style="font-family: gilroy-medium;">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{ url('/about-us') }}">About Us</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/structural')}}">Organizational Structure</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/ourPeople')}}">Our People</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/commissionare')}}">Commissionare & Directore</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-primary text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
                        <span style="font-family: gilroy-medium;">Work</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10" style="font-family: gilroy-medium;">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/service')}}">Services</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/product')}}">Product</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
                        <span style="font-family: gilroy-medium;">Insight</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800" style="font-family: gilroy-medium;">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/news')}}">News</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline" href="{{url('/gallery')}}">Gallery</a>
                        </div>
                    </div>
                </div>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent text-gray-500 rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline" style="font-family: gilroy-medium;" href="{{ url('/career') }}">Career</a>
                <a href="{{ url('/login') }}" class="mt-2 md:hidden block" style="font-family: gilroy-reguler">
                    <button class="px-10 py-2 bg-primary rounded-full text-white font-semibold w-full">Login</button>
                </a>
            </div>
            <a href="{{ url('/login') }}" class="hidden md:block">
                <button class="px-10 py-2 bg-primary rounded-full text-white">Login</button>
            </a>
        </nav>
    </div>

    {{-- {{dd($products_design)}} --}}
    <!-- Products -->
    <div class="max-w-full md:py-16 py-10 md:min-h-[140vh] min-h-screen" style="font-family: gilroy-medium;">
            <img src="../{{ $products_design->logo}}" alt="" class="mx-auto mt-20 h-[60px]">
            <p class="text-gray-200 text-center mt-4 font-medium text-2xl tracking-wider">{{$products_design->tagline}}
            </p>

            <div class="grid grid-cols-2 mt-10 mx-20 xl:mt-24 xl:mx-[90px] xl:space-x-10">
                <div class="col-span-6 w-80 text-justify mx-auto md:w-[650px] md:text-gray-100 lg:w-[800px] lg:text-gray-100 xl:col-auto xl:w-[650px] text-gray-700 xl:text-gray-100 font-normal text-xl">
                    Integrated Customer 
                    <br><br><br>
                    <span class="md:text-gray-700 lg:text-gray-100">Integrated Customer .</span>

                    <div class="mt-56 absolute md:mt-[350px] lg:mt-[440px] xl:mt-10">
                        <a href="{{$products_design->url}}" target="_blank">
                            <button class="border-2 border-blue-500/50 p-3 rounded-3xl bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] font-medium">View Site</button>
                        </a>
                    </div>
                </div>

                <div class="col-span-6 mt-10 xl:col-auto xl:mt-0">
                    <img src="../{{ $products_design->product_image}}" alt="">
                </div>


            </div>

            <div class="grid grid-cols-2 mt-32 mb-10 md:flex md:mt-40 lg:mt-36 xl:mt-64">
                <div class="col-span-6 mx-auto xl:col-auto">
                    <div class="text-black font-semibold text-3xl">Deliverables</div>
                    <ul class="mt-5 list-inside font-semibold text-gray-700" style="list-style-type:disc">
                        <li>Website</li>
                        <li class="mt-2">Mobile</li>
                        <li class="mt-2">Cloud Hosting</li>
                        <li class="mt-2">Support and Maintenance</li>
                    </ul>
                </div>
                <div class="col-span-6 mx-auto mt-10 md:mt-0 xl:col-auto xl:mt-0">
                    <div class="text-black font-semibold text-3xl">Technologies</div>
                    <ul class="mt-5 list-inside font-semibold text-gray-700" style="list-style-type:disc">
                        <li>Figma</li>
                        <li class="mt-2">Tailwind</li>
                        <li class="mt-2">React Native</li>
                        <li class="mt-2">Laravel</li>
                        <li class="mt-2">MySQL</li>
                    </ul>
                </div>
            </div>
    </div>

    <livewire:footer.footer>

        @livewireStyles
</body>

</html>
