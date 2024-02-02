<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Article;
use App\Models\Office;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;

use App\Models\Position;
use App\Models\Division;
use File;

class Setting extends Controller
{



    public function profile_dashboard()
    {
        //    dd(Auth::user()->office());
        $user = Auth::user();
        // $articles = Article::where('created_by','user_name')->get();
        // $articles = $user->article()->get();

        $articles = Article::where('created_by', $user->user_name)->get();

        return view('admin.profileDashboard', compact('articles')); //,'articles','user'

    }

    // public function setting_sideBar($id){

    //     $setting = User::findOrFail($id);
    // }

    // public function card_profileDashboard(){

    // $id = Auth::id();
    // // $offices = Office::all();
    // // $roles   = Role::all();

    // return view('admin.editProfileDashboard');//,compact('offices','roles'

    // }

    public function edit_profileDashboard($id)
    {
        $user = User::findOrFail($id);
        $divisions = Division::all();
        $positions = Position::all();

        return view('admin.editProfileDashboard', compact('user', 'divisions', 'positions'));
    }

    public function subCat(Request $request)
    {
        $position_id = $request->division_id;
         
        $subcategories = Division::where('id',$position_id)
                              ->with('position')
                              ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }


    public function update_profileDashboard(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'user_name'            => ['required', 'string'],
        //     'phone'                 => ['required', 'int'],
        //     'email'                 => ['required', 'string'],
        //     'password'              => ['required', 'string'],
        //     'password_confirmation' => ['required', 'same:password'],
        //     'gender'                => ['required'],
        //     'birthday'              => ['required'],
        // ]);
        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // $request->validate([
        //     'user_name'            => ['required', 'string'],
        //     'phone'                 => ['required', 'int'],
        //     'email'                 => ['required', 'string'],
        //     'password'              => ['required', 'string'],
        //     'password_confirmation' => ['required', 'same:password'],
        //     'gender'                => ['required'],
        //     'birthday'              => ['required'],
        //     // dd($request->all())

        // ]);
        $user = User::findOrFail($id);
        // dd($user);
        $user->user_name      = $request->user_name;
        $user->phone           = $request->phone;
        $user->email           = $request->email;
        $user->password        = Hash::make($request->password);
        $user->gender          = $request->gender;
        $user->birthday        = $request->birthday;
        $path = $user->image;
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            File::delete($user->image);
            $path = $request->image->move('users/', $namaFile);
        }
        $user->image = $path;
        $user->division_id  = $request->division;
        $user->position_id  = $request->position;
        // $division = Division::where('id', $id)->first();
        // $division->division_name    =   $request->division_name;
        // dd($user);
        $user->save();

        return redirect()->back();
    }
}
