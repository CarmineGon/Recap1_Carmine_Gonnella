<x-layout>
    <x-header
    title="Facci sapere"
    />
    <div class="container-fluid bg-success py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('submit.contacts')}}">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Nome e Cogonome</label>
                      <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label">Come ti sei trovato</label>
                        <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
                      </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>