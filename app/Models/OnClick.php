<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnClick extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function article(){
        return $this->hasOne(Article::class,'article_id');
    }
}
