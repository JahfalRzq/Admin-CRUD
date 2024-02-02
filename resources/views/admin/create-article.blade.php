<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Article</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />



    <script>
        function edvalueKeyPress(){
            var title =  document.getElementById("title");
            var s = title.value;

            var description = document.getElementById("desription");
            var s = description.value;

            var category = document.getElementById("category");
            var s =  category.value;

            // var media = document.getElementById("media");
            // var s = media.value;
        }
    </script>
    {{-- <script>
        type='text/javascript'>
        function preview_image2(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image2');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    </script> --}}
    @livewireStyles
</head>

<body class="bg-[#F6FCFF]">
    <!-- navbar -->
    <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
        <nav x-data="{ open: false }"
            class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1350px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-40">
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
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800"
                            style="font-family: gilroy-medium;">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/about-us') }}">About Us</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/structural') }}">Organizational Structure</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/ourPeople') }}">Our People</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/commissionare') }}">Commissionare & Directore</a>
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
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/service') }}">Services</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/product') }}">Product</a>
                        </div>
                    </div>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-primary text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4  hover:text-primary focus:text-white hover:bg-primary hover:bg-opacity-20 focus:bg-primary focus:outline-none focus:shadow-outline">
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
                                href="{{ url('/news') }}">News</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-[#0398EC] focus:text-[#0398EC] focus:outline-none focus:shadow-outline"
                                href="{{ url('/gallery') }}">Gallery</a>
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

    <main class="py-36 px-20">
        <h1 class="text-5xl tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#0398EC] to-[#046CB4]"
            style="font-family: gilroy-reguler">Create New Article</h1>

            <form action="artikel-store" method="POST" id="store_form" enctype="multipart/form-data">
                @csrf

              

            <div class="py-20 flex flex-col space-y-6" style="font-family: gilroy-reguler">
                <div>
                    <label for="title" class="block text-lg font-semibold">Title</label>
                    <input onKeyPress="edValueKeyPress()"
                     type="text" name="title" id="title" class="w-full outline-none border-none rounded-lg bg-blue-50 mt-2 ml-8"
                     placeholder="Title" required>
                </div>
                @error('title')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
                
              

                <div>
                    <label for="description" class="block text-lg font-semibold ">Description</label>
                    <textarea  name = "description" id="description" rows="4" class="w-full outline-none border-none rounded-lg bg-blue-50 mt-2 ml-8 p-4"
                        placeholder="Write description here" required></textarea>
                </div>
                @error('description')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
                
                <div>
                    <label for="description" class="block text-lg font-semibold ">Insert Media (Photo, Video)</label>
                    <div class="flex justify-center items-center w-64 mt-2 ml-8">
                        <label class="cursor-pointer" for="file">
                            <img src="{{ asset('images/bg.jpg') }}" alt="" id="photo">
                            <div class="icon flex flex-col justify-center items-center -mt-40 pb-10">
                                <i class="bx bxs-plus-square bx-md text-gray-500"></i>
                                <p class="mb-2 text-sm text-gray-500 mt-2 font-semibold">Add media</p>
                            </div>
                            <input name = "media" id="file" type="file" class="hidden" required>
                        </label>

                        {{-- <label for="dropzone-file"
                        class="flex flex-col justify-center items-center w-full h-64 bg-blue-50 rounded-lg cursor-pointer">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <i class="bx bxs-plus-square bx-md text-gray-500"></i>
                            <p class="mb-2 text-sm text-gray-500 mt-2 font-semibold">Add media</p>
                        </div>
                        <input name = "media" id="dropzone-file" type="file" class="hidden">
                    </label> --}}
                </div>
            </div>
            @error('media')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
            <div class="overflow-auto py-10">
                <label for="category" class="block text-lg font-semibold ">Category</label>
                <div class="inline-flex gap-6 items-center mt-2 ml-8">
                    <label class="relative cursor-pointer">
                        <input type="checkbox" class="peer sr-only" name="category[]" value="Architecture" required />
                        <div class="overflow-hidden rounded-lg px-5 py-[10px] border-2 peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4] peer-checked:hover:bg-gradient-to-r peer-checked:hover:from-[#046CB4] peer-checked:hover:to-[#0398EC] shadow-md ring ring-transparent text-gray-500 peer-checked:text-gray-50 transition-all active:scale-95 peer-checked:grayscale-0">
                          <p class="">Architecture</p>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="checkbox" class="peer sr-only" name="category[]" value="Business" required />
                        <div class="overflow-hidden rounded-lg px-5 py-[10px] border-2 peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4] peer-checked:hover:bg-gradient-to-r peer-checked:hover:from-[#046CB4] peer-checked:hover:to-[#0398EC] shadow-md ring ring-transparent text-gray-500 peer-checked:text-gray-50 transition-all active:scale-95 peer-checked:grayscale-0">
                          <p class="">Business</p>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="checkbox" class="peer sr-only" name="category[]" value="Development" required />
                        <div class="overflow-hidden rounded-lg px-5 py-[10px] border-2 peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4] peer-checked:hover:bg-gradient-to-r peer-checked:hover:from-[#046CB4] peer-checked:hover:to-[#0398EC] shadow-md ring ring-transparent text-gray-500 peer-checked:text-gray-50 transition-all active:scale-95 peer-checked:grayscale-0">
                          <p class="">Development</p>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="checkbox" class="peer sr-only" name="category[]" value="Education" required />
                        <div class="overflow-hidden rounded-lg px-5 py-[10px] border-2 peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4] peer-checked:hover:bg-gradient-to-r peer-checked:hover:from-[#046CB4] peer-checked:hover:to-[#0398EC] shadow-md ring ring-transparent text-gray-500 peer-checked:text-gray-50 transition-all active:scale-95 peer-checked:grayscale-0">
                          <p class="">Education</p>
                        </div>
                    </label>
                    <label class="relative cursor-pointer">
                        <input type="checkbox" class="peer sr-only" name="category[]" value="Financial" required />
                        <div class="overflow-hidden rounded-lg px-5 py-[10px] border-2 peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4] peer-checked:hover:bg-gradient-to-r peer-checked:hover:from-[#046CB4] peer-checked:hover:to-[#0398EC] shadow-md ring ring-transparent text-gray-500 peer-checked:text-gray-50 transition-all active:scale-95 peer-checked:grayscale-0">
                          <p class="">Financial</p>
                        </div>
                    </label>
                    <label class="relative cursor-pointer flex">
                        <input type="checkbox" class="peer sr-only" name="category[]" id="myCheck" onclick="myFunction()" value="" required />
                        <div class="overflow-hidden rounded-lg px-5 py-[10px] border-2 peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4] peer-checked:hover:bg-gradient-to-r peer-checked:hover:from-[#046CB4] peer-checked:hover:to-[#0398EC] shadow-md ring ring-transparent text-gray-500 peer-checked:text-gray-50 transition-all active:scale-95 peer-checked:grayscale-0">
                          <p class="">Other</p>
                        </div>
                        <input type="text" name="other" id="other_category" style="display:none" class="w-full h-11 mt-0.5 font-semibold rounded-md">
                    </label>
                    {{-- <div class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="category[]" id="businessCheckbox" value="business" class="rounded-md">
                        <label for="businessCheckbox" class="font-semibold text-gray-500">Business</label>
                    </div>
                    <div class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="category[]" id="architectureCheckbox" value="architecture" class="rounded-md">
                        <label for="architectureCheckbox" class="font-semibold text-gray-500">architecture</label>
                    </div>
                    <div class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="category[]" id="financialCheckbox" value="financial" class="rounded-md">
                        <label for="financialCheckbox" class="font-semibold text-gray-500">Financial</label>
                    </div>
                    <div class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="category[]" id="developmentCheckbox" value="financial" class="rounded-md">
                        <label for="developmentCheckbox" class="font-semibold text-gray-500">Development</label>
                    </div>
                    <div class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="category[]" id="educationCheckbox" value="education" class="rounded-md">
                        <label for="educationCheckbox" class="font-semibold text-gray-500">Education</label>
                    </div>
                    <div class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="category[]" id="myCheck" onclick="myFunction()" value="" class="rounded-md">
                        <label for="myCheck" id="Other">Other</label>
                        <input type="text" name="other" id="other_category" style="display:none" class="w-32 h-1 font-semibold rounded-md" placeholder="Other">
                    </div> --}}
                </div>
            </div>
            </div>
           


        </form>
        
        <div class="inline-flex items-center">
            <button class="px-12 py-3 bg-gray-400 rounded-xl text-white mr-6 shadow-lg">Cancel</button>
            <button form="store_form" class="px-14 py-3 bg-[#283C85] rounded-xl text-white shadow-lg">Save</button>
        </div>
        <textarea name="isi_artikel" id="basic-example" class="form-control" style="height:150px" placeholder="Isi Konten">
        </textarea>
    </main>
    @livewireStyles
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    tinymce.init({
        selector: 'textarea#basic-example',
        height: 500,
        plugins: 'image code',
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | media image| help',
        /* enable title field in the Image dialog*/
        image_title: true,
        /* enable automatic uploads of images represented by blob or data URIs*/
        automatic_uploads: true,
        /*
          URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
          images_upload_url: 'postAcceptor.php',
          here we add custom filepicker only to Image dialog
        */
        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            /*
              Note: In modern browsers input[type="file"] is functional without
              even adding it to the DOM, but that might not be the case in some older
              or quirky browsers like IE, so you might want to add it to the DOM
              just in case, and visually hide it. And do not forget do remove it
              once you do not need it anymore.
            */

            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function() {
                    /*
                      Note: Now we need to register the blob in TinyMCEs image blob
                      registry. In the next release this part hopefully won't be
                      necessary, as we are looking to handle it internally.
                    */
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    /* call the callback and populate the Title field with the file name */
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        },
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
<script src="https://cdn.tiny.cloud/1/827uusw689tw09c7hczziwncyttvqr4vyw0p7c3o9xpyzpqp/tinymce/6/tinymce.min.js"
referrerpolicy="origin"></script>
<script>
    const img = document.querySelector('#photo');
    const icon = document.querySelector('.icon');

        file.addEventListener("change", function () {
        //this refers to file
        const choosedFile = this.files[0];

        if (choosedFile) {
            const reader = new FileReader(); //FileReader is a predefined function of JS

            reader.addEventListener("load", function () {
            img.setAttribute("src", reader.result);
            icon.style.display = "none";
            });

            reader.readAsDataURL(choosedFile);
        }
        });



    function edvalueKeyPress(){
        var title =  document.getElementById("title");
        var s = title.value;

        var description = document.getElementById("desription");
        var s = description.value;

        var category = document.getElementById("category");
        var s =  category.value;

        // var media = document.getElementById("media");
        // var s = media.value;
    }

    function myFunction(){
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("other_category");
        var label = document.getElementById("Other")
        if(checkBox.checked == true){
            text.style.display = "block";
            label.style.display = "none";
        }else{
            text.style.display = "none";
        }
    }

    $('#other_category').on('change',function(){
        $('#myCheck').val($('#other_category').val());



    });
</script>



</html>
