<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function __invoke()
    {
        $mensajes = Mensaje::orderBy('id', 'desc')->get();
        
        return view('consultas', compact('mensajes'));
    }

    public function destroy(Mensaje $msj){
        $msj->delete();
        return redirect()->route('consultas');
    }
}
