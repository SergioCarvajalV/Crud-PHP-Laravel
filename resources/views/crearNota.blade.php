@extends('app')
@section('content')
    <link rel="stylesheet" href="stylesCrearNota.css">
    <div class="container w-auto p-4 bg-light text-dark bg-opacity-25 " >
        <form action="{{route('notas')}}" method="POST">
            @csrf
            <div class="mb- 3">
                <label for="titulo" class="form-label">Titulo de la nota</label>
                <input type="text" class="form-control" name="titulo" placeholder="Ingrese titulo de su nota">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion de su nota</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Ingrese descripcion de su nota">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" > Crear Nota </button>
            </div>
        </form>
    </div>

@endsection
