@extends('layouts.index')

@section('title')
    {{ trans('Beranda') }}
@endsection

@section('content')
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($sliders as $key => $slider)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}" {{ $key == 0 ? 'class=active' : '' }} aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                @if ($slider->image)
                    <img src="{{ asset('storage/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}">
                @else
                    <img src="{{ asset('img/ruang_referensi1.jpeg') }}" class="d-block w-100" alt="Placeholder Image">
                @endif
                <div class="container">
                    <div class="carousel-caption text-{{ $key % 2 == 0 ? 'start' : 'end' }}">
                        <h1>{{ $slider->title }}</h1>
                    </div>
                </div>
            </div>
        @endforeach
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




<section id="counts" class="counts">
    <div class="container">
        <div class="card-container">
            @foreach ($data as $row)
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('storage/' . $row->image) }}" width="100" height="200" class="card-img-top" alt="Gambar">
                    <div class="card-body">
                        <center><h5 class="card-title">{{ $row->judul }}</h5></center>
                        <p class="card-text">
                            @if (strlen($row->body) > 50)
                                {!! html_entity_decode(substr($row->body, 0, 50) . '...' )!!}
                            @else
                                {!! html_entity_decode($row->body) !!}
                            @endif
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Tanggal Dibuat: {{ $row->created_at->format('d M Y') }}</small>
                        </p>
                        <div class="text-center">
                            <a href="{{ route('postberita', $row->slug) }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
