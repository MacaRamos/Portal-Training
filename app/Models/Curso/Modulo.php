<?php

namespace App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //modulos
    protected $table = "modulos";
    protected $fillable = ['curso_id', 'modulo_anterior', 'nombre', 'descripcion', 'archivo'];
    public $timestamps = false;

    public function cuestionario(){
        return $this->hasOne(Cuestionario::class, 'modulo_id', 'id');
    }
}
