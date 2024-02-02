<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Form</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

</head>
<body class="bg-[#F6FCFF]">
    <div class="z-20">
        <!-- navbar -->
        <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
            <nav x-data="{ open: false }"
                class="flex flex-col px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md">
                <div class="flex md:flex-row items-center justify-between">
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
        <img src="{{asset('images/image 10.png')}}" alt="" class="h-96 object-cover" style="filter: brightness(.4)" />
        <div class="absolute z-50 block w-full top-56" style="font-family: gilroy-bold">
            <h1 class="text-center text-4xl font-semibold text-white" >
                UI/UX DESIGNER
            </h1>
            <p class="text-center font-medium text-white mt-2">IT Development</p>
        </div>
        <div class="md:px-20 px-4 py-10" style="font-family: gilroy-reguler">
            <h1 class="text-2xl font-bold" >UI/UX Designer</h1>
            <div class="w-full h-0.5 bg-gray-300 mt-6"></div>
            <div class="grid grid-cols-3 gap-6">
                <div class="mt-6">
                    <h1 class="text-xl font-semibold">Personal Information</h1>
                    <p class="text-sm text-gray-500 mt-2">Tell us something about yourself</p>
                </div>
                <div class="col-span-2 mt-6">
                    <div class="mb-6">
                        <label for="input-name" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Full name</label>
                        <input type="text" id="input-name" placeholder="Your full name" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 ">
                    </div>
                    <div class="mb-6">
                        <label for="input-birth" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Birth Date</label>
                        <input type="date" id="input-birth" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 ">
                    </div>
                    <div class="mb-6">
                        <label for="input-gender" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Gender</label>
                        <select class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                            <option value="Choose One" disabled>Choose One</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="input-age" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Age</label>
                        <input type="text" id="input-age" placeholder="Age" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 ">
                    </div>
                    <div class="mb-6">
                        <label for="input-email" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Email</label>
                        <input type="text" id="input-email" placeholder="Your email address" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-source" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Source of Vacancies</label>
                        <input type="text" id="input-source" placeholder="Source of Vacancies" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-position" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Position</label>
                        <input type="text" id="input-position" placeholder="Position" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-number" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Phone number</label>
                        <input type="text" id="input-number" placeholder="Your phone number" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-idCard" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">ID Card Address</label>
                        <input type="text" id="input-idCard" placeholder="ID Card Address" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-residence" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Residence Address</label>
                        <input type="text" id="input-residence" placeholder="Residence Address" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                </div>
            </div>
            <div class="w-full h-0.5 bg-gray-300 mt-6"></div>
            <div class="grid grid-cols-3 gap-6 mt-6">
                <div>
                    <h1 class="text-xl font-semibold">Education</h1>
                    <p class="text-sm text-gray-500 mt-2">Last Education</p>
                </div>
                <div class="col-span-2">
                    <div class="mb-6">
                        <label for="input-schoolName" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">School Name</label>
                        <input type="text" id="input-schoolName" placeholder="School Name" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-major" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Major</label>
                        <input type="text" id="input-major" placeholder="Bachelor of Degree" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-major" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">GPA</label>
                        <input type="text" id="input-major" placeholder="2.75" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                </div>
            </div>
            <div class="w-full h-0.5 bg-gray-300 mt-6"></div>
            <div class="grid grid-cols-3 gap-6 mt-6">
                <div>
                    <h1 class="text-xl font-semibold">Experience</h1>
                    <p class="text-sm text-gray-500 mt-2">Previous / Current Company</p>
                </div>
                <div class="col-span-2">
                    <div class="mb-6">
                        <label for="input-companyName" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Company Name</label>
                        <input type="text" id="input-companyName" placeholder="Company Name" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 ">
                    </div>
                    <div class="mb-6">
                        <label for="input-positionEx" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Position</label>
                        <input type="text" id="input-positionEx" placeholder="Position" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="input-jobLevel" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Job Level</label>
                        <input type="text" id="input-jobLevel" placeholder="Full Time" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                    <div class="mb-6 md:flex gap-5">
                        <div class="w-full">
                            <label for="input-start" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Start Date</label>
                            <input type="date" id="input-start" placeholder="Bachelor of Degree" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                        </div>
                        <div class="w-full mt-6 md:mt-0">
                            <label for="input-end" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">End Date</label>
                            <input type="date" id="input-end" placeholder="Bachelor of Degree" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="input-portofolio" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Portofolio URL</label>
                        <input type="text" id="input-portofolio" placeholder="www.yourdomain.com" class="bg-gray-50 border md:w-1/2 w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    </div>
                </div>
            </div>
            <div class="w-full h-0.5 bg-gray-300 mt-6"></div>
            <div class="grid grid-cols-3 gap-6 mt-6">
                <div>
                    <h1 class="text-xl font-semibold">File</h1>
                    <p class="text-sm text-gray-500 mt-2">Upload your file</p>
                </div>
                <div class="col-span-2">
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300" for="file_input">CV</label>
                        <input class="block md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">We accept PDF, DOC, DOCX, PNG and JPG files</p>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300" for="file_input">ID Card</label>
                        <input class="block md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">We accept PDF, DOC, DOCX, PNG and JPG files</p>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300" for="file_input">Family Card</label>
                        <input class="block md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">We accept PDF, DOC, DOCX, PNG and JPG files</p>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300" for="file_input">Education Diploma</label>
                        <input class="block md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">We accept PDF files</p>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300" for="file_input">Transcripts</label>
                        <input class="block md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">We accept PDF files</p>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-gray-300" for="file_input">Portfolio</label>
                        <input class="block md:w-1/2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">We accept PDF files</p>
                    </div>
                </div>
            </div>
            <div class="w-full mt-10 grid place-items-center">
                <button class="px-6 py-3 bg-primary font-semibold text-white rounded-lg">Submit Application</button>
            </div>
        </div>
        <div>
            <livewire:footer.footer>
        </div>
    </div>
</body>
</html>