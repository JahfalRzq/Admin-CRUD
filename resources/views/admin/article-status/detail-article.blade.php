<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Article Published</title>

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
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://use.fontawesome.com/484df5253e.js"></script>


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @livewireStyles
</head>

<body class="">
    <div class="w-full min-h-[100vh] bg-[#E1EEFB] relative py-20">
        <div class="w-full h-96 bg-white blur-lg absolute inset-0"></div>
        <div class="absolute px-5 py-3 bg-green-50 rounded-xl mx-[102px] md:mx-44 -mt-10">
            <p class="font-semibold text-green-500 text-xl tracking-wide" style="font-family: gilroy-reguler">Published
            </p>
        </div>
        <div class="relative px-5 md:px-24" style="font-family: gilroy-reguler">
            <h1 class="text-5xl text-left font-semibold text-gray-900 mt-10 px-20">{{ $article_published->title }}</h1>
            <div class="mt-14 px-20">
                <div class="flex justify-between items-center">
                    <div class="flex gap-4 items-center">
                        <img src="../{{$user->image}}"
                            alt="editor" class="w-16 h-16 object-cover rounded-full">
                        <div style="font-family: gilroy-reguler;">
                            <h1 class="text-sm text-gray-900">By {{ $article_published->created_by }} <span
                                    class="font-semibold"></span> in
                                @foreach ($article_published->category as $c)
                                    <span class="font-semibold">{{ $c }}</span>
                                @endforeach
                            </h1>
                            <p class="text-gray-500 mt-2 font-semibold" style="font-family: gilroy-reguler;">
                                {{ date('d M,Y ', strtotime($article_published->created_at)) }}</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center text-text-gray-900 gap-8">
                        <a href="#">
                            <i class="bx bx-heart text-3xl"></i>
                        </a>
                        <button type="button" id="btn-share" data-dropdown-toggle="dropdown-share"
                            class="flex gap-2 items-center">
                            <i class="bx bxs-share bx-flip-horizontal text-3xl"></i>
                            <p style="font-family: gilroy-medium;">Share this article</p>
                        </button>
                        <div id="dropdown-share" aria-labelledby="btn-share"
                            class="hidden z-10 w-96 px-6 py-4 bg-white rounded-xl shadow-md text-black"
                            style="font-family: gilroy-reguler">
                            <div class="text-xl font-semibold">Sharing Options</div>
                            <ul>
                                <li class="mt-6">
                                    <label for="userid" class="text-lg font-semibold">Use a link for
                                        everything</label>
                                    <p class="text-sm">Copy link and paste it anywhere you want it</p>
                                    <input
                                        class="px-1 py-2 rounded-lg border w-full mt-2 truncate text-xs text-gray-400"
                                        onClick="this.select();"
                                        value="https://powerkerto.com/blog/web-design/create-design-system"
                                        id="userid">
                                    <button
                                        class="px-4 py-1 rounded-lg bg-green-500 focus:bg-green-600 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bx-link-alt text-black text-lg"></i><span
                                                class="text-black text-base justify-center ml-2">Copy link to
                                                clipboard</span></span>
                                    </button>
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Share Privately with friends</h1>
                                    <button
                                        class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bxs-envelope text-black text-2xl"></i><span
                                                class="text-black text-base justify-center ml-2">Email</span></span>
                                    </button>
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Share publicly on social network</h1>
                                    <button
                                        class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bxl-linkedin text-black text-2xl"></i><span
                                                class="text-black text-base justify-center ml-2">Linkedin</span></span>
                                    </button>
                                    <button
                                        class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bxl-facebook-square text-black text-2xl"></i><span
                                                class="text-black text-base justify-center ml-2">Facebook</span></span>
                                    </button>
                                    <button
                                        class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bxl-twitter text-black text-2xl"></i><span
                                                class="text-black text-base justify-center ml-2">Twitter</span></span>
                                    </button>
                                    <button
                                        class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bxl-instagram-alt text-black text-2xl"></i><span
                                                class="text-black text-base justify-center ml-2">Instagram</span></span>
                                    </button>
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Or maybe you want in person?</h1>
                                    <button
                                        class="px-4 py-1 rounded-lg bg-gray-200 focus:bg-gray-300 w-full mt-2 truncate text-xs text-gray-400">
                                        <span class="items-center flex"><i
                                                class="bx bxs-printer text-black text-2xl"></i><span
                                                class="text-black text-base justify-center ml-2">Print</span></span>
                                    </button>
                                </li>
                                <li class="mt-6">
                                    <h1 class="text-lg font-semibold">Or maybe you want in person?</h1>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="mt-6 font-semibold text-justify blur-[1.5px] w-80 md:w-full">
                    {{ $article_published->description }}</p>
                <div class="inline-flex justify-center items-center mt-2 space-x-6 w-full">
                    <button
                        class="px-6 py-3 bg-white focus:bg-gray-100 hover:bg-gray-50 shadow-md rounded-full font-semibold">Live
                        Preview
                    </button>
                    <a href="/detail-article/edit-article/{{ $article_published->id }}"
                        class="px-10 py-2 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-full font-semibold flex items-center justify-center text-white tracking-wider"><i
                            class="bx bx-edit text-xl pr-2"></i> Edit</a>
                    <button
                        class="px-6 py-2 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-full font-semibold flex items-center justify-center text-white tracking-wider"
                        onclick="toggleModal('modal-id')"  type="button"><i class="bx bx-trash text-xl pr-2"></i>
                        Delete
                    </button>
                </div>
                <form action="/article-delete/{id}" id="delete_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                        id="modal-id">
                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                            <!--content-->
                            <div
                                class="border-0 rounded-lg shadow-lg relative flex flex-row w-full bg-white outline-none focus:outline-none p-6">
                                <img src="{{ asset('images/new/delete-illustrations.svg') }}" alt="">
                                <div class="">
                                    <h3 class="text-2xl font-semibold text-start">
                                        Delete Confirmation
                                    </h3>
                                    <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete
                                        this Article ?</p>
                                    <div class="mt-8">
                                        <button onclick="toggleModal('modal-id')"
                                            class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4">CANCEL</button>
                                        <button onclick="toggleModal('modal-id')"
                                            class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="hidden opacity-50 fixed inset-0 z-40 bg-black w-full" id="modal-id-backdrop"></div>
                <script type="text/javascript">
                    function toggleModal(modalID) {
                        document.getElementById(modalID).classList.toggle("hidden");
                        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                        document.getElementById(modalID).classList.toggle("flex");
                        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                    }

                    function delete_article(id) {
                        deleteUserModal()
                        //console.log(id);
                        $('#delete_form').attr('action', `${window.location.origin}/article-delete/${id}`)

                    }
                </script>
            </div>
        </div>

        <div class="relative px-10 md:px-40 pt-20" style="font-family: gilroy-reguler">
            <h1 class="text-center text-3xl font-semibold tracking-wider">STATISTICS</h1>
            <div class="pt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                <livewire:components.admin.click-statistics :click="$click_sum">
                    <livewire:components.admin.view-statistics :view="$view_sum" >
                        <livewire:components.admin.share-statistics  :article="$article_share" >
                            <livewire:components.admin.like-statistics :like="$like_sum"  >

                            {{-- :like_date = "$like_date"  :like_stats = "$like_stats" wire:key='{{$article_published->id}}' --}}
            </div>
        </div>
    </div>
    @livewireScripts
    @livewireStyles
</body>

</html>

{{-- click article statistic --}}
<script>
    const chartClicks = document.getElementById("clickStats");
    const charClick  = new Chart(chartClicks,{
            type: "line",
            data: {
                labels: {!! $click_date !!},
                datasets: [{
                    borderColor: "#F97316",
                    data: {!! $click_stats !!},
                    fill: false,
                    pointBackgroundColor: "#F97316",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }],
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


</script>


{{-- view article statistic --}}
<script>
    const chartViews = document.getElementById("viewStats");
    const charView = new Chart(chartViews,{
            type: "line",
            data: {
                labels: {!! $view_date !!},
                datasets: [{
                    borderColor: "#023887",
                    data: {!! $view_stats !!},
                    fill: false,
                    pointBackgroundColor: "#023887",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }],
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
    
</script>


{{-- Article Share Statistic --}}

<script>
    const chartShares = document.getElementById("shareStats");
    const charShare = new Chart(chartShares,{
            type: "line",
            data: {
                
                labels: {!! $share_date !!},
                datasets: [{
                    borderColor: "#22C55E",
                    data: {!! $share_stats !!},
                    fill: false,
                    pointBackgroundColor: "#22C55E",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }],
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
</script>

{{-- Article Like Statistic --}}

<script>
    const chartLikes = document.getElementById("likeStats");
    const char = new Chart(chartLikes,{
            type: "line",
            data: {
                labels:{!! $like_date !!},
                datasets: [{
                    borderColor: "#0298DD",
                    data: {!! $like_stats !!},
                    fill: false,
                    pointBackgroundColor: "#0298DD",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }],
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

   



</script>


