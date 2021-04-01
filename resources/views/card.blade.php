<div class="card text-white bg-dark mb-3" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="Картинка товара">
    <div class="card-body">
        <p class="card-text">{{$product->name}}</p>
        <h5 class="card-title text-info">{{$product->price}}$</h5>
        <form action="{{route('basket-add', ['id' => $product->id])}}" method="POST">
            <button type="submit" class="btn btn-success" role="button">Додати в кошик</button>
        @csrf
        </form>
    </div>
</div>
