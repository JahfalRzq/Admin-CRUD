<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\product;
use App\Http\Controllers\Work_LP;
use App\Http\Livewire\Components\Products;


class Products extends Component
{
    public $products_software,$products_design,$products_marketing;
    // ,$product_design,$product_marketing;

    // public function mount($products_software){
    //     $this->products_software = $products_software;
    // }

    public function render()
    {
        // $product_type1 = product::where('product_type','1')->get();

        return view('livewire.components.products');
        // ,compact('product_type1')
    }
}
