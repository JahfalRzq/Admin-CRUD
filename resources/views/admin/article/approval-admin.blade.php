<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approval Admin</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
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

<body class="bg-[#E1EEFB]">

    <div class="flex">
        <livewire:components.admin.sidebar-admin>
            <main class="flex-1 ml-52 divide-x-8 divide-black divide-dotted">
                <div class="grid grid-cols-12">
                    <div class="col-span-8 h-fit p-10 space-y-10 border-gray-300 border-r-2">
                        <div class="flex justify-between items-center" style="font-family: gilroy-reguler">
                            <div class="">
                                <h1 class="font-semibold text-2xl">Approval</h1>
                                <p class="text-sm text-gray-500 mt-2 font-semibold">{{$articles->count()}} article need approval</p>
                            </div>
                            <div class="relative" style="font-family: gilroy-reguler">
                                <form action="{{ url('approve') }}" method="GET">
                                    <input type="text" name="search" value="{{ $search }}" id="myInput"
                                        onkeyup="myFunction()" placeholder="Search users"
                                        class="w-96 rounded-xl  placeholder:text-gray-500 border-none">
                                    <div class="absolute top-0 right-0 mt-2 mr-2">
                                        {{-- <a href="#">
                                        <i class="bx bx-search bx-sm text-gray-500"></i>
                                    </a> --}}
                                        <button class="bx bx-search bx-sm text-gray-500" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <livewire:components.admin.need-approval>
                        <div>
                        <livewire:components.admin.approval-history>
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


    <script>
        const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

        const comparer = (idx, asc) => (a, b) => ((v1, v2) =>
            v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
        )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

        // do the work...
        document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
            const table = th.closest('table');
            Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
                .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
                .forEach(tr => table.appendChild(tr));
        })));
    </script>
    @livewireStyles
</body>

</html>
