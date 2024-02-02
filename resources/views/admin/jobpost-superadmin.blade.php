 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Post</title>

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

        <main class="flex-1 ml-52 divide-x-8 divide-black divide-dotted">

            <div class="grid grid-cols-1 xl:grid-cols-12">
                <div class="col-span-8 h-full p-10 space-y-10 border-gray-300 xl:border-r-2">
                    <h1 style="font-family: gilroy-bold;" class="text-2xl font-bold subpixel-antialiased tracking-wide">Post a new job</h1>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg bg-white" style="font-family: gilroy-reguler">
                        <form action="{{ $formOption['action'] }}" id="edit_form" method="POST" enctype="multipart/form-data" class="employee-form">

                            @csrf
                            @if ($formOption['method'])
                            @method(($formOption['method']))
                            @endif

                        <div class="p-6"
                            x-data="{
                                openTab: 1
                            }"
                        >

                            <ul class="flex justify-center gap-10 font-semibold text-gray-500 tracking-wider">
                                <li :class="{'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab === 1}" @click="openTab = 1" >
                                        <label for="jInfo" class="cursor-pointer mx-1">JOB INFO</label>
                                        <div class="mt-[15px]"></div>
                                </li>
                                <li :class="{'active bg-clip-text text-transparent bg-gradient-to-r from-[#0398EC] to-[#046CB4] border-b-2 border-[#0398EC]': openTab === 2}" @click="openTab = 2" >
                                        <label for="jDesc" class="cursor-pointer mx-1">DESCRIPTION</label>
                                        <div class="mt-[15px]"></div>
                                </li>
                                <hr class="bg-gray-300 h-0.4 absolute w-full mt-10">
                            </ul>
                            {{-- JOB INFO --}}

                            <div class="form-section">
                                    <div class="mt-5 p-6 px-28"
                                        x-show="openTab === 1"
                                    >
                                        <div class="mb-7">
                                            <label for="jTitle" class="font-semibold">Job Title</label>
                                            <input type="text" value="{{ $job_carrers->job_tittle??null  }}" name="job_tittle" id="jTitle"  class="w-full mt-3 bg-gray-100 appearance-none border-none border-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                                        </div>
                                        <div class="flex gap-16 mb-7">
                                            <div class="">
                                                <label for="division" class="font-semibold">Division</label>
                                                <input type="text" value="{{ $job_carrers->division??null  }}" name="division" id="division" class="w-full mt-3 bg-gray-100 appearance-none border-none border-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                                            </div>
                                            <div class="">
                                                <label for="location" class="font-semibold">Location</label>
                                                <input type="text" value="{{ $job_carrers->location??null  }}" name="location" id="location" class="w-full mt-3 bg-gray-100 appearance-none border-none border-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                                            </div>
                                        </div>
                                        <div class="flex gap-16">
                                            <div class="">
                                                <label for="startDate" class="font-semibold">Start Date</label>
                                                <input type="date" value="{{ $job_carrers->start_date??null }}" name="start_date" id="start_date" class="w-full mt-3 bg-gray-100 appearance-none border-none border-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                                            </div>
                                            <div class="">
                                                <label for="endDate" class="font-semibold">End Date</label>
                                                <input type="date" value="{{ $job_carrers->end_date??null }}" name="end_date" id="end_date" class="w-full mt-3 bg-gray-100 appearance-none border-none border-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
                                            </div>
                                        </div>
                                        <div class="mt-7">
                                            <label for="" name="job_type" class="font-semibold">Job Type</label>
                                            <div class="mt-2">
                                                <ul class="flex gap-6">
                                                    <li>
                                                        <input type="radio" name="job_type" value="Full time" id="full_time" @if($job_carrers->job_system??null == 'full_time') checked @endif>
                                                        <label for="" class="font-medium">Full-time</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="job_type" value="Part Time" id="part_time" @if($job_carrers->job_system??null == 'part_time') checked @endif>
                                                        <label for="" class="font-medium">Part-time</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="job_type" value="Internship" id="internship" @if($job_carrers->job_system??null == 'internship') checked @endif>
                                                        <label for="" class="font-medium">Internship</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mt-7">
                                            <label for="" name="job_system" class="font-semibold">Office / Remote</label>
                                            <div class="mt-2">
                                                <ul class="flex gap-6">
                                                    <li>
                                                        <input type="radio" name="job_system" value="office_work" id="office_work" @if($job_carrers->job_system??null == 'office_work') checked @endif>
                                                        <label for="" class="font-medium">Office work</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="job_system" value="partly_remote" id="partly_remote" @if($job_carrers->job_system??null == 'partly_remote') checked @endif>
                                                        <label for="" class="font-medium">Partly remote</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="job_system" value="full_remote" id="full_remote" @if($job_carrers->job_system??null == 'full_remote') checked @endif>
                                                        <label for="" class="font-medium">Full remote</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=" mt-20 space-x-3 form-navigation">
                                            <button type="button" class="px-4 py-2 rounded-xl text-gray-700 border-[1px] border-gray-700 hover:bg-gray-700 hover:text-white hover:duration-300 font-semibold subpixel-antialiased tracking-wide text-sm">
                                                <h1 clasfs="flex items-center">Cancel</h1>
                                            </button>
                                            <button @click="openTab = 2"  id="label_change" type="button" class="px-4 py-[10px] bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm">
                                                <h1 class="flex items-center" >Next Step</h1>
                                            </button>
                                            {{-- <p>
                                                <input type="button" class="px-4 py-[10px] bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm"
                                               <h1 class="flex items-center" >Next Step</h1>
                                                >
                                            </p> --}}
                                        </div>
                                    </div>
                            </div>


                            {{-- DESCRIPTION --}}
                                    <div class="p-6 px-28 form-section"
                                        x-show="openTab === 2"
                                    >
                                        <div class="mt-5">
                                            <label for="role_description" name="role_description" class="font-semibold" >About the Role</label>
                                            <textarea name="role_description" value="{{ $job_carrers->role_description??null }}" id="role_description" class="block w-full px-3 py-3 h-24 mt-3 bg-gray-100 appearance-none border-none rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required></textarea>
                                        </div>
                                        <div class="mt-5">
                                            <label  for="jobdesk_description"  name="jobdesk_description" id="input_jobdesk" class="font-semibold">As a <span id="job_desc"> UI/UX</span>  You Will</label>
                                            <textarea name="jobdesk_description" value="{{ $job_carrers->jobdesk_description??null  }}" id="jobdesk_description" class="block w-full px-3 py-3 h-24 mt-3 bg-gray-100 appearance-none border-none rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required></textarea>
                                        </div>
                                        <div class="mt-5">
                                            <label for="role_environment" name="role_environment" class="font-semibold">As a <span id="role_desc"> UI/UX</span> What You Will Need</label>
                                            <textarea name="role_environment" value="{{ $job_carrers->role_environment??null  }}" id="role_environment" class="block w-full px-3 py-3 h-24 mt-3 bg-gray-100 appearance-none border-none rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required></textarea>
                                        </div>
                                        <div class="mt-5">
                                            <label for="team_description" name="team_description" class="font-semibold">About the Team</label>
                                            <textarea name="team_description" value="{{ $job_carrers->team_description??null }}" id="team_description" class="block w-full px-3 py-3 h-24 mt-3 bg-gray-100 appearance-none border-none rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required></textarea>
                                        </div>
                                        <div class="">
                                            <div class="mt-16">
                                                <div class="flex space-x-6 justify-items-center">
                                                        <div class="mt-2" @click="openTab = 1">
                                                            <i class='bx bx-chevron-left'></i>
                                                            <label for="" class="cursor-pointer font-medium">Back</label>
                                                        </div>
                                                    <div class="space-x-3">
                                                        <button type="button" class="px-4 py-2 rounded-xl text-gray-700 border-[1px] border-gray-700 hover:bg-gray-700 hover:text-white hover:duration-300 font-semibold subpixel-antialiased tracking-wide text-sm">
                                                            <h1 class="flex items-center">Cancel</h1>
                                                        </button>
                                                        <button type="submit" id="update_data" class="px-8 py-[10px] bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:bg-gradient-to-r hover:from-[#046CB4] hover:to-[#0398EC] rounded-xl text-white font-semibold subpixel-antialiased tracking-wide text-sm">
                                                            <h1 class="flex items-center">Post</h1>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                {{-- Profile --}}
                <div class="col-span-4 p-10 justify-start">
                    <div class="flex justify-between items-center">
                        <h1 style="font-family: gilroy-reguler" class="text-lg font-semibold">Good Morning!</h1>
                        <button type="submit" id="update_job" class="inline-block relative">
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

    <script>



        //label change on job description
        $('#jTitle').on('change',function(){
            $('#job_desc').text('');
            // $('$role_desc').text('');
            // console.log($('#jTitle').val());

            $('#job_desc').text($('#jTitle').val());
            // $('#role_desc').text($('#jTitle').val());

        });

        //label change on role description

        $('#jTitle').on('change',function(){
            $('#role_desc').text('');

            $('#role_desc').text($('#jTitle').val());
        });




        //update data

        $(document).on("click","#update_data",function(){
            var url = "{{ URL('/jobpost/{id}/update') }}";
            var id =
                    $.ajax({
                        url : url,
                        type :"PUT",
                        cache : false,
                        data:{
                            _token:'{{ csrf_token() }}',
                                type : 3,
                                job_tittle : $('#jTitle').val(),
                                division : $('#division').val(),
                                location : $('#location').val(),
                                start_time : $('#start_time').val(),
                                end_time : $('#end_time').val(),
                                job_type : $('#full_time').prop("checked",true),
                                job_type : $('#part_time').prop("checked",true),
                                job_type : $('#internship').prop("checked",true),
                                job_system : $('#office_work').prop("checked",true),
                                job_system : $('#partly_remote').prop("checked",true),
                                job_system : $('#full_remote').prop("checked",true),
                                role_description : $('#role_description').val(),
                                jobdesk_description : $('#input_jobdesk') .val(),
                                role_environment : $('#role_environement').val(),
                                team_description : $('#team_description').val()
                        },
                            success:function(dataResult){
                                dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode) {
                                    window.location = "/jobpost/{id}/update";
                                }
                                else{
                                    alert("internal Server Error");
                                }
                            }
                    });

        });








 //function for update job

        // function edit_job(id){
        //     toggleModalEditJOb()
        //     //console.log(id);
        //     $('$edit_form').attr('action',`${window.location.origin}/edit-job/${id}`)
        //     $.ajax({

        //         type: "GET",
        //         url: `/edit-job/${id}`,
        //         dataType: "JSON",

        //         success: function(response){
        //             console.log(response);
        //             $('#update_jobTittle').val(response['job_tittle']);
        //             $('#update_division').val(response['division']);
        //             $('#update_location').val(response['location']);

        //             // ----- job type radio button -----
        //             $('#full_time').prop("checked", true).trigger("click");
        //             $('#part_time').prop("checked", true).trigger("click");
        //             $('#internship').prop("checked", true).trigger("click");
        //             // ----- end job type -----

        //             // ----- job system radio button -----
        //             $('$office_work').prop("checked", true).trigger("click");
        //             $('partly_remote').prop("checked", true).trigger("click");
        //             $('#full_remote').prop("checked", true).trigger("click");
        //             // ----- end job system -----



        //         }
        //     })

        // }








    </script>

    @livewireStyles
</body>
</html>
