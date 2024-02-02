{{-- {{$article}} --}}
{{-- @foreach ($articles as $article) --}}
{{-- <div>  --}}
<a class="card w-full relative" href="javascript:void" wire:click="click_stats({{$article->id}})">
    <img src="../{{ $article->media }}" alt=""
        class="object-cover w-full rounded-2xl">
    <div
        class="bg-black backdrop-blur-md bg-opacity-60 px-6 py-3 w-full absolute bottom-0 z-10 rounded-b-2xl">
        <p class="z-30 text-gray-300 text-sm">{{date('d M,Y ',strtotime($article->created_at))}}</p>
        <h1 class="text-xl font-bold text-white mt-2">{{$article->title}}</h1>
        <div class="mt-[10px] flex flex-row">
            <div class="">
                <img src="../{{ $article->media }}" alt="" class="w-5 rounded-full object-cover">
            </div>
            <div class="flex space-x-[55px]">
                <div class="mx-2 -mt-1 w-56">
                    <p class="text-five"> <span class="text-white">by</span> {{$article->created_by}} <span class="text-white">in</span> 
                        @foreach ($article->category as $c)
                            <span class="text-five">{{ $c }}</span>
                        @endforeach
                    </p>
                </div>
                <p class="text-gray-300 text-sm">5 min read</p>
            </div>
        </div>
        {{-- <div class="flex justify-between mt-2">
            <div class="flex gap-2">
                <img src="../{{ $article->media }}"
                    alt="" class="w-5 h-5 rounded-full">
                <p class="text-xs text-white">
                    by 
                <span class="text-five">{{$article->created_by}}</span> 
                    in
                @foreach ($article->category as $c)
                <span class="text-five text-xs">{{$c}}</span> </p>
                @endforeach
            </div>
            <p class="z-30 text-gray-300 text-sm">5 min read</p>
        </div> --}}
    </div>
</a>
{{-- </div>  --}}
{{-- @endforeach --}}
