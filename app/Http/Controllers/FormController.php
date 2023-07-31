<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class FormController extends Controller
{
    public function __invoke(Request $request)
    {
        $mensaje = new Mensaje();

        $mensaje-> nombre = $request->nombre;
        $mensaje-> telefono = $request->telefono;
        $mensaje-> mail = $request->mail;
        $mensaje-> mensaje = $request->mensaje;

        $mensaje->save();
        return redirect()->route('recibido');
    }
}
