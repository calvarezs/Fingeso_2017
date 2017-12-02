<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaPrecalificacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'acta_precalificacion';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calificacion',
        'informacion'.
        'acta',
        'academico_id',
        'comision_facultad_id',
        'comision_departamento'
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
