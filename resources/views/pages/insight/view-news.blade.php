<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>News</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }
        div#social-links ul li {
            display: inline-block;
        }          
        div#social-links ul li a {
            padding: 20px;
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 30px;
            color: #222;
            background-color: #ccc;
        }
    </style>

    {{-- plugin --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/share.js') }}"></script>


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>


    @livewireStyles
</head>
<body class="bg-[#F6FCFF]">
    <script src="{{ asset('js/increment.js') }}"></script>
    <!-- Navbar -->
    <div class="md:mt-6 md:mx-20 z-50 flex justify-center">
        <nav x-data="{ open: false }"
            class="fixed flex flex-col px-4 mx-auto md:w-[730px] lg:w-[1000px] xl:w-[1360px] md:items-center md:justify-between md:flex-row md:px-6 lg:px-8 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 md:rounded-full shadow-md z-40">
            <div class="flex flex-row items-center justify-between">
                <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo-footer.svg') }}" alt="" class="mr-3 h-20"></a>
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

    <div class="h-full py-[110px]">
        <div class="w-full h-[800px] bg-primary absolute -z-10 top-0"></div>
        <div class="md:px-20 px-6 py-10 relative border-b-gray-400">
            <div>
                <a href="{{ url('/news') }}" class="flex gap-2 text-white">
                    <i class="bx bx-chevron-left bx-sm"></i>
                    <p style="font-family: gilroy-reguler;" class="font-semibold">Back to News</p>
                </a>
            </div>
            <div class="mt-14">
                <h1 style="font-family: gilroy-semibold;" class="text-3xl md:text-5xl text-center text-white">{{$article->title}}</h1>
            </div>
            <div class="mt-14 px-20">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="flex gap-4 items-center">
                        <img src="../{{ $article->media }}" alt="editor" class="w-16 h-16 object-cover rounded-full">
                        <div style="font-family: gilroy-reguler;">
                            <h1 class="text-sm text-white">By <span class="font-semibold">{{$article->created_by}}</span> in 
                                @foreach ($article->category as $c)
                                    
                                <span class="font-semibold">{{$c}}</span>
                                @endforeach
                            </h1>
                            <p class="text-gray-400 mt-2 font-semibold" style="font-family: gilroy-reguler;">{{date('d M,Y ',strtotime($article->created_at))}}</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center text-white gap-8 mt-5 lg:mt-0">
                        {{-- <a href="#">
                            <i class="bx bx-heart text-3xl"></i>
                        </a> --}}
                        <form action="/articles-like/{{$article->id}}/like" method="POST">
                            @csrf
                        <button type="submit" class="bx bx-heart text-3xl"></button>
                    </form>
                        <a href="#">
                            <i class="bx bx-comment text-3xl"></i>
                        </a>
                        <button type="submit" id="btn-share" data-dropdown-toggle="dropdown-share" class="flex gap-2 items-center">
                            <i class="bx bxs-share bx-flip-horizontal text-3xl"></i>
                            <p style="font-family: gilroy-medium;">Share this article</p>
                        </button>
                        
                        <div id="dropdown-share" aria-labelledby="btn-share" class="hidden z-10 w-96 px-6 py-4 bg-white rounded-xl shadow-md text-black" style="font-family: gilroy-reguler">
                            <div class="text-xl font-semibold">Sharing Options</div>
                            <ul>
                                <li class="mt-6">
                                    <label for="userid" class="text-lg font-semibold">Use a link for everything</label>
                                    <p class="text-sm">Copy link and paste it anywhere you want it</p>
                                    <input class="px-1 py-2 rounded-lg border w-full mt-2 truncate text-xs text-gray-400" id="text-area" value="{{$article->slug}}" id="userid"></input>
                                    <form action="/articles-share/{{$article->id}}" method="post">
                                        @csrf
                                        @method('PUT')
                                    <button  type="submit" onclick="copied()" class="px-4 py-1 rounded-lg bg-green-500 focus:bg-green-600 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i class="bx bx-link-alt text-black text-lg"></i><span class="text-black text-base justify-center ml-2">Copy link to clipboard</span></span>
                                    </button>
                                    </form>
                                </form>
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Share Privately with friends</h1>
                                    <button class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i class="bx bxs-envelope text-black text-2xl"></i><span class="text-black text-base justify-center ml-2">Email</span></span>
                                    </button>
                                </li>
                                {{-- <form action="/articles-share/{{$article->id}}" method="post" id="social-share">
                                @csrf
                                @method('PUT')  --}}
                                <li class="mt-6" id="counter-{{ $article->id }}">
                                    <h1 class="text-lg font-semibold">Share publicly on social network</h1>
                                       
                                {{-- </form> --}}


                                    <button  id="share-button" data-article-id="{{$article->id}}" class=" increment-button px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400" >
                                    <span   class="items-center flex"><i class="bx  text-black text-2xl"></i><span class="text-black text-base justify-center ml-2"> {!! $shareComponent !!}</span> </span>
                                    </button>
                                    {{-- <button class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i class="bx text-black text-2xl"></i><span class="text-black text-base justify-center ml-2">{!! $shareComponent_facebook !!}Facebook</span></span>
                                    </button>
                                    <button class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i class="bx text-black text-2xl"></i><span class="text-black text-base justify-center ml-2">{!! $shareComponent_twitter!!}Twitter</span></span>
                                    </button>
                                    <button class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i class="bx  text-black text-2xl"></i><span class="text-black text-base justify-center ml-2">Instagram</span></span>
                                    </button> --}}
                                    
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Or maybe you want in person?</h1>
                                    <button class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i class="bx bxs-printer text-black text-2xl"></i><span class="text-black text-base justify-center ml-2">Print</span></span>
                                    </button>
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Or maybe you want in person?</h1>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:px-32 xl:py-14 mt-10">
                    <img src="../{{ $article->media }}" class="w-full md:h-[742px] object-cover">
                <!-- Isi Article -->
                <div class="py-14 text-gray-600">
                    <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide text-justify">{{$article->description}}</h1>
                    <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio</p>
                    <br>
                    <br>
                    <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide text-justify">Lorem ipsum dolor sit amet.</h1>
                    <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio</p>
                </div>
                <!-- Button Edit & Delete (tapi apabila role user kedua button tersebt hilang) -->
                <div class="flex gap-5 justify-center mb-10">
                    <a href="/edit-article"> <!-- Role admin -->
                        <button class="px-10 py-3 rounded-2xl bg-blue-500 hover:bg-blue-600 text-white flex gap-2 items-center shadow-lg">
                            <i class="bx bx-edit"></i>
                            <p>Edit</p>
                        </button>
                    </a>
                    <a href="#"> <!-- Role admin -->
                        <button class="px-8 py-3 rounded-2xl bg-red-500 hover:bg-red-600 text-white flex gap-2 items-center shadow-lg" data-modal-toggle="popup-modal" type="button">
                            <i class="bx bx-trash"></i>
                            <p>Delete</p>
                        </button>
                    </a>
                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-900 bg-transparent hover:bg-gray-300 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="popup-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <h3 class="mb-5 text-lg font-normal text-gray-900">Are you sure want to delete this post?</h3>
                                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-200 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full border border-gray-200 text-sm font-medium px-10 py-2.5 mr-6 hover:text-gray-900 focus:z-10 dark:bg-gray-500 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-full text-sm inline-flex items-center px-10 py-2.5 text-center mr-2">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="w-full h-0.5 bg-gray-300 rounded-lg"></div>
            <!-- Comments -->
            <div class="block py-10">
                <div class="flex gap-5 items-center">
                    <img src="https://images.unsplash.com/photo-1626301688449-1fa324d15bca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="editor" class="w-16 h-16 object-cover rounded-full">
                    <input type="text" name="comment" id="" placeholder="Add a comment..." class="w-full h-16 border border-gray-400 rounded-3xl bg-transparent pl-6 placeholder:text-lg">
                </div>
                <div></div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/increment.js') }}"></script> --}}

</body>
</html>



{{-- copied link --}}
<script>
    var Text = document.getElementById("text-area");

    Text.select();
    navigator.clipboard.writeText(Text.value);
    // message.onclick  = this.select({alert("Link is Copied")})
     
    // function copied(){
    //     alert("Link is Copied");
    // }


</script>

{{-- post data share to database --}}
<script>
    $(document).ready(function(){
        $('#share-button').click(function(){
            var articleId = $(this).data('article-id');
            var url       = '/article/share/' + articleId;


            $.ajax({
                url  : url,
                type : 'POST',
                headers : {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    console.log(response);
                },
                error : function(xhr){
                    console.log(xhr.responseText);
                }
            });
        });
    });




</script>
