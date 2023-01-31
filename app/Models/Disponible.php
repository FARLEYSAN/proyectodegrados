<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponible extends Model
{
    use HasFactory;
}

class Prueba extends Model
{
    
    static $rules = [
        
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable  = ['Servicio','Nombre','Fecha','Hora'];



}
