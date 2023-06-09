@extends('layouts.index')

@section('content')
<section class="tatatertib" id="tatatertib">
            <div class="container pt-5">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"><b>TATA TERTIB</b></h2>
                        <h5 class="section-subheading text-muted">Perpustakaan Politeknik Negeri Indramayu</h5>
                    </div>
                    <li class="timeline-item pt-5">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{ asset('img/student.png') }}">
                        </div>
                        <div class="timeline-panel">
                            <h3 class="title">SYARAT-SYARAT KEANGGOTAAN</h3>
                            <ol class="description text-justify">
                                <li>Untuk memperoleh pelayanan dan memanfaatkan fasilitas diwajibkan menjadi anggota terlebih dahulu.</li>
                                <li>Semua Sivitas Akademika Polindra secara otomatis menjadi anggota Perpustakaan</li>
                                <li>Wajib mengisi formulir keanggotaan </li>
                                <li>Menyerahkan 2 (dua) lembar pas foto ukuran 2 x 3 </li>
                                <li>Masa berlaku kartu anggota adalah 3 tahun untuk D3  dan 4 Tahun untuk D4</li>
                                <li>Ketentuan bagi anggota umum adalah membayar biaya keanggotaan 50.000</li>
                            </ol>
                        </div>
                    </li>
                    <li class="timeline-item pt-1">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{ asset('img/books.png') }}">
                        </div>
                        <div class="timeline-panel">
                            <h3 class="title">ATURAN & KETENTUAN PEMAKAI PERPUSTAKAAN</h3>
                            <ol class="description text-justify">
                                <li>Wajib mengisi daftar hadir melalui aplikasi pada komputer yang disediakan.</li>
                                <li>Tidak diperkenankan membawa tas, jaket, dan payung ke dalam ruangan perpustakaan, kecuali barang-barang berharga  seperti handphone (HP), dompet, dsb.</li>
                                <li>Bagi Mahasiswa, Dosen, dan Karyawan yang ingin meminjam bahan pustaka harap membawa Kartu Anggota Perpustakaan.</li>
                                <li>Kartu anggota perpustakaan tidak dapat dipinjamkan kepada orang lain.</li>
                                <li>Pengunjung wajib mengembalikan buku yang sudah dibaca dan letakkan  di meja baca.</li>
                                <li>Pengunjung yang membutuhkan informasi tentang koleksi yang dibutuhkan, dapat meminta bantuan petugas perpustakaan.</li>
                                <li>Turut menjaga kebersihan dan keberadaan fasilitas serta semua koleksi perpustakaan.</li>
                                <li>Tidak diperkenankan makan, minum, dan merokok di dalam ruangan.</li>
                                <li>Turut menjaga ketenangan suasana perpustakaan.</li>
                                <li>Bersikap sopan dan saling menghargai kepada petugas dan sesama pengunjung perpustakaan.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="timeline-item pt-1">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{ asset('img/list.png') }}">
                        </div>
                        <div class="timeline-panel">
                            <h3 class="title">PERATURAN PEMINJAMAN</h3>
                            <ol class="description text-justify">
                                <li>Peminjam harus mempunyai kartu anggota perpustakaan yang masih berlaku.</li>
                                <li>Koleksi Terdiri dari Sirkulasi,Tandon,dan Referensi.</li>
                                <li>Koleksi yang dapat dipinjam jenis koleksi Sirkulasi dan Tandon,sedangkan Referensi hanya dapat dibaca ditempat.</li>
                                <li>Untuk buku sirkulasi peminjaman maksimal 2 (dua) buku selama 1 (satu) Minggu.</li>
                                <li>Pemanfaatan koleksi tandon diatur sebagai berikut :Buku tandon hanya diperbolehkan dipinjam dalam kurun waktu satu hari Bila ada peminjam yang terlambat dalam mengembalikan buku tandon, dikenakan sanksi keterlambatan/denda sebesar Rp.3000/ hari.</li>
                                <li>Peminjaman Buku tidak dapat diperpanjang, mengingat jumlah eksemplar dari setiap judul buku yang masih terbatas.</li>
                                <li>Peminjam wajib mengembalikan buku yang dipinjam tepat pada waktunya, atau sebelum batas waktu habis.</li>
                                <li>Peminjam wajib menjaga agar buku yang dipinjam tetap bersih, utuh/ tidak rusak, dan tidak membuat coretan-coretan.</li>
                                <li>Proses peminjaman dan pengembalian buku dilakukan dengan sistem komputer, maka data yang diberlakukan/ diakui adalah data dari komputer.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="timeline-item pt-1">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{ asset('img/sign.png') }}">
                        </div>
                        <div class="timeline-panel">
                            <h3 class="title">SANKSI</h3>
                            <ol class="description text-justify">
                                <li>Bila terlambat mengembalikan buku yang dipinjam, maka akan dikenakan denda sebesar Rp.1000,00/buku sirkulasi/hari.</li>
                                <li>Buku yang hilang atau rusak karena kelalaian peminjam, wajib digantikan dengan buku yang sama.</li>
                                <li>Pelanggaran terhadap peraturan perpustakaan dapat mengakibatkan status keanggotaannya dihilangkan sehingga tidak diperbolehkan lagi meminjam buku.</li>
                            </ol>
                        </div>
                    </li>
                    <li class="timeline-item pt-1">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{ asset('img/writing.png') }}">
                        </div>
                        <div class="timeline-panel">
                            <h3 class="title">SURAT BEBAS PERPUSTAKAAN</h3>
                            <ol class="description text-justify">
                                Syarat-syarat mendapatkan Surat Bebas Perpustakaan adalah sebagai berikut:
                                <li>Berlaku wajib untuk seluruh mahasiswa yang telah menyelesaikan studinya, mahasiswa yang pindah studi, dan mahasiswa yang mengundurkan diri.</li>
                                <li>Memberikan sumbangan buku ke perpustakaan sebanyak 1 (dua) buah buku dengan ketentuan minimal terbitan 2 tahun terakhir dari tahun lulus.</li>
                                <li>Mengisi Surat Keterangan Bebas pustaka</li>
                                <li>Bebas pinjaman koleksi </li>
                            </ol>
                        </div>
                    </li>
                    <li class="timeline-item pt-1">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="{{ asset('img/more.png') }}">
                        </div>
                        <div class="timeline-panel">
                            <h3 class="title">LAIN-LAIN</h3>
                            <ol class="description text-justify">
                                <li>Setiap memakai buku Referensi untuk difotokopi, harus dicatatkan pada petugas dan meninggalkan kartu anggota.</li>
                                <li>Hal-hal yang belum termuat dalam tata tertib ini akan ditentukan kemudian.</li>
                                <li>Tata tertib ini berlaku mulai tanggal ditetapkannya.</li>
                            </ol>
                        </div>
                    </li>
            </div>
</section>

@endsection
