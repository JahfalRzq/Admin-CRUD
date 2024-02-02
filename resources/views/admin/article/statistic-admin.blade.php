<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistic Admin</title>

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
                <div class="grid grid-cols-1 xl:grid-cols-12">
                    <div class="col-span-8 h-fit p-10 space-y-10 border-gray-300 xl:border-r-2">
                        <div>
                            <h1 class="text-lg font-semibold" style="font-family: gilroy-reguler;">30 Days Performence
                            </h1>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-between gap-6 mt-5 mb-6">
                                <div class="card p-5 bg-white rounded-xl w-full flex gap-4">
                                    <img src="{{ asset('images/new/la_user-check.svg') }}" alt=""
                                        class="w-12">
                                    <div class="flex flex-col">
                                        <p style="font-family: gilroy-reguler;"
                                            class="text-sm text-gray-400 font-semibold">Article</p>
                                        <h1 class="text-xl subpixel-antialiased tracking-wide"
                                            style="font-family: gilroy-bold">{{$totalArticle}}</h1>
                                    </div>
                                </div>
                                <div class="card p-5 bg-white rounded-xl w-full flex gap-4">
                                    <img src="{{ asset('images/new/la_user-check-1.svg') }}" alt=""
                                        class="w-12">
                                    <div class="flex flex-col">
                                        <p style="font-family: gilroy-reguler;"
                                            class="text-sm text-gray-400 font-semibold">Views</p>
                                        <h1 class="text-xl subpixel-antialiased tracking-wide"
                                            style="font-family: gilroy-bold">{{$totalView->sum('view')}}</h1>
                                    </div>
                                </div>
                                <div class="card p-5 bg-white rounded-xl w-full flex gap-4">
                                    <img src="{{ asset('images/new/la_user-check-2.svg') }}" alt=""
                                        class="w-12">
                                    <div class="flex flex-col">
                                        <p style="font-family: gilroy-reguler;"
                                            class="text-sm text-gray-400 font-semibold">Shares</p>
                                        <h1 class="text-xl subpixel-antialiased tracking-wide"
                                            style="font-family: gilroy-bold">{{$count_share->sum('share_stats')}}</h1>
                                    </div>
                                </div>
                                <div class="card p-5 bg-white rounded-xl w-full flex gap-4">
                                    <img src="{{ asset('images/new/la_user-check-3.svg') }}" alt=""
                                        class="w-12">
                                    <div class="flex flex-col">
                                        <p style="font-family: gilroy-reguler;"
                                            class="text-sm text-gray-400 font-semibold">Likes</p>
                                        <h1 class="text-xl subpixel-antialiased tracking-wide"
                                            style="font-family: gilroy-bold">{{$like_article->sum('is_liked')}}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-12">
                                <div class="col-span-4 sm:col-span-9 md:col-span-9 lg:col-span-9">
                                    <livewire:components.admin.weekly-stats>
                                </div>
                                <div class="col-span-4 sm:col-span-3">
                                    <livewire:components.admin.user-device-stats>
                                </div>
                            </div>
                        </div>
                        <div class="gap-6 w-full sm:flex md:flex">
                            <div class="card bg-white p-5 w-full h-full rounded-xl">
                                <label class="font-semibold text-lg ">Views by City</label>
                                <table class="table-auto text-sm text-left w-full items-center">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th scope="col" class="px-4 py-2 w-3/5"></th>
                                            <th scope="col" class="px-4 py-2 w-full"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm ">
                                        <tr>
                                            <td class="px-2 pt-4">1</td>
                                            <td class="line-clamp-1 px-4 pt-4 text-gray-900">Medan</td>
                                            <td class="px-4 pt-4 text-gray-900 font-semibold">
                                                120
                                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: 100%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-2 pt-4">2</td>
                                            <td class="line-clamp-1 px-4 pt-4 text-gray-900">Bandung</td>
                                            <td class="px-4 pt-4 text-gray-900 font-semibold">
                                                80
                                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: 80%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-2 pt-4">3</td>
                                            <td class="line-clamp-1 px-4 pt-4 text-gray-900">Jakarta Barat</td>
                                            <td class="px-4 pt-4 text-gray-900 font-semibold">
                                                60
                                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: 60%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card bg-white p-5 w-full h-full rounded-xl mt-5 sm:mt-0">
                                <label class="font-semibold text-lg ">Top Pages</label>
                                <table class="relative table-auto text-sm text-left w-full items-center">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th scope="col" class="px-4 py-4 w-3/5">Active Pages</th>
                                            <th scope="col" class="px-4 py-4 w-full">Total Views</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm">
                                        @forelse ($topArticle as $article)
                                        <tr>
                                            <td class="px-2 pt-2">{{$loop->iteration}}</td>
                                            <td class="line-clamp-1 px-4 pt-2 text-blue-500">{{$article->title}}</td>
                                            <td class="px-4 pt-2 text-gray-900 font-semibold">{{$article->view}}</td>
                                        </tr>
                                        @empty
                                        <td class="px-2 pt-2">#</td>
                                            <td class="line-clamp-1 px-4 pt-2 text-blue-500">Belum Ada Artikel</td>
                                            <td class="px-4 pt-2 text-gray-900 font-semibold">#</td>
                                        @endforelse
                                        {{-- <tr>
                                            <td class="px-2 pt-2">2</td>
                                            <td class="line-clamp-1 px-4 pt-2 text-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, corrupti?</td>
                                            <td class="px-4 pt-2 text-gray-900 font-semibold">777.214</td>
                                        </tr>
                                        <tr>
                                            <td class="px-2 pt-2">3</td>
                                            <td class="line-clamp-1 px-4 pt-2 text-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, corrupti?</td>
                                            <td class="px-4 pt-2 text-gray-900 font-semibold">777.214</td>
                                        </tr>
                                        <tr>
                                            <td class="px-2 pt-2">3</td>
                                            <td class="line-clamp-1 px-4 pt-2 text-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, corrupti?</td>
                                            <td class="px-4 pt-2 text-gray-900 font-semibold">777.214</td>
                                        </tr>
                                        <tr>
                                            <td class="px-2 pt-2">3</td>
                                            <td class="line-clamp-1 px-4 pt-2 text-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, corrupti?</td>
                                            <td class="px-4 pt-2 text-gray-900 font-semibold">777.214</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="w-full h-full flex flex-col justify-between">
                                <div></div>
                                <div class="" style="font-family: gilroy-reguler;">
                                    <label class="text-lg font-semibold">Top Keywords</label>
                                    <div class="grid grid-cols-4 gap-2 text-center items-center mt-4">
                                        <a href="#" class="px-6 py-1 bg-blue-200 text-blue-500 rounded-lg text-xs">UI/UX</a>
                                        <a href="#" class="px-6 py-1 bg-blue-200 text-blue-500 rounded-lg text-xs">admin</a>
                                        <a href="#" class="px-6 py-1 bg-blue-200 text-blue-500 rounded-lg text-xs">design</a>
                                        <a href="#" class="px-6 py-1 bg-blue-200 text-blue-500 rounded-lg text-xs">website</a>
                                        <a href="#" class="col-start-2 px-6 py-1 bg-blue-200 text-blue-500 rounded-lg text-xs">news</a>
                                        <a href="#" class=" px-6 py-1 bg-blue-200 text-blue-500 rounded-lg text-xs">career</a>

                                    </div>
                                </div>
                            </div>
                            <div></div>
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
                    {{-- <div class="h-96 bg-green-400 p-10">
                    <h1 class="text-4xl">Middle Content</h1>
                </div>
                <div class="h-96 bg-indigo-400 p-10">
                    <h1 class="text-4xl">Last Content</h1>
                </div> --}}
                </div>
            </main>
    </div>

    @livewireStyles

    {{-- Charts Javascript --}}
    <script>
        const chart = document.getElementById("myChart");
        const char = new Chart(chart,{

            type: "line",
            data: {
                labels: {!! $date !!},
                datasets: [{
                    borderColor: "#019FE7",
                    data: {!! $stats !!},
                    fill: false,
                    pointBackgroundColor: "#019FE7",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }, {
                    borderColor: "#023887",
                    data: {!! $v_stats !!},
                    fill: false,
                    pointBackgroundColor: "#023887",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }, {
                    borderColor: "#22C55E",
                    data: {!! $s_stats !!},
                    fill: false,
                    pointBackgroundColor: "#22C55E",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }, ],
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        display: false
                    },
                    x: {
                        display: true
                    },
                },
            },
        });

        const dataPie = {
            datasets: [{
                label: "My First Dataset",
                data: [30, 70],
                backgroundColor: [
                    "rgba(22, 91, 170, 1)",
                    "rgba(99, 171, 253, 1)",
                ],
                hoverOffset: 4,
            }, ],
        };

        const configPie = {
            type: "pie",
            data: dataPie,
            options: {},
        };

        var chartBar = new Chart(document.getElementById("chartPie"), configPie);
    </script>
</body>

</html>
