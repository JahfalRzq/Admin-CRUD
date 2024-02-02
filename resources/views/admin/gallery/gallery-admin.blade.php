<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Admin</title>

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
        <main class="flex-1 ml-52 divide-x-8">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="col-span-8 h-fit p-4 space-y-10 border-gray-300 sm:p-10 lg:border-r-2">
                    <div class="container justify-between items-center mb-20 sm:flex">
                        <div class="mb-5 sm:mb-0">
                            <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Gallery</h1>
                            <p class="text-sm text-gray-500 mt-2 font-semibold" style="font-family: gilroy-medium;">100 image posted</p>
                        </div>
                        <div class="relative mb-5 sm:mb-0" style="font-family: gilroy-reguler">
                            <input type="search" name="search" id="search-article" placeholder="Search article" class="w-64 rounded-xl  placeholder:text-gray-500 border-none sm:w-96">
                            <div class="absolute top-0 right-0 mt-2 mr-2">
                                <a href="#">
                                    <i class="bx bx-search bx-sm text-gray-500"></i>
                                </a>
                            </div>
                        </div>
                        <button class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm" id="showEventNewPost">
                            <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i>New Post</h1>
                        </button>
                    </div>

                    <div class="overflow-x-visible relative">
                        <div class="
                        grid grid-cols-1 gap-x-11 gap-y-11 max-w-0
                        sm:max-w-sm sm:grid-cols-2
                        md:max-w-xl md:grid-cols-2 md:mx-auto md:gap-x-11 md:gap-y-11
                        lg:max-w-full lg:grid-cols-3"
                        style="font-family: gilroy-reguler">
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8" id="editModal"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button" id="deleteModal"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white w-60 shadow-md">
                                <img src="https://images.unsplash.com/photo-1609863528735-f1b9b7398fbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="">
                                <div class="flex-col p-3 truncate">
                                    <span class="font-bold">Lorem ipsum dolor sit amet, consecst...</span>
                                    <span class="flex justify-between items-center mt-2">
                                        <p class="text-xs justify-between">by Cristiano Ronaldo</p>
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                                            <h5 class="text-xs">77K</h5>
                                        </div>
                                    </span>
                                    <span class="flex justify-between items-center mt-5">
                                        <button class="text-xs text-white bg-[#0500FF] rounded-2xl justify-center p-1 px-5">View</button>
                                        <div class="flex">
                                            <button class="bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-xl font-semibold text-white tracking-wider mx-1 w-8"><i class="bx bx-edit p-1"></i>
                                            </button>
                                            <button class="bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-xl font-semibold flex items-center justify-center text-white tracking-wider w-8" type="button"><i class="bx bx-trash p-1"></i>
                                            </button>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>

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
                </div>

                <div class="col-span-4 p-10">
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

    <!-- Gallery New Post Modal -->
    <div id="newPostModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
    class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
        <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-20">
            <div id="eventNewPostClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </div>
            <form action="store-event" method="POST" id="store_form" enctype="multipart/form-data">
                @csrf
            <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">
                <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">New Gallery</h2>
                <div class="mb-4">
                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Caption</label>
                    <textarea name="caption" id="caption_store" class="bg-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 border-0 appearance-none h-40 p-3 mt-2" placeholder="Caption..." style="width: 480px"></textarea>
                </div>
                <div class="mb-4">
                    <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Media</label>
                    <label for="dropzone-file"
                        class="flex flex-col justify-center items-center w-56 h-44 bg-gray-200 rounded-lg cursor-pointer">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <i class=" bx-md text-gray-500"></i>
                            <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        </div>
                        <input name="media_store" id="dropzone-file" type="file" class="hidden">
                    </label>
                </div>
                <div class="mt-8 text-right">
                    <button type="button"
                        class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest text-sm" id="modalCloseNewPost">
                        CANCEL
                    </button>
                    <button type="button"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest text-sm">
                        CREATE
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
<!-- /Modal -->

    <!-- Gallery Edit Post Modal -->
    <div id="editGalleryModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
    class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
        <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-20">
            <div id="eventEditGalleryClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </div>
            <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">
                <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Edit Gallery</h2>
                <div class="mb-4">
                    <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Caption</label>
                    <textarea class="bg-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 border-0 appearance-none h-40 p-3 mt-2" placeholder="Caption..." style="width: 480px"></textarea>
                </div>
                <div class="mb-4">
                    <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Media</label>
                    <label for="dropzone-file"
                        class="flex flex-col justify-center items-center w-56 h-44 bg-gray-200 rounded-lg cursor-pointer">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <i class=" bx-md text-gray-500"></i>
                            <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        </div>
                        <input id="dropzone-file" type="file" class="hidden">
                    </label>
                </div>
                <div class="mt-8 text-right">
                    <button type="button"
                        class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest text-sm" id="modalCloseEditPost">
                        CANCEL
                    </button>
                    <button type="button"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest text-sm">
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

    @livewireStyles

    <script>

        // New Post Gallery Modal
        const newPostModal = document.querySelector('#newPostModal');
        const showEventNewPost = document.querySelector('#showEventNewPost');
        const eventNewPostClose = document.querySelector('#eventNewPostClose');
        const modalCloseNewPost = document.querySelector('#modalCloseNewPost');

        const newPost = () => {
            newPostModal.classList.toggle('hidden');
        }
        showEventNewPost.addEventListener('click', newPost)
        eventNewPostClose.addEventListener('click', newPost)
        modalCloseNewPost.addEventListener('click', newPost)


        // Edit Gallery Modal
        const editModal = document.querySelector('#editModal');
        const editGalleryModal = document.querySelector('#editGalleryModal');
        const eventEditGalleryClose = document.querySelector('#eventEditGalleryClose');
        const modalCloseEditPost = document.querySelector('#modalCloseEditPost');

        const editModalGallery = () => {
            editGalleryModal.classList.toggle('hidden');
        }

        editModal.addEventListener('click', editModalGallery);
        eventEditGalleryClose.addEventListener('click', editModalGallery);
        modalCloseEditPost.addEventListener('click', editModalGallery);


        // Delete Modal
        const deleteModal = document.querySelector('#deleteModal');
        const overlayModal = document.querySelector('#overlayModal');
        const cancelBtn = document.querySelector('#cancelBtn');

        const deleteModalEvent = () => {
            overlayModal.classList.toggle('hidden');
        }

        deleteModal.addEventListener('click', deleteModalEvent);
        cancelBtn.addEventListener('click', deleteModalEvent);



    </script>
</body>
</html>
