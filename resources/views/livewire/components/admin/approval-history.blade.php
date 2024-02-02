<div class="overflow-x-auto relative shadow-md sm:rounded-lg bg-white">
    <div class="inline-flex p-4 justify-between items-center w-full">
        <div style="font-family: gilroy-reguler" class="font-semibold">
            <h1 class="text-lg">Approval History</h1>
            <p class="text-sm text-gray-500 mt-2">{{ $history->count() }} article</p>
        </div>
        {{-- <form class="relative items-center w-96" style="font-family: gilroy-medium;">
            <div class="relative w-full">
                <a class="flex absolute inset-y-0 right-0 items-center pr-3" href="#">
                    <i class="bx bx-search text-lg"></i>
                </a>
                <input type="text" id="simple-search"
                    class="bg-blue-50 border-none text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-3 p-2.5 "
                    placeholder="Search Article" required>
            </div>
        </form> --}}
        <div class="relative items-center w-96" style="font-family: gilroy-medium">
            <form action="{{ url('approve') }}" method="GET">
                <input type="text" name="search" value="{{ $search }}" id="myInput" onkeyup="myFunction()"
                    placeholder="Search Article" class="bg-blue-50 border-none text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full pl-3 p-2.5 ">
                <div class="absolute top-0 right-0 mt-2 mr-2">
                    {{-- <a href="#">
                    <i class="bx bx-search bx-sm text-gray-500"></i>
                </a> --}}
                    <button class="bx bx-search bx-sm text-gray-500" type="submit"></button>
                </div>
            </form>
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed">
        <thead class="text-xs text-gray-900 uppercase bg-white">
            <tr style="font-family: gilroy-reguler" class="font-semibold text-gray-500">
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center cursor-pointer">
                        TITLE
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                </path>
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center cursor-pointer">
                        CREATED ON
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                </path>
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center cursor-pointer">
                        CREATED BY
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3"
                                aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                <path
                                    d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z">
                                </path>
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="text-right">STATUS</div>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($history as $article)
                <tr class="bg-white border-b border-gray-300 text-gray-900">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap truncate">
                        {{ $article->title }}
                    </th>
                    <td class="py-4 px-6">
                        {{ date('d/M/y ', strtotime($article->created_at)) }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $article->created_by }}
                    </td>
                    <td class="py-4 px-6 text-right">
                        @if ($article->status == 'Published')
                            <a href="#"
                                class="font-medium text-green-500 hover:underline">{{ $article->status }}</a>
                        @elseif ($article->status == 'Reject')
                            <a href="#"
                                class="font-medium text-red-500 hover:underline">{{ $article->status }}</a>
                        @elseif ($article->status == 'Feedback')
                            <a href="#"
                                class="font-medium text-red-500 hover:underline">{{ $article->status }}</a>
                    </td>
                    </td>
            @endif
            </tr>
        @empty
            <tr class="bg-white border-b blue:bg-gray-800 blue:border-gray-700">
                <td class="py-4 px-6 truncate" colspan="6">
                    <h1 class="font-semibold text-center">No Data Available</h1>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $history->links('pagination::tailwind') }}
    {{-- Paginations --}}
    {{-- <div class="relative">
        <ul class="inline-flex items-center space-x-2 py-4 px-4 w-full justify-end" style="font-family: gilroy-reguler">
            <li>
                <a href="#" class="block">
                    <i
                        class="bx bx-chevron-left text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                </a>
            </li>
            <li>
                <a href="#"
                    class="bg-gradient-to-tr from-[#046CB4] to-[#0398EC] text-base text-white py-2 px-4 rounded-xl font-semibold">1</a>
            </li>
            <li>
                <a href="#" class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">2</a>
            </li>
            <li>
                <a href="#" class="bg-white text-base text-gray-500 py-2 px-4 rounded-xl font-semibold">3</a>
            </li>
            <li>
                <a href="#" class="block">
                    <i
                        class="bx bx-chevron-right text-3xl text-transparent bg-clip-text bg-gradient-to-tr from-[#046CB4] to-[#0398EC]"></i>
                </a>
            </li>
        </ul>
    </div> --}}
</div>
