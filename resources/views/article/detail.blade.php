<x-layout>
<x-header
title="Andiamo nel dettaglio dell'Articolo {{$article->title}}"
/>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-3 mt-3">
                <img src="https://picsum.photos/200" class="card-img-top imgdetails"  alt="...">
                <div class="card-body ">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <h5 class="card-title">{{$article->homeprodu}}</h5>
                    <p class="card-text"> {{$article->description}}</p>
                    <a href="{{route('homepage')}}" class="btn btn-success">Torna al Home</a>
                    <a href="{{route('article.update', compact('article'))}}" class="btn btn-warning">Modifica</a>
                    <form method="POST" action="{{route('article.delete', compact('article'))}}">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
</x-layout>