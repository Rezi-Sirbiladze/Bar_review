@extends('layouts.layout')

@section('titulo','Dashboard')

@section('contenido')
<div class="container">

        <h1 class="header_title">Dashboard</h1>
        <div class="group_edit">
            <label>You're logged in!</label>
            <br>
            @if (Auth::user()->role == "cliente")
                <label>Puntua ;)</label>
            @else
                <a style="width: 30%" class="btn_editar" href="mis_establecimientos" class="btn btn-primary">Ver mis establecimientos</a>
            @endif
        </div>

</div>
@endsection