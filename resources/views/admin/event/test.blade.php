<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Superadmin</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <div class="flex justify-between items-center mb-20">
                            <div class="" style="font-family: gilroy-bold;">
                                <h1 class="text-2xl font-bold subpixel-antialiased tracking-wide">Users</h1>
                                <p class="text-sm text-gray-500 mt-2 font-semibold">100 total users</p>
                            </div>
                            <div class="relative" style="font-family: gilroy-reguler">
                                <form action="{{ url('user') }}" method="GET">
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
                            <button onclick="add_user()"
                                class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm"
                                id="showEventNewUser">
                                <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i>New Users</h1>
                            </button>
                        </div>

                        {{-- Events --}}

                        <div class="overflow-auto relative shadow-md sm:rounded-lg bg-white hidden lg:block">

                            {{-- @foreach ($user_table as $user) --}}

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed"
                                style="font-family: gilroy-reguler">

                                {{-- <a href="{{ route('create_user') }}" class=""> --}}

                                <thead class="text-xs text-gray-900 uppercase bg-white">
                                    <tr class="font-semibold text-gray-500">
                                        <th scope="col" class="w-60 py-3 px-6">
                                            <div class="flex items-center cursor-pointer">
                                                EVENT
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 320 512">
                                                        <path
                                                            d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </th>
                                        <th scope="col" class="w-36 py-3 px-6">
                                            <div class="flex items-center cursor-pointer">
                                                DATE
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 320 512">
                                                        <path
                                                            d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </th>
                                        <th scope="col" class="w-32 py-3 px-6">
                                            <div class="flex text-center items-center cursor-pointer">
                                                TIME
                                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                        class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 320 512">
                                                        <path
                                                            d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                        </path>
                                                    </svg></a>
                                            </div>
                                        </th>
                                        <th scope="col" class="w-32 py-3 px-6">
                                            <div class="pt-3 text-right space-x-4">ACTION</div>
                                        </th>
                                    </tr>
                                </thead>

                                {{-- <a href="create-user" method = "GET" class=""></a> --}}
                                <tbody class="divide-y divide-gray-300 tracking-wider" >


                                    {{-- {{ dd($users); }} --}}
                                    {{-- @foreach ($users as $user) --}}

                                    {{-- @forelse ($users as $user) --}}

                                    @foreach ($events as $event)
                                        <tr class="bg-white border-b border-gray-300 text-gray-800 font-semibold">
                                            <td scope="row" class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap">
                                                <img src="{{ $event->icon }}" width="26px" class="inline-flex mx-2">
                                                {{ $event->event }}
                                            </td>

                                            <td class="py-4 px-6 text-gray-800">
                                                {{ date('d-M-y', strtotime($event->date)) }}
                                                {{-- {{ $user->email }} --}}
                                            </td>
                                            <td class="py-4 px-6 text-gray-800 font-bold">
                                                {{ date('H:i', strtotime($event->start_time)) }} -
                                                {{ date('H:i', strtotime($event->end_time)) }}
                                            </td>
                                            <td class="py-4 px-6 text-red-500" value="role_id">
                                                {{-- {{ $user->role->role_name }} --}}

                                            </td>
                                            <td class="pt-3 text-right flex space-x-4">


                                                <button onclick="edit_user({{ $event->id }})" type="button"
                                                    class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider"
                                                    id="show-user"><i class="bx bx-edit text-base"></i>
                                                </button>

                                                <button onclick="delete_user({{ $event->id }})" type="button"
                                                    class="w-7 h-7 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider"
                                                    id="deleteBtn"><i class="bx bx-trash text-base"></i>
                                                </button>
                                                {{-- </form> --}}
                                                {{-- onclick="location.href='/edit-user/{{ $user->id }}'" --}}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>




                            </table>
                            {{ $users->links('pagination::tailwind') }}




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

                    <div class="col-span-4 p-10">
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
                </div>
            </main>
    </div>


    <!-- Create New User Modal -->
    <form action="/store-user" method="POST" id="store_user" enctype="multipart/form-data">
        @csrf
        <div id="openNewUserModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
            class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <div class="p-4 max-w-lg mx-auto absolute left-0 right-0">

                <div id="modalCloseUser"
                    class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="min-w-0">
                    <div class="shadow w-full rounded-lg bg-white block p-8">
                        <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Create User</h2>
                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEvent">Name</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="createName" name="user_name" type="text" placeholder="Name">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Email</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="createEmail" name="email" type="text" placeholder="Email">

                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Password</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="createPassword" name="password" type="password" placeholder="Password">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Phone Number</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="createEmail" name="email" type="text" placeholder="Phone Number">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Division</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="createDivision" name="division" type="text" placeholder="Division">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Position</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="createPosition" name="position" type="text" placeholder="Position">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="office">Office</label>
                            <select name="office_id"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-[210px] py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="menuOffice">
                                Office Name <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png"
                                    class="inline-flex w-5" />
                                <div class="hidden absolute mx-2 inline-flex" id="dropdownOffice">
                                    <ul class="bg-gray-100 drop-shadow-lg rounded py-2">
                                        @foreach ($offices as $office)
                                            <li class="hover:bg-gray-200 py-2">
                                                <a href="#" class="block p-1 mx-7">
                                                    <option value="{{ $office->id }}">{{ $office->office_name }}
                                                    </option>
                                                </a>
                                            </li>
                                            {{-- <li class="hover:bg-gray-200 py-2" >
                                            <a href="#" class="block p-1 mx-7" >
                                                <option value="Mersi Office">Mersi Office</option>
                                            </a>
                                        </li> --}}
                                        @endforeach

                                    </ul>

                                </div>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Role</label>
                            <select name="role_id"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-36 py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 whitespace-nowrap"
                                id="menuRole">
                                User <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png"
                                    class="inline-flex w-5" />

                                <div class="hidden absolute inline top-[450px] mx-2" id="dropdownRole">
                                    <ul class="bg-gray-100 drop-shadow-lg rounded py-2">
                                        @foreach ($roles as $role)
                                            <li class="hover:bg-gray-200 py-2">
                                                <a href="#" class="block p-1 mx-7" id="userRole"
                                                    name="role" value="User">
                                                    <option value="{{ $role->id }}">{{ $role->role_name }}
                                                    </option>
                                                </a>
                                            </li>
                                            {{-- <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7" id="staffRole" name="role" value="Staff">
                                                <option>Staff</option>
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7" id="adminRole" name="role" value="Admin">
                                                <option>Admin</option>
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200 py-2">
                                            <a href="#" class="block p-1 mx-7" id="userRole" name="role" value="Super Admin">
                                                <option>Superadmin</option>
                                            </a>
                                        </li> --}}
                                        @endforeach
                                    </ul>
                                </div>
                            </select>
                        </div>

                        <div class="mt-8 text-right">
                            <button type="button"
                                class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest"
                                id="modalCancelNewUserEvent">
                                CANCEL
                            </button>
                            <button type="submit" form="store_user"
                                class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest">
                                CREATE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- /Modal -->

    <!-- Edit New User Modal -->
    <form action="/update-event/{id}" id="edit_form" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('PATCH') --}}


        <div id="openEditUserModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
            class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <div class="p-4 max-w-lg mx-auto absolute left-0 right-0">
                <div id="modalCloseUserEdit"
                    class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="min-w-0">
                    <div class="shadow w-full rounded-lg bg-white block p-8">
                        <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Edit User</h2>
                        <input type="hidden" id="id">
                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEvent">Event</label>
                            <input style="width: 350px"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="update_event" name="event" type="text" placeholder="Event">
                            {{-- <div class="mt-3 relative pb-6 sm:inline-flex ">
                                <div class="absolute sm:mx-7 my-0 tittle">
                                    <button
                                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-24 py-2 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                        id="menuIconEdit" name="icon">
                                        Icon <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png"
                                            class="inline-flex w-5" />
                                    </button>
                                    <div class="pt-1 hidden " id="dropdownIconEdit">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="mb-4 mt-10 sm:mt-auto">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lEventDetail">Event Detail</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="update_eventDetail" name="event_detail" type="text" placeholder="Detail Event">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lDate">Date</label>
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                id="update_date" name="date" type="date" placeholder="Detail Event">
                        </div>

                        <div class="mb-4">
                            <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                                for="lTime">Time</label>
                            <div class="flex">
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                    id="update_startTime" name="start_time" type="time" placeholder="Detail Event">
                                <span class="p-3">-</span>
                                <input
                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                    id="update_endTime" name="end_time" type="time" placeholder="Detail Event">
                            </div>
                        </div>

                        <div class="font-bold">
                            <input type="checkbox" class="rounded" id="update_allday" name="allday">
                            <label class="mx-1" for="eventCheck2">All day</label>
                        </div>

                        <div class="mt-8 text-right">

                            <button type="button"
                                class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest"
                                id="modalCancelEditUserEvent">
                                CANCEL
                            </button>
                            <button type="submit"
                                class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest">
                                SAVE CHANGE
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- /Modal -->


    <!-- Delete Confirmation -->
    <form action="/delete-event/{id}" id="delete_form" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="hidden bg-black bg-opacity-50 fixed inset-0 z-40 w-full" id="overlayDeleteModal">
            <div class="relative w-auto my-6 mx-auto max-w-xl">
                <!--content-->
                <div
                    class="absolute border-0 rounded-lg shadow-lg flex flex-row max-w-xl bg-white outline-none focus:outline-none p-6 top-52">
                    <img src="{{ asset('images/new/delete-illustrations.svg') }}" alt="">
                    <div class="">
                        <h3 class="text-2xl font-semibold text-start">
                            Delete Confirmation
                        </h3>
                        <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete this Event ?
                        </p>
                        <div class="mt-8">
                            <button type="button"
                                class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4"
                                id="cancelBtn">CANCEL</button>
                            <button type="submit"
                                class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /Delete Confirmation -->


    <script>
        // MODAL CREATE NEW USER
        const showEventNewUser = document.querySelector('#showEventNewUser');
        const openNewUserModal = document.querySelector('#openNewUserModal');
        const modalCloseUser = document.querySelector('#modalCloseUser');
        const modalCancelNewUserEvent = document.querySelector('#modalCancelNewUserEvent');

        const toggleModalNewUser = () => {
            openNewUserModal.classList.toggle('hidden');
        }

        showEventNewUser.addEventListener('click', toggleModalNewUser);
        modalCloseUser.addEventListener('click', toggleModalNewUser);
        modalCancelNewUserEvent.addEventListener('click', toggleModalNewUser);


        // DROPDOWN
        const dropdownOffice = document.querySelector('#dropdownOffice');
        const dropdownRole = document.querySelector('#dropdownRole');
        const menuOffice = document.querySelector('#menuOffice');
        const menuRole = document.querySelector('#menuRole');


        menuOffice.addEventListener('click', function() {
            dropdownOffice.classList.toggle('hidden');
        })

        menuRole.addEventListener('click', function() {
            dropdownRole.classList.toggle('hidden');
        });


        // MODAL EDIT USER
        // const showUserEditEvent = document.querySelector('#showUserEditEvent');
        const openEditUserModal = document.querySelector('#openEditUserModal');
        const modalCloseUserEdit = document.querySelector('#modalCloseUserEdit');
        const modalCancelEditUserEvent = document.querySelector('#modalCancelEditUserEvent');

        const toggleModalEditUser = () => {
            openEditUserModal.classList.toggle('hidden');
        }

        const toggleModalDeleteUser = () => {
            openEditUserModal.classList.toggle('hidden');
        }



        // showUserEditEvent.addEventListener('click', toggleModalEditUser);
        modalCloseUserEdit.addEventListener('click', toggleModalEditUser);
        modalCancelEditUserEvent.addEventListener('click', toggleModalEditUser);


        // MODAL DELETE USER
        const deleteBtn = document.querySelector('#deleteBtn');
        const overlayDeleteModal = document.querySelector('#overlayDeleteModal');
        const cancelBtn = document.querySelector('#cancelBtn');

        const deleteUserModal = () => {
            overlayDeleteModal.classList.toggle('hidden');
        }

        // deleteBtn.addEventListener('click', deleteUserModal);
        cancelBtn.addEventListener('click', deleteUserModal);

        // DROPDOWN
        const dropdownOfficeEdit = document.querySelector('#dropdownOfficeEdit');
        const dropdownRoleEdit = document.querySelector('#dropdownRoleEdit');
        const menuOfficeEdit = document.querySelector('#menuOfficeEdit');
        const menuRoleEdit = document.querySelector('#menuRoleEdit');


        menuOfficeEdit.addEventListener('click', function() {
            dropdownOfficeEdit.classList.toggle('hidden');
        })

        menuRoleEdit.addEventListener('click', function() {
            dropdownRoleEdit.classList.toggle('hidden');
        });
    </script>

    {{-- edit button --}}
    <script>
        $(document).ready(function() {

            console.log();

        });

        function edit_user(id) {

            toggleModalEditUser()
            // console.log(id);
            $('#edit_form').attr('action', `${window.location.origin}/update-event/${id}`)
            $.ajax({

                type: "GET",
                url: `/edit-event/${id}`,
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    $('#update_event').val(response['event']);
                    $('#menuIconEdit').val(response['icon']);
                    $('#menuIconEdit').trigger('change');
                    $('#update_eventDetail').val(response['detail_event']);
                    $('#update_date').val(response['date']);
                    $('#update_startTime').val(response['start_time']);
                    $('#update_endTime').val(response['end_time']);

                }

            });
        };

        function delete_user(id) {
            deleteUserModal()
            //console.log(id);
            $('#delete_form').attr('action', `${window.location.origin}/delete-event/${id}`)

        }

        // function myFunction(){
        //     var input,filter,table,tr,td,i,txtValue;
        //     input = document.getElementById("myInput");
        //     filter = input.value.toUpperCase();
        //     table = document.getElementById("myTable");
        //     tr = table.getElementsByTagName("tr");
        //     for(i=0;i<tr.length;i++){
        //         td = tr[i].getElementsByTagName("td")[0];
        //         if(td){
        //             txtValue = td.textContent || td.innerText;
        //             if(txtValue.toUpperCase().indexOf(filter) > -1){
        //                 tr[i].style.display = "";
        //             }else{
        //                 tr[i].style.display = "none";
        //             }
        //         }
        //     }
        // }
    </script>

    {{-- <script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="luxon.js"></script>
    <script type="text/javascript">
       $(function(){

        var table = $('.yajra-datatable').DataTable({
            processing : true,
            serverSide : true,
            responsive : true,
            pageLength : 5,
            LengthMenu : [5,10,20,100],
            pagingType : 'first_last_numbers',
            ajax       : "{{ route('user.list') }}",
            columns    : [{
                data    : 'DT_RowIndex',
                name    : 'DT_RowIndex'
            },
            {
                data    :'user_name',
                name    :'user_name',
            },
            {
                data    :'email',
                name    :'email',
            },
            {
                data    :'phone',
                name    :'phone',
            },
            {
                data    :'role_id',
                name    :'role_id',

                orderable: true,
                searchable: true
            },
        ]
        });

       });



    </script>
</script> --}}

    <script>
        // function add_user() {
        //     $('store_user').attr('action',`${window.location.origin}/store-user`)

        //     var userAdd = $('#user_store').val();

        //     window.onload = function () {

        //         //user name store
        //         var userAdd     = $('user_name').val();
        //         //email store
        //         var emailAdd    = $('email').val();
        //         //phone store
        //         var phoneAdd    = $('phone').val();
        //         //roles store
        //         var roleAdd     = $('role').val();

        //         $.ajax({
        //             url : "/store-user",
        //             type : "post",
        //             data : {
        //                 user_nameSend : userAdd,
        //                 emailSend     : emailAdd,
        //                 phoneSend     : phoneAdd,
        //                 roleSend      : roleAdd,
        //             }
        //             success: function (data,status) {
        //                 console.log(status);

        //             }
        //         })

        //     }


        // }
    </script>

    @livewireStyles
    @livewireStyles
