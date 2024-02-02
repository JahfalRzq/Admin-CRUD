<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductType;


class ModalProduct extends Component
{
    public $product_type;


    public function render()
    {
        $product_types = ProductType::all();
        return view('livewire.modal-product',compact('product_types'));
    }
}
