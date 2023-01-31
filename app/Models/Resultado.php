<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado
 *
 * @property $id
 * @property $Paciente
 * @property $Cedula
 * @property $Resultados
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultado extends Model
{
    
    static $rules = [
		'Paciente' => 'required',
		'Cedula' => 'required',
		'Resultados' => 'required',
    'Tipo_resultado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Paciente','Cedula','Resultados', 'Tipo_resultado'];



}
