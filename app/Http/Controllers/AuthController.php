<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    // @return \illuminate\Http\Response;

    public function authenticate()
    {
        return view('pages.login');
    }

    public function create()
    {
    }

    // @param \illuminate\Http\Response;

    // @return \illuminate\Http\Response;

    public function store(Request $request)
    {
        $data = $request->input();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $role_id = auth()->user()->role_id;

            if ($role_id == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-admin');
            } elseif ($role_id == 2) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-admin');
            } elseif ($role_id == 3) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-admin');
            } elseif ($role_id == 4) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard-admin');
            }
        }
        return back()->with('error', 'login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
