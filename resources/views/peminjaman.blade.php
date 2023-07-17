@extends('layouts.index')

@section('title')
    {{ trans('Peminjaman & Pengembalian Bahan Pustaka') }}
@endsection

@section('content')
    <!-- ======= Services Section (Peminjaman & Pengembalian Bahan Pustaka) ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title pt-5">
                <h2>Peminjaman & Pengembalian Bahan Pustaka</h2>
                <h5><p>Perpustakaan Politeknik Negeri Indramayu</p></h5>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="media">
                        @if ($layanan5->image)
                            <img src="{{ asset('storage/' . $layanan5->image) }}" class="mr-3 img-fluid" style="width: 80px; height: 100px;">
                        @else
                            <img src="" class="mr-3 img-fluid" style="width: 80px; height: 100px;">
                        @endif
                        <div class="media-body">
                            <h4 class="title"><a href="">{{ $layanan5->judul }}</a></h4>
                            <div class="description text-justify">
                                <p>{!! $layanan5->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="media">
                        @if ($layanan6->image)
                            <img src="{{ asset('storage/' . $layanan6->image) }}" class="mr-3 img-fluid" style="width: 80px; height: 100px;">
                        @else
                            <img src="" class="mr-3 img-fluid" style="width: 80px; height: 100px;">
                        @endif
                        <div class="media-body">
                            <h4 class="title"><a href="">{{ $layanan6->judul }}</a></h4>
                            <div class="description text-justify">
                                <p>{!! $layanan6->body !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
