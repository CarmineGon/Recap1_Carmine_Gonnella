<x-layout>
    <x-header
    title="Modifica articolo"
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
                <form method="POST" action="{{route('article.edit',compact ('article'))}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label class="form-label text-white">Titolo videogioco</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$article ->title}}">
                      @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">La casa produtrice del videogioco</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="homeprodu" value="{{$article ->homeprodu}}">
                        @error('homeprodu')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label text-white">Descrizione</label>
                          <textarea name="description" class="form-control cols="30" rows="10">{{$article->description}}</textarea>
                        @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-success">Conferma le modifiche</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>