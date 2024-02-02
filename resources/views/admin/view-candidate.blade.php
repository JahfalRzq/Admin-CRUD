<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candidate</title>

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
        <main class="flex-1 ml-44">
            <div class="justify-between items-center mb-20 mt-5 mx-[70px]">
                <div class="mb-5 sm:mb-0">
                    <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Applicant</h1>
                    <p class="text-sm text-gray-500 mt-2 font-semibold" style="font-family: gilroy-medium;">100 applicants</p>
                </div>
                <a href="/applicant">
                    <div class="flex items-center mt-9 space-x-3" style="font-family: gilroy-reguler">
                        <img src="https://img.icons8.com/ios-glyphs/30/null/chevron-left.png" class="w-4 h-4"/>
                        <p class="font-medium text-gray-800">Back to Applicants</p>
                    </div>
                </a>
            </div>
            <div class="grid grid-cols-12 -mt-8" style="font-family: gilroy-medium;">
                <div class="col-span-4 mx-auto">
                    <div class="bg-white w-[306px] shadow-md mb-52">
                        <div class="p-8 text-center">
                            <img src="https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt3003e1023beaf709/60ddd27bfd14d30f3eb57424/4a3dc83fb61064d70536afcd7640dab1c023fecc.jpg" alt="" class="w-[205px] h-[219px] rounded-full mx-auto object-cover">
                            <div class="font-semibold pt-4 text-2xl text-black">Cristiano Ronaldo</div>
                            <p class="text-xl text-gray-500 font-medium justify-between pt-1">UI/UX Designer</p>
                        </div>
                        <div class="p-6 -mt-6">
                            <span class="text-gray-700 font-medium text-base">Applied Jobs</span>
                            <div class="bg-[#E1EEFB] p-3 rounded-[10px] mt-[15px]">
                                <div class="text-black font-semibold text-base">UI/UX Designer</div>
                                <div class="w-72 text-xs">
                                    <div class="flex space-x-1 mt-1 text-gray-700">
                                        <div class="">Full-time</div>
                                        <div class="items-center mt-0.5">
                                            <img src="https://img.icons8.com/material-outlined/24/3F3F46/filled-circle--v1.png" alt="" class="w-3">
                                        </div>
                                        <div class="">Arcawinangun, Purwokerto</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between">
                                <div class="text-black font-semibold text-[15px]">Status</div>
                                <div class="flex font-normal text-base">
                                    <img src="https://img.icons8.com/external-solid-kendis-lasman/24/0398EC/external-ellipse-graphic-design-solid-solid-kendis-lasman-2.png" alt="" class="w-3 h-3 mx-2 mt-1.5">
                                    Interview</div>
                            </div>
                            <div class="grid grid-cols-4 text-center gap-[15px] mt-[10px]">
                                <div class="border-none text-white rounded-l-xl bg-gradient-to-r from-[#0398EC] to-[#046CB4]">1</div>
                                <div class="border-none text-white bg-gradient-to-r from-[#0398EC] to-[#046CB4]">2</div>
                                <div class="border-none text-white bg-gradient-to-r from-[#0398EC] to-[#046CB4]">3</div>
                                <div class="border-none text-black bg-[#E4E4E7] rounded-r-xl">4</div>
                            </div>
                            <div class="mt-[52px]">
                                <div class="text-black font-semibold text-xl">Contact</div>
                                    <div class="flex space-x-6 mt-5">
                                        <div class="mt-3">
                                            <img src="{{ asset('images/Vector.png') }}" alt="">
                                        </div>
                                        <div class="">
                                            <div class="font-medium text-base text-gray-500">Email</div>
                                            <div class="text-black">cristiano@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="flex space-x-6 mt-5 mb-5">
                                        <div class="mt-3">
                                            <img src="{{ asset('images/Vector-1.png') }}" alt="">
                                        </div>
                                        <div class="">
                                            <div class="font-medium text-base text-gray-500">Phone</div>
                                            <div class="text-black">082373728323</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-8 mx-auto">
                        <div class="col-span-8 h-full">
                            <div class="overflow-x-auto relative shadow-md bg-white w-[784px]" style="font-family: gilroy-reguler">
                                <div class="p-8" 
                                    x-data="{
                                        openTab: 1,
                                        activeClasses: 'text-[#0398EC]',
                                        inActiveClasses: 'text-gray-400'
                                    }"
                                >
                                    <ul class="flex gap-10 font-semibold text-gray-500 tracking-wider">
                                        <li :class="{'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab === 1}" @click="openTab = 1">
                                                <a class="cursor-pointer mx-1">Profile Details</a>
                                                <div class="mt-[15px]"></div>
                                        </li>
                                        <li :class="{'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab === 2}" @click="openTab = 2">
                                                <a class="cursor-pointer mx-1">Resume</a>
                                                <div class="mt-[15px]"></div>
                                        </li>
                                        <li :class="{'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab === 3}" @click="openTab = 3">
                                                <a class="cursor-pointer mx-1">Hiring Progress</a>
                                                <div class="mt-[15px]"></div>
                                        </li>
                                        <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-10">
                                    </ul>    
    
                                    {{-- PROFILE DETAILS --}}
                                    <div class="mt-9 mb-10"
                                        x-show="openTab === 1"
                                    >
                                        <div class="font-semibold text-lg">Basic Information</div>
                                        <div class="flex mt-4">
                                            <div class="w-[352px]">
                                                <div class="font-medium text-gray-500 text-base">Fullname</div>
                                                <div class="font-semibold text-base text-gray-800">Cristiano Ronaldo</div>
                                                <div class="mt-4 font-medium text-gray-500 text-base">Phone</div>
                                                <div class="font-semibold text-base text-gray-800">087271628371</div>
                                            </div>
                                            <div class="">
                                                <div class="font-medium text-gray-500 text-base">Email</div>
                                                <div class="font-semibold text-base text-gray-800">cristiano@gmail.com</div>
                                                <div class="mt-4 font-medium text-gray-500 text-base">Address</div>
                                                <div class="font-semibold text-base text-gray-800">Madeira, Portugal</div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-6">
                                        </div>
                                        <div class="mt-11 font-semibold text-lg">Professional Details</div>
                                        <div class="flex mt-4">
                                            <div class="w-[352px]">
                                                <div class="font-medium text-gray-500 text-base">Current/Previous Company</div>
                                                <div class="font-semibold text-base text-gray-800">Manchester United</div>
                                                <div class="mt-4 font-medium text-gray-500 text-base">LinkedIn</div>
                                                <div class="font-semibold text-base text-gray-800">https://linkedin.com/cristiano</div>
                                            </div>
                                            <div class="">
                                                <div class="font-medium text-gray-500 text-base">Position</div>
                                                <div class="font-semibold text-base text-gray-800">Striker</div>
                                                <div class="mt-4 font-medium text-gray-500 text-base">Portfolio</div>
                                                <div class="font-semibold text-base text-gray-800">https://cristianoronaldo.com</div>
                                            </div>
                                        </div>
                                    </div>
        
                                    {{-- RESUME --}}
                                    <div class="mt-10"
                                        x-show="openTab === 2"
                                    >
                                        <div class="flex justify-between">
                                            <div class="flex">
                                                <div class="">
                                                    <img src="{{ asset('images/ic_outline-attach-file.png') }}" alt="">
                                                </div>
                                                <div class="mx-4">Cristiano Ronaldo_CV.pdf</div>
                                            </div>
                                            <div class="flex">
                                                <div class="mx-7">
                                                    <img src="{{ asset('images/cil_print.png') }}" alt="" class="w-[25px]">
                                                </div>
                                                <div class="">
                                                    <img src="{{ asset('images/akar-icons_download.png') }}" alt="" class="w-[25px]">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="">
                                            <div class="bg-[#F4F9FE] p-[50px] mt-7 h-[700px] overflow-y-auto" style="box-shadow: 2px 0px 4px 1px rgba(0, 0, 0, 0.25);">
                                                <div class="">
                                                    <div class="">
                                                        <div class="font-semibold text-[32px] text-black">Cristiano Ronaldo</div>
                                                        <div class="font-medium text-[24px] text-gray-500">UI/UX Designer</div>
                                                    </div>
                                                    <div class="mt-[30px]">
                                                        <div class="font-medium text-2xl text-black">Profile</div>
                                                        <div class="font-medium text-base text-justify w-[600px] mt-[10px] text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                                                    </div>
                                                    <div class="mt-[30px]">
                                                        <div class="font-medium text-2xl text-black">Education</div>
                                                        <div class="font-medium text-base text-justify w-[600px] mt-[10px] text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                                                    </div>
                                                    <div class="mt-[30px]">
                                                        <div class="font-medium text-2xl text-black">Experience</div>
                                                        <div class="font-medium text-base text-justify w-[600px] mt-[10px] text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
    
                                    {{-- HIRING PROGRESS --}}
                                    <div class="mt-10"
                                        x-show="openTab === 3"
                                    >
                                        <div class="font-semibold text-black text-lg">Current Stage</div>
                                        <div class="grid grid-cols-4 text-center gap-[15px] mt-[10px] w-[600px] font-semibold text-base">
                                            <div class="h-14 border-none text-[#0398EC] rounded-l-xl bg-gray-200">
                                                <p class="mt-4">Applied</p>
                                            </div>
                                            <div class="border-none text-[#0398EC] bg-gray-200">
                                                <p class="mt-4">In Review</p>
                                            </div>
                                            <div class="border-none text-white bg-gradient-to-r from-[#0398EC] to-[#046CB4]">
                                                <p class="mt-4">Interview</p>
                                            </div>
                                            <div class="border-none text-gray-400 bg-gray-50 rounded-r-xl">
                                                <p class="mt-4">Offering</p>
                                            </div>
                                            <div class="">
                                                <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-6">
                                            </div>
                                        </div>
                                        <div class="mt-16 font-semibold text-black text-lg">Stage Info</div>
                                        <div class="flex mt-4">
                                            <div class="w-[400px]">
                                                <div class="font-medium text-gray-500 text-base">Interview Date</div>
                                                <div class="font-semibold text-base text-gray-800">15 - 17 December 2022</div>
                                                <div class="mt-4 font-medium text-gray-500 text-base">Location</div>
                                                <div class="font-semibold text-base text-gray-800">Arcawinangun Office</div>
                                            </div>
                                            <div class="">
                                                <div class="font-medium text-gray-500 text-base">Interview Status</div>
                                                <div class="font-semibold text-base text-orange-500">On Progress</div>
                                                <div class="mt-4 font-medium text-gray-500 text-base">Interviewer</div>
                                                <div class="font-semibold text-base text-gray-800">
                                                    <ul>
                                                        <li>Erik Ten Hag</li>
                                                        <li>Zinedine Zidane</li>
                                                        <li>Sir Alex Ferguson</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-[30px] space-x-4">
                                            <button type="button" class="border border-gray-500 font-semibold text-gray-500 hover:bg-gray-600 hover:text-white hover:duration-300 py-[5px] px-[15px] rounded-[10px]" id="showSchedule">Schedule Interview</button>
                                            <button type="button" class="font-semibold bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] text-white py-[5px] px-[15px] rounded-[10px]">Move to Next Step</button>
                                        </div>
                                        <div class="">
                                            <hr class="bg-gray-300 h-0.4 absolute w-[720px] mt-6">
                                        </div>
                                        <div class="flex justify-between mt-16">
                                            <div class="flex font-semibold text-black text-lg">
                                                <div>Notes</div>
                                            </div>
                                            <a href="#">
                                                <div class="flex">
                                                    <div class="mx-1">
                                                        <img src="{{ asset('images/fluent_add-16-filled.png') }}" alt="" class="w-5 mt-0.5">
                                                    </div>
                                                    <div class="font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4]">Add Notes</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="border border-gray-500 mt-[30px]">
                                            <div class="p-5">
                                                <div class="flex justify-between">
                                                    <div class="flex">
                                                        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" class="rounded-full w-[50px] h-[50px] object-cover">
                                                        <div class="mt-3 mx-5 font-semibold text-black text-lg">Erik Ten Hag</div>
                                                    </div>
                                                    <div class="mt-3 flex">
                                                        <ul class="flex text-gray-500 font-normal">
                                                            <li>10 December 2022</li>
                                                            <li class="mt-1.5 mx-[10px]">
                                                                <img src="https://img.icons8.com/external-solid-kendis-lasman/24/D9D9D9/external-ellipse-graphic-design-solid-solid-kendis-lasman-2.png" alt="" class="w-3 h-3">
                                                            </li>
                                                            <li>10.20 AM</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mx-[70px] w-[500px]">
                                                    <p class="text-justify font-medium text-gray-500">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                                                    </p>
                                                    <div class="bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] mt-[10px] font-medium">
                                                        <a href="#">2 Replies</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Create Event Modal -->
        <div id="scheduleModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
        class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
            <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-14 sm:mt-24">
                <div id="modalCloseSchedule" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                    <svg id="modalClose" class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                    <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Interview Schedule</h2>
                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lDate">Interview Date</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lDate"
                            type="date" placeholder="Detail Event">
                    </div>

                    <div class="mb-4 mt-10 sm:mt-auto">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lLoc">Location</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lLoc"
                            type="text" placeholder="Location">
                    </div>
                    <div class="mb-4 mt-10 sm:mt-auto">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lIView">Interviewer</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="lIView"
                            type="text" placeholder="Interviewer">
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 mt-3" id="lEventDetail"
                            type="text" placeholder="Interviewer">
                        <a href="#">
                            <div class="flex mt-[10px]">
                                <img src="{{ asset('images/fluent_add-circle-24-regular.png') }}" alt="" class="w-6">
                                <p class="mx-[10px] font-medium text-gray-500">Add Interviewer</p>
                            </div>
                        </a>
                    </div>

                    {{-- <div class="font-bold flex space-x-8 mt-6">
                        <div class="">
                            <input type="checkbox" class="rounded" id="eventSch">
                            <label class="mx-1" for="eventSch">Scheduled</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="rounded" id="eventPro">
                            <label class="mx-1" for="eventPro">On Progress</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="rounded" id="eventAcc">
                            <label class="mx-1" for="eventAcc">Accept</label>
                        </div>
                        <div class="">
                            <input type="checkbox" class="rounded" id="eventRej">
                            <label class="mx-1" for="eventRej">Reject</label>
                        </div>
                    </div> --}}

                    <div class="mt-8 text-right">
                        <button type="button"
                            class="text-sm bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest" id="modalCancelSchedule">
                            CANCEL
                        </button>
                        <button type="button"
                            class="text-sm bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest">
                            CREATE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Modal -->

            </div>
        </main>
    </div>

    <script>
        const showSchedule = document.querySelector('#showSchedule');
        const scheduleModal = document.querySelector('#scheduleModal');
        const modalCancelSchedule = document.querySelector('#modalCancelSchedule');
        const modalCloseSchedule = document.querySelector('#modalCloseSchedule');

        const toggleSchedule = () => {
            scheduleModal.classList.toggle('hidden');
        }
        showSchedule.addEventListener('click', toggleSchedule)

        const toggleCancel = () => {
            scheduleModal.classList.toggle('hidden');
        }
        modalCancelSchedule.addEventListener('click', toggleCancel)
        modalCloseSchedule.addEventListener('click', toggleSchedule)

    </script>

    @livewireStyles
</body>
</html>