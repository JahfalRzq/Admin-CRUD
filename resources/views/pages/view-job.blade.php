<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Job</title>

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
    <div class="w-full md:pt-6 relative">
        <!-- navbar -->
        <div class=" md:mx-20 z-50">
            <nav x-data="{ open: false }"
                class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-40">
                <div class="flex  items-center justify-between">
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
                    class="flex-col flex-grow  md:pb-0 hidden md:flex md:justify-center md:flex-row">
                    <a style="font-family: gilroy-medium;"
                        class="px-4 py-2 mt-2 text-sm font-semibold text-gray-500 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider"
                        href="{{ url('/') }}">Home</a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-gray-500 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline subpixel-antialiased tracking-wider">
                            <span style="font-family: gilroy-medium;">Profile</span>
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
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/news') }}">News</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ url('/gallery') }}">Gallery</a>
                            </div>
                        </div>
                    </div>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent text-primary rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline"
                        style="font-family: gilroy-bold;" href="{{ url('/career') }}">Career</a>
                </div>
                <a href="{{ url('/login') }}" class="hidden md:block">
                    <button class="px-10 py-2 bg-primary rounded-full text-white">Login</button>
                </a>
            </nav>
        </div>
    </div>

    <div class="w-full absolute -z-10 top-0">
        <img src="{{ 'images/image 10.png' }}" alt="" class="md:h-96 h-64 w-full object-cover brightness-90">
    </div>
    <div class="py-24 relative lg:top-72 top-44 md:py-[200px] lg:py-24 xl:py-24">
        <div class="relative">
            <h1 class="gilroy-font text-3xl font-bold text-center">We're Hiring!</h1>
            <p class="text-base leading-relaxed mt-10 md:px-20 px-6 subpixel-antialiased tracking-wide text-justify"
                style="font-family: gilroy-medium;">Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Morbi libero urna, condimentum id fermentum id, rhoncus at tellus. Quisque
                at ligula efficitur mi rhoncus malesuada vel sed mi. Ut magna nunc, vulputate et orci ut, hendrerit
                dignissim felis. Suspendisse molestie luctus lorem nec accumsan. Fusce lacinia turpis non aliquet
                semper. Duis rhoncus placerat lacus, in blandit purus consectetur eu. Nullam id luctus turpis, eu
                convallis ipsum. In in odio tellus. Donec ornare pellentesque risus, in egestas lectus pulvinar quis.
                Curabitur molestie sem sit amet odio cursus, ac blandit quam placerat. Curabitur imperdiet risus sit
                amet urna semper feugiat. Curabitur finibus purus a justo malesuada, quis tristique turpis porta
            </p>
        </div>
        <!-- recruitment process -->
        <div class="border-t-2 border-b-2 py-8 w-full mt-8">
            <h1 class="gilroy-font text-3xl font-bold text-center">Our Recruitment Process</h1>
            <livewire:components.recruitment-process>
        </div>
        <!-- Job list -->
        <div class="md:px-20 py-8 px-6">
            <h1 class=" text-2xl font-bold text-center" style="font-family: gilroy-bold;">Job List</h1>
            <div class="flex flex-wrap justify-between items-center py-10">
                {{-- Mobile filter --}}
                <div class="md:hidden block">
                    <button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown"
                        class="text-gray-800 bg-white hover:bg-gray-100 border focus:outline-none focus:bg-gray-100 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                        type="button">Filter <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="hidden z-10 w-full bg-[#F6FCFF] rounded-lg divide-x divide-gray-100 shadow px-6 py-2">
                        <select id="filterOne"
                        class="bg-gray-50 mb-2 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 font-bold"
                        style="font-family: gilroy-reguler">
                            <option selected>Category</option>
                            <option value="US">Choose 1</option>
                            <option value="CA">Choose 2</option>
                            <option value="FR">Choose 3</option>
                            <option value="DE">Choose 4</option>
                        </select>
                        <select id="filterTwo"
                        class="bg-gray-50 mb-2 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 font-bold"
                        style="font-family: gilroy-reguler">
                            <option selected>Category</option>
                            <option value="US">Choose 1</option>
                            <option value="CA">Choose 2</option>
                            <option value="FR">Choose 3</option>
                            <option value="DE">Choose 4</option>
                        </select>
                    </div>

                </div>
                <div class="hidden md:flex gap-10 items-center">
                    <h1 class="text-base font-semibold" style="font-family: gilroy-semibold;">Filter by</h1>
                    <div class="">
                        <select id="department_select" style="font-family: gilroy-semibold"
                            class="cursor-pointer py-2.5 px-0 w-40 text-sm text-gray-600 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-black peer">
                            <option selected="">All Departements</option>
                            <div class="bg-white shadow-sm border-0">
                                <option value="US">Option 1</option>
                                <option value="CA">Option 2</option>
                                <option value="FR">Option 3</option>
                                <option value="DE">Option 4</option>

                            </div>
                        </select>
                    </div>
                    <div class="">
                        <select id="job_select" style="font-family: gilroy-semibold"
                            class="cursor-pointer py-2.5 px-0 w-40 text-sm text-gray-600 bg-transparent border-0 border-b-2 border-black appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-black peer">
                            <option selected="">All Job Types</option>
                            <option value="US">Option 1</option>
                            <option value="CA">Option 2</option>
                            <option value="FR">Option 3</option>
                            <option value="DE">Option 4</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h1 class="text-base text-gray-600" style="font-family: gilroy-semibold">17 open positions</h1>
                </div>
            </div>

            <!-- Jobs open -->
            <div class="md:grid md:grid-cols-1 lg:grid-cols-2 flex flex-col justify-center items-center w-full md:gap-10 gap-5">

                @foreach ($jobs_view as $jobs)
                <div class="group card bg-white md:w-[670px] hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">{{$jobs->job_tittle}}</h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 w-16 md:w-20 xl:h-7 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    {{ $jobs->division }}</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">{{ $jobs->job_type }}
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300 w-[270px]">Posted {{date('d M y ',strtotime($jobs->start_date))}} <span class="mx-3">Deadline : {{date('d M y ',strtotime($jobs->end_date))}}</span></p>
                            </div>
                        </div>
                        <a href="/detail-job/{{ $jobs->id }}">
                            <button class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                        </a>
                    </div>
                </div>
                {{-- <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">Accounting</h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    Finance & TAX</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Full time
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 27 Sep 2022</p>
                            </div>
                        </div>

                        <button
                            class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                    </div>
                </div>
                <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">UI/UX Designer</h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    IT Development</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Full time
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 12 Sep 2022</p>
                            </div>
                        </div>
                        <a href="{{ url('/jobdetail') }}">
                            <button
                                class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                        </a>
                    </div>
                </div>
                <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">Quality Assurance
                            </h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    IT Development</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Part time
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 30 Sep 2022</p>
                            </div>
                        </div>
                        <a href="./jobDetail.html">
                            <button
                                class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                        </a>
                    </div>
                </div>
                <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">Front-End Developer
                            </h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    IT Development</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Part time
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 12 Sep 2022</p>
                            </div>
                        </div>

                        <button
                            class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                    </div>
                </div>
                <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">Staff Human
                                Resource</h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    Human Resource</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Full time
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 17 Oct 2022</p>
                            </div>
                        </div>

                        <button
                            class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                    </div>
                </div>
                <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">Multimedia Graphic
                                Designer</h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    Content Creator</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Internship
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 12 Sep 2022</p>
                            </div>
                        </div>

                        <button
                            class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                    </div>
                </div>
                <div
                    class="group card bg-white hover:bg-primary border px-6 py-6 rounded-lg transition-all duration-300 w-full">
                    <div class="flex items-center justify-between md:gap-20 gap-5" style="font-family: gilroy-bold;">
                        <div>
                            <h1 class="font-bold text-lg text-black group-hover:text-white">Back-End Developer
                            </h1>
                            <div class="flex md:flex-row flex-col gap-4 mt-4 ">
                                <p
                                    class="py-1 px-3 bg-five bg-opacity-10 group-hover:bg-opacity-100 group-hover:bg-[#CFEBF9]  text-primary rounded-full text-sm font-medium">
                                    IT Developer</p>
                                <p class="text-sm text-primary group-hover:text-white font-medium ">Full time
                                </p>
                                <p class="font-medium text-sm text-gray-600 group-hover:text-gray-300">Posted
                                    on 20 Oct 2022</p>
                            </div>
                        </div>

                        <button
                            class="px-6 py-2 bg-primary group-hover:bg-[#CFEBF9] group-hover:text-primary text-white font-semibold group-hover:font-bold rounded-lg">DETAIL</button>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
        <div class="relative -bottom-10">
            <livewire:footer.footer>
        </div>
    </div>
    @livewireStyles
</body>

</html>
