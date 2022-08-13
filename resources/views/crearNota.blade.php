@extends('app')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container w-auto p-4 bg-light text-dark bg-opacity-25 " >
        <form action="{{route('notas')}}" method="POST">
            @csrf
            @error('titulo')
                <script>
                    toastr.error("El titulo debe ser de mas de 3 letras")
                </script>
            @enderror

            @error('descripcion')
                <script>
                    toastr.error("La descripcion debe ser de mas de 3 letras")
                </script>
            @enderror

            @if (session('success'))
                <script>
                    toastr.success({ $message })
                </script>
             @endif

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

        <div>
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

        </div>
    </div>

@endsection
