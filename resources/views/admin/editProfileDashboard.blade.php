<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile Dashboard</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <style>
        #uploadBtn{
            height: 40px;
            width: 100%;
            position: relative;
            bottom: 0;
            left: 50%;
            margin-top: -100px;
            transform: translateX(-50%);
            text-align: center;
            /* background: rgba(0, 0, 0, 0.7); */
            color: wheat;
            line-height: 30px;
            font-family: sans-serif;
            font-size: 15px;
            cursor: pointer;
            display: none;
        }
    </style> --}}

    @livewireStyles
</head>

<body class="bg-[#E1EEFB]">
    <div class="flex">
        <livewire:components.admin.sidebar-admin>
            <main class="flex-1 ml-52">
                <form action="{{ route('update.profileDashboard', ['id' => $user->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- {{dd($user)}}; --}}
                    @method('PATCH')
                    <img src="{{ asset('images/Rectangle 9092.png') }}" alt="" class="h-72 w-full object-cover">
                    <div class="grid grid-cols-12 -mt-20" style="font-family: gilroy-medium;">
                        <div class="col-span-4 mx-auto">
                            <div class="bg-white w-[306px] shadow-md rounded-2xl mb-52">
                                <div class="p-8 text-center">
                                    <label class="profile-pic-div group relative cursor-pointer">
                                        <img src="../{{ $user->image }}" alt=""
                                            class="w-[205px] h-[205px] rounded-full mx-auto object-cover"
                                            id="photo">
                                        <div
                                            class="absolute h-[205px] w-[205px] mx-[18px] group-hover:bg-black/25 duration-200 -bottom-[3px] rounded-full">
                                            <div class="hidden group-hover:block mt-[89px] overflow-hidden">
                                                <label for="file" class="cursor-pointer">
                                                    <img src="{{ asset('images/akar-icons_edit.png') }}" alt=""
                                                        class="mx-20 w-[50px]">
                                                </label>
                                                <input type="file" id="file" name="image"
                                                    style="display: none" />
                                            </div>
                                        </div>
                                    </label>
                                    <div class="font-semibold pt-4 text-2xl text-black">{{ $user->user_name ?? ''}}</div>
                                    <p class="text-xl text-gray-500 font-medium justify-between pt-1">
                                        {{ $user->position->position_name ?? ''}}</p>
                                    <p class="text-gray-500 font-medium">{{$user->nip ?? ''}}-{{$user->nip2 ?? ''}}</p>
                                </div>

                                <div class="px-6">
                                    <div class="flex space-x-[17px]">
                                        <ul>
                                            <li class="text-gray-500">Email</li>
                                            <li class="py-2 text-gray-500">Phone</li>
                                            <li class="py-2 text-gray-500">Division</li>
                                            <li class="py-2 text-gray-500">Office</li>
                                            <li class="py-2 text-gray-500">Role</li>
                                        </ul>
                                        <ul>
                                            <li>{{ $user->email ?? ''}}</li>
                                            <li class="py-2">{{ $user->phone ?? ''}}</li>
                                            <li class="py-2">{{ $user->division->division_name ?? ''}}</li>
                                            <li class="py-2">{{ $user->office->office_name ?? ''}}</li>
                                            <li class="py-2">{{ $user->role->role_name ?? ''}}</li>
                                        </ul>
                                    </div>
                                    <div class="text-center mt-20">
                                        <button
                                            class="border border-gray-500 text-gray-500 px-12 py-[13px] rounded-xl mb-10 hover:bg-gray-400 hover:text-white hover:border-gray-500 hover:duration-300">View
                                            Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-8 mx-auto">
                            <div class="col-span-8 h-full">
                                <div class="overflow-x-auto relative shadow-md rounded-2xl bg-white w-[784px]"
                                    style="font-family: gilroy-reguler">
                                    <div class="p-8" x-data="{
                                        openTab: 1,
                                        activeClasses: 'text-[#0398EC]',
                                        inActiveClasses: 'text-gray-400'
                                    }">
                                        <ul class="flex gap-10 font-semibold text-gray-500 tracking-wider">
                                            <li :class="{
                                                'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab ===
                                                    1
                                            }"
                                                @click="openTab = 1">
                                                <a class="cursor-pointer mx-1">Account Settings</a>
                                                <div class="mt-[15px]"></div>
                                            </li>
                                            <li :class="{
                                                'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab ===
                                                    2
                                            }"
                                                @click="openTab = 2">
                                                <a class="cursor-pointer mx-1">Company Settings</a>
                                                <div class="mt-[15px]"></div>
                                            </li>
                                            <li :class="{
                                                'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab ===
                                                    3
                                            }"
                                                @click="openTab = 3">
                                                <a class="cursor-pointer mx-1">General Settings</a>
                                                <div class="mt-[15px]"></div>
                                            </li>
                                            <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-10">
                                        </ul>


                                        {{-- ACCOUNT SETTINGS --}}
                                        <div class="mt-9 mb-2" x-show="openTab === 1">
                                            <div class="flex mt-4">
                                                <ul class="w-[400px]">
                                                    <li>
                                                        <div class="font-medium text-gray-500 text-base">Full Name</div>
                                                        <input name="user_name" id="user_name" type="text"
                                                            value="{{ $user->user_name }}"
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium">
                                                    </li>
                                                    @error('user_name')
                                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                    @enderror
                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Phone</div>
                                                        <input name="phone" id="phone" type="text"
                                                            value="{{ $user->phone }}"
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium">
                                                    </li>
                                                    {{-- @error('phone')

                                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>

                                            @enderror --}}
                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Birthday</div>
                                                        <input name="birthday" id="birthday" type="date"
                                                            value="{{ $user->birthday }}"
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500">
                                                    </li>
                                                    @error('birthday')
                                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                    @enderror
                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Password</div>
                                                        <input autocomplete="new-password" name="password"
                                                            type="password" id="password" value=""
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium">
                                                        <span class="absolute mt-5 -mx-8" id="eye">
                                                            <img src="{{ asset('images/ic_outline-remove-red-eye.png') }}"
                                                                alt="" class="w-5 h-5" id="toggler"
                                                                onclick="toggle()">
                                                            {{-- <i class="fa-solid fa-eye" id="toggler" onclick="toggle()"></i> --}}
                                                        </span>
                                                    </li>



                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Gender</div>
                                                        <select name="gender" id=""
                                                            class="py-2 px-3 mt-[10px] w-[105px] rounded-lg text-gray-500 font-medium">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </li>
                                                    @error('gender')
                                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                    @enderror
                                                </ul>
                                                <ul class="">
                                                    <li>
                                                        <div class="font-medium text-gray-500 text-base">Division</div>
                                                        <select name="division" id="division_name" value="{{ $user->division->division_name }}"
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium py-2 p-4">
                                                            @foreach ($divisions as $division)
                                                                <option value="{{ $division->id }}" selected hidden>{{ $user->division->division_name }} </option>
                                                                <option value="{{ $division->id }}">{{ $division->division_name }} </option>
                                                                    {{-- {{ $division->division_name }}</option> --}}
                                                            @endforeach
                                                        </select>
                                                        {{-- <input name="last_name" id="last_name" type="text" value="{{$user->last_name}}" class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium"> --}}
                                                    </li>
                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Position</div>
                                                        <select name="position" id="" value="{{ $user->position->position_name }}"
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium py-2 p-4">
                                                            @foreach ($positions as $position)
                                                            <option value="{{ $position->id }}" selected hidden>{{ $user->position->position_name }} </option>
                                                            <option value="{{ $position->id }}">{{ $position->position_name }} </option>
                                                            @endforeach
                                                        </select>
                                                        {{-- <input name="last_name" id="last_name" type="text" value="{{$user->last_name}}" class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium"> --}}
                                                    </li>
                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Email</div>
                                                        <input name="email" id="email" type="text"
                                                            value="{{ $user->email }}"
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium">
                                                    </li>
                                                    @error('email')
                                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                    @enderror
                                                    
                                                    <li class="mt-5">
                                                        <div class="font-medium text-gray-500 text-base">Confirm
                                                            Password</div>
                                                        <input name="password_confirmation" type="text"
                                                            id="password2" value=""
                                                            class="w-80 mt-[10px] rounded-lg text-gray-500 font-medium">
                                                        <span class="absolute mt-5 -mx-8" id="eye">
                                                            <img src="{{ asset('images/ic_outline-remove-red-eye.png') }}"
                                                                alt="" class="w-5 h-5" id="toggler"
                                                                onclick="toggle2()">
                                                            {{-- <i class="fa-solid fa-eye" id="toggler" onclick="toggle2()"></i> --}}
                                                        </span>
                                                    </li>
                                                    @error('password_confirmation')
                                                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                    @enderror
                                                </ul>
                                            </div>
                                            <div class="mt-[155px] space-x-5">
                                                <button type="submit"
                                                    class="font-medium bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] text-white py-3 px-4 rounded-[10px]">Save
                                                    Changes</button>
                                                <button type="button"
                                                    class="border border-gray-500 font-medium text-gray-500 px-12 py-3 rounded-xl hover:bg-gray-400 hover:text-white hover:border-gray-500 hover:duration-300">Cancel</button>
                                            </div>
                                        </div>
                </form>

                {{-- COMPANY SETTING --}}
                <div class="mt-10" x-show="openTab === 2">
                    <div class="grid grid-cols-4">
                        <div class="font-semibold text-gray-500">Office</div>
                        <div class="font-medium text-gray-500">Arcawinangun Office</div>
                        <div class="font-medium text-gray-500">Mersi Office</div>
                        <div class="">
                            <a href="" class="flex">
                                <img src="{{ asset('images/fluent_add-circle-28-regular.png') }}" alt=""
                                    class="w-5 h-5 mt-1 mx-[5px]">
                                <div class="font-medium text-gray-500">Add Office</div>
                            </a>
                        </div>
                    </div>
                    <div class="block grid-cols-2">
                        <div class="">
                            <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-10">
                        </div>
                        <br><br><br><br><br><br><br><br><br><br>
                        <div class="">
                            <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-10">
                        </div>
                    </div>
                    <div class="mt-[248px]"></div>
                    <div class="space-x-5">
                        <button type="button"
                            class="font-medium bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] text-white py-3 px-4 rounded-[10px]">Save
                            Changes</button>
                        <button type="button"
                            class="border border-gray-500 font-medium text-gray-500 px-12 py-3 rounded-xl mb-3 hover:bg-gray-400 hover:text-white hover:border-gray-500 hover:duration-300">Cancel</button>
                    </div>
                </div>

                {{-- GENERAL SETTING --}}
                <div class="mt-10" x-show="openTab === 3">
                    <div class="grid grid-cols-2 w-[550px]" style="font-family: gilroy-reguler">
                        <div class="font-semibold text-gray-500 mt-2">Language</div>
                        <div class="">
                            <select name="" id=""
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-36 py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                                <option value="">English</option>
                                <option value="">Indonesian</option>
                            </select>
                        </div>
                        <hr class="bg-gray-300 absolute w-[720px] mt-[90px]">
                        <div class="font-semibold text-gray-500 mt-[105px]">Theme</div>
                        <div class="mt-[100px]">
                            <select name="" id=""
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-36 py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                                <option value="">Light Mode</option>
                                <option value="">Dark Mode</option>
                            </select>
                        </div>
                        <hr class="bg-gray-300 absolute w-[720px] mt-[220px]">
                        <div class="font-semibold text-gray-500 mt-[88px]">Notification</div>
                        <div class="mt-[88px]">
                            <label class="inline-flex relative items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 rounded-full peer dark:bg-gray-400 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-400 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-gradient-to-r peer-checked:from-[#0398EC] peer-checked:to-[#046CB4]">
                                </div>
                            </label>
                        </div>
                        <hr class="bg-gray-300 absolute w-[720px] mt-[340px]">
                        <div class="font-semibold text-gray-500 mt-[103px]">Timezone</div>
                        <div class="mt-[95px]">
                            <select name="" id=""
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-72 py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                                <option>UTC+07:00 - 19 Oct 2022, 09:04</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-x-5 mt-20">
                        <button type="button"
                            class="font-medium bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] text-white py-3 px-4 rounded-[10px]">Save
                            Changes</button>
                        <button type="button"
                            class="border border-gray-500 font-medium text-gray-500 px-12 py-3 rounded-xl mb-3 hover:bg-gray-400 hover:text-white hover:border-gray-500 hover:duration-300">Cancel</button>
                    </div>
                </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>

    <script>
        // Password eye
        var state = false;
        var eyeShow = document.querySelector('i');

        function toggle() {
            if (state) {
                document.getElementById('password').setAttribute("type", "password");
                state = false;
            } else {
                document.getElementById('password').setAttribute("type", "text");
                state = true;
            }
        }

        // Confirm Password eye
        var state2 = false;
        var eyeShow2 = document.querySelector('i');

        function toggle2() {
            if (state2) {
                document.getElementById('password2').setAttribute("type", "password");
                state2 = false;
            } else {
                document.getElementById('password2').setAttribute("type", "text");
                state2 = true;
            }
        }


        const img = document.querySelector('#photo');

        file.addEventListener("change", function() {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {
                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener("load", function() {
                    img.setAttribute("src", reader.result);
                });

                reader.readAsDataURL(choosedFile);
            }
        });



        //     $(document).ready(function() {
        //     $('input').attr('autocomplete', 'off');
        //   });
    </script>

    @livewireStyles

</body>

</html>
