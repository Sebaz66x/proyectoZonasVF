<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class zonasSeguras extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nombre',
        'radio',
        'latitud',
        'longitud',
        'tipo'
    ];
}
