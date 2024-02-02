<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <style>
        :root {
            --litepicker-container-months-color-bg: #fff !important;
            --litepicker-button-prev-month-color: #020202 !important;
            --litepicker-button-next-month-color: #020202 !important;
            --litepicker-button-prev-month-color-hover: #023887 !important;
            --litepicker-button-next-month-color-hover: #023887 !important;
            --litepicker-day-color-hover: #023887 !important;
            --litepicker-is-start-color-bg: #023887 !important;
            --litepicker-is-end-color-bg: #023887 !important;
            --litepicker-is-in-range-color: #F5F5F5 !important;
        }

        .litepicker {
            font-family: gilroy-reguler;
            font-size: 1em;
            display: none;
        }
    </style>


    @livewireStyles
</head>

<body class="bg-[#F6FCFF]">
    <!-- navbar -->
    <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
        <nav x-data="{ open: false }"
            class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-40">
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

    <div class="w-full py-20">
        <h1 class="text-primary md:text-4xl text-3xl font-semibold md:mt-16 mt-10 leading-tight subpixel-antialiased tracking-wider text-center"
            style="font-family: gilroy-bold;">NEWS</h1>

        <div class="flex justify-between px-6 md:px-20 sm:px-6 md:py-5 py-10 relative md:gap-64 gap-10 mt-10">
            {{-- Search --}}
            <form class="relative items-center w-full" style="font-family: gilroy-medium;">
                <div class="relative w-full">
                    <a class="flex absolute inset-y-0 right-0 items-center pr-3" href="#">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-3 p-2.5 "
                        placeholder="Search Article" required>
                </div>
            </form>

            {{-- Mobile Filter --}}
            <div class="md:hidden block z-50">
                <button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown"
                    class="text-gray-800 bg-white hover:bg-gray-100 border focus:outline-none focus:bg-gray-100 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">Filter <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="hidden z-50 w-full bg-[#F6FCFF] rounded-lg shadow px-6 py-6">
                    {{-- Select category --}}
                    <button id="MobileCategory" data-dropdown-toggle="dropdownCategory"
                        class="inline-flex justify-between items-center md:w-60 w-full py-3 px-4 text-sm text-center text-gray-900 border-gray-300 border rounded-xl bg-gray-50"
                        type="button">Category <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownCategory" class="absolute hidden z-50 w-60 h-fit bg-gray-50 rounded-xl shadow"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul class="overflow-y-auto px-3 py-3 h-fit text-sm text-gray-900 z-30"
                            aria-labelledby="dropdownCategory">
                            <li>
                                <div class="flex items-center p-2 rounded-lg hover:bg-gray-100">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-50 rounded border-gray-300 focus:ring-gray-500 focus:ring-2">
                                    <label for="checkbox-item-11"
                                        class="ml-2 w-full text-sm text-gray-900 rounded">Category1</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded-lg hover:bg-gray-100">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-gray-500 focus:ring-2">
                                    <label for="checkbox-item-11"
                                        class="ml-2 w-full text-sm text-gray-900 rounded ">Category2</label>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center p-2 rounded-lg hover:bg-gray-100">
                                    <input id="checkbox-item-11" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-gray-500 focus:ring-2">
                                    <label for="checkbox-item-11" class="ml-2 w-full text-sm text-gray-900 rounded">
                                        Category3
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>


                    {{-- Datepicker --}}
                    <div class="relative font-semibold w-full mt-4 bg-gray-50" style="font-family: gilroy-reguler">
                        <div class="flex absolute items-center top-3 pl-3 pointer-events-none bg-gray-50">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="daterange" type="text"
                            class="bg-gray-50 border border-gray-300 placeholder:text-gray-500 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                            placeholder="Select date">
                    </div>
                </div>

            </div>

            <div class="md:flex gap-5 w-full hidden font-semibold" style="font-family: gilroy-reguler">
                {{-- Select category --}}
                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                    class="inline-flex justify-between items-center w-full py-2 px-4 text-sm text-center text-gray-900 border rounded-xl bg-white"
                    type="button">Category <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownSearch" class="hidden z-10 w-60 bg-white rounded-xl shadow"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 482.4px, 0px);">
                    <ul class="overflow-y-auto px-3 py-3 h-fit text-sm text-gray-900"
                        aria-labelledby="dropdownSearchButton">
                        <li>
                            <div class="flex items-center p-2 rounded-lg hover:bg-gray-100">
                                <input id="checkbox-item-11" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-gray-500 focus:ring-2">
                                <label for="checkbox-item-11"
                                    class="ml-2 w-full text-sm text-gray-900 rounded">Category1</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-lg hover:bg-gray-100">
                                <input id="checkbox-item-11" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-gray-500 focus:ring-2">
                                <label for="checkbox-item-11"
                                    class="ml-2 w-full text-sm text-gray-900 rounded ">Category2</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-lg hover:bg-gray-100">
                                <input id="checkbox-item-11" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-gray-500 focus:ring-2">
                                <label for="checkbox-item-11" class="ml-2 w-full text-sm text-gray-900 rounded">
                                    Category3
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Datepicker --}}
                <div class="relative font-semibold w-full bg-gray-50" style="font-family: gilroy-reguler">
                    <div class="relative w-36 lg:w-56 md:w-36">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0  00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="daterange" class="block bg-white text-gray-400 border-gray-200 shadow sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-2 placeholder-gray-400 font-medium" placeholder="Select Date">
                    </div>
                </div>

                {{-- Button --}}
                {{-- <a href="#">
                    <button class="px-6 py-2 bg-primary rounded-lg text-white font-bold"
                        style="font-family: gilroy-reguler;">Apply</button>
                </a> --}}
            </div>
        </div>

        {{-- Card News --}}
        <div class="pb-10 w-full md:px-20 sm:px-6 px-6">
            <div  class="grid md:grid-cols-3 justify-center gap-6 w-full">
                @foreach ($news as $article)
                <livewire:components.card-news  :article="$article"  >
                @endforeach
                    {{-- <livewire:components.card-news>
                        <livewire:components.card-news>
                            <livewire:components.card-news>
                                <livewire:components.card-news>
                                    <livewire:components.card-news>
                                        <livewire:components.card-news>
                                            <livewire:components.card-news>
                                                <livewire:components.card-news>
                                                    <livewire:components.card-news>
                                                        <livewire:components.card-news> --}}
            </div>
        </div>

    </div>
    <livewire:footer.footer>
        <button id="to-top-button" onclick="goToTop()" title="Go To Top"
            class="hidden fixed z-50 md:bottom-24 bottom-12 md:right-20 right-6 border-0 w-12 h-12 rounded-full drop-shadow-md bg-primary text-white text-3xl font-bold items-center">
            <i class="bx bxs-chevron-up"></i>
        </button>
         <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
         <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
         <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
         <script>
            $(function() {
                $('input[name="daterange"]').daterangepicker({
                    opens: 'left'
                }, function(start, end, label) {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                        .format('YYYY-MM-DD'));
                });
            });
        </script>
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
            window.Livewire.emit



        </script>

@livewireScripts

        @livewireStyles
</body>

</html>
