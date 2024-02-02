<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Details</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


</head>
<body class="bg-[#F6FCFF]">
    <div class="z-20">
        <!-- navbar -->
        <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
            <nav x-data="{ open: false }"
                class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-40">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-footer.svg') }}" alt="" class="mr-3 h-20"></a>
                <div class="flex md:flex-row items-center justify-between">
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
                    class="flex-col flex-grow  md:pb-0 hidden md:flex md:justify-center md:flex-row">
                    <a style="font-family: gilroy-medium;"
                        class="px-4 py-2 mt-2 text-sm font-semibold text-gray-500 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider"
                        href="{{ url('/') }}">Home</a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider">
                            <span style="font-family: gilroy-medium;">Profile</span>
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
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/about-us') }}">About Us</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/structural') }}">Organizational Structure</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/ourPeople') }}">Our People</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Commissionare & Directore</a>
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
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/service') }}">Services</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/product') }}">Product</a>
                            </div>
                        </div>
                    </div>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
                            <span style="font-family: gilroy-bold;">Insight</span>
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
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/news') }}">News</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/gallery') }}">Gallery</a>
                            </div>
                        </div>
                    </div>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent text-primary rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline"
                        style="font-family: gilroy-medium;" href="{{ url('/career') }}">Career</a>
                </div>
                <a href="{{ url('/login') }}" class="hidden md:block">
                    <button class="px-10 py-2 bg-primary rounded-full text-white">Login</button>
                </a>
            </nav>
        </div>
    </div>

    <div class="w-full absolute -z-10 top-0">

        <img src="{{ asset('images/image 10.png') }}" alt="" class="h-96 w-full object-cover brightness-50" />

        <div class="absolute z-50 block w-full top-56" style="font-family: gilroy-bold">
            <h1 class="text-center text-4xl font-bold text-white" >
                {{ $jobs->job_tittle }}
            </h1>
            <p class="text-center font-medium text-white mt-2">{{ $jobs->division }}</p>
        </div>

        <div class="flex md:flex-row flex-col w-full md:gap-16 gap-6 mt-10 mb-10 md:px-20 px-4">
            <div class="w-full" style="font-family: gilroy-reguler">
                {{-- @foreach ($jobs_detail as $jobs) --}}



                <h1 class="font-bold text-2xl" style="font-family: gilroy-bold">{{$jobs->job_tittle}}</h1>
                <div class="flex md:flex-row flex-col gap-6 mt-4 font-semibold">
                    <p class="text-gray-600">
                        Posted on
                        <span class="text-primary">{{ $jobs->start_date }}</span>
                        <span class="text-gray-600 mx-3">Deadline : <span class="text-[#FF0000]">{{ $jobs->end_date }}</span></span>

                    </p>
                    <p class="text-gray-600">
                        Departement:
                        <span class="text-primary">{{ $jobs->division }}</span>
                    </p>
                    <p class="text-gray-600">
                        Type:
                        <span class="text-primary">{{ $jobs->job_type }}</span>
                    </p>
                </div>

                <div class="py-10">
                    <h1 class="text-lg font-semibold">About the Role</h1>
                    <p class="mt-6 leading-relaxed subpixel-antialiased tracking-wide font-semibold text-justify">
                       {{$jobs->role_description}}
                    </p>
                </div>
                <div class="mb-10">
                    <h1 class="font-semibold text-lg">As a {{ $jobs->job_tittle }} You Will</h1>
                    <ul class="font-semibold list-disc px-4 mt-6">
                        <li>{{ $jobs->jobdesk_description }}</li>
                        {{-- <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ipsum.</li> --}}
                    </ul>
                </div>
                <div class="mb-10">
                    <h1 class="font-bold text-lg">As a {{ $jobs->job_tittle }} What You Will Need</h1>
                    <ul class="list-disc px-4 font-semibold mt-6">
                        <li>{{$jobs->role_environment}}.</li>
                        {{-- <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima doloribus nihil
                            eaque, fugiat officiis.</li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima doloribus nihil
                            eaque, fugiat officiis.</li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima doloribus nihil
                            eaque, fugiat officiis.</li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima doloribus nihil
                            eaque, fugiat officiis.</li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum minima doloribus nihil
                            eaque, fugiat officiis.</li> --}}
                    </ul>
                </div>
                <div class="">
                    <h1 class="text-lg font-bold">About the Team</h1>
                    <p class="font-semibold leading-relaxed mt-6 text-justify">
                        {{$jobs->team_descripton}}
                    </p>
                </div>
                {{-- @endforeach --}}

            </div>
            <div class="w-0.5 bg-gray-300"></div>
            <div class="md:w-1/2 w-full items-center ">
                {{-- <a href="{{ url('/jobForm')}}">
                    <button class="px-6 py-4 bg-primary text-white rounded-lg w-full text-xl font-bold">Apply
                        Job</button>
                </a> --}}

                <div class="w-full border rounded-lg mt-16 px-4 py-4 relative" style="font-family: gilroy-medium;">
                    <h1 class="text-center text-lg font-bold">EMAIL YOUR CV TO</h1>
                    <div class="p-3">
                        <div class="flex mt-5">
                            <img src="{{ asset('images/material-symbols_mail.png') }}" alt="">
                            <p class="mt-1 mx-5 font-medium bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">platikalamsyah@powerkerto.com</p>
                        </div>
                        <div class="flex mt-5">
                            <img src="{{ asset('images/material-symbols_mail-1.png') }}" alt="">
                            <p class="mt-1 mx-5 font-medium bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">{{$jobs->job_tittle}}_Fullname</p>
                        </div>
                    </div>
                </div>
                <div class="w-full border rounded-lg mt-16 px-4 py-4 relative" style="font-family: gilroy-medium">
                    <h1 class="text-center text-lg font-bold">SHARE THIS VACANCY</h1>
                    <div class="px-32 md:px-[107px]">
                        <button class="px-10 py-3 bg-[#0083CD] hover:bg-[#094d75] hover:text-white text-white font-bold mt-5">COPY LINK</button>
                    </div>
                    <div class="flex gap-4 mt-10 justify-center items-center">
                        <button id="copy" data-clipboard-text="hi">
                            <img src="{{ asset('images/Property 1=Facebook.svg') }}" alt=""
                                class="grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="LinkFacebook()" data-tooltip-target="tooltip-facebook">
                            <div id="tooltip-facebook" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy & share link
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </button>
                        <div>
                            <img src="{{ asset('images/Property 1=Twitter.svg') }}" alt=""
                                class="grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                data-tooltip-target="tooltip-Twitter" onclick="LinkTwitter()">
                            <div id="tooltip-Twitter" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy & share link
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('images/Property 1=LinkedIn.svg') }}" alt=""
                                class="grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="LinkedIn()" data-tooltip-target="tooltip-Linkedin">
                            <div id="tooltip-Linkedin" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy & share link
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('images/Property 1=TikTok.svg') }}" alt=""
                                class="grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="LinkTiktok()" data-tooltip-target="tooltip-Tiktok">
                            <div id="tooltip-Tiktok" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy & share link
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('images/Property 1=Instagram.svg') }}" alt=""
                                class="grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="LinkInstagram()" data-tooltip-target="tooltip-Instagram">
                            <div id="tooltip-Instagram" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy & share link
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('images/Property 1=WhatsApp.svg') }}" alt=""
                                class="grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="LinkWhatsapp()" data-tooltip-target="tooltip-Whatsapp"
                                data-popover-target="popover-click" data-popover-trigger="click" />
                            <div id="tooltip-Whatsapp" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Copy & share link
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <div data-popover id="popover-click" role="tooltip"
                                class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                Link copied
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <livewire:footer.footer>
        </div>
    </div>


    <script>
        function LinkFacebook() {
            navigator.clipboard.writeText("Link Share");
        }

        function LinkTwitter() {
            navigator.clipboard.writeText("Link Share");
        }

        function LinkedIn() {
            navigator.clipboard.writeText("Link Share");
        }

        function LinkTiktok() {
            navigator.clipboard.writeText("Link Share");
        }

        function LinkInstagram() {
            navigator.clipboard.writeText("Link Share");
        }

        function LinkWhatsapp() {
            navigator.clipboard.writeText("Link Share");
        }
        // Tooltip

        $('#copy').tooltip({
            trigger: 'click',
            placement: 'bottom'
        });

        function setTooltip(message) {
            $('#copy').tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
        }

        function hideTooltip() {
            setTimeout(function() {
                $('#copy').tooltip('hide');
            }, 1000);
        }

        // Clipboard
        var clipboard = new ClipboardJS('#copy');

        clipboard.on('success', function(e) {
            setTooltip('Copied!');
            hideTooltip();

        });

        clipboard.on('error', function(e) {
            setTooltip('Failed!');
            hideTooltip();

        });
    </script>
</body>

</html>
