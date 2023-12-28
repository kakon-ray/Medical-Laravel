<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doctor_name',
        'doctor_phonenumber',
        'doctor_specialist',
        'doctor_details',
        'doctor_image',
    ];

    use HasFactory;
}
