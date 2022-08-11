@extends('app')

@section('content')

    <div class="container w-auto p-4 bg-light text-dark bg-opacity-25 " >
        <form >
            <div class="mb-3>
                <label for="titulo" class="form-label">Titulo de la nota</label>
                <input type="text" class="form-control" name="titulo" placeholder="Ingrese titulo de su nota">
              </div>
              <div class="mb-3">
                <label for="Nota" class="form-label">Descripcion de su nota</label>
                <textarea class="form-control" name="Nota" rows="5"></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-primary" > Crear Nota </button>
              </div>
        </form>
    </div>

@endsection
