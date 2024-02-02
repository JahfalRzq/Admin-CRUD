<!-- Products -->
@livewireStyles

<div class="max-w-full md:py-16 py-10 md:min-h-[140vh] min-h-screen" style="font-family: gilroy-medium;">
    <h1 class="text-primary md:text-4xl text-3xl font-semibold  leading-tight subpixel-antialiased tracking-wider text-center"
        style="font-family: gilroy-bold;">PRODUCTS</h1>
    <p class="text-gray-500 text-center mt-4 font-semibold leading-tight subpixel-antialiased tracking-wider uppercase"
        style="font-family: gilroy-light;">Some of the product we build
    </p>
        <div class="flex item-center justify-center container mx-auto w-auto mt-11">
            <div class=""
            x-data="{
                openTab: 1
            }"
            >
                <ul class="flex space-x-6 cursor-pointer font-semibold text-gray-500">
                    <li :class="{'text-[#283C85] border-b-2 border-[#283C85]': openTab === 1}" @click="openTab = 1">Software</li>
                    <li :class="{'bg-clip-text text-transparent bg-gradient-to-r from-[#283C85] to-[#283C85] border-b-2 border-[#283C85]': openTab === 2}" @click="openTab = 2">Design</li>
                    <li :class="{'bg-clip-text text-transparent bg-gradient-to-r from-[#283C85] to-[#283C85] border-b-2 border-[#283C85]': openTab === 3}" @click="openTab = 3">Marketing</li>
                </ul>

                {{-- Software Tab --}}
                <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                    x-show="openTab === 1"
                >
                {{-- {{dd($products_software)}} --}}
                @foreach ($products_software as $ps)
                    
                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <img src="../{{ $ps->product_image }}" alt="">
                            </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">{{$ps->name}}</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">{{$ps->tagline}}</p>
                            <a href="/product-software/{{$ps->id}}" class="bg-[#283C85] hover:bg-blue-800 duration-300 text-white p-3 w-32 text-center rounded-2xl mt-11">Read More</a>
                        </div>
                    </div>
                        @endforeach

                    {{-- <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden shadow-md">
                                <img src="{{ asset('images/humanusia.png') }}" alt="" class="h-[110px] w-full object-cover bg-top">
                            </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Humanusia</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Human Resources Information System (HRIS) is a 'must have' software in any
                                business organisation. Our HRIS software is 'end to end' </p>
                            <a href="/humanusia" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div>
                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <img src="{{ asset('images/product-03.png') }}" alt="">
                            </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Verdant Natural</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">We have a strong ecosystem and products that allow us to promote and
                                sell it to the end customer by various way online and offline met.</p>
                            <a href="/verdant" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div>
                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <img src="{{ asset('images/product-04.png') }}" alt="">
                            </div>
                            <h5 class="font-semibold tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">CRM</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Customer Relationship Management is a very important activity for businesses to increase upselling, cross-selling and repeat orders.</p>
                            <a href="/crm" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div> --}}
                </div>

                {{-- Design Tab --}}
                <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                    x-show="openTab === 2"
                >
                {{-- {{dd($products_design)}} --}}
                @foreach ($products_design as $pd)
                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div>
                                <img src="../{{$pd->product_image }}" alt="">
                            </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">{{$pd->name}}</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">{{$pd->tagline}}</p>
                            <a href="/product-design/{{$pd->id}}" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div> --}}
                                {{-- <img src="{{ asset('images/product-03.png') }}" alt=""> --}}
                            {{-- </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Lorem, ipsum.</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ex dolorum iusto aliquam deserunt! Vitae.</p>
                            <a href="#" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div> --}}
                                {{-- <img src="{{ asset('images/product-03.png') }}" alt=""> --}}
                            {{-- </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Lorem, ipsum.</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ex dolorum iusto aliquam deserunt! Vitae.</p> --}}
                            {{-- <a href="#" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);"> --}}
                        {{-- <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div> --}}
                                {{-- <img src="{{ asset('images/product-03.png') }}" alt=""> --}}
                            {{-- </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Lorem, ipsum.</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ex dolorum iusto aliquam deserunt! Vitae.</p>
                            <a href="#" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div> --}}
                </div>

                {{-- Marketing Tab --}}
                <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                    x-show="openTab === 3"
                >

                {{-- {{dd($products_marke)}} --}}
                @foreach ($products_marketing as $pm)

                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <img src="../{{ $pm->product_image }}" alt="">
                            </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">{{$pm->name}}</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">{{$pm->tagline}}.</p>
                            <a href="/product-marketing/{{$pm->id}}" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div>
                                {{-- <img src="{{ asset('images/product-03.png') }}" alt=""> --}}
                            {{-- </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Lorem, ipsum.</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ex dolorum iusto aliquam deserunt! Vitae.</p>
                            <a href="#" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div> --}}
                    {{-- </div>
                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div> --}}
                                {{-- <img src="{{ asset('images/product-03.png') }}" alt=""> --}}
                            {{-- </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Lorem, ipsum.</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ex dolorum iusto aliquam deserunt! Vitae.</p>
                            <a href="#" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div>
                    </div>
                    <div class="rounded-2xl w-72" style="box-shadow: 0px 80px 80px rgba(38, 25, 179, 0.1), 0px 51.27px 50.6px rgba(38, 25, 179, 0.0744), 0px 23.52px 37.48px rgba(38, 25, 179, 0.0557), 0px 10.63px 33.25px rgba(38, 25, 179, 0.0416), 0px 6.48px 30.53px rgba(38, 25, 179, 0.0293), 0px 4.98px 21.9px rgba(38, 25, 179, 0.0163);">
                        <div class="p-5 flex flex-col">
                            <div class="rounded-none overflow-hidden">
                                <div class="bg-gray-200 h-[110px] w-full"></div>
                                {{-- <img src="{{ asset('images/product-03.png') }}" alt=""> --}}
                            {{-- </div>
                            <h5 class="font-semibold mt-5 tracking-wider" style="font-family: gilroy-reguler; font-size: 24px">Lorem, ipsum.</h5>
                            <p class="mt-4 text-justify text-gray-500 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error ex dolorum iusto aliquam deserunt! Vitae.</p>
                            <a href="#" class="bg-[#283C85] hover:bg-blue-800 text-white p-3 w-32 text-center rounded-2xl mt-5">Read More</a>
                        </div> --}}
                    {{-- </div>  --}}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    