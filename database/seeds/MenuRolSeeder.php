<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MenusRol = [
            [1, 1],
            [1, 2],
            [1, 3],
            [1, 4],
            [1, 5],
            [1, 6],
            [2, 1],
            [2, 2],
            [2, 3],
            [2, 4],
            [2, 5],
            [2, 6]
        ];
        
        $MenusRol = array_map(function($menuRol) {
            return [
                'rol_id' => $menuRol[0],
                'menu_id' => $menuRol[1]
            ];
        }, $MenusRol);
        
        DB::table('menus_rol')->insert($MenusRol);
    }
}
