<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\LikeDislike;
use App\Http\Controllers\StatisticController;
use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Support\Facades\DB;



class LikeStatistics extends Component
{
    public $like;
    

    public function render()
    {


        
        return view('livewire.components.admin.like-statistics');
    }
}
