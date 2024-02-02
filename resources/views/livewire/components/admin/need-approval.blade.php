<div class="overflow-x-auto relative shadow-md sm:rounded-lg bg-white">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed">
        <thead class="text-xs text-gray-900 uppercase bg-white">
            <tr style="font-family: gilroy-reguler" class="font-semibold text-gray-500">
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center cursor-pointer">
                        TITLE
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 320 512">
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
                    <div class="text-right">ACTION</div>
                </th>
            </tr>
        </thead>
        <tbody>

            {{-- @foreach ($category as $article) --}}
            {{-- {{ dd($articles) }} --}}

            @forelse ($articles as $article)
                <tr class="bg-white border-b border-gray-300 text-gray-900">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap truncate">
                        {{ $article->title }}

                    </th>
                    <td class="py-4 px-6">
                        {{ date('d-M-y ', strtotime($article->created_at)) }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $article->created_by }}

                    </td>
                    <td class="py-4 px-6 text-right">
                        <i class="text-lg bx bx-file"></i>
                        {{-- <a href="/detail-approve/{{ $article->id }}" class="font-medium hover:underline"
                            {{ $article->title }}>View Article</a> --}}
                        {{-- <a href="{{ route('detail.approve', ['id' => $article->id]) }}"
                            class="font-medium hover:underline" {{ $article->title }}>View Article</a> --}}

                        <form action="{{ route('update.onreview', ['id' => $article->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="font-medium hover:underline" {{ $article->title }}>View Article
                            </button>
                        </form>
                    </td>
                </tr>
                {{-- @endforeach --}}

            @empty
                <tr class="bg-white border-b blue:bg-gray-800 blue:border-gray-700">
                    <td class="py-4 px-6 truncate" colspan="6">
                        <h1 class="font-semibold text-center">No Data Available</h1>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $articles->links('pagination::tailwind') }}

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
