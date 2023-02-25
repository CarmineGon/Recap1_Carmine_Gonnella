<x-layout>
    <x-header
    title=" {{$product->name}}"
    />
    <div class="container-fluid mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-7">
                <img src="{{Storage::url($product->img)}}" class="card-img-top img-fluid imgDetail imgdetails"  alt="...">
            </div> 
            <div class="col-5">
                <div class="ms-5">
                    <h3 class="text-white "> {{$product->name}}</h5>
                    <h5 class="text-white mt-3">{{$product->description}}</h5>
                    <p class="text-white mt-3">$ {{$product->price}}</p>
                    <p class="text-white mt-3">{{$product->user->name}}</p>
                    @foreach ($product->tags as $tag)
                        <span class="text-white"># {{$tag->name}}</span>
                    @endforeach
                    <a href="{{route('shop')}}" class="btn btn-danger mt-5">Torna indietro</a>
                    <a href="#" class="btn btn-success mt-5">Compra</a>
                </div>
            </div>          
        </div>
    </div>
</x-layout>