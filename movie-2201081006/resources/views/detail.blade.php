@extends('layout.template')

@section('title', $movie['judul'])

@section('detail')

@if($movie)
<div class="container my-5">

        <div class="card mb-5 mx- py-2 bg-success">
            <div class="row g-0">
                <div class="col-md-3 py-3">
                    <img src="{{ asset('images/' . $movie['foto_sampul']) }}" class="img-fluid rounded-start"
                        alt="Sampul Movie">
                </div>
                <div class="col-md-9 py-3">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{ $movie['judul'] }}</h2>
                        <p class="card-text">{{ $movie['sinopsis'] }}</p>
                        <p>Tahun: {{ $movie['tahun'] }}</p>
                        <p>Pemain: {{ implode(', ', $movie['pemain']) }}</p>
                        <a href="/" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
</div>
    @else
        <div class="alert alert-danger" role="alert">

        </div>

    @endif
@endsection
