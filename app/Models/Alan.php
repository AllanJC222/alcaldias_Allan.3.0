<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'dni',
        'fecha_nacimiento'
    ];
}
