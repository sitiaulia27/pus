
@extends('layouts.index')

@section('title')
    {{ trans('Informasi') }}
@endsection

@section('content')
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title pt-5" style="text-align: left;">
            <h2>Kontak</h2>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Jl. lohbener lama No.08, Legok, Kec. Lohbener, Kabupaten Indramayu, Jawa Barat 45252</p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>perpustakaan.polindra@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Telepon:</h4>
                        <p>+62 822-5235-1548</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 offset-lg-3 pt-5">
                <div class="info">
                    <div class="image-link">
                        <a href="https://onesearch.id/">
                            <img src="{{asset('img/Onesearch.png')}}" alt="Image" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="image-link">
                    <a href="https://bintangpusnas.perpusnas.go.id/">
                        <img src="{{asset('img/bintangPusnas.png')}}" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="image-link">
                    <a href="https://ipusnas.id/">
                        <img src="{{asset('img/Ipunas.png')}}" alt="Image" class="img-fluid">
                    </a>
                </div>
            </div>

                <div class="footer-top pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 footer-links">
                                <h4>Jam Operasional Perpustakaan</h4>
                                <ul>
                                    <li><i class="bx bx-chevrons-right"></i> Senin-Jumat 08.00-16.00 WIB</li>
                                    <li><i class="bx bx-chevrons-right"></i> Jam Istirahat 12.00-13.00 WIB</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</section><!-- End Contact Section -->


@endsection
