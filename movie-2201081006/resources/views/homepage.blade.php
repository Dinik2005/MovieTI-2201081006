@extends('layout.template')
@section('title','movieTi')

@section('container')
    <div class="container p-3">
        <h1>Popular Movie</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)

            <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 py-4">
                                <img src="{{ asset('images/' . $movie['foto_sampul']) }}" class="img-fluid rounded-start"
                                    alt="Sampul Movie">
                            </div>
                            <div class="col-md-8 py-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                                    <p class="card-text">{{ $movie['sinopsis'] }}</p>
                                    <a href="{{ route('detail', ['id' => $movie['id']]) }}" class="btn btn-success">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="bootstrap/js_bootstrap.bundle.min.js"></script>
@endsection
