<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [

        'event',
        // 'icon',
        'detail_event',
        'date',
        'start_time',
        'end_time',

    ];
}
