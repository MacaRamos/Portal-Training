<?php

namespace App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    //cuestionarios
    protected $table = "cuestionarios";
    protected $fillable = ['modulo_id', 'titulo', 'completado'];
    public $timestamps = false;

    public function preguntas(){
        return $this->hasMany(Pregunta::class, 'cuestionario_id', 'id');
    }
}
