@extends('layouts.index')

@section('content')
<section class="tatatertib" id="tatatertib">
            <div class="container pt-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><b>Layanan Sirkulasi</b></h2>
                    <img class="img-fluid" src="{{ asset('img/ruang_sirkulasi.jpeg') }}" style="max-width: 55%; height: auto;">
                    <h4 class="section-subheading text-muted">Ruang Sirkulasi</h4>
                </div>
                <div class="timeline-panel pt-3 text-justify">
                    <div class="description">
                        <h5>Layanan sirkulasi merupakan pelayanan peminjaman, pengembalian, dan perpanjangan koleksi. Di Perpustakaan Polindra ini menggunakan layanan terbuka (Open Access). Sistem ini membebaskan pengunjung ke tempat koleksi perpustakaan, dapat melalui browsing, membuka-buka, melihat buku, dan mengambil sendiri. Untuk pencarian koleksi yang tersedia di perpustakaan dapat dilihat pada OPAC perpustakaan yaitu <a class href="http://perpustakaan.polindra.ac.id">perpustakaan.polindra.ac.id.</a></h5>
                    </div>
                </div>
            </div>

            <div class="container pt-5">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"><b>Layanan Referensi</b></h2>
                    </div>
                    <div class="timeline-panel pt-3 text-justify">
                            <div class="description">
                            <h5>Pelayanan referensi merupakan pemberian bantuan kepada pengguna perpustakaan untuk menemukan informasi dengan cara menjawab pertanyaan menggunakan koleksi referensi, serta memberikan bimbingan untuk menemukan dan memakai koleksi referensi. </h5>

                            <h5 class="pt-3 text-justify">Pelayanan referensi di Perpustakaan Polindra diadakan dengan tujuan</h5>
                            <ul>
                                <li><h5>Memungkinkan pengguna perpustakaan menemukan informasi dengan cepat dan tepat.</h5></li>
                                <li><h5>Memungkinkan pengguna menelusur informasi dengan pilihan yang lebih luas.</h5></li>
                                <li><h5>Memungkinkan pengguna menggunakan koleksi referensi yang lebih tepat guna.</h5></li>
                                <li><h5>Lokasi pelayanan referensi menempati lokasi di lantai II gedung GSC ruang perpustakaan</h5></li>
                            </ul>
                            </div>
                            <div class="description pt-3 text-justify">
                            <h5>Pelayanan referensi di Perpustakaan Polindra menggunakan teknik layanan terbuka, dimana setiap pengguna dapat mengambil sendiri koleksi referensi secara langsung dari rak. Adapun jenis-jenis layanan yang diberikan di bagian pelayanan referensi yaitu : </h5>
                            <ol class="description pt-3 text-justify">
                                <h5><li>Pelayanan peminjaman koleksi referensi untuk dibaca di tempat dan tidak dipinjamkan untuk dibawa pulang</li></h5>
                                <h5><li>Pelayanan informasi, yaitu pemberian informasi kepada pengguna yang menanyakan informasi tentang perpustakaan, koleksi dan jasa layanannya.</li></h5>
                                <h5><li>Pelayanan jawaban atas pertanyaan referensi, yaitu bantuan kepada pengguna yang membutuhkan informasi tentang suatu topik atau hal yang dijawab menggunakan koleksi referensi yang ada</li></h5>
                                <h5><li>Bantuan penelusuran, yaitu pemberian bantuan penelusuran letak suatu koleksi yang dibutuhkan pengguna.</li></h5>
                            </ol>
                            </div>
                    </div>
            </div>


</section>

@endsection
