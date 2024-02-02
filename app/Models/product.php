<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tagline',
        'url',
        'product_type',
        'caption',
        'logo',
        'background',
        'product_image',

    ];

    public function product_type(){
        return $this->belongsTo(ProductType::class);
    }


}
