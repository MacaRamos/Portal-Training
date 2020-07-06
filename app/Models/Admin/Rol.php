<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id', 'nombre'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
