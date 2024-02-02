<?php

namespace App\Http\Livewire\Components\Admin;

use Livewire\Component;

class ClickStatistics extends Component
{
    public $click;
    public function render()
    {
        return view('livewire.components.admin.click-statistics');
    }
}
