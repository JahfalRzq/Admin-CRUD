<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];


    public function article(){
        return $this->belongsTo(Article::class,'article_id');
    }
    public function user(){
        return $this->hasMany(User::class,'user_id');

    }
}
