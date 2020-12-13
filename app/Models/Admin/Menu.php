<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Menu extends Model
{
    protected $dateFormat = 'Y-d-m H:i:s.v';
    protected $table = "menus";
    protected $fillable = ['nombre', 'url', 'icon'];
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'menus_rol', 'menu_id', 'rol_id');
    }
    public function getHijos($padres, $line)
    {
        $children = [];
        foreach ($padres as $line1) {
            if ($line['id'] == $line1['menu_anterior']) {
                $children = array_merge($children, [array_merge($line1, ['submenu' => $this->getHijos($padres, $line1)])]);
            }
        }
        return $children;
    }
    public function getPadres($front)
    {
        if ($front) {
            return $this->whereHas('roles', function ($query) {
                $query->where('rol_id', Auth::user()->roles->toArray() ?? [''])->orderby('menu_id');
            })->orderby('menu_anterior')
                ->orderby('orden')
                ->get()
                ->toArray();
        } else {
            return $this->orderby('menu_anterior')
                ->orderby('orden')
                ->get()
                ->toArray();
        }
        
    }

    public static function getMenu($front = false)
    {
        $menus = new Menu();
        $padres = $menus->getPadres($front);

        $menuAll = [];
        foreach ($padres as $line) {
            if ($line['menu_anterior'] != 0)
                break;
            $item = [array_merge($line, ['submenu' => $menus->getHijos($padres, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menuAll;
    }
    
    public function guardarOrden($menu)
    {
        $menus = json_decode($menu);
        

        foreach ($menus as $var => $value) {
            $this->where('id', $value->id)->update(['menu_anterior' => 0, 'orden' => $var + 1]);
            if (!empty($value->children)) {
                foreach ($value->children as $key => $vchild) {
                    
                    $update_id = $vchild->id;
                    $parent_id = $value->id;
                    $this->where('id', $update_id)->update(['menu_anterior' => $parent_id, 'orden' => $key + 1]);
                    if (!empty($vchild->children)) {
                        foreach ($vchild->children as $key => $vchild1) {
                            $update_id = $vchild1->id;
                            $parent_id = $vchild->id;
                            $this->where('id', $update_id)->update(['menu_anterior' => $parent_id, 'orden' => $key + 1]);
                            if (!empty($vchild1->children)) {
                                foreach ($vchild1->children as $key => $vchild2) {
                                    $update_id = $vchild2->id;
                                    $parent_id = $vchild1->id;
                                    $this->where('id', $update_id)->update(['menu_anterior' => $parent_id, 'orden' => $key + 1]);
                                    if (!empty($vchild2->children)) {
                                        foreach ($vchild2->children as $key => $vchild3) {
                                            $update_id = $vchild3->id;
                                            $parent_id = $vchild2->id;
                                            $this->where('id', $update_id)->update(['menu_anterior' => $parent_id, 'orden' => $key + 1]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}