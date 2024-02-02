<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;
use Jenssegers\Agent\Facades\Agent;




class UserDevice extends Controller
{
    public function user_device()
    {




            $getip = UserSystemInfoHelper::get_ip();
            $getbrowser = UserSystemInfoHelper::get_browsers();
            $getdevice = UserSystemInfoHelper::get_device();
            $getos = UserSystemInfoHelper::get_os();
        
     
        
       
      

            echo "<center>$getip <br> $getdevice <br> $getbrowser <br> $getos</center>";

    }
}
