<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{Storage::url($product->img)}}" class="img-fluid  imgCard rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p> Venditore :<a href="{{route('user.product', $product->user->id)}}"> {{$product->user->name}} </a></p>
          <p class="card-text">$ {{$product->price}}</p>
          <p class="card-text">Categoria : <a href="{{route('category.product',$product-> category)}}">{{$product->category->name}}</a></p>
          <p>{{$product->getFormattedTags()}}</p>
          <a href="{{route('product.detail',['name' => $product -> name])}}" class="btn btn-success">Dettaglio</a>
        </div>
      </div>
    </div>
  </div>