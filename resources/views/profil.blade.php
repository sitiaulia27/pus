@extends('layouts.index')

@section('content')
<!-- ======= About Section ======= -->
<section class="profil" id="profil">
    <div class="container pt-5">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><b>VISI DAN MISI</b></h2>
            <h5 class="section-subheading text-muted">Perpustakaan Politeknik Negeri Indramayu</h5>
        </div>
        <ul class="timeline">
            <div class="text-left">
                <li class="timeline-item">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('img/book.png') }}">
                    </div>
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-3 py-lg-5 px-lg-5">
                        <h3 class="title">Visi</h3>
                        <p class="description">Menjadi perpustakaan unggul di tingkat nasional yang berdaya saing global dengan layanan berbasis IT untuk mendorong budaya ilmiah di kalangan civitas akademika</p>
                    </div>
                </li>
            </div>
            <div class="row right">
                <li class="timeline-item">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{ asset('img/book.png') }}">
                    </div>
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-3 py-lg-5 px-lg-5">
                        <h3 class="title mb-4">Misi</h3>
                        <ol class="description">
                            <li>Menyelenggarakan sistem layanan perpustakaan yang efektif dan efisien berbasis teknologi informasi</li>
                            <li>Memperkuat proses transfer dan sharing ilmu untuk mendukung kehidupan ilmiah di lingkungan Politeknik</li>
                            <li>Berkolaborasi dengan perpustakaan di dalam dan luar negeri untuk mencapai akses pengetahuan tanpa batas</li>
                            <li>Memperkaya koleksi perpustakaan baik digital maupun non digital dalam mendukung literasi informasi</li>
                        </ol>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</section>


<div id="team" class="team section-bg">
      <div class="container">
        <div class="row pt-5">
            <div class="section-title">
              <h2>TIM</h2>
            </div>
            <center><div class="card" style="width: 13rem;">
              <img src="{{ asset('img/Wardika.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Wardika, S.ST., M.Eng.</p>
                <p class="card-text">Kepala UPT Perpustakaan Politeknik Negeri Indramayu</p>
              </div>
            </div></center>
          </div>
      </div>
</div>
@endsection
