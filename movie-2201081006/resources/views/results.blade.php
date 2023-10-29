@extends('layout.template')

@foreach($results as $result)
@section('title', $result['judul'].'-MovieTi')


@section('container')

    <div class="container p-3">
        <h1>Hasil Pencarian : {{ $result['judul'] }}</h1>
    </div>

    <div class="container">
        <div class="row">

                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 py-4">
                                <img src="{{ asset('images/' . $result['foto_sampul']) }}" class="img-fluid rounded-start"
                                    alt="Sampul result">
                            </div>
                            <div class="col-md-8 py-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $result['judul'] }}</h5>
                                    <p class="card-text">{{ $result['sinopsis'] }}</p>
                                    <a href="{{ route('detail', ['id' => $result['id']]) }}" class="btn btn-success">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
