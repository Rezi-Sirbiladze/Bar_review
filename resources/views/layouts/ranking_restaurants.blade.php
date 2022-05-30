@foreach ($TopEstablecimientos as $item)
    <div class="restaurant_item">
        <div class="product">
            <img src="./img/spain.jpg" class="image_rest" alt="...">
                <div class="product_content">
                    <h3 class="product_title">{{$item->name}}</h3>
                    <p class="product_description">{{$item -> sol_esp}}</p>
                </div>

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