<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','category','slug','media','reason'];

    protected $casts = [

        'category' => 'array',
    ];



    public function likes(){
        return $this->hasMany(LikeDislike::class,'article_id');
    }

    public function views(){
        return $this->hasMany(Views::class,'views_id');
    }
    
    public function on_click(){
        return $this->hasMany(OnClick::class,'click_stats');
    }

    public function share(){
        return $this->hasMany(Share::class,'share_stats');
    }
    

    public function user(){
        return $this->hasMany(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function created_by(){
        return $this->hasOne(User::class,'id','user_name');
    }
}
