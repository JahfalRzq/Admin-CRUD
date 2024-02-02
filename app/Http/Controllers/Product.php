<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product as product_model;
use App\Models\ProductType;
use Illuminate\Support\Facades\Validator;
use File;



class Product extends Controller
{
    public function product(Request $request){

        $search = $request->search;
        $products = product_model::where('name','like','%'.$search.'%')
        ->orWhere('caption','like','%'.$search.'%')
        ->latest()->paginate(3)->withQueryString()->onEachSide(1);
        $total_product = product_model::count();
        // $products = product_model::all();
        $product_type = ProductType::all();
        return view('admin.product.product-superadmin',compact('products','product_type','search','total_product'));
    }



    public function store_product(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(),[

            'name'              => 'required|string|unique',
            'tagline'           => 'required|string',
            'url'               => 'required|string',
            'product_type'      => 'required|url',
            'caption'           => 'required|string|max',
            'logo'              => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'background'        => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'product_image'     => 'required|image|mimes:jpeg,png,jpg|max:10000',

        ]);


        $logo = null;
        $background = null;
        $product_image = null;

        if ($request->hasFile('logo')){
            $extFile = $request->logo->getClientOriginalExtension();
            $namaFile = 'logo-' . time() . "." . $extFile;
            $logo = $request->logo->move('products/',$namaFile);

        }
        if($request->hasFile('background')){
            $extFile = $request->background->getClientOriginalExtension();
            $namaFile = 'background-' . time() . "." . $extFile;
            $background = $request->background->move('products/',$namaFile);

        }
        if($request->hasFile('product_image')){
            $extFile = $request->product_image->getClientOriginalExtension();
            $namaFile = 'product_image-' . time() . "." .$extFile;
            $product_image = $request->product_image->move('products/',$namaFile);
        }

        $product = new product_model();
        $product->name          = $request->name;
        $product->tagline       = $request->tagline;
        $product->url           = $request->url;
        $product->product_type  = $request->product_type;
        $product->caption       = $request->caption;
        $product->logo          = $logo;
        $product->background    = $background;
        $product->product_image = $product_image;
        $product->save();

        // dd($product);

        return redirect('/product-superadmin')->with('succes,','Product Created');


    }

    public function edit_product($id){
        $product_edit = product_model::findOrFail($id);

        return response()->json($product_edit);

    }

    public function update_product(Request $request,$id){

        $product               = product_model::findOrFail($id);
        $product->name         = $request->name;
        $product->tagline      = $request->tagline;
        $product->url          = $request->url;
        $product->product_type = $request->product_type;
        $product->caption      = $request->caption;
        $path_logo             = $product->logo;
        $path_background       = $product->background;
        $path_product_image    = $product->product_image;

        if($request->hasFile('logo')){
            $extFile1 = $request->logo->getClientOriginalExtension();
            $namaFile1 = 'logo-' . time() . "." .$extFile1;
            File::delete($product->logo);
            $path_logo = $request->logo->move('products/',$namaFile1);
        }


        if($request->hasFile('background')){
            $extFile2 = $request->background->getClientOriginalExtension();
            $namaFile2 = 'background-' . time() . "." .$extFile2;
            File::delete($product->background);
            $path_background = $request->background->move('products/',$namaFile2);
        }


        if($request->hasFile('product_image')){
            $extFile3 = $request->product_image->getClientOriginalExtension();
            $namaFile3 = 'product_image-' .time() . "." .$extFile3;
            File::delete($product->product_image);
            $path_product_image  = $request->product_image->move('products/',$namaFile3);
        }

        $product->logo = $path_logo;
        $product->background = $path_background;
        $product->product_image = $path_product_image;
        // dd($product);
        $product->save();

        return redirect('/product-superadmin');






    }


    public function delete_modal($id){

        return view('livewire.delete-product');
    }

    public function delete_product($id){
        $products = product_model::where('id',$id)->first();

        if($products != null){
           $products->delete();
           return redirect()->route('product')->with('product', 'Successfully Deleted!!');
        }

    }

    // public function product_type(Request $request){
    //     $product_type = ProductType::all();
    //     return view('livewire.modal-product',compact('product_type'));
    // }
}
