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
