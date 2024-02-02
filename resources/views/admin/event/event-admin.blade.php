<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Admin</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




    @livewireStyles
</head>
<body class="bg-[#E1EEFB]">
    <div class="flex">
        <livewire:components.admin.sidebar-admin>
        <main class="flex-1 ml-52 divide-x-8 divide-black divide-dotted">
            <div class="grid grid-cols-1 xl:grid-cols-12">
                <div class="col-span-8 h-fit p-10 space-y-10 border-gray-300 xl:border-r-2">
                    <div class="container justify-between items-center sm:flex">
                        <div class="mb-5 sm:mb-0">
                            <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Event</h1>
                            <p class="text-sm text-gray-500 mt-2 font-semibold" style="font-family: gilroy-medium;">100 events posted</p>
                        </div>
                        <div class="relative mb-5 sm:mb-0 sm:mx-3" style="font-family: gilroy-reguler">
                            <input type="search" name="search" id="search-article" placeholder="Search event" class="w-48 rounded-xl  placeholder:text-gray-500 border-none 
                            sm:mx-1 sm:w-72
                            md:mx-1 md:w-96
                            lg:mx-6">
                            <div class="absolute top-0 right-0 mt-2 mr-2 
                            sm:md:lg:mr-7">
                                <a href="#">
                                    <i class="bx bx-search bx-sm text-gray-500"></i>
                                </a>
                            </div>
                        </div>
                        <button class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm" id="showEvent">
                            <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i>New Event</h1>
                        </button>
                    </div>

                    {{-- Events --}}
                    <div class="overflow-auto relative shadow-md sm:rounded-lg bg-white hidden lg:block">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed" style="font-family: gilroy-reguler">
                            <thead class="text-xs text-gray-900 uppercase bg-white">
                                <tr class="font-semibold text-gray-500">
                                    <th scope="col" class="w-60 py-3 px-6">
                                        <div class="flex items-center cursor-pointer">
                                            EVENT
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                    </path>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="w-36 py-3 px-6">
                                        <div class="flex items-center cursor-pointer">
                                            DATE
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                    </path>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="w-32 py-3 px-6">
                                        <div class="flex text-center items-center cursor-pointer">
                                            TIME
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                    </path>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="w-32 py-3 px-6">
                                        <div class="text-center">ACTION</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300 tracking-wider">
                                <tr class="bg-white">
                                    <th scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap">
                                        <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="26px" class="inline-flex mx-2">
                                        Fakhri birthday
                                    </th>
                                    <th class="py-4 px-6 text-gray-800">
                                        03/09/2022
                                    </th>
                                    <th class="py-4 px-6 text-gray-800 font-bold">
                                        All Day
                                    </th>
                                    <th class="pt-3 text-right flex space-x-4">
                                        <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]" id="showEditEvent"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]" type="button" id="deleteBtn"><i class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </th>
                                </tr>
                                <tr class="bg-white">
                                    <th scope="row" class="py-4 px-5 font-semibold text-gray-900 whitespace-nowrap">
                                        <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex mx-2">
                                        HUT RI ke-77
                                    </th>
                                    <th class="py-4 px-6 text-gray-800">
                                        03/09/2022
                                    </th>
                                    <th class="py-4 px-6 text-gray-800">
                                        All Day
                                    </th>
                                    <td class="pt-3 text-right flex space-x-4">
                                        <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]" type="button"><i class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <th scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap">
                                        <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="26px" class="inline-flex mx-2">
                                        Meeting all team
                                    </th>
                                    <th class="py-4 px-6 text-gray-800">
                                        03/09/2022
                                    </th>
                                    <th class="py-4 px-6 text-gray-800">
                                        10:00 - 12:00
                                    </th>
                                    <td class="pt-3 text-right flex space-x-4">
                                        <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]" type="button"><i class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <th scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap">
                                        <img src="https://img.icons8.com/doodle/48/000000/pray.png  " width="26px" class="inline-flex mx-2">
                                        Outbound
                                    </th>
                                    <th class="py-4 px-6 text-gray-800">
                                        03/09/2022
                                    </th>
                                    <td class="py-4 px-6 text-gray-800 font-bold">
                                        All Day
                                    </td>
                                    <td class="pt-3 text-right flex space-x-4">
                                        <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]" type="button"><i class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        {{-- Paginations --}}
                        <div class="relative">
                            <ul class="inline-flex items-center space-x-2 py-4 px-4 w-full justify-end"
                                style="font-family: gilroy-reguler">
                                <li>
                                    <a href="#" class="block">
                                        <i
                                            class="bx bx-chevron-left text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-gradient-to-tr from-[#046CB4] to-[#0398EC] text-base text-white py-2 px-4 rounded-xl font-semibold">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">3</a>
                                </li>
                                <li>
                                    <a href="#" class="block">
                                        <i
                                            class="bx bx-chevron-right text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- RESPONSIVE MOBILE CARD EVENT --}}
                    <div class="grid grid-cols gap-4
                    sm:grid-cols-2 
                    md:grid-cols-1 
                    lg:grid-cols-3 lg:hidden">
                    <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                            <div class="font-semibold 
                            sm:justify-center sm:items-center 
                            md:justify-start md:flex">
                                <div class="truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                    <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="30px" class="inline-flex mx-2">
                                    <span class="mt-2 absolute md:relative">Fakhri birthday</span>
                                </div>
                                <div class="flex text-gray-800 md:mx-5">
                                    <div class="mt-3 md:mt-0">03/09/2022</div>
                                    <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                    <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                    </button>
                                    <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" type="button" id="deleteBtnMobile"><i class="bx bx-trash text-xl px-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                            <div class="font-semibold 
                            sm:justify-center sm:items-center 
                            md:justify-start md:flex">
                                <div class="truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                    <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex mx-2">
                                    <span class="mt-2 absolute md:relative">HUT RI ke-77</span>
                                </div>
                                <div class="flex text-gray-800 md:mx-5">
                                    <div class="mt-3 md:mt-0">03/09/2022</div>
                                    <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                    <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                    </button>
                                    <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" type="button" id="deleteBtnMobile"><i class="bx bx-trash text-xl px-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                            <div class="font-semibold 
                            sm:justify-center sm:items-center 
                            md:justify-start md:flex">
                                <div class="truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="30px" class="inline-flex mx-2">
                                    <span class="mt-2 absolute md:relative">Meeting all team</span>
                                </div>
                                <div class="flex text-gray-800 md:mx-5">
                                    <div class="mt-3 md:mt-0 truncate">10:00 - 12:00</div>
                                    <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                    <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                    </button>
                                    <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" type="button" id="deleteBtnMobile"><i class="bx bx-trash text-xl px-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                            <div class="font-semibold 
                            sm:justify-center sm:items-center 
                            md:justify-start md:flex">
                                <div class="truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                    <img src="https://img.icons8.com/doodle/48/000000/pray.png  " width="30px" class="inline-flex mx-2">
                                    <span class="mt-2 absolute md:relative">Outbound</span>
                                </div>
                                <div class="flex text-gray-800 md:mx-5">
                                    <div class="mt-3 md:mt-0 truncate">03/09/2022</div>
                                    <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                    <button class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                    </button>
                                    <button class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12" type="button" id="deleteBtnMobile"><i class="bx bx-trash text-xl px-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Paginations --}}
                        <div class="relative grid grid-cols-1">
                            <ul class="inline-flex items-center space-x-3 py-4 w-full justify-end"
                                style="font-family: gilroy-reguler">
                                <li>
                                    <a href="#" class="block">
                                        <i
                                            class="bx bx-chevron-left text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-gradient-to-tr from-[#046CB4] to-[#0398EC] text-base text-white py-2 px-4 rounded-xl font-semibold">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">3</a>
                                </li>
                                <li>
                                    <a href="#" class="block">
                                        <i
                                            class="bx bx-chevron-right text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    

                    {{-- Upcoming Event --}}
                        <div class="card bg-white rounded-xl px-6 py-5 w-full float-right shadow-md hidden mt-5 md:block" style="font-family: gilroy-reguler">
                            <h1 class="font-bold text-xl">Closest 3 Upcoming Events</h1>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed">
                                <thead class="text-xs text-gray-900 uppercase bg-white">
                                    <tr style="font-family: gilroy-reguler" class="font-semibold text-gray-500">
                                        <th scope="col" class="py-3 px-6"></th>
                                        <th scope="col" class="py-3 px-6"></th>
                                        <th scope="col" class="py-3 px-6"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b border-gray-300 text-gray-900">
                                        <th scope="row" class="py-4 font-semibold whitespace-nowrap truncate">
                                            <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="26px" class="inline-flex mx-2">
                                            Fakhri birthday
                                        </th>
                                        <th class="py-4 px-6 text-center">
                                            03/09/2022
                                        </th>
                                        <th class="py-4 px-6 text-right">
                                            All day
                                        </th>
                                    </tr>
                                    <tr class="bg-white border-b border-gray-300 text-gray-900">
                                        <th scope="row" class="py-4 font-semibold text-gray-900 whitespace-nowrap truncate">
                                            <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex mx-2">
                                            HUT RI ke-77
                                        </th>
                                        <th class="py-4 px-6 text-center">
                                            03/09/2022
                                        </th>
                                        <th class="py-4 px-6 text-right">
                                            All Day
                                        </th>
                                    </tr>
                                    <tr class="bg-white border-b border-gray-300 text-gray-900">
                                        <th scope="row" class="py-4 font-semibold text-gray-900 whitespace-nowrap truncate">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="26px" class="inline-flex mx-2">
                                            Meeting all team
                                        </th>
                                        <th class="py-4 px-6 text-center">
                                            03/09/2022
                                        </th>
                                        <th class="py-4 px-6 text-right">
                                            10:00 - 12:00
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- RESPONSIVE MOBILE CARD UPCOMING EVENT --}}
                        <div class="grid grid-cols gap-4
                                    sm:grid-cols-2 
                                    md:grid-cols-1 md:hidden
                                    lg:grid-cols-3 lg:hidden">
                            <div class="grid grid-cols px-6 py-5 bg-white rounded-lg shadow-md md:hidden" style="font-family: gilroy-reguler">
                                <h1 class="font-bold text-xl">Closest 3 Upcoming Events</h1>
                            </div>  
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div class="font-semibold 
                                            sm:justify-center sm:items-center 
                                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                        <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="30px" class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">Fakhri birthday</span>
                                    </div>
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0">03/09/2022</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                </div>
                            </div>
                        <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                            <div class="font-semibold 
                            sm:justify-center sm:items-center 
                            md:justify-start md:flex">
                                <div class="truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                    <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex mx-2">
                                    <span class="mt-2 absolute md:relative">HUT RI ke-77</span>
                                </div>
                                <div class="flex text-gray-800 md:mx-5">
                                    <div class="mt-3 md:mt-0">03/09/2022</div>
                                    <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                            <div class="font-semibold 
                            sm:justify-center sm:items-center 
                            md:justify-start md:flex">
                                <div class="sm:truncate text-gray-800 relative md:w-72" style="font-family: gilroy-reguler">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="26px" class="inline-flex mx-2">
                                    <span class="mt-2 absolute md:relative">Meeting all team</span>
                                </div>
                                <div class="flex text-gray-800 md:mx-5">
                                    <div class="mt-3 md:mt-0 whitespace-nowrap">10:00 - 12:00</div>
                                    <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Profile --}}
                <div class="col-span-4 p-10 justify-start">
                    <div class="flex justify-between items-center">
                        <h1 style="font-family: gilroy-reguler" class="text-lg font-semibold">Good Morning!</h1>
                        <button class="inline-block relative">
                            <img src="{{ asset('images/new/iconoir_bell-notification.svg') }}" alt="">
                            <span
                                class="animate-ping absolute top-1 right-1 block h-1 w-1 rounded-full ring-2 ring-red-600 bg-red-600"></span>
                        </button>
                    </div>
                    <livewire:components.admin.profile-admin>
                    {{-- Calendar --}}
                    <div style="font-family: gilroy-reguler;" class="font-semibold text-lg mt-32 sm:mt-20">
                        <h1>Upcoming Events</h1>
                        <livewire:components.admin.calendar-events>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <!-- Create Event Modal -->
        <div id="openEventModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
        class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
            <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-14 sm:mt-24">
                <div id="modalClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg id="modalClose" class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                    <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Create Event</h2>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Event</label>
                        <input style="width: 350px" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lEvent" type="text" placeholder="Event">
                        <div class="mt-3 relative pb-6 sm:inline-flex">
                            <div class="absolute sm:mx-7 my-0">
                                <button class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-24 py-2 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="menuIcon">
                                        Icon <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png" class="inline-flex w-5"/>
                                </button>
                                <div class="pt-1 hidden" id="dropdownIcon">
                                    <ul class="bg-[#f4f4f5] drop-shadow-lg h-full rounded py-2">
                                        <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7">
                                                <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="30px" class="inline-flex">
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7">
                                                <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex">
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="30px" class="inline-flex">
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7">
                                                <img src="https://img.icons8.com/doodle/48/000000/pray.png  " width="30px" class="inline-flex">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mt-10 sm:mt-auto">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEventDetail">Event Detail</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lEventDetail"
                            type="text" placeholder="Detail Event">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lDate">Date</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lDate"
                            type="date" placeholder="Detail Event">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lTime">Time</label>
                        <div class="flex">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lTime"
                                type="time" placeholder="Detail Event">
                            <span class="p-3">-</span>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lTime"
                                type="time" placeholder="Detail Event">
                        </div>
                    </div>

                    <div class="font-bold">
                        <input type="checkbox" class="rounded" id="eventCheck">
                        <label class="mx-1" for="eventCheck">All day</label>
                    </div>

                    <div class="mt-8 text-right">
                        <button type="button"
                            class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest" id="modalCloseEvent">
                            CANCEL
                        </button>
                        <button type="button"
                            class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest">
                            CREATE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Modal -->

    <!-- Edit Event Modal -->
        <div id="openEditEventModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
        class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
            <div class="p-4 max-w-xl mx-auto  absolute left-0 right-0 overflow-hidden mt-14 sm:mt-24">
                <div id="modalCloseEdit" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                    <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Edit Events</h2>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Event</label>
                        <input style="width: 350px"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lEvent"
                            type="text" placeholder="Event">
                            <div class="mt-3 relative pb-6 sm:inline-flex">
                                <div class="absolute sm:mx-7 my-0">
                                    <button class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-24 py-2 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="menuIconEdit">
                                        Icon <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png" class="inline-flex w-5"/>
                                    </button>
                                    <div class="pt-1 hidden" id="dropdownIconEdit">
                                        <ul class="bg-[#f4f4f5] drop-shadow-lg h-full rounded py-2">
                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7">
                                                        <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7">
                                                        <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7">
                                                        <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7">
                                                        <img src="https://img.icons8.com/doodle/48/000000/pray.png  " width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="mb-4 mt-10 sm:mt-auto">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEventDetail">Event Detail</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lEventDetail"
                            type="text" placeholder="Detail Event">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lDate">Date</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lDate"
                            type="date" placeholder="Detail Event">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lTime">Time</label>
                        <div class="flex">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lTime"
                                type="time" placeholder="Detail Event">
                            <span class="p-3">-</span>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lTime"
                                type="time" placeholder="Detail Event">
                        </div>
                    </div>

                    <div class="font-bold">
                        <input type="checkbox" class="rounded" id="eventCheck2">
                        <label class="mx-1" for="eventCheck2">All day</label>
                    </div>

                    <div class="mt-8 text-right">
                        <button type="button"
                            class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest" id="modalCloseEditEvent">
                            CANCEL
                        </button>
                        <button type="button"
                            class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest">
                            SAVE CHANGES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Modal -->


    <!-- Delete Confirmation -->
            <div class="hidden bg-black bg-opacity-50 fixed inset-0 z-40 w-full" id="overlayModal">
                    <div class="relative w-auto my-6 mx-auto max-w-xl">
                        <!--content-->
                        <div class="absolute border-0 rounded-lg shadow-lg flex flex-row max-w-xl bg-white outline-none focus:outline-none p-6 top-52">
                            <img src="{{ asset('images/new/delete-illustrations.svg') }}" alt="">
                            <div class="">
                                <h3 class="text-2xl font-semibold text-start">
                                    Delete Confirmation
                                </h3>
                                <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete this Article ?</p>
                                <div class="mt-8">
                                    <button class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4" id="cancelBtn">CANCEL</button>
                                    <button class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    <!-- /Delete Confirmation -->


    <script>

        // DESKTOP VERSION EVENT
        const showEditEvent = document.querySelector('#showEditEvent');
        const openEditEventModal = document.querySelector('#openEditEventModal');
        const modalCloseEdit = document.querySelector('#modalCloseEdit');
        const modalCloseEditEvent = document.querySelector('#modalCloseEditEvent');
        const deleteBtn = document.querySelector('#deleteBtn');
        const overlayModal = document.querySelector('#overlayModal');
        const cancelBtn = document.querySelector('#cancelBtn');

        const toggleCancel = () => {
            overlayModal.classList.toggle('hidden');
        }

        deleteBtn.addEventListener('click', toggleCancel);
        cancelBtn.addEventListener('click', toggleCancel);

        const toggleModal = () => {
            openEditEventModal.classList.toggle('hidden');
        }

        showEditEvent.addEventListener('click', toggleModal)
        modalCloseEdit.addEventListener('click', toggleModal)
        modalCloseEditEvent.addEventListener('click', toggleModal)



        const showEvent = document.querySelector('#showEvent');
        const openEventModal = document.querySelector('#openEventModal');
        const modalClose = document.querySelector('#modalClose');
        const modalCloseEvent = document.querySelector('#modalCloseEvent');

        const toggleEventModal = () => {
            openEventModal.classList.toggle('hidden');
        }

        showEvent.addEventListener('click', toggleEventModal)
        modalClose.addEventListener('click', toggleEventModal)
        modalCloseEvent.addEventListener('click', toggleEventModal)
        
        window.addEventListener('DOMContentLoaded', function(){
            const menuIconEdit = document.querySelector('#menuIconEdit');
            const dropdownIconEdit = document.querySelector('#dropdownIconEdit');

            menuIconEdit.addEventListener('click', function() {
                dropdownIconEdit.classList.toggle('hidden');
                dropdownIconEdit.classList.toggle('flex');
            });
            


            const menuIcon = document.querySelector('#menuIcon');
            const dropdownIcon = document.querySelector('#dropdownIcon');

            menuIcon.addEventListener('click', function(){
                // Easy Method Use Toggle
                dropdownIcon.classList.toggle('hidden');
                dropdownIcon.classList.toggle('flex');

                // Another Method Use ClassList add/remove
                // if(dropdownIcon.classList.contains('hidden')){
                //     dropdownIcon.classList.remove('hidden');
                //     dropdownIcon.classList.add('flex');
                // }else {
                //     dropdownIcon.classList.remove('flex');
                //     dropdownIcon.classList.add('hidden');
                // }
            });

        });


        // MOBILE VERSION EVENT
        const showEditEventMobile = document.querySelector('#showEditEventMobile');
        const deleteBtnMobile = document.querySelector('#deleteBtnMobile');

        deleteBtnMobile.addEventListener('click', toggleCancel);

        showEditEventMobile.addEventListener('click', function() {
            openEditEventModal.classList.toggle('hidden');
        });

    </script>

    @livewireStyles
</body>
</html>