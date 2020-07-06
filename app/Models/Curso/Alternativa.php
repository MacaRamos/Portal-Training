<?php

namespace App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    //alternativas
    protected $table = "alternativas";
    protected $fillable = ['pregunta_id', 'descripcion', 'correcta', 'completado'];
    public $timestamps = false;
    
}
