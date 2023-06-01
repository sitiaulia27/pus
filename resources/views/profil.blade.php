@extends('layouts.index')

@section('content')
<!-- ======= About Section ======= -->
<div id="Profil" class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <br>
              <br>
              <br>
                <h3>Visi Misi Perpustakaan</h3>
                <div class="row">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-book"></i></div>
                      <h4 class="title">Visi</h4>
                      <p class="description">Menjadi perpustakaan unggul di tingkat nasional yang berdaya saing global dengan layanan berbasis IT untuk mendorong budaya ilmiah di kalangan civitas akademika</p>
                  </div>
                </div>

                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-book"></i></div>
                      <h4 class="title">Misi</h4>
                      <ol class="description">
                          <li>Menyelenggarakan sistem layanan perpustakaan yang efektif dan efisien berbasis teknologi informasi</li>
                          <li>Memperkuat proses transfer dan sharing ilmu untuk mendukung kehidupan ilmiah di lingkungan Politeknik</li>
                          <li>Berkolaborasi dengan perpustakaan di dalam dan luar negeri untuk mencapai akses pengetahuan tanpa batas</li>
                          <li>Memperkaya koleksi perpustakaan baik digital maupun non digital dalam mendukung literasi informasi</li>
                      </ol>
                  </div>

            </div>
        </div>
</div>
</div><!-- End About Section -->


<div id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-2 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/Wardika.jpg')}}" class="img-thumbnail" width="150px" height="150px">
              </div>
              <div class="member-info">
                <h4>Wardika, S.ST., M.Eng</h4>
                <span>Kepala UPT Perpustakaan Politeknik Negeri Indramayu</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-2 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/Darwati.jpg')}}" class="img-thumbnail" width="150px" height="150px">
              </div>
              <div class="member-info">
                <h4>Darwati, S. Sos</h4>
                <span>Pustakawan Ahli Pertama</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-2 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/Markiyah.jpg')}}" class="img-thumbnail" width="150px" height="150px">
              </div>
              <div class="member-info">
                <h4>Markiyah, A. Md</h4>
                <span>Pustakawan Terampil</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-2 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('img/Hadi_Nurdiansyah.jpg')}}" class="img-thumbnail" width="150px" height="150px">
              </div>
              <div class="member-info">
                <h4>Hadi Nurdiansyah</h4>
                <span>Pustakawan Terampil</span>
              </div>
            </div>
          </div>

        </div>

      </div>
</div><!-- End Team Section -->
@endsection
