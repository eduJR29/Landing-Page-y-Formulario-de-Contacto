<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }

    public function contacto()
    {
        return view('contacto');
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
