<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;
use App\Models\Share;
use App\Models\Article;



class ShareStatistics extends Component
{
    public $article;
    

   
    public function render()
    {
        return view('livewire.components.admin.share-statistics');
    }
}
