@forelse ( $articles as $article )
<div class="card bg-white w-full rounded-xl p-6" style="font-family: gilroy-reguler">
    <h1 class="font-semibold text-xl">{{ $article->title }}</h1>
    <p class="text-sm subpixel-antialiased tracking-wide line-clamp-2 mt-2">{{ $article->description }}</p>
    <h5 class="text-xs font-semibold mt-4">{{date('d-M-y ',strtotime($article->created_at))}}
    </h5>
    <div class="flex gap-4 justify-between items-center mt-4">

        <div class="flex gap-4">
            <div class="inline-flex gap-2 items-center">
                <img src="{{ asset('images/new/ic_round-business-center.svg') }}" alt="">
                <h5 class="text-xs">1.020 Views</h5>
            </div>
            <div class="inline-flex gap-2 items-center">
                <img src="{{ asset('images/new/ic_round-business-center-1.svg') }}" alt="">
                <h5 class="text-xs">100 Views</h5>
            </div>
            <div class="inline-flex gap-2 items-center">
                <img src="{{ asset('images/new/bxs_like.svg') }}" alt="">
                <h5 class="text-xs">1.000 Views</h5>
            </div>
            <div class="inline-flex gap-2 items-center">
                <i class="bx bxs-comment text-[#97C3F9]"></i>
                <h5 class="text-xs">765 Comments</h5>
            </div>
        </div>
        <div class="flex gap-6" style="font-family: gilroy-reguler">
            <a href="#" class="inline-flex gap-2 items-center text-sm text-[#019FE7] font-semibold">
                <i class="bx bx-edit text-lg"></i>
                Edit
            </a>
            <a href="#" class="inline-flex gap-2 items-center text-sm text-[#EF4444] font-semibold">
                <i class="bx bx-trash text-lg"></i>
                Delete
            </a>
        </div>
    </div>
</div>
@empty

<tr class="bg-white border-b blue:bg-gray-800 blue:border-gray-700">
    <td class="py-4 px-6 truncate" colspan="6">
        <h1 class="font-semibold text-center">No Article Available</h1>
    </td>
</tr>

@endforelse

