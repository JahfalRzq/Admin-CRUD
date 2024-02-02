<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Article;
use Carbon\Carbon;



class WeeklyStats extends Component
{
    // public $article_statsLike;
    public $like_article,$elections;

    public function render()

    {
        return view('livewire.components.admin.weekly-stats');
    }
}
