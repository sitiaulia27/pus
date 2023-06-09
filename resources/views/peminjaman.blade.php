@extends('layouts.index')

@section('content')
<section class="tatatertib" id="tatatertib">
    <div class="container pt-5">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"><b>Peminjaman & Pengembalian Bahan Pustaka</b></h2>
            <h5 class="section-subheading text-muted">Perpustakaan Politeknik Negeri Indramayu</h5>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <div class="media">
                    <img src="{{ asset('img/library.png') }}" class="mr-3 img-fluid" alt="Layanan Multimedia" style="max-width: 100px;">
                    <div class="media-body">
                        <h2 class="mt-0">Peminjaman Bahan Pustaka</h2>
                            <ol class="description text-justify">
                                <li>Menyerahkan buku yang akan dipinjam beserta kartu anggota</li>
                                <li>Membuka file anggota yang ada pada database aplikasi SLIMS dengan menggunakan kartu anggota (System Barcode) </li>
                                <li>Menginput data buku yang akan dipinjam melalui barcode buku ke dalam database aplikasi SLIMS</li>
                                <li>Memberi cap tanggal kembali pada lidah buku (Date Due Slip)</li>
                                <li>Menyerahlan buku dan kartu anggota kepada pemustaka</li>
                            </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <img src="{{ asset('img/library.png') }}" class="mr-3 img-fluid" alt="Layanan Multimedia" style="max-width: 100px;">
                    <div class="media-body">
                        <h2 class="mt-0">Pengembalian Bahan Pustaka</h2>
                            <ol class="description text-justify">
                                <li>Menyerahkan buku yang telah dipinjam beserta kartu anggota</li>
                                <li>Memeriksa data peminjaman pemustaka pada aplikasi SLIMS dengan memindai barcode kartu anggota. Jika tidak sesuai atau terlambat pengembalian dikenakan denda, jika pengembalian sesuai dengan tanggal pengembalian proses dilanjutkan</li>
                                <li>Menanyakan kepada pemustaka apakah akan memperpanjang peminjaman. Jika tidak diperpanjang memproses pengembaliak, jika di perpanjang memproses perpanjangan</li>
                                <li>Memproses sirkulasi (pengembalian buku atau perpanjangan) bahan pustaka pada aplikasi SLIMS </li>
                                <li>memberi cap pada slip tanggal kembali (date due slip)</li>
                                <li>Menyerahkan kartu anggota serta bahan pustaka (untuk yang memperpanjang peminjaman) kepada pemustaka</li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
