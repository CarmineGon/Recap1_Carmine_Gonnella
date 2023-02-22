<x-layout>
    <x-header
    title="Accedi"
    />
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label text-white">Email </label>
                        <input type="email" class="form-control" name="email"> 
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-white">Password</label>
                        <input type="password" class="form-control" name="password"> 
                    </div>
                    <button type="submit" class="btn btn-success">Accedi</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>