@extends('layouts.layout')

@section('titulo','Dashboard')

@section('contenido')
        <h1>Dashboard</h1>
        <p>You're logged in!</p>
                            
        @if (Auth::user()->role == "cliente")
            <p>Puntua ;)</p>
        @else
            <a href="mis_establecimientos" class="btn btn-primary">Ver mis establecimientos</a>
        @endif
@endsection