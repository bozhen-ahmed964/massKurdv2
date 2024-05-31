<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillabe = [
        'full_name',
        'age',
        'gender',
        'phone_number',
        'exercise_type',
        'weight',
        'height',
        'start_date',
        'expire_date',
    ];


// Members belong to one trainer only
    public function trainer()
    {
        return $this->belongsToMany(Trainer::class , 'member_trainer');
    }
}
