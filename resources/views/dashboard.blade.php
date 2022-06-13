@extends('layouts.layout')

@section('titulo','Dashboard')

@section('contenido')
<div class="container">

        <h1 class="header_establecimientos">Prueba Dashboard</h1>
        <div class="group_edit">
            <label>You're logged in!</label>
            <br>
            @if (Auth::user()->role == "cliente")
                <label>Puntua ;)</label>
            @else
                <a style="width: 20%" class="btn_editar" href="mis_establecimientos" class="btn btn-primary">Ver mis establecimientos</a>
            @endif
        </div>

</div>
@endsection