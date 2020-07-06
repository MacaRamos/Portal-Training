<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [0, 'Mantenedores', '#', ''],
            [1, 'Responsables', '/responsables', 'pe-7s-user'],
            [1, 'Usuarios', '/usuarios', 'pe-7s-users'],
            [1, 'Áreas', '/areas', 'pe-7s-way'],
            [1, 'Cursos', '/cursos', 'pe-7s-notebook'],
            [1, 'Administradores', '/administradores', 'pe-7s-id']
        ];
        
        $menus = array_map(function($menu) {
            return [
                'menu_anterior' =>  $menu[0],
                'nombre' => $menu[1],
                'url' => $menu[2],
                'icono' => $menu[3],
            ];
        }, $menus);
        
        DB::table('menus')->insert($menus);
    }
}
