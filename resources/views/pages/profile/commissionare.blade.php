<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Director</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    @livewireStyles
</head>

<body class="bg-[#F6FCFF]">
    <!-- navbar -->
    <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
        <nav x-data="{ open: false }"
            class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md">
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
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-primary text-sm font-bold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-10 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider">
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
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800" style="font-family: gilroy-medium;">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/about-us') }}">About Us</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{url('/structural')}}">Organizational Structure</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{url('/ourPeople')}}">Our People</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{url('/commissionare')}}">Commissionare & Directore</a>
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
                                href="{{url('/service')}}">Services</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{url('/product')}}">Product</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
                        <span style="font-family: gilroy-medium;">Insight</span>
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
                                href="{{url('/news')}}">News</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{url('/gallery')}}">Gallery</a>
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

    <!-- Commisionare & Director -->
    <div class="flex flex-col justify-center gap-10 items-center px-4 md:px-0 py-[150px]">
        <h1 class="text-primary md:text-4xl text-2xl font-semibold uppercase leading-tight subpixel-antialiased tracking-wider text-center"
            style="font-family: gilroy-bold;">DIRECTOR</h1>
        <div class="justify-center items-center md:mt-12 my-auto">
            <div class="card bg-white px-20 py-12 flex flex-col gap-10 items-center shadow-md rounded-3xl w-full cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:shadow-lg"
                type="button" data-modal-toggle="ceoModal">
                <img src="{{ asset('images/new/Ellipse 16-1.png') }}" alt=""
                    class="w-40 h-40 object-cover rounded-full">
                <div>
                    <p style="font-family: gilroy-medium;" class="text-lg text-gray-500 text-center">Chief Executive Officer</p>
                    <h1 style="font-family: gilroy-bold;" class="text-xl text-primary text-center underline">Harryadin Mahardika
                    </h1>
                </div>
            </div>
            <!-- Main modal -->
            <div id="ceoModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow px-16 py-16">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start rounded-t dark:border-gray-600">
                            <div class="flex md:flex-row flex-col gap-4 md:items-center justify-center">
                                <img src="{{ asset('images/new/Ellipse 16-1.png') }}" alt=""
                                    class="w-20 h-20 object-cover rounded-full">
                                <div>
                                    <h1 style="font-family: gilroy-bold;" class="text-xl text-primary text-left">
                                        Harryadin Mahardika
                                    </h1>
                                    <p style="font-family: gilroy-medium;" class="text-lg text-gray-500 text-left">
                                        Chief Executive Officer</p>
                                </div>
                            </div>
                            <!-- close button -->
                            <button type="button"
                                class="text-red-500 bg-transparent hover:bg-red-200 hover:text-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                data-modal-toggle="ceoModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="py-6">
                            <p class="text-base leading-relaxed text-gray-900 text-justify" style="font-family: gilroy-medium;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet
                                luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                                praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi
                                etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare
                                quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor
                                condimentum lacinia quis vel eros donec ac odio
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-0 w-full">
        <livewire:footer.footer>
    </div>

    @livewireStyles
</body>

</html>
