<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite; //tambahkan library socialite
use App\Models\User;

class LoginController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Login Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles authenticating users for the application and
        | redirecting them to your home screen. The controller uses a trait
        | to conveniently provide its functionality to your applications.
        |
        */


        //tambahkan script di bawah ini
        public function redirectToProvider()
        {
            return Socialite::driver('google')->redirect();
        }


        //tambahkan script di bawah ini
        public function handleProviderCallback(Request $request)
        {
            try {
                $user_google    = Socialite::driver('google')->user();
                $user           = User::where('email', $user_google->getEmail())->first();

                //jika user ada maka langsung di redirect ke halaman home
                //jika user tidak ada maka simpan ke database
                //$user_google menyimpan data google account seperti email, foto, dsb

                if($user != null){
                    \auth()->login($user, true);
                    return redirect()->route('total.article');
                }else{
                    $create = User::Create([
                        'email'             => $user_google->getEmail(),
                        'user_name'         => $user_google->getName(),
                        'password'          => 0,
                        'email_verified_at' => now(),
                // 'user_name' => 'Aptzy',
                // 'email' => 'SuperAdmin@gmail.com',
                // 'password' => Hash::make('admin123'),
                'phone'    => '0895601111',
                'division' => 'IT Development',
                'office_id'=> 1,
                'role_id'     => 1,
                'position' => 'Data Analyst'
                    ]);


                    \auth()->login($create, true);
                    return redirect()->route('total.article');
                }

            } catch (\Exception $e) {
                return redirect()->route('login');
            }


        }

    }
