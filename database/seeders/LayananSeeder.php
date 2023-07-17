<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanans')->insert([
            //Tata Tertib
            [
                'judul' => 'SYARAT-SYARAT KEANGGOTAAN',
                'body' => '
                <br> 1. Untuk memperoleh pelayanan dan memanfaatkan fasilitas diwajibkan menjadi anggota terlebih dahulu.
                <br> 2. Semua Sivitas Akademika Polindra secara otomatis menjadi anggota Perpustakaan
                <br> 3. Wajib mengisi formulir keanggotaan
                <br> 4. Menyerahkan 2 (dua) lembar pas foto ukuran 2 x 3
                <br> 5. Masa berlaku kartu anggota adalah 3 tahun untuk D3 dan 4 Tahun untuk D4
                <br> 6. Ketentuan bagi anggota umum adalah membayar biaya keanggotaan 50.000',
                'image' => null,
                'id_kategori' => 1,
            ],
            [
                'judul' => 'SURAT BEBAS PERPUSTAKAAN',
                'body' => 'Syarat-syarat mendapatkan Surat Bebas Perpustakaan adalah sebagai berikut:
                <br> 1. Berlaku wajib untuk seluruh mahasiswa yang telah menyelesaikan studinya, mahasiswa yang pindah studi, dan mahasiswa yang mengundurkan diri.
                <br> 2. Memberikan sumbangan buku ke perpustakaan sebanyak 1 (dua) buah buku dengan ketentuan minimal terbitan 2 tahun terakhir dari tahun lulus.
                <br> 3. Mengisi Surat Keterangan Bebas pustaka.
                <br> 4. Bebas pinjaman koleksi',
                'image' => null,
                'id_kategori' => 1,
            ],
            [
                'judul' => 'ATURAN & KETENTUAN PEMAKAI PERPUSTAKAAN',
                'body' => '
                <br> 1. Wajib mengisi daftar hadir melalui aplikasi pada komputer yang disediakan.
                <br> 2. Tidak diperkenankan membawa tas, jaket, dan payung ke dalam ruangan perpustakaan, kecuali barang-barang berharga seperti handphone (HP), dompet, dsb.
                <br> 3. Bagi Mahasiswa, Dosen, dan Karyawan yang ingin meminjam bahan pustaka harap membawa Kartu Anggota Perpustakaan.
                <br> 4. Kartu anggota perpustakaan tidak dapat dipinjamkan kepada orang lain.
                <br> 5. Pengunjung wajib mengembalikan buku yang sudah dibaca dan letakkan di meja baca.
                <br> 6. Pengunjung yang membutuhkan informasi tentang koleksi yang dibutuhkan, dapat meminta bantuan petugas perpustakaan.
                <br> 7. Turut menjaga kebersihan dan keberadaan fasilitas serta semua koleksi perpustakaan.
                <br> 8. Tidak diperkenankan makan, minum, dan merokok di dalam ruangan.
                <br> 9. Turut menjaga ketenangan suasana perpustakaan.
                <br> 10. Bersikap sopan dan saling menghargai kepada petugas dan sesama pengunjung perpustakaan.',
                'image' => null,
                'id_kategori' => 1,
            ],
            [
                'judul' => 'PERATURAN PEMINJAMAN',
                'body' => '
                <br> 1. Peminjam harus mempunyai kartu anggota perpustakaan yang masih berlaku.
                <br> 2. Koleksi Terdiri dari Sirkulasi,Tandon,dan Referensi.
                <br> 3. Koleksi yang dapat dipinjam jenis koleksi Sirkulasi dan Tandon,sedangkan Referensi hanya dapat dibaca ditempat.
                <br> 4. Untuk buku sirkulasi peminjaman maksimal 2 (dua) buku selama 1 (satu) Minggu.
                <br> 5. Pemanfaatan koleksi tandon diatur sebagai berikut :Buku tandon hanya diperbolehkan dipinjam dalam kurun waktu satu hari Bila ada peminjam yang terlambat dalam mengembalikan buku tandon, dikenakan sanksi keterlambatan/denda sebesar Rp.3000/ hari.
                <br> 6. Peminjaman Buku tidak dapat diperpanjang, mengingat jumlah eksemplar dari setiap judul buku yang masih terbatas.
                <br> 7. Peminjam wajib mengembalikan buku yang dipinjam tepat pada waktunya, atau sebelum batas waktu habis.
                <br> 8. Peminjam wajib menjaga agar buku yang dipinjam tetap bersih, utuh/ tidak rusak, dan tidak membuat coretan-coretan.
                <br> 9. Proses peminjaman dan pengembalian buku dilakukan dengan sistem komputer, maka data yang diberlakukan/ diakui adalah data dari komputer.',
                'image' => null,
                'id_kategori' => 1,
            ],
            [
                'judul' => 'SANKSI',
                'body' => '
                <br> 1. Bila terlambat mengembalikan buku yang dipinjam, maka akan dikenakan denda sebesar Rp.1000,00/buku sirkulasi/hari.
                <br> 2. Buku yang hilang atau rusak karena kelalaian peminjam, wajib digantikan dengan buku yang sama.
                <br> 3. Pelanggaran terhadap peraturan perpustakaan dapat mengakibatkan status keanggotaannya dihilangkan sehingga tidak diperbolehkan lagi meminjam buku.',
                'image' => null,
                'id_kategori' => 1,
            ],
            [
                'judul' => 'LAIN-LAIN',
                'body' => '
                <br> 1. Setiap memakai buku Referensi untuk difotokopi, harus dicatatkan pada petugas dan meninggalkan kartu anggota.
                <br> 2. Hal-hal yang belum termuat dalam tata tertib ini akan ditentukan kemudian.
                <br> 3. Tata tertib ini berlaku mulai tanggal ditetapkannya.',
                'image' => null,
                'id_kategori' => 1,
            ],
            //layanan sirkulasi
            [
                'judul' => 'LAYANAN SIRKULASI',
                'body' => 'Layanan sirkulasi merupakan pelayanan peminjaman, pengembalian, dan perpanjangan koleksi. Di Perpustakaan Polindra ini menggunakan layanan terbuka (Open Access). Sistem ini membebaskan pengunjung ke tempat koleksi perpustakaan, dapat melalui browsing, membuka-buka, melihat buku, dan mengambil sendiri. Untuk pencarian koleksi yang tersedia di perpustakaan dapat dilihat pada OPAC perpustakaan yaitu perpustakaan.polindra.ac.id.',
                'image' => null,
                'id_kategori' => 2,
            ],

            //
            [
                'judul' => 'LAYANAN REFERENSI',
                'body' => 'Pelayanan referensi merupakan pemberian bantuan kepada pengguna perpustakaan untuk menemukan informasi dengan cara menjawab pertanyaan menggunakan koleksi referensi, serta memberikan bimbingan untuk menemukan dan memakai koleksi referensi.
                <br> Pelayanan referensi di Perpustakaan Polindra diadakan dengan tujuan:
                <br> •	Memungkinkan pengguna perpustakaan menemukan informasi dengan cepat dan tepat.
                <br> •	Memungkinkan pengguna menelusur informasi dengan pilihan yang lebih luas.
                <br> •	Memungkinkan pengguna menggunakan koleksi referensi yang lebih tepat guna.
                <br> •	Lokasi pelayanan referensi menempati lokasi di lantai II gedung GSC ruang perpustakaan
                <br> Pelayanan referensi di Perpustakaan UPI menggunakan teknik layanan terbuka, dimana setiap pengguna dapat mengambil sendiri koleksi referensi secara langsung dari rak. Adapun jenis-jenis layanan yang diberikan di bagian pelayanan referensi yaitu :
                <br> 1. Pelayanan peminjaman koleksi referensi untuk dibaca di tempat dan tidak dipinjamkan untuk dibawa pulang
                <br> 2. Pelayanan informasi, yaitu pemberian informasi kepada pengguna yang menanyakan informasi tentang perpustakaan, koleksi dan jasa layanannya.
                <br> 3. Pelayanan jawaban atas pertanyaan referensi, yaitu bantuan kepada pengguna yang membutuhkan informasi tentang suatu topik atau hal yang dijawab menggunakan koleksi referensi yang ada.
                <br> 4. Bantuan penelusuran, yaitu pemberian bantuan penelusuran letak suatu koleksi yang dibutuhkan pengguna.',
                'image' => null,
                'id_kategori' => 3,
            ],

            //Layanan Baca di Tempat
            [
                'judul' => 'LAYANAN BACA DI TEMPAT',
                'body' => 'Merupakan layanan bagi pengunjung perpustakaan yang hanya akan membaca ditempat saja (Buku sirkulasi, majalah, bulletin dan surat kabar). Pengunjung diwajibkan mematuhi ketentuan SOP pelayanan yang ditetapkan.',
                'image' => null,
                'id_kategori' => 4,
            ],

            //LAYANAN ADMINISTRASI
            [
                'judul' => 'LAYANAN ADMINISTRASI',
                'body' => 'Layanan administrasi merupakan pelayanan yang berhubungan dengan tata persuratan, administrasi keanggotaan, dan bebas perpustakaan. Adapun pelayanan yang diberikan adalah:
                <br> 1) menerima surat masuk,
                <br> 2) menerima sumbangan koleksi dari donatur,<br> 3) mengaktivasi keanggotaan dan pembuatan kartu anggota,
                <br> 4) memvalidasi Keterangan Bebas Perpustakaan bagi civitas akademika (dosen/mahasiswa/tenaga kependidikan) Polindra yang selesai studi atau akan pindah institusi.
                <br> Layanan ini terletak di ruangan kepala UPT dan staf Perpustakaan  lantai II gedung GSC.',
                'image' => null,
                'id_kategori' => 5,
            ],

            //PEMINJAMAN & PENGEMBALIAN BAHAN PUSTAKA
            // - Peminjaman
            [
                'judul' => 'Peminjaman Bahan Pustaka',
                'body' => '
                <br> 1.Menyerahkan buku yang akan dipinjam beserta kartu anggota
                <br> 2. Membuka file anggota yang ada pada database aplikasi SLIMS dengan menggunakan kartu anggota (System Barcode)
                <br> 3. Menginput data buku yang akan dipinjam melalui barcode buku ke dalam database aplikasi SLIMS
                <br> 4. Memberi cap tanggal kembali pada lidah buku (Date Due Slip)
                <br> 5. Menyerahkan buku dan kartu anggota kepada pemustaka',
                'image' => null,
                'id_kategori' => 6,
            ],

            //
            [
                'judul' => 'Pengembalian Bahan Pustaka',
                'body' => '
                <br> 1.Menyerahkan buku yang telah dipinjam beserta kartu anggota
                <br> 2. Memeriksa data peminjaman pemustaka pada aplikasi SLIMS dengan memindai barcode kartu anggota. Jika tidak sesuai atau terlambat pengembalian dikenakan denda, jika pengembalian sesuai dengan tanggal pengembalian proses dilanjutkan
                <br> 3. Menanyakan kepada pemustaka apakah akan memperpanjang peminjaman. Jika tidak diperpanjang memproses pengembaliak, jika di perpanjang memproses perpanjangan
                <br> 4. Memproses sirkulasi (pengembalian buku atau perpanjangan) bahan pustaka pada aplikasi SLIMS
                <br> 5. Memberi cap pada slip tanggal kembali (date due slip)
                <br> 6. Menyerahkan kartu anggota serta bahan pustaka (untuk yang memperpanjang peminjaman) kepada pemustaka',
                'image' => null,
                'id_kategori' => 7,
            ],

            //layanan literasi informasi
            [
                'judul' => 'LAYANAN LITERASI INFORMASI',
                'body' => 'Layanan literasi informasi adalah layanan yang dalam bentuk memberikan bimbingan maupun dalam bentuk peran perpustakaan dalam meningkatkan pemahaman informasi bagi pengguna',
                'image' => null,
                'id_kategori' => 8,
            ],

            //LAYANAN PENYEDIAAN DOKUMEN
            [
                'judul' => 'LAYANAN PENYEDIAAN DOKUMEN',
                'body' => 'Merupakan layanan yang diberikan pemustaka untuk menyediakan dokumen yang dibutuhkan baik berupa soft file ataupun hard file.',
                'image' => null,
                'id_kategori' => 9,
            ],

            //LAYANAN PENELUSURAN (OPAC)
            [
                'judul' => 'LAYANAN PENELUSURAN (OPAC)',
                'body' => 'Mendefinisikan layanan penelusuran informasi sebagai layanan perpustakaan yang memberikan bantuan kepada pemustaka untuk menemukan informasi literatur mengenai suatu objek tertentu yang dibutuhkan oleh pemustaka',
                'image' => null,
                'id_kategori' => 10,
            ],
        ]);
    }
}
