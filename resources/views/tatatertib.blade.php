@extends('layouts.index')

@section('title')
    {{ trans('Tata Tertib') }}
@endsection

@section('content')
    <!-- ======= Services Section (tata tertib) ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title pt-5">
                <h2>Tata Tertib</h2>
                <h5><p>Perpustakaan Politeknik Negeri Indramayu</p></h5>
            </div>

            <div class="row">
                @foreach ($layanan as $kategori => $layananPerKategori)
                    @foreach ($layananPerKategori as $lay)
                        <div class="col-lg-6 col-md-6">
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="{{ asset('storage/' . $lay->image) }}" style="width: 90px; height: 90px;">
                                </div>
                                <h4 class="title">{{$lay->judul}}</a></h4>
                                <div class="description text-justify">
                                    <p>{!! $lay->body !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
