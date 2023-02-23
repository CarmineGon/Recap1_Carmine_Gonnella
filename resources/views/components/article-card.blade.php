<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <h5 class="card-title">{{$article->homeprodu}}</h5>
      <p class="card-text">{{$article->price}}</p>
      <a href="{{route('article.detail',['title' => $article -> title])}}" class="btn btn-success">Dettaglio</a>
    </div>
  </div>