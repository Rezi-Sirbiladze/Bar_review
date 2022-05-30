@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')
<div class="row">
    <h1>Establecimientos</h1>
    <h2>otra prueba</h2>
    @if(session('mensaje'))
        <h5>{{session('mensaje')}}</h5>
    @endif
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear
    </button>
  


    @foreach ($establecimientos as $item)
    <div class="col mt-2">
        <div class="card" style="width: 18rem;">
            <img src="./img/spain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->id}} - {{$item->user->name}}</h5>
                <p class="card-text">{{$item}}</p>


                <a class="btn btn-warning mb-2" href="{{route("mis_establecimientos.edit",[$item])}}">
                    <i class="fa fa-edit">Editar</i>
                </a>

                <form action="{{route("mis_establecimientos.destroy", [$item->id])}}" method="post">
                    @method("delete")
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash">Eliminar</i>
                    </button>
                </form>

            </div>
        </div>
    </div>
    @endforeach

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear establecimientos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('mis_establecimientos.store') }}"> 
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre de establecimiento</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-auto">
                        <label class="form-label" for="customRange1">Precios</label>
                        <div class="range">
                        <input type="range" class="form-range" id="precios" min="0" max="5" name="precios"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="customRange1">Solicitudes especiales</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sol_esp" id="flexRadioDefault1" value="Si">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="sol_esp" id="flexRadioDefault2" value="No, pero se intenta" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No, pero se intenta
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="horario" class="form-label">Horario</label>
                        <textarea class="form-control" id="horario" name="horario" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="ubicacion" class="form-label">Ubicación de establecimiento</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Crear</button>

            </div>
        </div>
        </div>
    </div>
</div>
@endsection