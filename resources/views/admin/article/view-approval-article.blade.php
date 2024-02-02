
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Approve</title>
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
<body>
    <div class="w-full h-[650px] bg-[#095073] absolute">
        <div class="relative px-24" style="font-family: gilroy-reguler">
            <div class="mt-16 px-10">
                <h1 class="text-5xl text-left font-semibold text-white">{{ $article->title }}</h1>
                <div class="flex justify-between items-center mt-14">
                    <div class="flex gap-4 items-center">
                        <img src="https://images.unsplash.com/photo-1626301688449-1fa324d15bca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="editor" class="w-16 h-16 object-cover rounded-full">
                        <div style="font-family: gilroy-reguler;">
                            <h1 class="text-sm text-white">By <span class="font-semibold">{{ $article->created_by }}</span> in
                                @foreach ($article->category as $c)
                                <span class="font-semibold">{{ $c }}</span>
                                @endforeach
                            </h1>
                            <p class="text-white mt-2 font-semibold" style="font-family: gilroy-reguler;">{{date('d-M-y ',strtotime($article->created_at))}}</p>
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto mt-10">
                    <img src="../{{ $article->media }} "class ="
                    {{-- {{ dd($article->media) }} --}}
                    sm:w-[737px] sm:h-[400px] sm:object-cover
                    md:w-[947px] md:h-[465px] md:object-cover
                    lg:w-[1020px] lg:h-[530px] lg:object-cover
                    xl:w-[1474px] xl:h-[640px] xl:object-cover
                    " >
                </div>
                <!-- Isi Article -->
                <div class="py-14 text-[#6B6B6B] text-justify">
                    <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">{{ $article->title }}.</h1>
                    <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">{{ $article->description }}</p>
                    {{-- <br>
                    <br>
                    <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">Lorem ipsum dolor sit amet.</h1>
                    <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio</p> --}}
                </div>
                <div class="sm:inline-flex sm:mt-2 sm:space-x-6 sm:w-full sm:mb-16">
                    <button
                    class="px-10 py-3 bg-green-500 text-white focus:bg-green-700 hover:bg-green-600 shadow-md rounded-lg font-semibold tracking-wider" type="button" id="approveBtn">APPROVE</button>
                    <button
                    class="px-9 py-3 bg-amber-500 focus:bg-amber-700 hover:bg-amber-600 shadow-md rounded-lg font-semibold items-center justify-center text-white tracking-wider my-3 sm:my-auto" type="button" id="feedbackBtn">FEEDBACK</button>
                    <button
                    class="px-12 py-3 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-lg font-semibold items-center justify-center text-white tracking-wider sm:" type="button" id="rejectBtn">REJECT</button>
                </div>


                <div class="hidden flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modalReject">
                    <div class="relative w-auto my-6 mx-auto max-w-3xl">
                        <!--content-->
                        <div class="border-0 rounded-lg shadow-lg relative flex flex-row w-full bg-white outline-none focus:outline-none p-6">
                            <div class="mr-5">
                                <img src="{{ asset('images/new/Feeling sorry-pana.png') }}" alt="" class="w-36">
                            </div>

                            <div class="tracking-wider">
                                {{-- @if ($article->status == 'Reject') --}}
                                <h3 class="text-2xl font-semibold text-start">
                                    Rejection Confirmation
                                </h3>
                                {{-- @endif --}}

                                <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to reject this article ?</p>
                                <div class="mt-8">
                                    <form action="/rejected-article/{{ $article->id }}" method="GET" id="reject_form">

                                    <button type="button" class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4 tracking-wider" id="rejectCancel">CANCEL</button>
                                    <button type="submit" class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold tracking-wider">REJECT</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden opacity-50 fixed inset-0 z-40 bg-black w-full" id="modalRejectBackdrop"></div>


                {{-- approve modal --}}



                <div class="hidden flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modalApprove">
                    <div class="relative w-auto my-6 mx-auto max-w-3xl">
                        <!--content-->
                        <div class="border-0 rounded-lg shadow-lg relative flex flex-row w-full bg-white outline-none focus:outline-none p-6">
                            <div class="mr-5">
                                <img src="{{ asset('images/new/Ok-rafiki.png') }}" alt="" class="w-36">
                            </div>
                            <div class="tracking-wider">
                                <h3 class="text-2xl font-semibold text-start">
                                </h3>
                                <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to approve this article ?</p>
                                <div class="mt-8">
                                    <form action="/approve-article/{{ $article->id }}" method="GET" id="approve_form">
                                    <button type="button" class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4 tracking-wider" id="approveCancel">CANCEL</button>
                                    <button type="submit" class="px-6 py-2 rounded-lg bg-green-500 hover:bg-green-600 focus:bg-green-700 text-white font-semibold tracking-wider">
                                        APPROVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden opacity-50 fixed inset-0 z-40 bg-black w-full" id="modalApproveBackdrop"></div>


                <!-- Feedback Modal -->
                <div id="feedbackModal" style="background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
                class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
                    <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-20">
                        <div id="feedbackClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
                            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                            </svg>
                        </div>
                        <form action="/feedback-article/{{ $article->id }}" method="POST" id="feedback_form" enctype="multipart/form-data">
                        @csrf
                            <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">
                            <h2 class="font-bold text-2xl mb-3 text-gray-800 pb-2">Reasons for rejection * </h2>
                            <div class="mb-4">
                            <textarea name="reason" id="feedbackReqson" class="bg-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 border-0 appearance-none w-[385px] h-40 p-3 mt-2 sm:w-[480px]" placeholder="Write reason here"></textarea>
                            </div>
                            <div class="mt-8 text-center">
                                <button type="button"
                                    class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest text-sm" id="feedbackCancel">
                                    CANCEL
                                </button>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest text-sm">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                        
                    </div>
                </div>





            </div>
        </div>
    </div>

    <script>

        // Reject Modal
        const rejectBtn = document.getElementById('rejectBtn'),
        modalReject = document.getElementById('modalReject'),
        modalRejectBackdrop = document.getElementById('modalRejectBackdrop'),
        rejectCancel = document.getElementById('rejectCancel');

        const toggleReject = () => {
            modalReject.classList.toggle('hidden');
            modalRejectBackdrop.classList.toggle('hidden');
        }
        rejectBtn.addEventListener('click', toggleReject);
        rejectCancel.addEventListener('click', toggleReject);


        // Approve Modal
        const approveBtn = document.getElementById('approveBtn'),
        modalApprove = document.getElementById('modalApprove'),
        approveCancel = document.getElementById('approveCancel');

        const toggleApprove = () => {
            modalApprove.classList.toggle('hidden');
            modalApproveBackdrop.classList.toggle('hidden');
        }
        approveBtn.addEventListener('click', toggleApprove);
        approveCancel.addEventListener('click', toggleApprove);


        // Feedback Modal
        const feedbackBtn = document.getElementById('feedbackBtn'),
        feedbackModal = document.getElementById('feedbackModal'),
        feedbackCancel = document.getElementById('feedbackCancel'),
        feedbackClose = document.getElementById('feedbackClose');

        const toggleFeedback = () => {
            feedbackModal.classList.toggle('hidden');
        }

        feedbackBtn.addEventListener('click', toggleFeedback);
        feedbackCancel.addEventListener('click', toggleFeedback);
        feedbackClose.addEventListener('click', toggleFeedback);

    </script>

</body>
</html>
