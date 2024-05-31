<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillabe = [
        'full_name',
        'age',
        'gender',
        'phone_number',
        'salery',
    ];


    // Trainer hasMany Member
    public function trainer()
    {
        return $this->belongsToMany(Member::class , 'member_trainer');
    }
}
