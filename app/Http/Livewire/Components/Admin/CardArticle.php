<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Article;

class CardArticle extends Component
{
    public function render()
    {
        $top_article = Article::where('status','published')->orderBy('view', 'DESC')->take(6)->get();
        return view('livewire.components.admin.card-article', compact('top_article'));
    }
}
