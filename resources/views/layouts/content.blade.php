@extends('layouts.index')

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/ruang_referensi1.jpeg')}}" class="img-fluid">
            <svg class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Ruang Referensi</h1>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/ruang_sirkulasi1.jpeg')}}" class="img-fluid">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Ruang Sirkulasi</h1>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/perpus1.jpg')}}" class="img-fluid">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Meja Baca</h1>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section id="koleksi" class="Koleksi">
    <div class="container">
        <div class="card-container">
            @foreach ($data as $row)
            <div class="card" style="width: 18rem;">
            <img src="{{asset('images/posts-berita/'.$row->image)}}" width="100" class="card-img-top" alt="Gambar">
                <div class="card-body">
                    <h5 class="card-title">{{ $row->judul }}</h5>
                    <p class="card-text">
                        @if (strlen($row->body) > 50)
                            {!! html_entity_decode(substr($row->body, 0, 50) . '...' )!!}
                        @else
                        {!! html_entity_decode($row->body) !!}
                        @endif
                    </p>
                        <div class="text-center">
                            <a href="{{ route('postberita', $row->id) }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
