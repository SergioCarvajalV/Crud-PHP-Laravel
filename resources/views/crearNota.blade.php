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

        {{-- <div>
            @foreach ($notas as $nota)
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a>{{ $nota->titulo }}</a>
                </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{ route('notas-destroy', [$nota->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>

@endsection
