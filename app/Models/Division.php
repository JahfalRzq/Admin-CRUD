<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class, 'division_id', 'id');
    }

    public function position()
    {
        return $this->hasMany(Position::class, 'position_id', 'id');
    }
}
