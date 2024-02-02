<?php

namespace App\Http\Livewire\Components\Admin;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;


class ApprovalHistory extends Component
{
    public function render(Request $request)
    {
        $search = $request->search;
        $history = Article::where('title', 'like', '%' . $search . '%')
            ->whereIn('status',['Published','Reject'])
            ->latest()->paginate(5)->withQueryString()->onEachSide(1);
        // $history = Article::whereIn('status',['Published','Feedback','Reject'])->latest()->get();

        return view('livewire.components.admin.approval-history',compact('history','search'));//,compact('articles')
    }
}
