<x-layout>
    <x-header
    title="Registrati"
    />
    <div class="container my-5">
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label text-white">Nome</label>
                      <input type="text" class="form-control" name="name"> 
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-white">Email </label>
                        <input type="email" class="form-control" name="email"> 
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-white">Password</label>
                        <input type="password" class="form-control" name="password"> 
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-white">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation"> 
                    </div>
                    <button type="submit" class="btn btn-success">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>