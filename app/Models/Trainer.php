<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'age',
        'gender',
        'phone_number',
        'salery',
    ];


    // Trainer hasMany Member
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
