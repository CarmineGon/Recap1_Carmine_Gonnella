<x-layout>
    <x-header 
    title="Videogames"
    />
    @if (session('message'))
        <div class="alert alert-success">
            <p class="m-0">{{session('message')}}</p>
        </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-8 col-lg-6 mb-5 text-center d-flex justify-content-center ">
                    <x-article-card
                        :article="$article"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>