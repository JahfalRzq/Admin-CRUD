<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Article;

class CardArticleAdmin extends Component
{
    public function render()
    {

        $articles = Article::whereIn('status',['Published','Feedback','OnReview'])->get();
       return view('livewire.components.admin.card-article-admin',compact('articles'));
    }
}
