<x-layout>
    <x-header
    title="Metti in vendita i giochi che non usi più"
    />
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Titolo videogioco</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old ('title')}}">
                      @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">La casa produtrice del videogioco</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="homeprodu" value="{{old ('homeprodu')}}">
                        @error('homeprodu')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Il prezzo</label>
                        <input type="number" step="1" class="form-control @error('title') is-invalid @enderror" name="price" max="200" value="{{old ('price')}}">
                        @error('price')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-success">Conferma</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>