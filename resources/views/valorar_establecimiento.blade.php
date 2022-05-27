@extends('layouts.layout')

@section('titulo','Valorar establecimiento')

@section('contenido')

<div class="row">
    <h1>Valorar establecimiento - {{$Establecimiento}}</h1>
        <form method="post" action="{{ route('mis_valoraciones.store') }}"> 
        @csrf
            <div class="col-auto">
                <label class="form-label" for="customRange1">Nota</label>
                <div class="range">
                <input type="range" class="form-range" id="nota" name="nota" />
            </div>
                <div class="mb-3">
                    <label for="puntos_pos" class="form-label">Puntos positivos</label>
                    <textarea class="form-control" id="puntos_pos" name="puntos_pos" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="puntos_neg" class="form-label">Puntos positivos</label>
                    <textarea class="form-control" id="puntos_neg" name="puntos_neg" rows="3"></textarea>
                </div>
                <div class="col-auto">
                <input type="hidden" name="establecimiento_id" value="{{$Establecimiento->id}}">
                <button type="submit" class="btn btn-primary mb-3">Confirm</button>
            </div>
        </form>
</div>

@endsection