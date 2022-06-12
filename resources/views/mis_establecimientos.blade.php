@extends('layouts.layout')

@section('titulo','Estableciminteos')

@section('contenido')
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
                                <h3 class="product_title">{{$item->id}} - {{$item->user->name}}</h3>
                                <p class="product_description">{{$item}}</p>
                            </div>

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
@endsection