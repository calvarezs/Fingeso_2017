<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformeActividad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'informe_actividades';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'informacion',
        'periodo',
        'fecha_emision',
        'academico_id', 
        'comision_facultad_id',
        'comision_departamento_id'
    ];

    public function academicos()
    {
        return $this->belongsTo('App\Academico', 'academico_id');
    }
}
