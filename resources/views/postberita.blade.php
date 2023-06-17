@extends('layouts.index')

@section('content')
<section class="berita" id="berita">
            <div class="container pt-5">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"><b>Berita</b></h2>
                        <hr>
                        @foreach ($data as $row)
                        <img src="{{asset('images/posts-berita/'.$row->image)}}" class="img-fluid" style="max-width: 60%; height: auto;" class="card-img-top" alt="Gambar">
                        <h5 class="card-title pt-3">{{ $row->judul }}</h5>
                    </div>
                    <div class="timeline-panel pt-3 text-justify">
                        <div class="description">
                        {!! html_entity_decode($row->body) !!}
                        </div>
                    </div>
                    @endforeach
            </div>
</section>

@endsection
