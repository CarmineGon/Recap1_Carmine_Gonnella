<x-layout>
    <x-header
    title="Vendi ciò che non usi"
    />
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label text-white">Nome del Videogioco</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Descizione</label>
                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Categorie</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Tags</label>
                        <select name="tags[]" class="form-control" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        <small class="text-white">Ctrl + click per impostare più Tag</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Prezzo</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Immagini</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-success">Metti in vendita</button>
                  </form>
</x-layout>