<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;

class ViewStatistics extends Component
{
    public $view;
    public function render()
    {
        return view('livewire.components.admin.view-statistics');
    }
}
