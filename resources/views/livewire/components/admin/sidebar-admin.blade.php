<aside class="w-52 fixed left-0 top-0 h-screen bg-white py-5 shadow-lg">
    <div class="mb-10 px-2">
        <img src="{{ asset('images/logo-footer.svg') }}" alt="">
    </div>

    <div class="px-6 mb-20">
        <ul class="space-y-6 text-gray-600">
            <li>
                <a href="{{ url('/dashboard-admin')}}"
                    class="flex gap-4 items-center{{ request()->is('/admin') ? 'active' : 'text-transparent bg-clip-text bg-gradient-to-r from-[#0398EC] to-[#046CB4]' }} cursor-pointer">
                    <img src="{{ asset('images/ICON PWK-01 2.png') }}" alt="" class="w-5 h-5">
                    <h1 class="text-base font-semibold" style="font-family: gilroy-reguler">Dasboard</h1>
                </a>
            </li>
            <li>
                <div class="text-gray-600" onclick="dropdown()">
                    <div class="flex justify-between w-full items-center cursor-pointer">
                        <div class="inline-flex gap-4 ">
                            <img src="{{ asset('images/ICON PWK-03 2.png') }}" alt="" class="w-5 h-5">
                            <span class="text-base font-semibold"
                                style="font-family: gilroy-reguler">Activity</span>
                        </div>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bx bx-chevron-down text-lg"></i>
                        </span>
                    </div>
                </div>
                <div class="text-sm font-semibold text-left ml-6" style="font-family: gilroy-reguler"
                    id="submenu">
                    <ul>
                        <a href="{{ url('/statistic') }}">
                            <li>
                                <h1 class="cursor-pointer p-2 hover:bg-gray-200 rounded-md mt-1">
                                    Statistic
                                </h1>
                            </li>
                        </a>
                        <a href="{{ url('/article-user') }}">
                            <li>
                                <h1 class="cursor-pointer p-2 hover:bg-gray-200 rounded-md mt-1">
                                    Article
                            </li>
                        </a>
                        <a href="{{ url('/approve')}}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    Approval
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Admin
                                </div>
                            </li>
                        </a>
                        <a href="{{ url('/event') }}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    Event
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Admin
                                </div>
                            </li>
                        </a>
                        <a href="{{ url('/gallery-admin') }}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    Gallery
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Admin
                                </div>
                            </li>
                        </a>
                        <a href="{{ url('/user')}}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    User
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Superadmin
                                </div>
                            </li>
                        </a>
                        <a href="{{ url('/product-superadmin')}}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    Product
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Superadmin
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </li>
            <li>
                <div class="text-gray-600" onclick="dropdownCareer()">
                    <div class="flex justify-between w-full items-center cursor-pointer">
                        <div class="inline-flex gap-4 ">
                            <img src="{{ asset('images/ICON PWK-49 2.png') }}" alt="" class="w-5 h-5 object-cover">
                            <span class="text-base font-semibold"
                                style="font-family: gilroy-reguler">Career</span>
                        </div>
                        <span class="text-sm rotate-180" id="arrowCareer">
                            <i class="bx bx-chevron-down text-lg"></i>
                        </span>
                    </div>
                </div>
                <div class="text-sm font-semibold text-left ml-6" style="font-family: gilroy-reguler"
                    id="submenuCareer">
                    <ul>
                        <a href="{{ url('/jobs')}}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    Job
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Superadmin
                                </div>
                            </li>
                        </a>
                        <a href="{{ url('/applicant')}}">
                            <li class="flex justify-between p-2 hover:bg-gray-200 rounded-md">
                                <h1 class="cursor-pointer mt-1">
                                    Applicant
                                </h1>
                                <div class="text-xs text-blue-600 px-2 rounded-full bg-blue-200 self-center">Superadmin
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </li>
            <div class="">
                <a href="{{url('/profileDashboard')}}">
                    <li class="flex gap-4 items-center cursor-pointer">
                        <img src="{{ asset('images/ICON PWK-05 2.png') }}" alt="" class="w-5 h-5 object-cover">
                        <h1 class="text-base font-semibold" style="font-family: gilroy-reguler">Settings</h1>
                    </li>
                </a>
            </div>

            <script type="text/javascript">
                function dropdown() {
                    document.querySelector("#submenu").classList.toggle("hidden");
                    document.querySelector("#arrow").classList.toggle("rotate-0");
                }
                dropdown();

                function dropdownCareer() {
                    document.querySelector("#submenuCareer").classList.toggle("hidden");
                    document.querySelector("#arrowCareer").classList.toggle("rotate-0");
                }
                dropdownCareer();

                function openSidebar() {
                    document.querySelector(".sidebar").classList.toggle("hidden");
                }
            </script>
        </ul>
    </div>
    <div class="px-6">
        <ul class="space-y-6">
            <li class="flex gap-4 items-center">
                <img src="{{ asset('images/ICON PWK-09 2.png') }}" alt="" class="w-6 h-6">
                <h1 class="text-base font-semibold text-gray-600" style="font-family: gilroy-reguler">View as
                    Public</h1>
            </li>
            <a href="{{ url('/logout') }}">
                <li class="flex gap-4 items-center">
                    <img src="{{ asset('images/ICON PWK-11 2.png') }}" alt="" class="w-6 h-6">
                    <h1 type = "submit" class="text-base font-semibold text-gray-600" style="font-family: gilroy-reguler">Logout
            </a>
                </h1>
            </li>
        </ul>
    </div>
</aside>
