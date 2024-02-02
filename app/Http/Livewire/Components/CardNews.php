<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Article;
use App\Models\OnClick;


class CardNews extends Component
{
    public    $article;
    protected $listeners = ['click_stats'=>'click_stats'];

    public function click_stats($id){
        // dd($id);
        
        $click_stats = OnClick::where('article_id',$id)
        ->increment('click_stats');

        return redirect()->route('view_news',['id'=>$id]);

    }

    public function render()
    {
        // $articles = Article::where('status','Published')->get();
        return view('livewire.components.card-news');
    }
}
