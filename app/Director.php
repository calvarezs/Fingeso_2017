<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'directores';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'fecha_inicio_cargo',
        'fecha_termino_cargo',
        'id_user'
    ];

   // hasMany Academico
   // hasmany convenio_desempeño

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
}
