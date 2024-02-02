<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Dashboard</title>

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


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




    @livewireStyles
</head>

<body class="bg-[#E1EEFB]">
    <div class="flex" id="openFormJob">
        <livewire:components.admin.sidebar-admin>

            <main class="flex-1 ml-52" style="font-family: gilroy-reguler">
                <div class="bg-white h-[260px]">
                    <img src="{{ asset('images/Rectangle 9092.png') }}" alt="">
                    <div class="grid grid-cols-5 mt-5">
                        <div class="mx-auto">
                            <img src="../../{{ auth()->user()->image }}" alt=""
                                class="w-40 h-[170px] rounded-full object-cover mx-auto -mt-32">
                        </div>
                        <div class="mx-auto text-black font-semibold mt-2">{{ auth()->user()->user_name }} <span
                                style="border-right-width: 2px; height: 100px;" class="ml-10"></span></div>
                        <div class="mx-auto text-black font-medium mt-2">{{ auth()->user()->position->position_name }}
                            <span style="border-right-width: 2px; height: 100px;" class="ml-10"></span></div>
                        <div class="mx-auto text-black font-medium mt-2">{{ auth()->user()->division->division_name }}
                            <span style="border-right-width: 2px; height: 100px;" class="ml-10"></span></div>
                        <div class="mx-auto font-medium">
                            <a href="/editProfileDashboard/{{ auth()->user()->id }}">
                                <button
                                    class="w-full px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-lg text-base text-white">
                                    Edit Profile
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-8 p-10">
                        <div class="text-black font-semibold text-2xl">Your Article</div>

                        <div class="grid grid-cols-2 gap-x-24">
                            @foreach ($articles as $article)
                                <div class="bg-white w-[420px] shadow-md mt-7">
                                    <div class="absolute py-[7px] px-[19px]"
                                        style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                        @foreach ($article->category as $c)
                                            <div
                                                class="w-32 px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] text-sm font-medium text-white">
                                                <h1 class="">{{ $c }}</h1>
                                            </div>
                                        @endforeach
                                    </div>
                                    <img src="../{{ $article->media }}" alt=""
                                        class="w-full h-[200px] object-cover">
                                    <div class="px-[42px] py-[15px]">
                                        <div class="absolute mx-72 -mt-10">
                                            <img src="../../{{auth()->user()->image}}"
                                                alt="" class="w-[50px] h-[50px] rounded-full object-cover">
                                        </div>
                                        <div class="">
                                            <p class="text-center text-black font-semibold text-xl">
                                                {{ $article->title }}</p>
                                            <p class="text-justify mt-[15px] text-[#6B6B6B] font-normal text">
                                                {{ $article->description }}</p>
                                            <div class="flex mt-[30px] justify-between mb-6">
                                                <div
                                                    class="font-normal bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">
                                                    {{ date('F d,Y', strtotime($article->created_at)) }} </td>
                                                </div>
                                                <div class="flex">
                                                    <img src="{{ asset('images/ant-design_share-alt-outlined.png') }}"
                                                        alt="" class="w-6 h-6">
                                                    <img src="{{ asset('images/carbon_view.png') }}" alt=""
                                                        class="w-6 h-6 ml-[10px]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="bg-white w-[420px] shadow-md mt-7">
                                <div class="absolute py-[7px] px-[19px]" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                    <div class="w-full px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] text-sm font-medium text-white">
                                        Web Design
                                    </div>
                                </div>
                                <img src="{{ asset('images/Rectangle 9102.png') }}" alt="" class="">
                                <div class="px-[42px] py-[15px]">
                                    <div class="absolute mx-72 -mt-10">
                                        <img src="https://images.unsplash.com/photo-1626301688449-1fa324d15bca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="w-[50px] h-[50px] rounded-full object-cover">
                                    </div>
                                    <div class="">
                                        <p class="text-center text-black font-semibold text-xl">Perbedaan UI dan UX</p>
                                        <p class="text-justify mt-[15px] text-[#6B6B6B] font-normal text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus consectetur adipiscing elit ut aliquam</p>
                                        <div class="flex mt-[30px] justify-between mb-6">
                                            <div class="font-normal bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">January 25, 2022</div>
                                            <div class="flex">
                                                <img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt="" class="w-6 h-6">
                                                <img src="{{ asset('images/carbon_view.png') }}" alt="" class="w-6 h-6 ml-[10px]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white w-[420px] shadow-md mt-7">
                                <div class="absolute py-[7px] px-[19px]" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                    <div class="w-full px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] text-sm font-medium text-white">
                                        Web Design
                                    </div>
                                </div>
                                <img src="{{ asset('images/Rectangle 9102.png') }}" alt="" class="">
                                <div class="px-[42px] py-[15px]">
                                    <div class="absolute mx-72 -mt-10">
                                        <img src="https://images.unsplash.com/photo-1626301688449-1fa324d15bca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="w-[50px] h-[50px] rounded-full object-cover">
                                    </div>
                                    <div class="">
                                        <p class="text-center text-black font-semibold text-xl">Perbedaan UI dan UX</p>
                                        <p class="text-justify mt-[15px] text-[#6B6B6B] font-normal text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus consectetur adipiscing elit ut aliquam</p>
                                        <div class="flex mt-[30px] justify-between mb-6">
                                            <div class="font-normal bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">January 25, 2022</div>
                                            <div class="flex">
                                                <img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt="" class="w-6 h-6">
                                                <img src="{{ asset('images/carbon_view.png') }}" alt="" class="w-6 h-6 ml-[10px]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white w-[420px] shadow-md mt-7">
                                <div class="absolute py-[7px] px-[19px]" style="filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));">
                                    <div class="w-full px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] text-sm font-medium text-white">
                                        Web Design
                                    </div>
                                </div>
                                <img src="{{ asset('images/Rectangle 9102.png') }}" alt="" class="">
                                <div class="px-[42px] py-[15px]">
                                    <div class="absolute mx-72 -mt-10">
                                        <img src="https://images.unsplash.com/photo-1626301688449-1fa324d15bca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="w-[50px] h-[50px] rounded-full object-cover">
                                    </div>
                                    <div class="">
                                        <p class="text-center text-black font-semibold text-xl">Perbedaan UI dan UX</p>
                                        <p class="text-justify mt-[15px] text-[#6B6B6B] font-normal text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus consectetur adipiscing elit ut aliquam</p>
                                        <div class="flex mt-[30px] justify-between mb-6">
                                            <div class="font-normal bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">January 25, 2022</div>
                                            <div class="flex">
                                                <img src="{{ asset('images/ant-design_share-alt-outlined.png') }}" alt="" class="w-6 h-6">
                                                <img src="{{ asset('images/carbon_view.png') }}" alt="" class="w-6 h-6 ml-[10px]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            @endforeach
                        </div>
                    </div>




                    {{-- Profile --}}
                    <div class="col-span-4 p-10 justify-start ml-5">
                        <div class="text-black font-bold text-lg mx-5">Calendar</div>
                        <livewire:calendar-profile-dashboard>
                    </div>
                </div>

            </main>

    </div>

    @livewireStyles
</body>

</html>
