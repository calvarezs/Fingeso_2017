<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoRespaldo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'documento_respaldo';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_creacion',
        'documento',
        'autor',
        'descripcion',
        'actividades_id'
    ];
}
