<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConvenioDesempeno extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'convenio_desempeno';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_creacion',
        'periodo',
        'version',
        'informacion',
        'curso_a_impartir_1',
        'horas_curso_1',
        'curso_a_impartir_2',
        'horas_curso_2',
        'curso_a_impartir_3',
        'horas_curso_3',
        'curso_a_impartir_4',
        'horas_curso_4',
        'curso_a_impartir_5',
        'horas_curso_5',
        'curso_a_impartir_6',
        'horas_curso_6',
        'curso_a_impartir_7',
        'horas_curso_7',
        'curso_a_impartir_8',
        'horas_curso_8',
        'cargo_realizable_1',
        'horas_cargo_1',
        'cargo_realizable_2',
        'horas_cargo_2',
        'cargo_realizable_3',
        'horas_cargo_3',
        'cargo_realizable_4',
        'horas_cargo_4',
        'cargo_realizable_5',
        'horas_cargo_5',
        'cargo_realizable_6',
        'horas_cargo_6',
        'cargo_realizable_7',
        'horas_cargo_7',
        'cargo_realizable_8',
        'horas_cargo_8',
        'director_id',
        'comision_departamentos_id'
    ];

    public function directors()
    {
        return $this->belongsTo('App\Director', 'director_id');
    } 
    
}
