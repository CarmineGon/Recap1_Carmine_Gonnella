<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('shop')}}">Shop</a>
            </li>
            <a class="nav-link active" href="{{route('contacts')}}">Contattaci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('article.create')}}">Crea Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('product.create')}}">Metti in vendita</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link active" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('login')}}">Accedi</a>
          </li>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}" 
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Esci</a>
            </li>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item" href="{{route('category.product', $category)}}">{{$category->name}}</a></li>
            <li><hr class="dropdown-divider"></li>
            @endforeach
          </ul>
        </li>
        @endguest
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>