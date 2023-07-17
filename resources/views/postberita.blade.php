@extends('layouts.index')

@foreach ($data as $row)
    <!-- Kode tampilan berita -->
    @section('title')
        {{ $row->judul }}
    @endsection
@endforeach

@section('content')
<section class="berita" id="berita">
    <div class="container pt-5">
        @foreach ($data as $key => $row)
            @if ($key == 0)
            <div class="text-center">
                <h3 class="section-heading text-uppercase"><b>{{ $row->judul }}</b></h3>
                <hr>

                <img src="{{asset('storage/' . $row->image)}}" class="img-fluid" style="max-width: 45%; height: auto;" class="card-img-top" alt="Gambar">
                <p class="text-muted">tanggal dibuat: {{ $row->created_at->format('d M, Y') }}</p>
                <div class="timeline-panel pt-3 text-justify">
                    <div class="description">
                        <p><h5>{!! html_entity_decode($row->body) !!}</h5></p>
                    </div>
                </div>
                @endif
                @endforeach
</div>
        </div>
    </div>
</section>
@endsection
