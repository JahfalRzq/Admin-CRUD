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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script type="text/javascript" src="lib/control/iconselect.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
    </script>



    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>




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
                                <h1 style="font-family: gilroy-bold;"
                                    class="text-2xl font-bold subpixel-antialiased tracking-wide">Event</h1>
                                <p class="text-sm text-gray-500 mt-2 font-semibold" style="font-family: gilroy-medium;">
                                    {{ $total ?? '0' }} events posted</p>
                            </div>
                            <div class="relative mb-5 sm:mb-0 sm:mx-3" style="font-family: gilroy-reguler">
                                <form action="{{ url('event') }}" method="GET">
                                    <input type="text" name="search" value="{{ $search }}" id="myInput"
                                        onkeyup="myFunction()" placeholder="Search Event"
                                        class="w-96 rounded-xl  placeholder:text-gray-500 border-none">
                                    <div class="absolute top-0 right-0 mt-2 mr-2">
                                        <button class="bx bx-search bx-sm text-gray-500" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <button onclick="add_event()"
                                class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm"
                                id="showEvent">
                                <h1 class="flex items-center"><i class="bx bx-plus phptext-xl mr-2"></i>New Event</h1>
                            </button>
                        </div>

                        {{-- Events --}}
                        <div class="overflow-auto relative shadow-md sm:rounded-lg bg-white hidden lg:block">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed"
                                style="font-family: gilroy-reguler">
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
                                    @foreach ($events as $event)
                                        <tr class="bg-white">
                                            <th scope="row"
                                                class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap">
                                                <img src="../{{ $event->icon }}" width="26px"
                                                    class="inline-flex mx-2">
                                                {{ $event->event }}
                                            </th>
                                            <th class="py-4 px-6 text-gray-800">
                                                {{ date('d-M-y', strtotime($event->date)) }}
                                                {{-- {{ date('M d, Y', strtotime($headline1->created_at ?? '')) }}</h1> --}}

                                            </th>
                                            <th class="py-4 px-6 text-gray-800 font-bold">
                                                {{ date('H:i', strtotime($event->start_time)) }} -
                                                {{ date('H:i', strtotime($event->end_time)) }}
                                            </th>
                                            <th class="pt-3 text-right flex space-x-4">
                                                <button  onclick="edit_event({{ $event->id }})"
                                                    class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"
                                                    type="button" id="showEditEvent"><i
                                                        class="bx bx-edit text-xl px-3"></i>
                                                   
                                                </button>
                                                <button onclick="delete_event({{$event->id}})" type="button"
                                                    class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"
                                                    id="deleteBtn"><i class="bx bx-trash text-xl px-3"></i>
                                                </button>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $events->links('pagination::tailwind') }}


                            {{-- Paginations --}}
                            {{-- <div class="relative">
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
                            </div> --}}
                        </div>

                        {{-- RESPONSIVE MOBILE CARD EVENT --}}
                        <div
                            class="grid grid-cols gap-4
                    sm:grid-cols-2
                    md:grid-cols-1
                    lg:grid-cols-3 lg:hidden">
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                            sm:justify-center sm:items-center
                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png"
                                            width="30px" class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">Fakhri birthday</span>
                                    </div>          
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0">03/09/2022</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                    <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                        <button
                                            class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button
                                            class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            type="button" id="deleteBtnMobile"><i
                                                class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                            sm:justify-center sm:items-center
                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px"
                                            class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">HUT RI ke-77</span>
                                    </div>
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0">03/09/2022</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                    <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                        <button
                                            class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button
                                            class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            type="button" id="deleteBtnMobile"><i
                                                class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                            sm:justify-center sm:items-center
                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png"
                                            width="30px" class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">Meeting all team</span>
                                    </div>
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0 truncate">10:00 - 12:00</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                    <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                        <button
                                            class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button
                                            class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            type="button" id="deleteBtnMobile"><i
                                                class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                            sm:justify-center sm:items-center
                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://img.icons8.com/doodle/48/000000/pray.png  " width="30px"
                                            class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">Outbound</span>
                                    </div>
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0 truncate">03/09/2022</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                    <div class="mt-5 flex justify-center gap-2 sm:justify-start md:mt-0">
                                        <button
                                            class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            id="showEditEventMobile"><i class="bx bx-edit text-xl px-3"></i>
                                        </button>
                                        <button
                                            class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-12"
                                            type="button" id="deleteBtnMobile"><i
                                                class="bx bx-trash text-xl px-3"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- Paginations --}}
                            {{-- <div class="relative grid grid-cols-1">
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
                            </div> --}}
                            {{ $events->links('pagination::tailwind') }}


                        </div>


                        {{-- Upcoming Event --}}
                        <div class="card bg-white rounded-xl px-6 py-5 w-full float-right shadow-md hidden mt-5 md:block"
                            style="font-family: gilroy-reguler">
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
                                            <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png"
                                                width="26px" class="inline-flex mx-2">
                                            Fakhri birthday
                                        </th>
                                        <th class="py-4 px-6 text-center">
                                            03/09/2022
                                        </th>
                                        <th class="py-4 px-6 text-right">
                                            All day
                                        </th>
                                    </tr>
                                    {{-- <tr class="bg-white border-b border-gray-300 text-gray-900">
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
                                    </tr> --}}
                                    {{-- <tr class="bg-white border-b border-gray-300 text-gray-900">
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
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>



                        {{-- Belum di foreach --}}

                        {{-- RESPONSIVE MOBILE CARD UPCOMING EVENT --}}
                        <div
                            class="grid grid-cols gap-4
                                    sm:grid-cols-2
                                    md:grid-cols-1 md:hidden
                                    lg:grid-cols-3 lg:hidden">
                            <div class="grid grid-cols px-6 py-5 bg-white rounded-lg shadow-md md:hidden"
                                style="font-family: gilroy-reguler">
                                <h1 class="font-bold text-xl">Closest 3 Upcoming Events</h1>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                                            sm:justify-center sm:items-center
                                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png"
                                            width="30px" class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">Fakhri birthday</span>
                                    </div>
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0">03/09/2022</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                            sm:justify-center sm:items-center
                            md:justify-start md:flex">
                                    <div class="truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px"
                                            class="inline-flex mx-2">
                                        <span class="mt-2 absolute md:relative">HUT RI ke-77</span>
                                    </div>
                                    <div class="flex text-gray-800 md:mx-5">
                                        <div class="mt-3 md:mt-0">03/09/2022</div>
                                        <div class="mt-3 md:mt-0 truncate mx-5">All day</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-md justify-center items-center">
                                <div
                                    class="font-semibold
                            sm:justify-center sm:items-center
                            md:justify-start md:flex">
                                    <div class="sm:truncate text-gray-800 relative md:w-72"
                                        style="font-family: gilroy-reguler">
                                        <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png"
                                            width="26px" class="inline-flex mx-2">
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

    <form action="store-event" method="POST" enctype="multipart/form-data" id="store_event">
        @csrf
        <div id="openEventModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
            class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
            <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-14 sm:mt-24">
                <div id="modalClose"
                    class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg id="modalClose" class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>



                <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                    <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Create Event</h2>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lEvent">Event</label>
                        <input style="width: 350px"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="event_store" type="text" placeholder="Event" name="event" required>

                        <div class="mt-3 relative pb-6 sm:inline-flex">
                            <button id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio" name="icon"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">icon <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>

                            <!-- Dropdown menu -->
                            <div id="dropdownHelperRadio"
                                class="hidden z-10 w-60 bg-white rounded divide-y divide-gray-100 shadow dark:bg-white-700 dark:divide-gray-600"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 6119.5px, 0px);">
                                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownHelperRadioButton">
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-white-100 dark:hover:bg-white-600">
                                            <div class="flex items-center h-5">
                                                <input id="helper-radio-4" name="icon" type="radio"
                                                    value="images/icon/birthday-cake--v1.png"
                                                    class="w-4 h-4 text-blue-600 bg-white-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-white-600 dark:border-gray-500">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-radio-4"
                                                    class="font-medium text-gray-900 dark:text-gray-300">
                                                    <img src="images/icon/birthday-cake--v1.png" width="30"
                                                        height="10">
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-white-100 dark:hover:bg-white-600">
                                            <div class="flex items-center h-5">
                                                <input id="helper-radio-5" name="icon" type="radio"
                                                    value="images/icon/confetti.png"
                                                    class="w-4 h-4 text-blue-600 bg-white-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-white-600 dark:border-gray-500">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-radio-5"
                                                    class="font-medium text-gray-900 dark:text-gray-300">
                                                    <img src="images/icon/confetti.png" width="30"
                                                        height="10">
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-white-100 dark:hover:bg-white-600">
                                            <div class="flex items-center h-5">
                                                <input id="helper-radio-6" name="icon" type="radio"
                                                    value="images/icon/3985163.png"
                                                    class="w-4 h-4 text-blue-600 bg-white-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-white-600 dark:border-gray-500">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-radio-6"
                                                    class="font-medium text-gray-900 dark:text-gray-300">
                                                    <img src="images/icon/3985163.png" width="30" height="10">
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex p-2 rounded hover:bg-white-100 dark:hover:bg-white-600">
                                            <div class="flex items-center h-5">
                                                <input id="helper-radio-6" name="icon" type="radio"
                                                    value="images/icon/pray.png"
                                                    class="w-4 h-4 text-blue-600 bg-white-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-white-600 dark:border-gray-500">
                                            </div>
                                            <div class="ml-2 text-sm">
                                                <label for="helper-radio-6"
                                                    class="font-medium text-gray-900 dark:text-gray-300">
                                                    <img src="images/icon/pray.png" width="30" height="10">
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div id="myDropdown" class="bg-[#f4f4f5] drop-shadow-lg h-full rounded py-2">
                                <select id="demo-htmlselect" name="icon" required>
                                    <option value="images/icon/birthday-cake--v1.png" selected="selected"> Birthday
                                    </option>
                                    <option value="images/icon/confetti.png" data-imagesrc="images/icon/confetti.png">
                                        <img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/men/62.jpg"></option>
                                    <option value="images/icon/3985163.png" data-imagesrc="images/icon/3985163.png">
                                        398</option>
                                    <option value="images/icon/pray.png" data-imagesrc="images/icon/pray.png">pray
                                    </option>
                                </select>
                            </div> --}}
                            {{-- <div class="pt-1 hidden dropdown-content" id="dropdownIcon">
                                    <ul class="bg-[#f4f4f5] drop-shadow-lg h-full rounded py-2" id="list    ">
                                        <li class="hover:bg-gray-200 py-2 options" id="birthday_dropdown" name="icon" value="1" >
                                            <a href="#birthday_cake" class="block p-1 mx-7" >
                                               <p id="selectText">a</p>

                                                <img src="{{ asset('images/icon/birthday-cake--v1.png')}}" width="30px" class="inline-flex" name="birthday_cake">
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2 options" id="confetti_dropdown" name="icon" value="2">
                                            <a href="#confetti" class="block p-1 mx-7">b
                                                <img src="{{ asset('images/icon/confetti.png')}}" width="30px" class="inline-flex" name="confetti">

                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2 options" id="meeting_dropdown" name="icon" value="3">
                                            <a href="#meeting" class="block p-1 mx-7">c
                                                <img src="{{ asset('images/icon/3985163.png')}}" width="30px" class="inline-flex" name="meeting">


                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2 options" id="pray_dropdown" name="icon" value="4">
                                            <a href="#pray" class="block p-1 mx-7">d
                                                <img src="{{ asset('images/icon/pray.png')}}" width="30px" class="inline-flex" name="pray">

                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            {{-- <div class="absolute sm:mx-7 my-0 selector" id="selectField"> --}}
                            {{-- <button  type="button" onclick="myFunction()" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-24 py-2 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 dropbtn" id="menuIcon" name="icon">
                                    Icon <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png" class="inline-flex w-5"/>
                                </button> --}}
                            {{-- <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    option</label>
                                <select id="countries"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a country</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select> --}}
                            {{-- <div class="pt-1 hidden dropdown-content" id="dropdownIcon">
                                    <ul class="bg-[#f4f4f5] drop-shadow-lg h-full rounded py-2" id="list    ">
                                        <li class="hover:bg-gray-200 py-2 options" id="birthday_dropdown" name="icon" value="1" >
                                            <a href="#birthday_cake" class="block p-1 mx-7" >
                                               <p id="selectText">a</p>

                                                <img src="{{ asset('images/icon/birthday-cake--v1.png')}}" width="30px" class="inline-flex" name="birthday_cake">
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2 options" id="confetti_dropdown" name="icon" value="2">
                                            <a href="#confetti" class="block p-1 mx-7">b
                                                <img src="{{ asset('images/icon/confetti.png')}}" width="30px" class="inline-flex" name="confetti">

                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2 options" id="meeting_dropdown" name="icon" value="3">
                                            <a href="#meeting" class="block p-1 mx-7">c
                                                <img src="{{ asset('images/icon/3985163.png')}}" width="30px" class="inline-flex" name="meeting">


                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2 options" id="pray_dropdown" name="icon" value="4">
                                            <a href="#pray" class="block p-1 mx-7">d
                                                <img src="{{ asset('images/icon/pray.png')}}" width="30px" class="inline-flex" name="pray">

                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            {{-- </div> --}}
                        </div>
                        {{-- </select> --}}
                    </div>

                    <div class="mb-4 mt-10 sm:mt-auto">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lEventDetail">Event Detail</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="detail_event" name="detail_event" type="text" placeholder="Detail Event" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lDate">Date</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="event_date" name="date" type="date" placeholder="Detail Event" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lTime">Time</label>
                        <div class="flex">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="start_time" name="start_time" type="time" placeholder="Detail Event" required>
                            <span class="p-3">-</span>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="end_time" name="end_time" type="time" placeholder="Detail Event" required>
                        </div>
                    </div>

                    <div class="font-bold">
                        <input type="checkbox" class="rounded" id="all_day" name="allday" required>
                        <label class="mx-1" for="eventCheck">All day</label>
                    </div>
                    <div class="mt-8 text-right">
                        <button type="button"
                            class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest"
                            id="modalCloseEvent">
                            CANCEL
                        </button>
                        <button type="submit"
                            class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest"
                            form="store_event">
                            CREATE
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <!-- /Modal -->

    <!-- Edit Event Modal -->
    <form action="/update-event/{id}" id="edit_form" method="POST" enctype="multipart/form-data">
        @csrf

        <div id="openEditEventModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
            class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
            <div class="p-4 max-w-xl mx-auto  absolute left-0 right-0 overflow-hidden mt-14 sm:mt-24">
                <div id="modalCloseEdit"
                    class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                    <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Edit Events</h2>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lEvent">Event</label>
                        <input style="width: 350px"
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="event_update" name="event" type="text" placeholder="Event">
                        
                            <div class="mt-3 relative pb-6 sm:inline-flex ">
                            <div class="absolute sm:mx-7 my-0 tittle">
                                <button type="button"
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-24 py-2 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                    id="dropdownHelperRadioButton" data-dropdown-toggle="dropdownHelperRadio" name="icon">
                                    Icon <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png"
                                        class="inline-flex w-5" />
                                </button>
                                <div class="pt-1 hidden " id="dropdownIconEdit">
                                    {{-- <ul class="bg-[#f4f4f5] drop-shadow-lg h-full rounded py-2 " id="default_option" >
                                                <li class="hover:bg-gray-200 py-2" >
                                                    <a href="#" class="block p-1 mx-7" name="icon" value="1" >
                                                        <img src="https://img.icons8.com/dusk/64/000000/birthday-cake--v1.png" width="30px" class="inline-flex">
                                                    </a>
                                                </li>

                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7"name="icon" value="2">
                                                        <img src="https://img.icons8.com/color/48/000000/confetti.png" width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7" name="icon" value="3">
                                                        <img src="https://cdn-icons-png.flaticon.com/512/3985/3985163.png" width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                                <li class="hover:bg-gray-200 py-2">
                                                    <a href="#" class="block p-1 mx-7" name="icon" value="4">
                                                        <img src="https://img.icons8.com/doodle/48/000000/pray.png  " width="30px" class="inline-flex">
                                                    </a>
                                                </li>
                                        </ul> --}}
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mt-10 sm:mt-auto">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lEventDetail">Event Detail</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="update_eventDetail" name="event_detail" type="text" placeholder="Detail Event">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lDate">Date</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            id="update_date" name="date" type="date" placeholder="Detail Event">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                            for="lTime">Time</label>
                        <div class="flex">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="update_startTime" name="start_time" type="time" placeholder="Detail Event">
                            <span class="p-3">-</span>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="update_endTime" name="end_time" type="time" placeholder="Detail Event">
                        </div>
                    </div>

                    <div class="font-bold">
                        <input type="checkbox" class="rounded" id="update_allday" name="allday">
                        <label class="mx-1" for="eventCheck2">All day</label>
                    </div>

                    <div class="mt-8 text-right">
                        <button type="button"
                            class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest"
                            id="modalCloseEditEvent">
                            CANCEL
                        </button>
                        <button type="submit" id="edit_form"
                            class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest">
                            SAVE CHANGES
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /Modal -->


    <!-- Delete Confirmation -->
    <form action="/delete-event/{id}" id="delete_form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="hidden bg-black bg-opacity-50 fixed inset-0 z-40 w-full" id="overlayModal">
            <div class="relative w-auto my-6 mx-auto max-w-xl">
                <!--content-->
                <div
                    class="absolute border-0 rounded-lg shadow-lg flex flex-row max-w-xl bg-white outline-none focus:outline-none p-6 top-52">
                    <img src="{{ asset('images/new/delete-illustrations.svg') }}" alt="">
                    <div class="">
                        <h3 class="text-2xl font-semibold text-start">
                            Delete Confirmation
                        </h3>
                        <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete this Event ?
                        </p>
                        <div class="mt-8">
                            <button type="button"
                                class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4"
                                id="cancelBtn">CANCEL</button>
                            <button type="submit"
                                class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /Delete Confirmation -->

    <script></script>
    {{-- <script>
    $('#myDropdown').ddslick({
    onSelected: function(selectedData){
        var ddData = [
    {
        text: "Facebook",
        value: 1,
        selected: false,
        description: "Description with Facebook",
        imageSrc: "../images/icon/birthday-cake--v1.png"
    },
    {
        text: "Twitter",
        value: 2,
        selected: false,
        description: "Description with Twitter",
        imageSrc: "https://i.imgur.com/8ScLNnk.png"
    },
    {
        text: "LinkedIn",
        value: 3,
        selected: true,
        description: "Description with LinkedIn",
        imageSrc: "https://i.imgur.com/aDNdibj.png"
    },
    {
        text: "Foursquare",
        value: 4,
        selected: false,
        description: "Description with Foursquare",
        imageSrc: "https://i.imgur.com/kFAk2DX.png"
    }
];
    }
});
</script> --}}
    <script>
        // DESKTOP VERSION EVENT
        const showEditEvent = document.querySelector('#showEditEvent');
        const openEditEventModal = document.querySelector('#openEditEventModal');
        const modalCloseEdit = document.querySelector('#modalCloseEdit');
        const modalCloseEditEvent = document.querySelector('#modalCloseEditEvent');
        const deleteBtn = document.querySelector('#deleteBtn');
        const overlayModal = document.querySelector('#overlayModal');
        const cancelBtn = document.querySelector('#cancelBtn');

        //Delete Modal
        const toggleCancel = () => {
            overlayModal.classList.toggle('hidden');
        }

        // deleteBtn.addEventListener('click', toggleCancel);
        cancelBtn.addEventListener('click', toggleCancel);

        const toggleModal = () => {
            openEditEventModal.classList.toggle('hidden');
        }


        // showEditEvent.addEventListener('click', toggleModal)
        modalCloseEdit.addEventListener('click', toggleModal)
        modalCloseEditEvent.addEventListener('click', toggleModal)

        const deleteEventModal = () => {
            overlayDeleteModal.classList.toggle('hidden');
        }

        // deleteBtn.addEventListener('click', deleteEventModal);
        cancelBtn.addEventListener('click', deleteEventModal);

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

        window.addEventListener('DOMContentLoaded', function() {
            const menuIconEdit = document.querySelector('#menuIconEdit');
            const dropdownIconEdit = document.querySelector('#dropdownIconEdit');

            menuIconEdit.addEventListener('click', function() {
                dropdownIconEdit.classList.toggle('hidden');
                dropdownIconEdit.classList.toggle('flex');
            });



            const menuIcon = document.querySelector('#menuIcon');
            const dropdownIcon = document.querySelector('#dropdownIcon');

            // var dropdownIcon = document.getElementById("dropdownIcon");




            menuIcon.addEventListener('click', function() {
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

        // deleteBtnMobile.addEventListener('click', toggleCancel);

        showEditEventMobile.addEventListener('click', function() {
            openEditEventModal.classList.toggle('hidden');
        });


        //Modal delete User Terbaru
        //const deleteBtn = document.querySelector('#deleteBtn');

        
        //const deleteBtn = () =>{
            // overlayDeleteModal.classList.toggle('hidden');
        // }
    </script>

<script>
        
        




    function add_event() {

        $('store_event').attr('action', `${window.location.origin}/store-event`)

        //event store
        var eventAdd = $('#event_store').val();

        // --icon image store--
        var iconSelect;
        var selectedText;

        window.onload = function() {

            selectedText = document.getElementById('selected-text');

            document.getElementById("my-icon-select").addEventListener('changed', function(e) {
                selectedText.value = iconSelect.getSelectedValue();
            });

            iconSelect = new iconSelect("my-icon-select");

            var icons = [];
            icons.push({
                'iconFilePath': 'https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png',
                'iconValue': '1'
            });
            icons.push({
                'iconFilePath': 'https://img.icons8.com/color/48/000000/confetti.png',
                'iconValue': '2'
            });
            icons.push({
                'iconFilePath': '3985163.png',
                'iconValue': '3'
            });
            icons.push({
                'iconFilePath': 'images/Icon/pray.png',
                'iconValue': '4'
            });

            iconSelect.refresh(icons);

            // -- end add icon store --


            //event detail store
            var eventDetailAdd = $('#eventDetail_Store').val();
            //event date store
            var dateAdd = $('#update_date').val();
            //event start time store
            var startAdd = $('#update_startTime').val();
            //event end time store
            var endAdd = $('#update_endTime').val();
            //event all dayy add store
            var alldayAdd = $('#allday').val();

            s.ajax({
                $.ajax({
                    url: "/store-event",
                    type: "post",
                    data: {
                        eventSend: eventAdd,
                        eventDetailSend: eventDetailAdd,
                        dateSend: dateAdd,
                        startSend: startAdd,
                        endSend: endAdd,
                        alldaySend: alldayAdd
                    }
                    success: function(data, status) {
                        console.log(status);
                    }
                });
            })

        }

    }

   



    $("#default_option").click(function() {
        $(this).parent().toggleClass("active");
    })
    $("#select_ul li").click(function() {
        var currentele = $(this).html();

        $(this).parents(".select_wrap").removeClass("active");
    })
</script>

    

        {{-- <script>

            
            function edit_event(id){
            toggleModal()
            alert("Incomming Fitur");
            $('edit_form').attr('action',`${window.location.origin}/update-event/${id}`)
            
            
            //event update
            var eventUpdate = $('#event_update').val();

            // icon update store
            var iconSelect;
            var selectedText;

            window.onload = function() {

                selectedText = document.getElementById('selected-text');

                document.getElementById("my-icon-select").addEventListener('changed',function(e){
                    selectedText.value = iconSelect.getSelectedValue();
                });

                iconSelect = new iconSelect("my-icon-select");

                var icons = [];
                icons.push({
                    'iconFilePath': 'https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png',
                    'iconValue': '1'

                });

                icons.push({
                    'iconFilePath': 'https://img.icons8.com/color/48/000000/confetti.png',
                    'iconValue': '2'
                });
                icons.push({
                    'iconFilePath': '3985163.png',
                    'iconValue': '3'
                });
                icons.push({
                    'iconFilePath': 'images/Icon/pray.png',
                    'iconValue': '4'
                });

                iconSelect.refresh(icons);

                //end icon store


                //event detail store 
                var eventDetailAdd = $('#eventDetail_Store').val();
                //event date store
                var dateAdd = $('#event_date').val();
                //event start time store
                var startAdd = $('#start_time').val();
                //event end time store
                var endAdd = $('#end_time').val();
                //event all dayy add store
                var alldayAdd = ('#allday').val();
            
            
            
            $.ajax({
                $.ajax({
                    url : `/update-event/${id}`,
                    type : "post",
                    data :{

                        eventSend : eventUpdate
                        eventDetailSend : eventDetailAdd,
                        dateSend : dateAdd,
                        startSend : startAdd,
                        endSend : endAdd,
                        alldaySend : alldayAdd
                    }
                    success : function(data,status){
                        console.log(status);
                    }
                });

            })
         
        }
    }
    
    $("#default_option").click(function() {
            $(this).parent().toggleClass("active");
        })
        $("#select_ul li").click(function() {
            var currentele = $(this).html();

            $(this).parents(".select_wrap").removeClass("active");
        })
        </script> --}}


        {{-- open modal edit by id --}}
        <script>
            function edit_event(id){
            // toggleModal()
            alert("This feature is under repair");
            $('edit_form').attr('action',`${window.location.origin}/update-event/${id}`)

            var eventAdd = $('#event_store').val();

        // --icon image store--
        var iconSelect;
        var selectedText;


        window.onload = function() {
    selectedText = document.getElementById('selected-text');

    document.getElementById("my-icon-select").addEventListener('changed', function(e) {
    selectedText.value = iconSelect.getSelectedValue();
    });

    iconSelect = new iconSelect("my-icon-select");
    var icons = [];
            icons.push({
                'iconFilePath': 'https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png',
                'iconValue': '1'
            });
            icons.push({
                'iconFilePath': 'https://img.icons8.com/color/48/000000/confetti.png',
                'iconValue': '2'
            });
            icons.push({
                'iconFilePath': '3985163.png',
                'iconValue': '3'
            });
            icons.push({
                'iconFilePath': 'images/Icon/pray.png',
                'iconValue': '4'
            });

            iconSelect.refresh(icons);


              //event detail store
              var eventDetailAdd = $('#eventDetail_Store').val();
            //event date store
            var dateAdd = $('#update_date').val();
            //event start time store
            var startAdd = $('#update_startTime').val();
            //event end time store
            var endAdd = $('#update_endTime').val();
            //event all dayy add store
            var alldayAdd = $('#allday').val();

            // s.ajax({
            //     $.ajax({
            //         url: `/edit-event/${id}`,
            //         type: "POST",
            //            dataType : "JSON",
            //         data: {
            //             eventSend: eventAdd,
            //             eventDetailSend: eventDetailAdd,
            //             dateSend: dateAdd,
            //             startSend: startAdd,
            //             endSend: endAdd,
            //             alldaySend: alldayAdd
            //         }
            //         success: function(data, status) {
            //             console.log(status);
            //         }
            //     });
            // })

            


        }



            }

        </script>


        {{-- update function --}}
        <script>



        </script>




<script>
    function delete_event(id) {
        toggleCancel()
        // alert("Hello! I am an alert box!");
        // console.log($id);
        $('#delete_form').attr('action', `${window.location.origin}/delete-event/${id}`)

    }
    </script>





    







    @livewireStyles
</body>

</html>
