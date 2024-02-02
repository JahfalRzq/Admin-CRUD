<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Admin</title>

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
            <div class="grid grid-cols-12">
                <div class="col-span-8 h-fit p-10 space-y-10 border-gray-300 border-r-2">
                    <div class="flex justify-between items-center mb-20">
                        <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Article</h1>
                        <div class="relative" style="font-family: gilroy-reguler">
                            <input type="search" name="search" id="search-article" placeholder="Search article" class="w-96 rounded-xl  placeholder:text-gray-500 border-none">
                            <div class="absolute top-0 right-0 mt-2 mr-2">
                                <a href="#">
                                    <i class="bx bx-search bx-sm text-gray-500"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-20" style="font-family: gilroy-reguler;">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="card bg-white rounded-lg px-4 py-2">
                                <div class="flex justify-between items-center gap-4 text-sm">
                                    <div class="inline-flex gap-1 font-semibold">
                                        <img src="{{ asset('images/new/carbon_send-alt-filled.svg')}}" alt="" class="w-6">
                                        <span>Published</span>
                                    </div>
                                    <h1 class="font-semibold text-primary">Published</h1>
                                </div>
                            </div>
                            <div class="card bg-white rounded-lg px-4 py-2">
                                <div class="flex justify-between items-center gap-4 text-sm">
                                    <div class="inline-flex gap-1 font-semibold">
                                        <img src="{{ asset('images/new/draft.svg')}}" alt="" class="w-6">
                                        <span>Draft</span>
                                    </div>
                                    <h1 class="font-semibold text-primary">Draft</h1>
                                </div>
                            </div>
                            <div class="card bg-white rounded-lg px-4 py-2">
                                <div class="flex justify-between items-center gap-4 text-sm">
                                    <div class="inline-flex gap-1 font-semibold">
                                        <img src="{{ asset('images/new/ep_delete.svg')}}" alt="" class="w-6">
                                        <span>Trash</span>
                                    </div>
                                    <h1 class="font-semibold text-primary">77</h1>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/create-article') }}" class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm">
                            <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i> New Article</h1>
                        </a>
                    </div>

                    {{-- Article Card --}}
                    <div class="mt-6 space-y-4">
                        <a href="{{ url('/detail-article') }}">
                            <livewire:components.admin.card-article-admin >
                        </a>
                        {{-- <livewire:components.admin.card-article-admin>
                        <livewire:components.admin.card-article-admin> --}}
                    </div>

                    {{-- Paginations --}}
                    <div class="relative">
                        <ul class="inline-flex items-center space-x-2 mt-6 w-full justify-end" style="font-family: gilroy-reguler">
                            <li>
                                <a href="#" class="block">
                                    <i class="bx bx-chevron-left text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="bg-gradient-to-tr from-[#046CB4] to-[#0398EC] text-base text-white py-2 px-4 rounded-xl font-semibold">1</a>
                            </li>
                            <li>
                                <a href="#" class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">2</a>
                            </li>
                            <li>
                                <a href="#" class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">3</a>
                            </li>
                            <li>
                                <a href="#" class="block">
                                    <i class="bx bx-chevron-right text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Comment --}}
                    <div class="relative mt-6">
                        <livewire:components.admin.recent-comment-admin>
                    </div>
                </div>
                <div class=" col-span-4 p-10 ">
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


    @livewireStyles
</body>
</html>
