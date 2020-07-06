<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['Administrador', 'Administrador'],
            ['Aimatres', 'Gente de Animatres'], //recursos humanos
            ['Responsable', 'Resposable de cursos'],
            ['Usuario', 'Usuario']
        ];

        $roles = array_map(function ($rol) {
            return [
                'nombre' => $rol[0],
                'descripcion' => $rol[1]
            ];
        }, $roles);

        DB::table('roles')->insert($roles);
    }
}
