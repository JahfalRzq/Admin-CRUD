<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galleryAdmin as galleryAdminModels;
use App\Models\User;
use File;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class galleryAdmin extends Controller
{
    public function gallery_admin(Request $request ){
        // $pagination = 5;
        // $galleries = galleryAdminModels::paginate($pagination);

        $search = $request->search;
        $galleries = galleryAdminModels::where('caption', 'like', '%' . $search . '%')
            ->latest()->paginate(3)->withQueryString()->onEachSide(1);
        return view('admin.gallery-admin',compact('galleries','search'));
    }
    public function create_galleryAdmin(){
        return view('admin.gallery-admin');
    }

    public function store_galleryAdmin(Request $request){


        // dd($request->all());
        $user = Auth::user();
        $by   = User::with('gallery')->where('id',$user->id)->first();
        $vaidator = Validator::make($request->all(),[

            'caption'   => 'required|string|max:350',
            'media'     => 'required|image|mimes:jpeg,png,jpg',
            'by'        => 'required',

        ]);

        // $media = null;
        $media = 'images/add-image-gallery.png';
        if($request->hasFile('media')){
            $extFile = $request->media->getClientOriginalExtension();
            $namaFile = 'images-' .time() .'0'.$extFile;
            $media = $request->media->move('images/',$namaFile);
        }

        $gallery = new galleryAdminModels();
        $gallery->caption  = $request->caption;
        $gallery->media    = $media;
        $gallery->by       = Auth::user()->user_name;
        $gallery->save();
        // dd($gallery);

        $gallery = galleryAdminModels::all();
        return redirect('/gallery-admin')->with('succes','Gallery Created');

    }


    public function edit_galleryAdmin($id){
        $gallery_edit = galleryAdminModels::find($id);
        
        // dd($gallery_edit);
        // return view('admin.edit-gallery');
        return response()->json($gallery_edit);
    }

    public function update_galleryAdmin(Request $request,$id){
        // dd($request->all());

        $gallery           = galleryAdminModels::findOrFail($id);
        $gallery->caption  = $request->caption;
        $path              = $gallery->media;
        
        
        if($request->hasFile('media')){
            $extFile    = $request->media->getClientOriginalExtension();
            $namaFile   = 'galleries-' . time() . "." .$extFile;
            File::delete($gallery->media);
            $path = $request->media->move('gallery/',$namaFile);
        }

        $gallery->media = $path;

        $gallery->save();
        dd($gallery);

        return redirect('/gallery-admin');
        
           
        
        }


    

    public function delete_galleryAdmin($id){

       $gallery = galleryAdminModels::where('id',$id)->first();

       if($gallery != null){
          $gallery->delete();
          return redirect()->route('gallery_admin')->with('Gallery', 'Successfully Deleted!!');
       }
       return redirect()->route('gallery_admin')->with('Gallery', 'Wrong Id');



    }
}
