<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaCalificacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'acta_calificacion';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'fecha',
        'Departamento',
        'Puntaje_Departamento',
        'Puntaje_Facultad',
        'Puntaje_Promedio',
        'informacion',
        'acta',
        'Puntaje_Apelacion', 
        'estado',
        'academico_id',
        'comision_facultad_id'
    ];

    public function academicos()
    {
        return $this->belongsTo('App\Academico', 'academico_id');
    }

    public function comision_facultad()
    {
        return $this->belongsTo('App\ComisionFacultad', 'comision_facultad_id');
    } 
}
