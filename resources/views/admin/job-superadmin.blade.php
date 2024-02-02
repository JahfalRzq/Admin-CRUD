<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Superadmin</title>

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
    <div class="flex">
        <livewire:components.admin.sidebar-admin>
        <main class="flex-1 ml-52 divide-x-8 divide-black divide-dotted">
            <div class="grid grid-cols-1 xl:grid-cols-12">
                <div class="col-span-8 h-full p-10 space-y-10 border-gray-300 xl:border-r-2">
                    <div class="container justify-between items-center sm:flex">
                        <div class="mb-5 sm:mb-0">
                            <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Job</h1>
                            <p class="text-sm text-gray-500 mt-2 font-semibold" style="font-family: gilroy-medium;">100 Total Job</p>
                        </div>
                        <div class="relative mb-5 sm:mb-0 sm:mx-3" style="font-family: gilroy-reguler">
                            <form action="{{ url('jobs') }}" method="GET">
                            <input type="text" name="search" value="{{ $search }}" id="search-article" placeholder="Search job" class="w-48 rounded-xl  placeholder:text-gray-500 border-none
                            sm:mx-1 sm:w-72
                            md:mx-1 md:w-96
                            lg:mx-6">
                            <div class="absolute top-0 right-0 mt-2 mr-2
                            sm:md:lg:mr-7">
                                {{-- <a href="#">
                                    <i class="bx bx-search bx-sm text-gray-500"></i>
                                </a> --}}
                                <button class="bx bx-search bx-sm text-gray-500" type="submit"></button>

                            </div>
                        </form>
                        </div>
                        <button class="px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm">
                            <a href="/job-post">
                                <h1 class="flex items-center"><i class="bx bx-plus text-xl mr-2"></i>New Job</h1>
                            </a>
                        </button>
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg bg-white">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed" style="font-family: gilroy-reguler">
                                <thead class="text-xs text-gray-900 uppercase bg-white">
                                <tr class="font-semibold text-gray-500">
                                    <th scope="col" class="py-3 px-6 w-52">
                                        <div class="flex items-center cursor-pointer">
                                            Position
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 320 512">
                                                    <path
                                                        d=
                                                        "M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                    </path>
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6 w-48">
                                        <div class="flex items-center cursor-pointer">
                                            Published
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 320 512">
                                                <path
                                                    d=
                                                    "M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                </path>
                                            </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex text-center items-center cursor-pointer">
                                            Applicant
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex text-center items-center cursor-pointer">
                                            Type
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 320 512">
                                                <path
                                                    d=
                                                    "M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                                </path>
                                            </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="text-center">ACTION</div>
                                    </th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach ($job_carrers as $job)
                                    <tr class="bg-white border-b border-gray-300 text-gray-900 font-semibold">
                                        <td scope="row" class="py-4 px-6 whitespace-nowrap">
                                            {{ $job->job_tittle }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{date('d-M-y',strtotime($job->created_at))}}                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $job->aplicant }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $job->job_type }}
                                        </td>
                                        <td class="block text-center py-3">

                                                {{-- <button onClick="edit_job({{ $job->id }})" id="job_edit" class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider"><i class="bx bx-edit text-base"></i>
                                                </button> --}}
                                            <a href="/jobpost/{{ $job->id }}/edit" type="button" class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider"><i class="bx bx-edit text-base"></i></a>


                                            <button onclick="delete_job({{ $job->id }})"
                                                class="w-7 h-7 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider"
                                                type="button" id="deleteBtn"><i class="bx bx-trash text-base"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- <tr class="bg-white border-b border-gray-300 text-gray-900 font-semibold">
                                        <td scope="row" class="py-4 px-6 whitespace-nowrap">
                                            Data Analyst
                                        </td>
                                        <td class="py-4 px-6">
                                            Jun 02, 2022
                                        </td>
                                        <td class="py-4 px-6">
                                            8
                                        </td>
                                        <td class="py-4 px-6">
                                            Part-time
                                        </td>
                                        <td class="block text-center py-3">
                                            <button class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" id="showEditEvent"><i class="bx bx-edit text-base"></i>
                                            </button>
                                            <button class="w-7 h-7 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" type="button" id="deleteBtn"><i class="bx bx-trash text-base"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b border-gray-300 text-gray-900 font-semibold">
                                        <td scope="row" class="py-4 px-6 whitespace-nowrap">
                                            Front-End Developer
                                        </td>
                                        <td class="py-4 px-6">
                                            Jun 02, 2022
                                        </td>
                                        <td class="py-4 px-6">
                                            6
                                        </td>
                                        <td class="py-4 px-6">
                                            Part-time
                                        </td>
                                        <td class="block text-center py-3">
                                            <button class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" id="showEditEvent"><i class="bx bx-edit text-base"></i>
                                            </button>
                                            <button class="w-7 h-7 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" type="button" id="deleteBtn"><i class="bx bx-trash text-base"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b border-gray-300 text-gray-900 font-semibold">
                                        <td scope="row" class="py-4 px-6 whitespace-nowrap">
                                            Back-End Developer
                                        </td>
                                        <td class="py-4 px-6">
                                            Jun 02, 2022
                                        </td>
                                        <td class="py-4 px-6">
                                            9
                                        </td>
                                        <td class="py-4 px-6">
                                            Part-time
                                        </td>
                                        <td class="block text-center py-3">
                                            <button class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" id="showEditEvent"><i class="bx bx-edit text-base"></i>
                                            </button>
                                            <button class="w-7 h-7 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" type="button" id="deleteBtn"><i class="bx bx-trash text-base"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b border-gray-300 text-gray-900 font-semibold">
                                        <td scope="row" class="py-4 px-6 whitespace-nowrap">
                                            Full-Stack Developer
                                        </td>
                                        <td class="py-4 px-6">
                                            Jun 02, 2022
                                        </td>
                                        <td class="py-4 px-6">
                                            4
                                        </td>
                                        <td class="py-4 px-6">
                                            Part-time
                                        </td>
                                        <td class="block text-center py-3">
                                            <button class="m-1 w-7 h-7 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" id="showEditEvent"><i class="bx bx-edit text-base"></i>
                                            </button>
                                            <button class="w-7 h-7 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold items-center justify-center text-white tracking-wider" type="button" id="deleteBtn"><i class="bx bx-trash text-base"></i>
                                            </button>
                                        </td> --}}
                                    {{-- </tr> --}}
                                    @endforeach

                                </tbody>

                            </table>
                            {{ $job_carrers->links('pagination::tailwind') }}




                        {{-- Paginations --}}
                        {{-- <div class="relative">

                            <ul class="inline-flex items-center space-x-2 py-4 px-4 w-full justify-end"
                                style="font-family: gilroy-reguler">
                                <li >
                                    <a href="#" class="block" >
                                        <i
                                            class="bx bx-chevron-left text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]" >
                                        </i>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)"
                                        class="bg-gradient-to-tr from-[#046CB4] to-[#0398EC] text-base text-white py-2 px-4 rounded-xl font-semibold">1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">2</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">3</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="block">
                                        <i
                                            class="bx bx-chevron-right text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                {{-- Profile --}}
                <div class="col-span-4 p-10 justify-start">
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

    <!-- Delete Confirmation -->
    <form action="/delete-jobs/{id}" method="POST" id="delete_form" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
            <div class="hidden bg-black bg-opacity-50 fixed inset-0 z-40 w-full" id="overlayModal">
                    <div class="relative w-auto my-6 mx-auto max-w-xl">
                        <!--content-->
                        <div class="absolute border-0 rounded-lg shadow-lg flex flex-row max-w-xl bg-white outline-none focus:outline-none p-6 top-52">
                            <img src="{{ asset('images/new/delete-illustrations.svg') }}" alt="">
                            <div class="">
                                <h3 class="text-2xl font-semibold text-start">
                                    Delete Confirmation
                                </h3>
                                <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete this Article ?</p>
                                <div class="mt-8">
                                    <button type="button"  class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4" id="cancelBtn">CANCEL</button>
                                    <button type="submit" class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
    <!-- /Delete Confirmation -->


    <script>

        // DESKTOP VERSION EVENT
        const showEditEvent = document.querySelector('#showEditEvent');
        const openEditEventModal = document.querySelector('#openEditEventModal');
        const modalCloseEdit = document.querySelector('#modalCloseEdit');
        const modalCloseEditEvent = document.querySelector('#modalCloseEditEvent');
        const deleteBtn = document.querySelector('#deleteBtn');
        const overlayModal = document.querySelector('#overlayModal');
        const cancelBtn = document.querySelector('#cancelBtn');


        // const deleteBtn = document.querySelector('#deleteBtn');
        // const overlayModal = document.querySelector('#overlayModal');
        // const cancelBtn = document.querySelector('#cancelBtn');

        const toggleCancel = () => {
            overlayModal.classList.toggle('hidden');
        }

        // deleteBtn.addEventListener('click', toggleCancel);
        cancelBtn.addEventListener('click', toggleCancel);

        const toggleModal = () => {
            openEditEventModal.classList.toggle('hidden');
        }

        showEditEvent.addEventListener('click', toggleModal)
        modalCloseEdit.addEventListener('click', toggleModal)
        modalCloseEditEvent.addEventListener('click', toggleModal)



        const showEvent = document.querySelector('#showEvent');
        const openEventModal = document.querySelector('#openEventModal');
        const modalClose = document.querySelector('#modalClose');
        const modalCloseEvent = document.querySelector('#modalCloseEvent');

        const toggleEventModal = () => {
            openEventModal.classList.toggle('hidden');
        }

        showEvent.addEventListener('click', toggleEventModal)
        modalClose.addEventListener('click', toggleEventModal)
        modalCloseEvent.addEventListener('click', toggleEventModal)

        window.addEventListener('DOMContentLoaded', function(){
            const menuIconEdit = document.querySelector('#menuIconEdit');
            const dropdownIconEdit = document.querySelector('#dropdownIconEdit');

            menuIconEdit.addEventListener('click', function() {
                dropdownIconEdit.classList.toggle('hidden');
                dropdownIconEdit.classList.toggle('flex');
            });



            const menuIcon = document.querySelector('#menuIcon');
            const dropdownIcon = document.querySelector('#dropdownIcon');

            menuIcon.addEventListener('click', function(){
                // Easy Method Use Toggle
                dropdownIcon.classList.toggle('hidden');
                dropdownIcon.classList.toggle('flex');
            });

        });


        // MOBILE VERSION EVENT
        const showEditEventMobile = document.querySelector('#showEditEventMobile');
        const deleteBtnMobile = document.querySelector('#deleteBtnMobile');

        deleteBtnMobile.addEventListener('click', toggleCancel);

        showEditEventMobile.addEventListener('click', function() {
            openEditEventModal.classList.toggle('hidden');
        });

    </script>

    <script>


    const openFormJob =document.querySelector('#openFormJob');


    const toggleModalEditJob = () => {
        openFormJob.classList.toggle('hidden');
        }

    const toggleModalDeleteUser = () => {
        openFormJob.classList.toggle('hidden');
        }

0


//     function edit_job(id){

//     toggleModalEditJob()
//     $('#job_edit').attr('action',`${window.location.origin}/store-jobpost/${id}`)
//     $.ajax({

//     type: "GET",
//     url : `jobpost/{id}/edit`,
//     dataType: "JSON",

//     success: function(response){
//         console.log(response);
//         $('#jTitle').val(response['job_tittle']);
//         $('#division').val(response['division']);
//         $('#location').val(response['location']);
//         $("#full_time").prop("checked", true);
//         $("#part_time").prop("checked", true);
//         $("#internship").prop("checked", true);
//         $("#office_work").prop("checked", true);
//         $("#partly_remote").prop("checked", true);
//         $("#full_remote").prop("checked", true);
//         $('#role_description').val(response['role_description']);
//         $('#jobdesk_description').val(response['jobdesk_description']);
//         $('#role_environment').val(response['role_environment']);
//         $('#team_description').val(response['role_description']);


//     }



// });


// };

    function delete_job(id){
        toggleCancel()
        console.log(id)
        $('#delete_form').attr('action', `${window.location.origin}/delete-jobs/${id}`)

    }


    </script>

    @livewireStyles
</body>
</html>
