@extends('layouts.layout')
@section('titulo','Estableciminteos') 

@section('titulo','Estableciminteos')

@section('contenido')

<div class="catalog">
    <div class="container">
        <div class="part_header">
            <h2 class="header_title">Lista restaurantes</h2>
            <nav class="catalog_filter">
                <ul class="filter_wrapper">
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Todos</button>
                    </li>
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Valoracion</button>
                    </li>
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Comments</button>
                    </li>
                    <li class="filter_item">
                    <button class="filter_btn" type="button">Fecha creacion</button>
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
                                <p class="product_description">{{$item -> sol_esp}}</p>
                            </div>

                            <div class="product_footer">
                                @if ($item->myValoracion() == 1)
                                <a class="btn_check_valorar" href="{{route("mis_valoraciones.edit",$item->id)}}">
                                    Ver valoración
                                </a>
                                @else
                                    <a class="btn_valorar" href="{{route("valorar_establecimiento",$item->id)}}">
                                    Valorar
                                    </a>
                                @endif
                            </div>
                    </div> 
                </div>
            @endforeach
        </div>


    </div>
</div> 
<!--
    @foreach ($establecimientos as $item)
    <h1>PRUEBA SI ESTA PARTE FUNCIONA</h1>
    <!--<div class="col mt-2">
        <div class="card" style="width: 18rem;">
            <img src="./img/spain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <p class="card-text">{{$item -> sol_esp}}</p>

                @if ($item->myValoracion() == 1)
                <a class="btn btn-warning mb-2" href="{{route("mis_valoraciones.edit",$item->id)}}">
                    <i class="fa fa-edit">Ver valoración</i>
                </a>
                @else
                <a class="btn btn-warning mb-2" href="{{route("valorar_establecimiento",$item->id)}}">
                    <i class="fa fa-edit">Valorar</i>
                </a>
                @endif


            </div>
        </div>
    </div>   
    @endforeach
-->
@endsection
