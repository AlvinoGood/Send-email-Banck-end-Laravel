<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'names', 
        'surnames', 
        'country', 
        'phone', 
        'email', 
        'room', 
        'messaje'
    ];
}
