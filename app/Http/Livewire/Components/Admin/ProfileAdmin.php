<?php

namespace App\Http\Livewire\Components\Admin;

use App\Models\Office;
use App\Models\User;
use App\Models\Position;
Use App\Models\Division;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileAdmin extends Component
{
    public function render()
    {
        $id = Auth::id();
        // $user  = User::find($id);

        // // $user =  Auth::user();
        return view('livewire.components.admin.profile-admin');
    }
}
