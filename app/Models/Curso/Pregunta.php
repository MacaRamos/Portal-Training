<?php

namespace App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //preguntas
    protected $table = "preguntas";
    protected $fillable = ['cuestionario_id', 'pregunta'];
    public $timestamps = false;

    public function alternativas(){
        return $this->hasMany(Alternativa::class, 'pregunta_id', 'id');
    }
}
