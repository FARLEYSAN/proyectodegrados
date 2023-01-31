<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CitaslibresOdontologium
 *
 * @property $id
 * @property $Servicio
 * @property $Nombre
 * @property $Fecha
 * @property $Hora
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CitaslibresOdontologium extends Model
{
    
    static $rules = [
		'Servicio' => 'required',
		'Nombre' => 'required',
		'Fecha' => 'required',
		'Hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Servicio','Nombre','Fecha','Hora'];



}
