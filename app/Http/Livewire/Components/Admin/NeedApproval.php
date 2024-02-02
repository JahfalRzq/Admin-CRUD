<?php

namespace App\Http\Livewire\Components\Admin;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;


class NeedApproval extends Component
{
    public function render(Request $request)
    {
        $search = $request->search;
        $articles = Article::where('title', 'like', '%' . $search . '%')
            ->whereIn('status',['On Review','Draft','Feedback'])
            ->latest()->paginate(5)->withQueryString()->onEachSide(1);

        return view('livewire.components.admin.need-approval', compact('articles')); //,compact('articles')
    }
}
