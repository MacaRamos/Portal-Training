<?php

namespace App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //cursos
    protected $table = "cursos";
    protected $fillable = ['curso_anterior', 'nombre', 'descripcion', 'portada', 'icono'];
    public $timestamps = false;

    public function modulos(){
        return $this->hasMany(Modulo::class, 'curso_id', 'id');
    }
}
