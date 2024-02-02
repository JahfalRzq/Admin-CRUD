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
                        <div class="flex justify-between items-center mb-20" style="font-family: gilroy-reguler">
                            <div class="">
                                <h1 style="font-family: gilroy-bold;"
                                    class="text-2xl font-bold subpixel-antialiased tracking-wide">Article</h1>
                                <p class="text-sm text-gray-500 mt-2 font-semibold">{{ $total ?? '0' }} articles created
                                </p>
                            </div>
                            <div class="relative" style="font-family: gilroy-reguler">
                                <form action="{{ url('article-user') }}" method="GET">
                                    <input type="text" name="search" value="{{ $search }}" id="myInput"
                                        onkeyup="myFunction()" placeholder="Search users"
                                        class="w-96 rounded-xl  placeholder:text-gray-500 border-none">
                                    <div class="absolute top-0 right-0 mt-2 mr-2">
                                        <button class="bx bx-search bx-sm text-gray-500" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="relative" style="font-family: gilroy-reguler">
                                <input type="search" name="search" id="search-article" placeholder="Search article"
                                    class="w-96 rounded-xl  placeholder:text-gray-500 border-none">
                                <div class="absolute top-0 right-0 mt-2 mr-2">
                                    <a href="#">
                                        <i class="bx bx-search bx-sm text-gray-500"></i>
                                    </a>
                                </div>
                            </div> --}}
                            <a href="{{ url('/create-article') }}"
                                class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm">
                                <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i> New Article</h1>
                            </a>
                        </div>

                        {{-- Article --}}
                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg bg-white">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed"
                                style="font-family: gilroy-reguler">
                                <thead class="text-xs text-gray-900 uppercase bg-white">
                                    <tr class="font-semibold text-gray-500">
                                        <th scope="col" class="py-5 px-6 w-56">
                                            <div class="flex items-center cursor-pointer text-xs font-semibold">
                                                TITLE
                                                <a href="#">
                                                    <img src="{{ asset('images/bx_sort-alt-2.png') }}" alt=""
                                                        class="w-4 h-4 mx-1">
                                                    {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                    </path>
                                                </svg> --}}
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-3 px-6 w-36">
                                            <div class="flex items-center cursor-pointer text-xs font-semibold">
                                                CREATED ON
                                                <a href="#">
                                                    <img src="{{ asset('images/bx_sort-alt-2.png') }}" alt=""
                                                        class="w-4 h-4 mx-1">
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-3 px-6 w-[155px]">
                                            <div
                                                class="flex text-center items-center cursor-pointer text-xs font-semibold">
                                                PUBLISHED ON
                                                <a href="#">
                                                    <img src="{{ asset('images/bx_sort-alt-2.png') }}" alt=""
                                                        class="w-4 h-4 mx-1">
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            <div
                                                class="flex text-center items-center cursor-pointer text-xs font-semibold">
                                                STATUS
                                                <a href="#">
                                                    <img src="{{ asset('images/bx_sort-alt-2.png') }}" alt=""
                                                        class="w-4 h-4 mx-1">
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            <div class="text-center">STATISTIC</div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr class="bg-white border-b border-gray-300 text-gray-900">
                                            <th scope="row"
                                                class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap truncate">
                                                {{ $article->title }}
                                            </th>
                                            <th class="py-4 px-6">
                                                {{ date('d/m/Y', strtotime($article->created_at)) }}
                                            </th>
                                            <td class="py-4 px-6 font-bold">
                                                @if ($article->status == 'Published')
                                                {{date('d/m/Y',strtotime($article->updated_at))}}
                                                @elseif ($article->status == 'Draft')
                                                -
                                                @elseif ($article->status == 'On Review')
                                                -
                                                @elseif ($article->status == 'Feedback')
                                                -
                                                @elseif ($article->status == 'Reject')
                                                -
                                                @endif
                                            </td>
                                            @if ($article->status == 'Published')
                                                <td>
                                                    <a class=" py-4 px-6 font-bold text-green-500 hover:underline">{{ $article->status }}
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'On Review')
                                                <td>
                                                    <a class="py-4 px-6 font-bold text-blue-500 hover:underline">{{ $article->status }}
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'Feedback')
                                                <td>
                                                    <a class="py-4 px-6 font-bold text-red-500 hover:underline">{{ $article->status }}
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'Draft')
                                                <td>
                                                    <a class="py-4 px-6 font-bold text-yellow-500 hover:underline">{{ $article->status }}
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'Reject')
                                                <td>
                                                    <a class="py-4 px-6 font-bold text-red-500 hover:underline">{{ $article->status }}
                                                    </a>
                                                </td>

                                                
                                            @endif



                                            @if ($article->status == 'Published')
                                                <td class="py-4 px-9">

                                                    <a href="/detail-article-published/{{ $article->id }}">
                                                        <button
                                                            class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                                        </button>
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'Draft')
                                                <td class="py-4 px-9">
                                                    <a href="/detail-article-draft/{{ $article->slug }}">
                                                        <button
                                                            class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                                        </button>
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'On Review')
                                                <td class="py-4 px-9">
                                                    <a href="/detail-article-onreview/{{ $article->id }}">
                                                        <button
                                                            class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                                        </button>
                                                    </a>
                                                </td>
                                            @elseif ($article->status == 'Feedback')
                                                <td class="py-4 px-9">

                                                    <a href="/detail-article-feedback/{{ $article->id }}">
                                                        <button
                                                            class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                                        </button>
                                                    </a>

                                                </td>
                                            @endif

                                        </tr>
                                        {{-- <tr class="bg-white border-b border-gray-300 text-gray-900">
                                    <th scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap truncate">
                                        Perayaan HUT RI ke-77 di....
                                    </th>
                                    <th class="py-4 px-6">
                                        03/09/2022
                                    </th>
                                    <th class="py-4 px-6">
                                        04/09/2022
                                    </th>
                                    <th class="py-4 px-6 text-yellow-500">
                                        Draft
                                    </th>
                                    <td class="py-4 px-9">
                                        <a href="/detail-article-draft">
                                            <button class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-gray-300 text-gray-900">
                                    <th scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap truncate">
                                        Perayaan HUT RI ke-77 di....
                                    </th>
                                    <th class="py-4 px-6">
                                        03/09/2022
                                    </th>
                                    <th class="py-4 px-6">
                                        04/09/2022
                                    </th>
                                    <th class="py-4 px-6 text-blue-500">
                                        On Review
                                    </th>
                                    <td class="py-4 px-9">
                                        <a href="/detail-article-onreview">
                                            <button class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b border-gray-300 text-gray-900"> --}}
                                        {{-- <th scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap truncate">
                                        Perayaan HUT RI ke-77 di....
                                    </th>
                                    <th class="py-4 px-6">
                                        03/09/2022
                                    </th>
                                    <td class="py-4 px-6 font-bold">
                                        04/09/2022
                                    </td>
                                    <td class="py-4 px-6 font-bold text-red-500">
                                        Feedback
                                    </td>
                                    <td class="py-4 px-9">
                                        <a href="/detail-article-feedback">
                                            <button class="px-4 py-2 bg-gray-100 text-gray-800 focus:bg-gray-400 focus:text-white hover:bg-gray-300 duration-300 shadow-md rounded-md font-semibold flex items-center justify-center tracking-wider">View
                                            </button>
                                        </a>
                                    </td>
                                </tr> --}}
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $articles->links('pagination::tailwind') }}


                            {{-- Paginations --}}
                            {{-- <div class="relative">
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
                        </div> --}}


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
                            <div style="font-family: gilroy-reguler;" class="font-semibold text-lg mt-20">
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
