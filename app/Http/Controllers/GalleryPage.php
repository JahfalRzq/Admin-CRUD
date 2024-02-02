<?php

namespace App\Http\Controllers;

use App\Models\galleryAdmin;
use Illuminate\Http\Request;

class GalleryPage extends Controller
{

    public function gallery_feed(Request $request){
        $items = [];

        if($request->has('username')){
            $client = new \GuzzleHttp\Client;
            $url = sprintf('https://www.instagram.com/%s/media',
            $request->input('username'));
            $response = $client->get($url);
            $items = json_decode((string) $response->getBody(), true)['items'];
        }
        return view('pages.insight.gallery', compact('user'));

    }


    public function gallery(){

        $galleries = galleryAdmin::all();

        return view('pages.insight.gallery',compact('galleries'));
    }

    // public function gallery_modal($id){
    //     $gallerys_modal = GalleryAdmin::findOrFail($id);

    //     return view('pages.insight.gallery',compact('gallerys_modal'));
    // }

    

}
