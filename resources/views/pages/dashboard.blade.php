<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Powerkerto</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    @livewireStyles
</head>
{{-- {{dd($agent)}}; --}}
<body>


    {{-- Navbar --}}
    <div class="top-0 z-50 sticky transition-all duration-300 ">
        <livewire:navbar.navbar-dashboard />
    </div>
    <!-- Hero Start -->
    <div class="w-full md:h-screen h-full bg-primary ">
        <div class="w-full">
            
            <div
                class="flex md:flex-row flex-col justify-between items-center md:gap-0 gap-10 md:px-20 px-6 md:pt-44 pt-24">
                <div class="md:w-3/4 w-full">
                    <div class="relative">
                        <img src="{{ URL('images/dots.svg') }}"
                            class="absolute -left-28 w-24 h-24 -top-20 opacity-40 md:block hidden" />
                    </div>
                    <h1 class="text-white text-2xl md:text-6xl  leading-relaxed subpixel-antialiased tracking-normal"
                        style="font-family: gilroy-bold;">
                        POWER UP <span style="font-family: gilroy-light;" class="italic">THE NEW LIGHT</span>
                    </h1>
                    <h1 class="text-white text-2xl md:text-6xl lg:text-6xl md:mt-6 leading-relaxed subpixel-antialiased tracking-normal"
                        style="font-family: gilroy-bold;">
                        BUILD UP <span style="font-family: gilroy-light;" class="italic">TO THE BRIGHT</span>
                    </h1>
                    <p class="text-gray-300 text-base md:text-lg font-light md:mt-12 mt-5 md:w-3/4 text-justify leading-relaxed subpixel-antialiased tracking-wider"
                        style="font-family: gilroy-reguler;">
                        In Powerkerto, we valuing each stream of the business, from product marketing, software as a service (SaaS), and affiliate marketing programme. From the streams we adopt, we create an "end to end" digital marketing ecosystem.

                        
                    </p>
                    <div class="relative hidden md:block">
                        <img src="{{ URL('images/dots.svg') }}"
                            class="relative -left-28 -bottom-20 w-24 h-24 opacity-40" />
                    </div>
                </div>
                <div class="">
                    <img src="{{ URL('images/Group 238859.png') }}" class=" z-50 bottom-10 md:bottom-0 mb-10 md:mb-0" />
                    <div class="relative">
                        <img src="{{ 'images/Rectangle 3.svg' }}"
                            class="absolute md:-bottom-0 md:-top-6 -top-14 right-10 " />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-screen bg-white">
        <h1 class="md:text-4xl text-2xl text-primary md:px-20 px-0 md:pt-20 pt-10 text-center uppercase subpixel-antialiased tracking-wider"
            style="font-family: gilroy-semibold;">
            Why Choose Powerkerto         

        </h1>

        <div class="flex md:flex-row flex-col justify-between items-center md:px-40 px-6 md:mt-12 mt-8 md:gap-16 gap-8">
            <div class="card bg-white px-4 py-4 rounded-xl drop-shadow-md w-full">
                <div class="flex gap-2 items-center justify-center">
                    <img src="{{ URL('images/vscode-icons_file-type-smarty.svg') }}" class="w-12 h-12" />
                    <div class="flex flex-col gap-1" style="font-family: gilroy-reguler;">
                        <h1 class="text-primary text-lg subpixel-antialiased tracking-wider gilroy-font font-semibold" style="font-family: gilroy-medium;">
                            Creative
                        </h1>
                        <p class="text-base text-gray-500 subpixel-antialiased tracking-wider font-semibold">
                            Experience and Creative Team
                        </p>
                    </div>
                </div>
            </div>
            <div class="card bg-white px-4 py-4 rounded-xl shadow-md w-full">
                <div class="flex gap-2 items-center justify-center">
                    <img src="{{ URL('images/ph_handshake-duotone.svg') }}" class="w-12 h-12" />
                    <div class="flex flex-col gap-1" style="font-family: gilroy-reguler;">
                        <h1 class="text-primary text-lg subpixel-antialiased tracking-wider gilroy-font font-semibold" style="font-family: gilroy-medium;">
                            Responsive
                        </h1>
                        <p class="text-base text-gray-500 subpixel-antialiased tracking-wider font-semibold">
                            Providing the Best Service
                        </p>
                    </div>
                </div>
            </div>
            <div class="card bg-white px-4 py-4 rounded-xl shadow-md w-full">
                <div class="flex gap-2 items-center justify-center">
                    <img src="{{ URL('images/ant-design_field-time-outlined.svg') }}" class="w-12 h-12" />
                    <div class="flex flex-col gap-1" style="font-family: gilroy-reguler;">
                        <h1 class="text-primary text-lg subpixel-antialiased tracking-wider font-semibold" style="font-family: gilroy-medium">
                            On Time
                        </h1>
                        <p class="text-base text-gray-500 subpixel-antialiased tracking-wider font-semibold">
                            Scheduled and Structured Work
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:grid md:grid-cols-3 flex flex-col md:px-40 px-6 md:gap-14 gap-10 mt-20 w-full">
            <div class="w-full">
                <img src="{{ asset('images/new/laptoppwk 1.png') }}"
                    class="md:w-[25rem] md:h-[18rem] sm:h-[1rem] w-full h-64" />
            </div>
            <div class="md:col-span-2 w-full">
                <p class="mt-6 text-lg leading-relaxed text-gray-500 subpixel-antialiased tracking-wider font-semibold text-justify "
                    style="font-family: gilroy-reguler;">
                    We are a trendsetter in the Digital Marketing Ecosystem that addresses domestics and international markets and customers from all over the world. We always believe that business will not be able to run alone but must give a positive impact on society. With a new perspective, we inspire work like powering up a light and building it up to the bright.
                </p>
                <a href="{{ url('/about-us') }}">
                    <button
                        class="px-6 py-2 bg-gradient-to-r from-secondary to-third rounded-full text-white mt-5 hover:from-third hover:to-secondary subpixel-antialiased tracking-wider"
                        style="font-family: gilroy-medium;">
                        Read More
                    </button>
                </a>
            </div>
        </div>

        <div class="w-full bg-white md:mt-32 mt-20 px-6">
            <h1 class="md:text-4xl text-2xl text-primary text-center subpixel-antialiased tracking-wider"
                style="font-family: gilroy-semibold;">
                Expertise in Business Domains
            </h1>
            <livewire:components.service-and-product>
                <div class="mt-40">
                    <h1 class="md:text-3xl text-2xl text-primary text-center subpixel-antialiased tracking-wider"
                        style="font-family: gilroy-semibold;">
                        Solutions We Build
                    </h1>
                    <div class="md:grid md:grid-cols-3 xl:grid-cols-5 flex flex-wrap mt-12 justify-center items-center gap-10 md:px-40 px-6">
                        <div class="flex flex-col justify-center items-center gap-8">
                            <img src="{{ asset('images/new/enterprise 1.svg') }}" alt="" class="w-16 h-16" />
                            <h1 class="text-xl text-center font-bold px-4 subpixel-antialiased tracking-wider "
                                style="font-family: gilroy-reguler;">
                                Enterprice Solutions
                            </h1>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-8">
                            <img src="{{ asset('images/new/cloud-servers 1.svg') }}" alt="" class="w-16 h-16" />
                            <h1 class="text-xl text-center font-semibold px-4 subpixel-antialiased tracking-wider "
                                style="font-family: gilroy-reguler;">
                                SaaS Products
                            </h1>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-8">
                            <img src="{{ asset('images/new/marketplace 1.svg') }}" alt="" class="w-16 h-16" />
                            <h1 class="text-xl text-center font-semibold px-4 subpixel-antialiased tracking-wider"
                                style="font-family: gilroy-reguler;">
                                Marketplace
                            </h1>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-8">
                            <img src="{{ asset('images/new/presentation (1) 1.svg') }}" alt=""
                                class="w-16 h-16" />
                            <h1 class="text-xl text-center font-semibold px-4 subpixel-antialiased tracking-wider"
                                style="font-family: gilroy-reguler;">
                                MVPS For Startup
                            </h1>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-8">
                            <img src="{{ asset('images/new/artificial-intelligence 1.svg') }}" alt=""
                                class="w-16 h-16" />
                            <h1 class="text-xl text-center font-semibold  subpixel-antialiased tracking-wider"
                                style="font-family: gilroy-reguler;">
                                AI and Machine Learning
                            </h1>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Third Section -->
        <div class="w-full md:px-20 px-6 py-10 pb-20 mt-20">
            <livewire:components.products :products_software="$products_software" :products_design="$products_design" :products_marketing="$products_marketing">
        </div>

        <!--  -->
        <div class="w-full md:mt-10 lg:mt-10 xl:-mt-80 pb-20">
            <h1 class="md:px-20 px-6 text-3xl text-primary text-center font-semibold subpixel-antialiased tracking-wider"
                style="font-family: gilroy-reguler">
                Our Clients & Partners
            </h1>
            <p
                class="px-20 text-center text-lg mt-10 gilroy-font font-medium text-gray-500 subpixel-antialiased tracking-wider">
                We provide the best service for our clients & partners in various
                business fields with high professionalism, please contact us for more
                information
            </p>

            <livewire:components.client-and-partner>
        </div>

        <livewire:footer.footer-dashboard>

            <!-- Back To Top Button -->
            <button id="to-top-button" onclick="goToTop()" title="Go To Top"
                class="hidden fixed z-50 md:bottom-24 bottom-12 md:right-20 right-6 border-0 w-12 h-12 rounded-full drop-shadow-md bg-primary text-white text-3xl font-bold items-center">
                <i class="bx bxs-chevron-up"></i>
            </button>
    </div>

    @livewireScripts
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <!-- Javascript code -->
    <script>
        var toTopButton = document.getElementById('to-top-button')

        // When the user scrolls down 200px from the top of the document, show the button
        window.onscroll = function() {
            if (
                document.body.scrollTop > 200 ||
                document.documentElement.scrollTop > 200
            ) {
                toTopButton.classList.remove('hidden')
            } else {
                toTopButton.classList.add('hidden')
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function goToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    </script>
</body>

</html>
