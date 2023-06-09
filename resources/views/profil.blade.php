@extends('layouts.index')

@section('content')
<section class="tatatertib" id="tatatertib">
    <div class="container pt-5">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><b>VISI MISI</b></h2>
            <h5 class="section-subheading text-muted">Perpustakaan Politeknik Negeri Indramayu</h5>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <center><h2 class="text-uppercase"><b>Visi</b></h2></center>
                        <hr>
                        <div class="description pt-3 text-justify">
                            <p>Menjadi perpustakaan unggul di tingkat nasional yang berdaya saing global dengan layanan berbasis IT untuk mendorong budaya ilmiah di kalangan civitas akademika</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <center><h2 class="text-uppercase"><b>Misi</b></h2></center>
                        <hr>
                        <div class="description pt-3 text-justify">
                            <ul>
                                <li>Menyelenggarakan sistem layanan perpustakaan yang efektif dan efisien berbasis teknologi informasi</li>
                                <li>Memperkuat proses transfer dan sharing ilmu untuk mendukung kehidupan ilmiah di lingkungan Politeknik</li>
                                <li>Berkolaborasi dengan perpustakaan di dalam dan luar negeri untuk mencapai akses pengetahuan tanpa batas</li>
                                <li>Memperkaya koleksi perpustakaan baik digital maupun non digital dalam mendukung literasi informasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<div id="team" class="team section-bg">
    <div class="container">
        <div class="row pt-5">
            <div class="section-title">
                <h2>TIM</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card">
                <img src="{{ asset('storage/' . $data[0]->foto) }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">{{ $data[0]->nama }}</p>
                    <p class="card-text">{{ $data[0]->posisi }}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($data->slice(1, 3) as $row)
            <div class="card">
                <img src="{{ asset('storage/' . $row->foto) }}" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">{{ $row->nama }}</p>
                    <p class="card-text">{{ $row->posisi }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
