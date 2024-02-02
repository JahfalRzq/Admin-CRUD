
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Article On Review</title>
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
            <div class="mt-10 md:px-10">
                <h1 class="text-5xl text-left font-semibold text-white py-10">Perayaan HUT RI ke-77 di POWERKERTO</h1>
                <div class="flex justify-between items-center">
                    <div class="flex gap-4 items-center">
                        <img src="https://images.unsplash.com/photo-1626301688449-1fa324d15bca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="editor" class="w-16 h-16 object-cover rounded-full">
                        <div style="font-family: gilroy-reguler;">
                            <h1 class="text-sm text-white">By <span class="font-semibold">Cristiano Ronaldo</span> in
                                <span class="font-semibold">Web Design</span>
                            </h1>
                            <p class="text-white mt-2 font-semibold" style="font-family: gilroy-reguler;">Created on March 22, 2022</p>
                        </div>
                    </div>
                </div>
                <div class="relative mt-20 md:mx-auto md:mt-10 w-[300px] md:w-full">
                    <img src="{{ asset('images/images-1668996686.jpg') }}" class ="
                    {{-- {{ dd($article->media) }} --}}
                    w-[700px] h-[200px] object-cover
                    md:w-[947px] md:h-[400px] md:object-cover
                    lg:w-[1020px] lg:h-[530px] lg:object-cover
                    xl:w-[1474px] xl:h-[640px] xl:object-cover
                    " >
                </div>
                <!-- Isi Article -->
                <div class="py-14 text-[#6B6B6B] text-justify">
                    {{-- <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">{{ $article->title }}.</h1>
                    <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">{{ $article->description }}</p> --}}
                    <div class="">
                        <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">Lorem ipsum dolor sit amet.</h1>
                        <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio</p>
                    </div>
                    <div class="mt-[50px]">
                        <h1 style="font-family: gilroy-semibold;" class="text-3xl subpixel-antialiased tracking-wide font-normal">Lorem ipsum dolor sit amet.</h1>
                        <p style="font-family: gilroy-medium;" class="text-base leading-relaxed subpixel-antialiased tracking-wide mt-4 font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis eu volutpat odio facilisis mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio</p>
                    </div>
                </div>
                <div class="absolute mt-3 md:-mx-11">
                    <div class="relative px-10 py-3 bg-blue-50 rounded-xl -mt-10 mb-16 md:mx-11">
                        <p class="font-semibold text-blue-500 text-xl tracking-wide" style="font-family: gilroy-reguler">On Review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>