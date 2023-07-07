@extends('layouts.index')

@section('content')
<section class="berita" id="berita">
    <div class="container pt-5">
        @foreach ($data as $key => $row)
            @if ($key == 0)
        <div class="text-center">
            <h3 class="section-heading text-uppercase"><b>{{ $row->judul }}</b></h3>
            <hr>
                    <img src="{{asset('storage/' . $row->image)}}" class="img-fluid" style="max-width: 55%; height: auto;" class="card-img-top" alt="Gambar">
                    <div class="timeline-panel pt-3 text-justify">
                        <div class="description"><h5>
                            {!! html_entity_decode($row->body) !!}
                        </h5></div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
