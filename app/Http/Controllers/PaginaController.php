<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function actualizaciones($version_id = null)
    {
        $versiones = [
            'Datos v1',
            'Datos v2',
            'Datos v3',
            'Datos v4',
        ];
    
        if(!empty($version_id)){
            $version = $versiones[$version_id];
        }
        else{
            $version = null;
        }
    
         /*$ultima = 'Creacion del Sistema';*/
         return view('actualizaciones', compact('versiones', 'version'));
    }
}
