@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')
<!-- CSS only -->


<div class="catalog">
    <div class="container">    
        <div class="part_header">
            <h2 class="header_title">Lista restaurantes</h2>
            <nav class="catalog_filter">
                <ul class="filter_wrapper">
                    <li class="filter_item">
                        <button type="button" class="btn filter_btn" data-bs-toggle="modal" 
                        data-bs-target="#exampleModal">Crear</button>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="restaurant_list">
            @foreach ($establecimientos as $item)
                <div class="restaurant_item">
                    <div class="product">
                        <img src="./img/spain.jpg" class="image_rest" alt="...">
                        <div class="product_content">
                            <h3 class="product_title">{{$item->name}}</h3>
                            <p class="product_description">
                                <b>Creado</b> {{$item->created_at}} 
                                <b>Ubicación</b> {{$item->ubicacion}}
                                @if ( null !== $item->valoracionesAVG() )
                                <b>Valoración</b> {{$item->valoracionesAVG()[0]->media_nota}}
                                @endif

                            <div class="ranking_rest_footer">
                                <a class="btn_editar" href="{{route("mis_establecimientos.edit",[$item])}}">
                                    Editar
                                </a>
                                <form class="ranking_form_delete" action="{{route("mis_establecimientos.destroy", [$item->id])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn_delete">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endsection