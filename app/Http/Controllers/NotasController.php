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

        return redirect()->route('verNotas')->with('success', 'Nota Creada correctamente');
    }

    public function indexVerNotas(){
        $notas = Nota::all();
        return view('index', ['notas'=>$notas]);
    }

    public function show($id){
        $nota = Nota::find($id);
        return view('actualizarNota', ['nota'=>$nota]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'titulo'=> 'required|min:1',
            'descripcion'=>'required|min:1'
        ]);
        $nota = Nota::find($id);
        $nota->titulo = $request->titulo;
        $nota->descripcion = $request->descripcion;
        $nota->save();
        return redirect()->route('verNotas')->with('success', 'Nota actualizada');
    }

    public function destroy($id){
        $notas = Nota::find($id);
        $notas->delete();
        return redirect()->route('index')->with('success', 'Nota Eliminada');
    }
}
