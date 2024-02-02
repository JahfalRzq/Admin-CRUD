<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard admin</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://use.fontawesome.com/484df5253e.js"></script>


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    




    @livewireStyles
</head>


<body class="bg-[#E1EEFB]" >

    <div class="flex">
        <livewire:components.admin.sidebar-admin>
            <main class="flex-1 ml-52 divide-x-8 divide-black divide-dotted">
                <div class="grid grid-cols-12">
                    <div class="col-span-8 h-fit p-10 space-y-10 border-gray-300 border-r-2">
                        <div>
                            <h1 class="text-lg font-semibold" style="font-family: gilroy-reguler;">30 Days Performence
                            </h1>
                            <div class="grid grid-cols-4 justify-between gap-6 mt-5 mb-6">
                                <div class="card p-5 bg-white rounded-xl w-full flex gap-4">
                                    <img src="{{ asset('images/new/la_user-check.svg') }}" alt=""
                                        class="w-12">
                                    <div class="flex flex-col">
                                        <p style="font-family: gilroy-reguler;"
                                            class="text-sm text-gray-400 font-semibold">Article</p>
                                        <h1 class="text-xl subpixel-antialiased tracking-wide"
                                            style="font-family: gilroy-bold">{{ $article_published }}</h1>
                                    </div>
                                </div>
                                <div class="card p-5 bg-white rounded-xl w-full flex gap-4">
                                    <img src="{{ asset('images/new/la_user-check-1.svg') }}" alt=""
                                        class="w-12">
                                    <div class="flex flex-col">
                                        <p style="font-family: gilroy-reguler;"
                                            class="text-sm text-gray-400 font-semibold">Views</p>
                                        <h1 class="text-xl subpixel-antialiased tracking-wide"
                                            style="font-family: gilroy-bold">{{ $article_view->sum('view') }}</h1>
                                        {{-- {{$article_view->pluck('view')->count()}} --}}
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
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-9 ">
                                    {{-- {{dd($like_stats)}} --}}
                                    <livewire:components.admin.weekly-stats  >
                                </div>
                                <div class="col-span-3">
                                    <livewire:components.admin.user-device-stats>
                                </div>
                                {{-- @foreach($like_stats as $key => $value){{$like_stats}},@endforeach --}}
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center w-full mb-6">
                                <h1 style="font-family: gilroy-reguler;" class="font-semibold text-xl">Top Articles</h1>
                                <select name="filter-article" id="filter-article" style="font-family: gilroy-reguler"
                                    class="w-44 rounded-xl px-5 py-1.5 bg-[#019FE7] text-white">
                                    <div>
                                        <option value="MV" selected>Most Viewed</option>
                                        <option value="MV">Most Views</option>
                                        <option value="MV">Most Shares</option>
                                        <option value="MV">Most Likes</option>
                                    </div>
                                </select>
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                            <livewire:components.admin.card-article>
                            <livewire:components.admin.card-article>
                            <livewire:components.admin.card-article>
                            <livewire:components.admin.card-article>
                                {{-- @foreach ($top_article as $article)
                                    <div class="relative card w-full bg-white rounded-xl p-5 space-y-4"
                                        style="font-family: gilroy-reguler">
                                        <h1 class="font-semibold text-lg">{{ $article->title }}</h1>
                                        <div class="relative">
                                            <!-- text-ellipsis -->
                                            <p class=" text-sm line-clamp-3">{{ $article->description }}</p>
                                        </div>
                                        <h5 class="text-xs font-semibold">March 22,
                                            2022{{ date('F d,Y ', strtotime($article->created_at)) }}</h5>
                                        <div class="flex gap-4 justify-between items-center">
                                            <div class="inline-flex gap-2 items-center">
                                                <img src="{{ asset('images/new/ic_round-business-center.svg') }}"
                                                    alt="">
                                                <h5 class="text-xs">{{ $article->view }} Views</h5>
                                            </div>
                                            <div class="inline-flex gap-2 items-center">
                                                <img src="{{ asset('images/new/ic_round-business-center-1.svg') }}"
                                                    alt="">
                                                <h5 class="text-xs">{{ $article->share }} Share</h5>
                                            </div>
                                            <div class="inline-flex gap-2 items-center">
                                                <img src="{{ asset('images/new/bxs_like.svg') }}" alt="">
                                                <h5 class="text-xs">{{ $article->like }} Like</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </div>
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
