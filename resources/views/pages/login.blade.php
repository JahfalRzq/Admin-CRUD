<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}-Login</title>

    {{-- css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- plugin --}}
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />


    {{-- icon --}}
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @livewireStyles
</head>
<body class="bg-[#095073]">
    <div class="relative w-full h-screen">
        <div class="w-fit absolute right-0">
            <img src="{{'images/bg-login.svg'}}" alt="">
        </div>
        <div class="grid place-items-center px-40 z-50 relative h-screen">
            <div class="card -mx-48 w-[420px] md:w-full md:h-[530px] h-[700px] rounded-3xl relative">
                <div class="w-full h-full absolute rounded-3xl px-10 py-10" style="background: linear-gradient(90deg, rgba(18, 112, 141, 0.98) 2.6%, rgba(0, 66, 114, 0.81) 96.35%, rgba(0, 52, 89, 0.8) 100%);">
                    <a href="{{ url('/')}}">
                        <img src="{{'images/04 Logo Powerkerto Logo Powerkerto SECONDARY Icon.svg'}}" alt="">
                    </a>
                    <h1 class="text-4xl font-semibold text-white mt-10" style="font-family: gilroy-bold;">Welcome</h1>

                    <form action= "/login-action" method="POST" class="mt-8" id="login-form" >
                        @csrf
                        <div class="relative md:w-1/2 lg:w-1/2 xl:w-1/2">
                            <input  type="email" name="email" id="email" class="block px-4 py-2.5 w-full text-sm text-white bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="email"
                                    class="absolute text-sm text-white bg-[#0f6a89] md:bg-[#106e8b] dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top z-10 origin-[0] rounded-md dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1" style="background-color:#106e8b;">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="relative mt-6 flex md:w-1/2 lg:w-1/2 xl:w-1/2">
                                <input type="password" name="password" id="password" class="block px-4 py-2.5 w-full text-sm text-white bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="password"
                                    class="absolute text-sm bg-[#0f6a89] text-white md:bg-[#106e8b] dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top z-10 origin-[0] rounded-md dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1" style="background-color:#106e8b;">Password</label>
                                <span class="mt-3 -mx-8" id="eye">
                                    <i class="fa-solid fa-eye" id="toggler" onclick="toggle()"></i>
                                </span>
                        </div>
                    </form> 
                    <div class="md:hidden block">
                        <div class="flex gap-6 md:justify-between mt-10 items-center flex-wrap" style="font-family: gilroy-reguler;">
                            <div class="md:w-1/2 w-full">
                                <button class="w-full md:w-full bg-[#023887] text-white text-md font-semibold py-3 px-6 rounded-xl hover:bg-[#02529f] duration-300" form="login-form">
                                    Log In
                                </button>
                            </div>
                           <h1 class="text-center text-white flex justify-center w-full" style="font-weight: bold"> or</h1>
                            <div class="flex px-2 border border-gray-500 w-full rounded-xl items-center hover:bg-gray-500 hover:text-black duration-300">
                                <a href="{{ '/auth/redirect'}}" class="w-full text-white text-md font-semibold justify-center gap-2 py-2 px-4 items-center flex subpixel-antialiased tracking-wide">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewbox="0 0 48 48"><path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/><path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691z"/><path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/><path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/></svg>
                                    </span>
                                    Log In with Google
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:block hidden">
                    <div class="flex gap-6 md:justify-between md:w-1/2 mt-10 items-center" style="font-family: gilroy-reguler;">
                        <div class="md:w-1/2 w-full">
                            <button class="w-[133px] md:w-full bg-[#023887] text-white text-md font-semibold py-3 px-6 rounded-xl hover:bg-[#02529f] duration-300" form="login-form">
                                Log In
                            </button>
                        </div>
                        <p class="text-white font-semibold text-lg">or</p>
                        <div class="flex px-2 border border-gray-500 w-full rounded-xl items-center hover:bg-gray-500 hover:text-black duration-300">
                            <a href="{{ '/auth/redirect'}}" class="w-full text-white text-sm justify-center gap-2 font-semibold py-2 px-4 items-center flex subpixel-antialiased tracking-wide">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewbox="0 0 48 48"><path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/><path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691z"/><path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/><path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/></svg>
                                </span>
                                Log In with Google
                            </a>
                        </div>
                    </div>
                </div>
         
                </div>

                <div class="grid grid-cols-2">
                    <div class=""></div>
                    <img src="{{'images/02 Logo Powerkerto SECONDARY.png'}}" alt="" class="object-cover rounded-r-3xl w-[500px] z-10 mt-48 hidden md:block md:mt-10 md:mx-10">
                </div>
            </div>
        </div>
    </div>
    @livewireStyles

   @livewireScripts
   <script>

    var state = false;
    var eyeShow = document.querySelector('i');

     function toggle() {
        if(state) {
            document.getElementById('password').setAttribute("type", "password");
            state = false;
        }else {
            document.getElementById('password').setAttribute("type", "text");
            state = true;
        }
     }

    //    var password = document.getElementById('password');
    //    var toggler = document.getElementById('toggler');

    //    showHidePassword = () => {
    //         if (password.type == 'password') {
    //         password.setAttribute('type', 'text');
    //         toggler.classList.add('fa-eye-slash');
    //         } else {
    //         toggler.classList.remove('fa-eye-slash');
    //         password.setAttribute('type', 'password');
    //         }
    //     };

    //     toggler.addEventListener('click', showHidePassword);

   </script>
</body>
</html>
