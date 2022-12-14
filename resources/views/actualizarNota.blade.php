@extends('app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container w-auto p-4 bg-light text-dark bg-opacity-25 " >
        <form action="{{ route('notas-update',['id'=>$nota->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            @error('titulo')
                <script>
                    toastr.error("El titulo debe ser de mas de 1 letra")
                </script>
            @enderror
            @error('descripcion')
                <script>
                    toastr.error("La descripcion debe ser de mas de 1 letra")
                </script>
            @enderror
            <div class="mb- 3">
                <label for="titulo" class="form-label">Titulo de la nota</label>
                <input type="text" class="form-control" name="titulo" value="{{ $nota->titulo }}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion de su nota</label>
                <input type="text" class="form-control" name="descripcion" value="{{ $nota->descripcion }}">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" > Actualizar Nota </button>
            </div>
        </form>
    </div>

@endsection
