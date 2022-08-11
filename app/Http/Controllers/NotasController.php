<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nota;

class NotasController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'titulo'=> 'required|min:1',
            'descripcion'=>'required|min:1'
        ]);
        $notas = new Nota();
        $notas->titulo = $request->titulo;
        $notas->descripcion = $request->descripcion;
        $notas->save();

        return redirect()->route('notas')->with('Success', 'Nota Creada');
    }
}
