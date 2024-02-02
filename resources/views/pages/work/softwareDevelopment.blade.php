<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Software Development</title>
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
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-primary text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
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

    <main>
        <div class="mb-10 md:px-2 px-4 py-20">
            <h1 class="text-primary md:text-4xl text-3xl font-semibold md:mt-16 mt-10 leading-tight subpixel-antialiased tracking-wider text-center uppercase"
                style="font-family: gilroy-bold;">Software Development</h1>
            <p class="text-gray-500 text-center mt-4 font-semibold leading-tight subpixel-antialiased tracking-wider"
                style="font-family: gilroy-light;">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
            <div class="flex flex-wrap gap-10 py-10 mt-10 justify-center items-center mx-6
                        md:gap-16 md:py-20
                        lg:mx-52
                        xl:mx-56" 
                        style="font-family: gilroy-reguler">
                <div class="group">
                    <div class="card p-6 bg-white flex flex-col items-center justify-center w-60 h-72 shadow-md mx-auto rounded-lg group-hover:-translate-y-1 group-hover:scale-110 transition ease-in-out delay-150 duration-300 group-hover:shadow-md">
                        <img src="{{ asset('images/new/image 47.svg') }}" alt="" class="w-16">
                        <h1 class="font-semibold text-base mt-6 text-center text-[#00569E]">Business Analysis</h1>
                        <p class="text-sm text-center mt-4 text-gray-500 tracking-wide subpixel-antialiased leading-relaxed">We analyze business needs and offer the best solution for our clients.</p>
                    </div>
                </div>
                <div class="group">
                    <div class="card p-6 bg-white flex flex-col items-center justify-center w-60 h-72 shadow-md mx-auto rounded-lg group-hover:-translate-y-1 group-hover:scale-110 transition ease-in-out delay-150 duration-300 group-hover:shadow-md">
                        <img src="{{ asset('images/new/ux-design 1.svg') }}" alt="" class="w-16">
                        <h1 class="font-semibold text-base mt-6 text-center text-[#00569E]">UI/UX Development</h1>
                        <p class="text-sm text-center mt-4 text-gray-500 tracking-wide subpixel-antialiased leading-relaxed">We create seamless and efficient user flows</p>
                    </div>
                </div>
                <div class="group">
                    <div class="card p-6 bg-white flex flex-col items-center justify-center w-60 h-72 shadow-md mx-auto rounded-lg group-hover:-translate-y-1 group-hover:scale-110 transition ease-in-out delay-150 duration-300 group-hover:shadow-md">
                        <img src="{{ asset('images/new/software-development (1) 1.svg') }}" alt="" class="w-16">
                        <h1 class="font-semibold text-base mt-6 text-center text-[#00569E]">Development</h1>
                        <p class="text-sm text-center mt-4 text-gray-500 tracking-wide subpixel-antialiased leading-relaxed">We hire only highly experienced IT professionals.</p>
                    </div>
                </div>
                <div class="group">
                    <div class="card p-6 bg-white flex flex-col items-center justify-center w-60 h-72 shadow-md mx-auto rounded-lg group-hover:-translate-y-1 group-hover:scale-110 transition ease-in-out delay-150 duration-300 group-hover:shadow-md">
                        <img src="{{ asset('images/new/file-upload 1.svg') }}" alt="" class="w-16">
                        <h1 class="font-semibold text-lg mt-6 text-center text-[#00569E]">Deployment</h1>
                        <p class="text-sm text-center mt-4 text-gray-500 tracking-wide subpixel-antialiased leading-relaxed">We assist companies in deployment, scaling and maintenance of applications.</p>
                    </div>
                </div>
                <div class="group">
                    <div class="card p-6 bg-white flex flex-col items-center justify-center w-60 h-72 shadow-md mx-auto rounded-lg group-hover:-translate-y-1 group-hover:scale-110 transition ease-in-out delay-150 duration-300 group-hover:shadow-md">
                        <img src="{{ asset('images/new/folder-management 1.svg') }}" alt="" class="w-16">
                        <h1 class="font-semibold text-lg mt-6 text-center text-[#00569E]">Data Management</h1>
                        <p class="text-sm text-center mt-4 text-gray-500 tracking-wide subpixel-antialiased leading-relaxed">We help to manage all the business data in the system the right way.</p>
                    </div>
                </div>
                <div class="group">
                    <div class="card p-6 bg-white flex flex-col items-center justify-center w-60 h-72 shadow-md mx-auto rounded-lg group-hover:-translate-y-1 group-hover:scale-110 transition ease-in-out delay-150 duration-300 group-hover:shadow-md">
                        <img src="{{ asset('images/new/testing (1) 1.svg') }}" alt="" class="w-16">
                        <h1 class="font-semibold text-lg mt-6 text-center text-[#00569E]">Testing & Quality Assurance</h1>
                        <p class="text-sm text-center mt-4 text-gray-500 tracking-wide subpixel-antialiased leading-relaxed">Our goal is to make our products work without fails.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white md:px-20 px-4 py-20 rounded-t-3xl">
            <div class="md:grid md:grid-cols-2 flex flex-wrap mx-auto">
                <div class="flex flex-col gap-10"> 
                    <label for="chart engagement" class="text-2xl text-center font-semibold text-primary" style="font-family: gilroy-reguler">Engagement Model</label>
                    <livewire:components.chart-engagement>
                </div>
                <div class="flex flex-col gap-10 mt-20 md:mt-0"> 
                    <label for="chart engagement" class="text-2xl text-center font-semibold text-primary" style="font-family: gilroy-reguler">Methodologies</label>
                    <livewire:components.chart-methodologies>
                </div>
            </div>
            <div style="font-family: gilroy-reguler" class="text-lg text-gray-500 font-semibold mt-20 md:px-48 px-4 leading-relaxed subpixel-antialiased tracking-wide text-justify">
                <p>Our clients are always active participants in the project development lifecycle, controlling the progress and having an oppotunity to introduce changes at any time. As a result, we guarantee high quality of the final product and our services by supporting transparency of the working process.</p>
            </div>
        </div>
        <div class="bg-primary py-10 md:px-28 px-4">
            <h1 class="text-3xl text-center text-white font-semibold" style="font-family: gilroy-reguler">Technologies We Use</h1>
            <livewire:components.technologies-we-use>
        </div>
    </main>


    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart doughnut -->
    <script>
        const dataDoughnut = {
            datasets: [{
                label: "My First Dataset",
                data: [100, 500],
                backgroundColor: [
                    "#63ABFD",
                    "#165BAA",

                ],
                hoverOffset: 2,
            }, ],
        };

        const configDoughnut = {
            type: "doughnut",
            data: dataDoughnut,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartEngagement"),
            configDoughnut
        );

        const dataMethodologies = {
            datasets: [{
                label: "Methodologies Chart",
                data: [100, 500],
                backgroundColor: [
                    "#63ABFD",
                    "#165BAA",

                ],
                hoverOffset: 2,
            }, ],
        };

        const configChartMethod = {
            type: "doughnut",
            data: dataMethodologies,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartMethodologies"),
            configChartMethod
        );
    </script>
    @livewireStyles
</body>
</html>