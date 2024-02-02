<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Article Draft</title>
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
            <div class="mt-10">
                <div class="absolute px-10 py-3 bg-yellow-50 rounded-xl md:mx-11 -mt-10">
                    <p class="font-semibold text-yellow-500 text-xl tracking-wide" style="font-family: gilroy-reguler">
                        Draft</p>
                </div>
            </div>
            <div class="mt-16 md:px-10">
                <h1 class="text-5xl text-left font-semibold text-white py-10">{{ $article_draft->title }}</h1>
                <div class="flex justify-between items-center">
                    <div class="flex gap-4 items-center">
                        <img src="../../{{ auth()->user()->image }}"
                            alt="editor" class="w-16 h-16 object-cover rounded-full">
                        <div style="font-family: gilroy-reguler;">
                            <h1 class="text-sm text-white">By <span
                                    class="font-semibold">{{ $article_draft->created_by }}</span> in
                                @foreach ($article_draft->category as $c)
                                    <span class="font-semibold">{{ $c }}</span>
                                @endforeach
                            </h1>
                            <p class="text-white mt-2 font-semibold" style="font-family: gilroy-reguler;">
                                {{ date('d F Y ', strtotime($article_draft->created_at)) }}</p>
                        </div>
                    </div>
                </div>
                <div class="relative mt-20 md:mx-auto md:mt-10 w-[300px] md:w-full">
                    <img src="../{{ $article_draft->media }}" class="
                    {{-- {{ dd($article->media) }} --}}
                    w-[700px] h-[200px] object-cover
                    md:w-[947px] md:h-[400px] md:object-cover
                    lg:w-[1020px] lg:h-[530px] lg:object-cover
                    xl:w-[1474px] xl:h-[640px] xl:object-cover
                    ">
                </div>
                <!-- Isi Article -->
                <div class="py-14 text-[#6B6B6B] text-justify">
                    {{-- <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">{{ $article->title }}.</h1>
                    <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">{{ $article->description }}</p> --}}
                    <div class="">
                        <h1 style="font-family: gilroy-semibold;"
                            class="text-3xl subpixel-antialiased tracking-wide font-normal">{{ $article_draft->title }}
                        </h1>
                        <p style="font-family: gilroy-medium;"
                            class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">
                            {{ $article_draft->description }}</p>
                    </div>
                    {{-- <div class="mt-[50px]">
                        <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">Lorem ipsum dolor sit amet.</h1>
                        <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio</p>
                    </div> --}}
                </div>
                <div class="inline-flex space-x-6 w-full mb-16">
                    <div class="">
                        <a href="/detail-article/edit-article/{{ $article_draft->id }}"
                            class="px-10 py-2 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-full font-semibold flex items-center justify-center text-white tracking-wider"><i
                                class="bx bx-edit text-xl pr-2"></i> Edit</a>
                    </div>
                    <div class="md:mt-0">
                        <button
                            class="px-6 py-2 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-full font-semibold flex items-center justify-center text-white tracking-wider"
                            type="button" onclick="toggleModal('modal-id')"><i class="bx bx-trash text-xl pr-2"></i>
                            Delete</button>
                    </div>
                </div>

                {{-- MODAL DELETE --}}
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
                                <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete this
                                    Article ?</p>
                                <div class="mt-8">
                                    <form action="{{ route('delete.article', ['id' => $article_draft->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="toggleModal('modal-id')"
                                            class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4">CANCEL</button>
                                        <button  type="submit" onclick="toggleModal('modal-id')"
                                            class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
                                    </form>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden opacity-50 fixed inset-0 z-40 bg-black w-full" id="modal-id-backdrop"></div>
                <script type="text/javascript">
                    function toggleModal(modalID) {
                        document.getElementById(modalID).classList.toggle("hidden");
                        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                        document.getElementById(modalID).classList.toggle("flex");
                        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                    }
                </script>
            </div>
        </div>
    </div>
</body>

</html>
