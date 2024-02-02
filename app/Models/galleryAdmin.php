<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryAdmin extends Model
{

    use HasFactory;

    protected $fillable = [
        'caption',
        'media',

    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function by(){
        return $this->hasOne(User::class,'id','user_name');
    }
}
