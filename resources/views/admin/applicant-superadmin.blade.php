<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applicant superadmin</title>

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
                <div class="col-span-8 h-fit p-4 space-y-10 border-gray-300 xl:border-r-2">
                    <div class="justify-between items-center mb-20 mt-5 sm:flex md:mx-5 lg:mx-5 xl:mx-5">
                        <div class="mb-5 sm:mb-0">
                            <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Applicant</h1>
                            <p class="text-sm text-gray-500 mt-2 font-semibold" style="font-family: gilroy-medium;">100 applicants</p>
                        </div>
                        <div class="relative mb-5 sm:mb-0" style="font-family: gilroy-reguler">
                            <input type="search" name="search" id="search-article" placeholder="Search article" class="w-64 rounded-xl  placeholder:text-gray-500 border-none sm:w-96">
                            <div class="absolute top-0 right-0 mt-2 mr-2">
                                <a href="#">
                                    <i class="bx bx-search bx-sm text-gray-500"></i>
                                </a>
                            </div>
                        </div>
                        {{-- <button class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm" id="showEventNewPost">
                            <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i>New Post</h1>
                        </button> --}}
                    </div>

                    <div class="overflow-x-visible relative">
                        <div class="
                                grid grid-cols-1 gap-x-11 gap-y-11 max-w-0
                                sm:max-w-sm sm:grid-cols-2
                                md:max-w-xl md:grid-cols-2 md:mx-auto md:gap-x-11 md:gap-y-11
                                lg:max-w-full lg:grid-cols-3 lg:mx-5"
                                style="font-family: gilroy-reguler">
                                <div class="bg-white w-60 shadow-md rounded-[10px]">
                                    <div class="p-8 text-center">
                                        <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt3003e1023beaf709/60ddd27bfd14d30f3eb57424/4a3dc83fb61064d70536afcd7640dab1c023fecc.jpg" alt="" class="w-24 h-24 rounded-full mx-auto object-cover">
                                        <div class="font-bold pt-4">Cristiano Ronaldo</div>
                                        <p class="text-xs justify-between pt-1">UI/UX Designer</p>
                                        <div class="pt-7">
                                            <a href="/candidate">
                                                <button class="text-xs text-[#283C85] border-[1px] border-[#283C85] hover:bg-[#283C85] hover:text-white duration-300 rounded-2xl justify-center p-1 px-5 font-semibold tracking-wider">View Details</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white w-60 shadow-md rounded-[10px]">
                                    <div class="p-8 text-center">
                                        <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt3003e1023beaf709/60ddd27bfd14d30f3eb57424/4a3dc83fb61064d70536afcd7640dab1c023fecc.jpg" alt="" class="w-24 h-24 rounded-full mx-auto object-cover">
                                        <div class="font-bold pt-4">Cristiano Ronaldo</div>
                                        <p class="text-xs justify-between pt-1">UI/UX Designer</p>
                                        <div class="pt-7">
                                            <a href="/candidate">
                                                <button class="text-xs text-[#283C85] border-[1px] border-[#283C85] hover:bg-[#283C85] hover:text-white duration-300 rounded-2xl justify-center p-1 px-5 font-semibold tracking-wider">View Details</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white w-60 shadow-md rounded-[10px]">
                                    <div class="p-8 text-center">
                                        <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt3003e1023beaf709/60ddd27bfd14d30f3eb57424/4a3dc83fb61064d70536afcd7640dab1c023fecc.jpg" alt="" class="w-24 h-24 rounded-full mx-auto object-cover">
                                        <div class="font-bold pt-4">Cristiano Ronaldo</div>
                                        <p class="text-xs justify-between pt-1">UI/UX Designer</p>
                                        <div class="pt-7">
                                            <a href="/candidate">
                                                <button class="text-xs text-[#283C85] border-[1px] border-[#283C85] hover:bg-[#283C85] hover:text-white duration-300 rounded-2xl justify-center p-1 px-5 font-semibold tracking-wider">View Details</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white w-60 shadow-md rounded-[10px]">
                                    <div class="p-8 text-center">
                                        <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt3003e1023beaf709/60ddd27bfd14d30f3eb57424/4a3dc83fb61064d70536afcd7640dab1c023fecc.jpg" alt="" class="w-24 h-24 rounded-full mx-auto object-cover">
                                        <div class="font-bold pt-4">Cristiano Ronaldo</div>
                                        <p class="text-xs justify-between pt-1">UI/UX Designer</p>
                                        <div class="pt-7">
                                            <a href="/candidate">
                                                <button class="text-xs text-[#283C85] border-[1px] border-[#283C85] hover:bg-[#283C85] hover:text-white duration-300 rounded-2xl justify-center p-1 px-5 font-semibold tracking-wider">View Details</button>
                                            </a>
                                        </div>
                                    </div>
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
                    
                    <div class="col-span-4">
                        <div class="grid grid-cols-1 p-10 absolute">
                            <div class="relative flex justify-between items-center">
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
                </div>
            </div>
        </main>
    </div>
    @livewireStyles
</body>
</html>