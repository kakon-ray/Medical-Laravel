<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'categorie',
        'phonenumber',
        'date_of_birth',
    ];

    use HasFactory;
}
