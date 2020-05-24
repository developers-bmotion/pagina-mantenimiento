<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class CountdownController extends Controller
{
    public function index(){
        return view('home');
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:information,email',
            'phone' => 'required|numeric'
        ]);

        $information = new Information;

        $information->name = $request->name;
        $information->email = $request->email;
        $information->phone = $request->phone;
        $information->message = $request->message;
        $information->save();

        return back()->with('exito', '¡Gracias por registrarte!, Hemos enviado un correo electrónico confirmando tu registro');

    }
}
