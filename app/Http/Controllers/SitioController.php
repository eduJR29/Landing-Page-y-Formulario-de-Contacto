<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }

    public function contacto($codigo = null)
    {
        $nombre = 'Jorge Perez';
        $correo = 'jorge@gmail.com';
        //$codigos = [
          //  'Name' => 'Jorge Perez',
            //'Email' => 'jorge@gmail.com',
        //];

        if($codigo == 1234){
            $nombre;
            $correo;
        }else{
            $nombre = null;
            $correo = null;
        }
        return view('contacto', compact('nombre','correo'));
        //return view('contacto', compact('codigos','cod'));
    }

    public function recibeFormContacto(Request $request)
    {
        $request->validate([
            'Name'=>'required|max:255|min:3',
            'Email'=>['required', 'email'],
            'Phone'=>'required|min:10|max:10',
            'Message'=>'required',
        ]);
    }
}
