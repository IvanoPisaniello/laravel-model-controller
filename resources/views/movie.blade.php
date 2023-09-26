@extends("layouts.public")

@section("content")
    <h1 class="text-center">MOVIES</h1>
    <div class="bg-secondary p-5">
    <div class="container">
    <div class="d-flex flex-row flex-wrap gap-2 justify-content-center">
        @foreach($movies as $movie)
            <div class="col-2">
                <div class="card rounded">
                    <div class="card-header">
                        {{ $movie->title }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->original_title }}</h5>
                        <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                        <p class="card-text">Data: {{ $movie->date }}</p>
                        <p class="card-text">Voto: {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
@endsection