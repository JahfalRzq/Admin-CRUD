<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product as product_model;
use DB;


class Work_LP extends Controller
{

    public function product_LP(){

        $products_software = product_model::where('product_type','=',1)->get();
        $products_design = product_model::where('product_type','=',2)->get();
        $products_marketing = product_model::where('product_type','=',3)->get();

        // dd($product);
        return view('pages.work.product',compact('products_software','products_design','products_marketing'));
        // ,'product_design','product_marketing'
    }

    public function software_product($id){
        $products_software = product_model::findOrFail($id);
        return view('pages.product.softwareProduct',compact('products_software'));
    }

    public function design_product($id){
        $products_design = product_model::findOrFail($id);
        return view('pages.product.designProduct',compact('products_design'));
    }

    public function marketing_product($id){
        $products_marketing = product_model::findOrFail($id);
        return view('pages.product.marketingProduct',compact('products_marketing'));
    }
    
   



    // public function product_type2(Request $request){
    //     $product_type2 = product_model::where('product_type','2')->get();

    //     return view('livewire.components.products',compact('product_type2'));
        
    // }

    // public function product_type3(Request $request){
    //     $product_type3 = product_model::where('product_type','3')->get();

    //     return view('livewire.components.products',compact('product_type3'));
        
    // }
}
