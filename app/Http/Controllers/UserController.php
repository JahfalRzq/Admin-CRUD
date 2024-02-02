<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Office;
use App\Models\Division;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DataTables;

use Illuminate\Http\Response;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Pagination\CursorPaginator;

class UserController extends Controller
{

    public function user(Request $request)
    {
        $search = $request->search;
        // $pagination = 4;
        // $users = User::paginate($pagination);
        $users = User::where('user_name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('nip', 'like', '%' . $search . '%')
            ->latest()->paginate(3)->withQueryString()->onEachSide(1);
        $totalUser = User::count();
        $offices = Office::all();
        $roles = Role::all();
        $divisions = Division::all();
        $positions = Position::all();

        // $userOrdersPagination= $users->paginate(15);
        return view('admin.user.user-superadmin', compact('users', 'offices', 'roles', 'search', 'divisions', 'positions','totalUser'));
    }
    
    // public function getUser(Request $request){
    //     if ($request->ajax()){
    //         $data = User::latest()->get();
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function ($row) {
    //                 $actionBtn = '<div class="flex gap-3 justify-center">
    //                 <a  (0)" class="px-3 py-1 bg-blue-500 focus:bg-blue-700 hover:bg-blue-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"><i
    //                 class="bx bx-edit text-xl px-3"></i></a>
    //                  <a  (0)" class="px-3 py-1 bg-red-500 focus:bg-red-700 hover:bg-red-600 shadow-md rounded-md font-semibold flex items-center justify-center text-white tracking-wider w-[55px]"> <i
    //                  class="bx bx-trash text-xl px-3"></i></a>
    //                  </div>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }

    // }

    public function create_user()
    {


        return view('admin.user.user-superadmin');
        // ->with('users',$users)
    }

    public function store_user(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $path = null;

        $validator = Validator::make($request->all(), [
            'user_name'      => 'required|string',
            'email'          => 'required|email|unique:users',
            'password'       => 'required|password',
            'phone'          => 'required|int',
            'division_id'    => 'required|string',
            'position'       => 'required|string',
            'office_id'      => 'required|string',
            'role_id'        => 'required|string',
            'nip'            => 'required|string|unique:users',
            'nip2'            => 'required|string|unique:users',
        ]);
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-' . time() . "." . $extFile;
            $path = $request->image->move('users/', $namaFile);
        }
        $user = new User();
        $user->user_name     = $request->user_name;
        $user->email         = $request->email;
        $user->password      = Hash::make($request->password);
        $user->phone         = $request->phone;
        $user->division_id   = $request->division_id;
        $user->position_id   = $request->position;
        $user->office_id     = $request->office_id;
        $user->role_id       = $request->role_id;
        $user->type          = $request->type;
        $user->nip           = $request->nip;
        $user->nip2          = $request->nip2;
        $user->image         = $path;
        // dd($user);
        $user->save();
        return redirect('/user')->with('succes', 'user added');
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id);
        $users = User::all();
        // dd($id);

        return response()->json($user);


        // $where = array('id' => $id);
        // $user = User::where($where)->first();

        // return Response::json($user);

    }

    public function update_user(Request $request, $id)
    {

        // dd($request->all());
        // $validator = $request->validate([
        //     'updateName'     => ['required', 'string'],
        //     'updateEmail'         => ['required', 'string', 'email'],
        //     'updatePassword'      => ['required', 'string'],
        //     'updatephone'         => ['required', 'int'],
        //     'menuDivisionEdit'      => ['required', 'string'],
        //     'menuPositionEdit'      => ['required', 'string'],
        //     'menuOfficeEdit'        => ['required', 'string'],
        //     'menuRoleEdit'          => ['required', 'string'],
        //     'updateNIP'           => ['required', 'string', 'unique:users'],
        //     'updateNIP2'           => ['required', 'string', 'unique:users'],

        // ]);

        $user = User::findOrFail($id);
        // dd($user);

        $user->user_name    = $request->input('user_name');
        $user->email        = $request->input('email');
        $user->password     = $request->input('password');
        if($user->password == null){
            $user->password = Hash::make($request->input('password'));
        }
        $user->phone        = $request->input('phone');
        $user->type        = $request->input('type');
        $user->division_id     = $request->input('division_id');
        $user->position_id     = $request->input('position_id');
        $user->office_id    = $request->input('office_id');
        $user->role_id      = $request->input('role_id');
        $user->nip          = $request->input('nip');
        $user->nip2         = $request->input('nip2');
        // dd($user);
        $user->update();

        return redirect('/user')->with('succes', 'user added')->with('success', 'Edit Success');
    }

    public function delete_user($id)
    {
        $user = User::where('id', $id)->first();

        if ($user != null) {
            $user->delete();
            return redirect()->route('user')->with('User', 'Successfully Deleted!!');
        }
        return redirect()->route('user')->with('User', 'Wrong Id');
    }
}
