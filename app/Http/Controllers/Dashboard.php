<?php

namespace App\Http\Controllers;
use App\Models\product as product_model;
use Jenssegers\Agent\AgentServiceProvider;



use Illuminate\Http\Request;

class Dashboard extends Controller
{
public function dashboard_product(){
    $products_software = product_model::where('product_type','=',1)->get();
    $products_design = product_model::where('product_type','=',2)->get();
    $products_marketing = product_model::where('product_type','=',3)->get();

    return view('pages.dashboard',compact('products_software','products_design','products_marketing'));


}

public function get_user(){
    $browser = Agent::browser();
    $version = Agent::version($browser);

    dd($browser,$version);
}




}
