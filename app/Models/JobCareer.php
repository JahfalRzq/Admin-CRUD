<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCareer extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_tittle',
        'division',
        'location',
        'start_date',
        'end_date',
        'job_type',
        'job_system',
        'role_description',
        'jobdesk_description',
        'role_environment',
        'team_description'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
