<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pertanyaans = [
            //Kebijakan Pengembangan Koleksi
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 1,
                'nama_pertanyaan' => 'Memiliki kebijakan tertulis pengembangan koleksi dan disahkan oleh pihak yang berwenang, yang memuat:
                <br>1. Kriteria seleksi bahan perpustakaan
                <br>2. Jenis dan jumlah koleksi yang harus dimiliki
                <br>3. Kebijakan tentang koleksi khusus dan penambahan koleksi
                <br>4. Metode perolehan dan peruntukan koleksi
                <br>5. Evaluasi koleksi dan penyiangan
                <br>6. Sistem pemeliharaan dan pengendalian koleksi
                <br>7. Aspek lain terkait.',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 1,
                'nama_pertanyaan' =>
                'Pelaksanaan kebijakan pengembangan koleksi (laporan pelaksanaan) yang memuat:
                <br>1. Kriteria seleksi bahan perpustakaan
                <br>2. Jenis dan jumlah koleksi yang harus dimiliki
                <br>3. Kebijakan tentang koleksi khusus dan penambahan koleksi
                <br>4. Metode perolehan dan peruntukan koleksi
                <br>5. Evaluasi koleksi dan penyiangan
                <br>6. Sistem pemeliharaan dan pengendalian koleksi
                <br>7. Aspek lain terkait',

            ],

            //Seleksi Bahan Pustaka
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 2,
                'nama_pertanyaan' => 'Jumlah kegiatan survei kebutuhan pemustaka yang dilakukan oleh perpustakaan dalam 3 (tiga) tahun terakhir',

            ],

            //Jenis dan Jumlah Koleksi
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 3,
                'nama_pertanyaan' => 'Jumlah koleksi buku tercetak (termasuk koleksi referensi, tidak termasuk repositori), pilih pernyataan berikut :',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 3,
                'nama_pertanyaan' => 'Jenis koleksi referensi yang dimiliki (kamus, ensiklopedia, bibliografi, katalog, indeks, direktori, handbook/manual, statistik, atlas, globe, dll.)',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 3,
                'nama_pertanyaan' => 'Jumlah jurnal ilmiah tercetak yang relevan dapat diakses, untuk setiap program studi',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 3,
                'nama_pertanyaan' => 'Jenis koleksi muatan lokal atau repositori terdiri dari hasil karya ilmiah civitas academica, meliputi :
                <br>1) Skripsi, tesis dan disertasi
                <br>2) Makalah seminar, simposium, konferensi
                <br>3) Laporan hasil penelitian, laporan pengabdian masyarakat,dll
                <br>4) Pidato pengukuhan
                <br>5) Artikel yang dipublikasikan di jurnal nasional maupun internasional
                <br>6) Publikasi internal kampus : jurnal kampus, dll.',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 3,
                'nama_pertanyaan' => 'Persentase jumlah penambahan koleksi buku tercetak (judul) rerata per tahun dalam 3 (tiga) tahun terakhir',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 3,
                'nama_pertanyaan' => 'Persentase koleksi buku tercetak yang tahun terbitnya 5 (lima) tahun terakhir',

            ],

            //Koleksi Sumber Informasi Bahan Elektronik
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 4,
                'nama_pertanyaan' => 'Buku elektronik yang dimiliki perpustakaan dan/atau dapat diakses secara online',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 4,
                'nama_pertanyaan' => 'Jumlah rerata jurnal ilmiah elektronik yang relevan, dapat di akses dan tersedia di laman web perpustakaan untuk masing-masing program studi',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 4,
                'nama_pertanyaan' => 'Jumlah basis data elektronik yang dilanggan perpustakaan',

            ],

            //Pengorganisasian Koleksi Perpustakaan
            [
                'sub_komponen_id' => 2,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jenis kebijakan tertulis dalam pengorganisasian koleksi perpustakaan yang dimiliki:
                <br>1) Pedoman
                <br>2) SOP
                <br>3) Alur kerja
                <br>4) Form/worksheet
                <br>5) Manual sistem pengatalogan.',

            ],
            [
                'sub_komponen_id' => 2,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Penerapan standar/pedoman dalam pengorganisasian koleksi perpustakaan; (1) deskripsi bibliografi, (2) klasifikasi, dan (3) tajuk subjek.
                Jenis bahan perpustakaan:
                <br>1) Monograf
                <br>2) Serial
                <br>3) Kartografi
                <br>4) Sumber bahan elektronik
                <br>5) Bentuk mikro
                <br>6) Braille
                <br>7) Rekaman suara
                <br>8) Literatur kelabu
                <br>9) Rekaman video
                <br>10) Manuskrip.',

            ],
            [
                'sub_komponen_id' => 2,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Sistem otomasi pengolahan koleksi perpustakaan dan pengorganisasian koleksi perpustakaan, termasuk sistem “backup”. ',

            ],

            //Pelestarian Koleksi
            [
                'sub_komponen_id' => 3,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Cacah ulang (stock opname) koleksi perpustakaan dilakukan secara reguler',

            ],
            [
                'sub_komponen_id' => 3,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Penyiangan (weeding) koleksi perpustakaan dilakukan secara reguler paling sedikit:',

            ],
            [
                'sub_komponen_id' => 3,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Kegiatan pelestarian (perawatan dan perbaikan kerusakan) koleksi secara preventif dan kuratif seperti:
                    <br>1) Alih media
                    <br>2) Menjilid kembali
                    <br>3) Perbaikan menambal
                    <br>4) Fumigasi
                    <br>5) Meletakkan kapur barus, silica gel
                    <br>6) dan lain-lain.',

            ],

            //Gedung/Ruang
            [
                'sub_komponen_id' => 4,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Luas gedung/ruang perpustakaan yang dimiliki dan/atau diperuntukkan:',

            ],
            [
                'sub_komponen_id' => 4,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Status kepemilikan dan desain gedung/ruang perpustakaan :
                <br>1) Gedung milik sendiri/lembaga induk
                <br>2) Terpisah dari ruang kuliah
                <br>3) Desain gedung khusus
                <br>4) Dialokasikan untuk perpustakaan
                <br>5) Desain ruang khusus. ',

            ],

            //Sarana/Fasilitas Fisik Perpustakaan, Perlengkapan Penyimpanan Koleksi
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 5,
                'nama_pertanyaan' => 'Rak buku tercetak (termasuk koleksi referensi) pilih salah satu sesuai jumlah koleksi yang dimiliki',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 5,
                'nama_pertanyaan' => 'Jumlah rak koleksi jurnal ilmiah',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 5,
                'nama_pertanyaan' => 'Rak display koleksi buku baru',

            ],

            //Peralatan Multimedia
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 6,
                'nama_pertanyaan' => 'Perangkat multimedia yang dimiliki :
                <br>1) Komputer yang terhubung internet
                <br>2) LCD
                <br>3) Scanner
                <br>4) printer
                <br>5) VCD/DVD Player
                <br>6) Televisi
                <br>7)dan lain-lain.',

            ],

            //Perlengkapan Pelayanan Perpustakaan
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 7,
                'nama_pertanyaan' => 'Sarana layanan pemustaka meliputi:
                <br>1) Layanan baca ditempat
                <br>2) Layanan informasi
                <br>3) Layanan sirkulasi
                <br>4) Layanan referensi
                <br>5) Layanan konsultasi
                <br>6) Layanan lain.',

            ],
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 7,
                'nama_pertanyaan' => 'Jumlah meja dan kursi baca (standar 1 meja memuat 4 kursi)',

            ],
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 7,
                'nama_pertanyaan' => 'Jumlah papan pengumuman (konvensional dan elektronik /digital)',

            ],

            //Perlengkapan Kerja Perpustakaan
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 8,
                'nama_pertanyaan' => 'Persentase jumlah perangkat komputer tenaga perpustakaan untuk kegiatan pengelolaan (perbandingan jumlah komputer dan tenaga perpustakaan)',

            ],
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 8,
                'nama_pertanyaan' => 'Jumlah perangkat komputer untuk pemustaka',

            ],
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 8,
                'nama_pertanyaan' => 'Kapasitas kecepatan akses internet (bandwidth) di perpustakaan',

            ],

            //Sarana Keamanan Gedung dan Koleksi Perpustakaan
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 9,
                'nama_pertanyaan' => 'Jenis sarana keamanan gedung dan fasilitas perpustakaan;
                <br>1) CCTV
                <br>2) Pintu detektor
                <br>3) Tempat penitipan barang/loker)
                <br>4) Pintu darurat
                <br>5) Alarm tanda bahaya
                <br>6) Alat pemadam api
                <br>7) Tenaga sekuriti. ',

            ],

            //Fasilitas Umum
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 10,
                'nama_pertanyaan' => 'Fasilitas umum:
                <br>1) Mushola
                <br>2) Toilet
                <br>3) Parkir
                <br>4) Kantin
                <br>5) Sarana khusus, difabel
                <br>6) ATM
                <br>7) dan lain-lain. ',

            ],
            [
                'sub_komponen_id' => 5,
                'sub_sub_komponen_id' => 10,
                'nama_pertanyaan' => 'Rambu-rambu perpustakaan yang tersedia :
                <br>1) Papan nama perpustakaan
                <br>2) Denah lokasi perpustakaan/petunjuk arah
                <br>3) Denah ruang perpustakaan
                <br>4) Papan nama ruang
                <br>5) Direktori ruangan perpustakaan tercetak/elektronik. ',

            ],

            //Jenis pelayanan
            [
                'sub_komponen_id' => 6,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jenis layanan perpustakaan:
                <br>1) Layanan baca ditempat
                <br>2) Layanan sirkulasi
                <br>3) Layanan referensi
                <br>4) Layanan penelusuran
                <br>5) Layanan literasi informasi
                <br>6) Layanan penyediaan dokumen
                <br>7) Layanan silang layan
                <br>8) Layanan ekstensi.',

            ],
            [
                'sub_komponen_id' => 6,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jenis layanan referensi yang disediakan:
                <br>1) Layanan informasi (reference desk)
                <br>2) Layanan bimbingan penggunaan koleksi referensi
                <br>3) Layanan penelusuran
                <br>4) Layanan konsultasi riset
                <br>5) Layanan cek plagiarism',

            ],
            [
                'sub_komponen_id' => 6,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Kegiatan peningkatan layanan perpustakaan :
                <br>1) Survei kebutuhan layanan pemustaka
                <br>2) Survei kepuasan pemustaka
                <br>3) Diversifikasi layanan
                <br>4) Pelibatan civitas academica dalam layanan
                <br>5) Layanan ekstensi',

            ],

            //Jam Buka
            [
                'sub_komponen_id' => 7,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jam buka perpustakaan per minggu',

            ],

            //Sistem Pelayanan dan Akses Informasi
            [
                'sub_komponen_id' => 8,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Sistem layanan sirkulasi',

            ],
            [
                'sub_komponen_id' => 8,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Sistem akses informasi ke koleksi',

            ],
            [
                'sub_komponen_id' => 8,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Fitur Website perpustakaan
                <br>1) Profil perpustakaan
                <br>2) OPAC
                <br>3) Informasi layanan perpustakaan
                <br>4) Kontak perpustakaan
                <br>5) Link ke basis data online/repositori
                <br>6) Media sosial',

            ],

            //Keanggotaan
            [
                'sub_komponen_id' => 9,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Prosedur keanggotaan perpustakaan',

            ],

            //Jumlah Pengunjung dan Buku yang Dipinjam
            [
                'sub_komponen_id' => 10,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah rerata pengunjung perpustakaan per bulan dalam 1 (satu) tahun',

            ],
            [
                'sub_komponen_id' => 10,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah dosen dan tenaga kependidikan yang berkunjung ke perpustakaan dari keseluruhan dosen dan tenaga kependidikan rerata per bulan dalam 1 (satu) tahun',

            ],
            [
                'sub_komponen_id' => 10,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah rerata pengunjung perpustakaan melalui online per bulan dalam 1 (satu) tahun',

            ],
            [
                'sub_komponen_id' => 10,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah rerata buku yang dipinjam per bulan dalam 1 (satu) tahun',

            ],

            //Promosi
            [
                'sub_komponen_id' => 11,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jenis kegiatan promosi yang dilaksanakan melalui media cetak dan elektronik:
                <br>1) Penyebaran informasi
                <br>2) Penyuluhan
                <br>3) Lomba
                <br>4) Pameran
                <br>5) Duta baca
                <br>6) Bimbingan pemustaka
                <br>7) Penyiaran',

            ],
            [
                'sub_komponen_id' => 11,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah kegiatan promosi perpustakaan per tahun',

            ],

            //Literasi Informasi
            [
                'sub_komponen_id' => 12,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Peran perpustakaan dalam mengurangi praktek plagiarisme:
                <br>1) menyediakan aplikasi online pengontrol plagiarisme;
                <br>2) memberi topik plagiarisme dalam kegiatan literasi;
                <br>3) mengontrol pemustaka dalam layanan fotocopy
                <br>4) melakukan himbauan anti plagiarisme
                <br>5) melakukan himbauan anti plagiarisme melalui media sosial
                <br>6) dan lain-lain',

            ],

            //Kepala Perpustakaan
            [
                'sub_komponen_id' => 13,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Kualifikasi pendidikan kepala perpustakaan',

            ],
            [
                'sub_komponen_id' => 13,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Status kepala perpustakaan',

            ],
            [
                'sub_komponen_id' => 13,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah Pengembangan Keprofesian Berkelanjutan (PKB) kepala perpustakaan di bidang perpustakaan dalam 3 (tiga) tahun terakhir
                <br>1) Sertifikat diklat manajemen perpustakaan,
                <br>2) Sertifikat diklat teknis perpustakaan,
                <br>3) Sertifikat kompetensi/profesi pustakawan,
                <br>4) Sertifikat bimtek/workshop, dll bidang kepustakawanan',

            ],

            //Pustakawan
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 11,
                'nama_pertanyaan' => 'Jumlah pustakawan (fungsional/profesional)',

            ],

            //Tenaga Teknis
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 12,
                'nama_pertanyaan' => 'Jumlah tenaga teknis',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 12,
                'nama_pertanyaan' => 'Tenaga teknis bidang IT, minimal D3 bidang IT',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 12,
                'nama_pertanyaan' => 'Persentase jumlah tenaga perpustakaan yang berlatar belakang pendidikan minimal S1 perpustakaan dan/atau S1 bidang lain ditambah diklat bidang Perpustakaan dari keseluruhan tenaga perpustakaan',

            ],
            [
                'sub_komponen_id' => null,
                'sub_sub_komponen_id' => 12,
                'nama_pertanyaan' => 'Persentase jumlah pustakawan/tenaga profesional perpustakaan yang mengikuti sertifikasi profesi pustakawan',

            ],

            //Pengembangan Kompetensi
            [
                'sub_komponen_id' => 15,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah rerata keikutsertaan tenaga perpustakaan dalam kegiatan Pengembangan Keprofesian Berkelanjutan (PKB) di bidang perpustakaan dalam 3 (tiga) tahun terakhir',

            ],

            //Keterlibatan dalam Organisasi Profesi
            [
                'sub_komponen_id' => 16,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Persentase jumlah keikutsertaan tenaga perpustakaan dalam organisasi profesi bidang kepustakawanan',

            ],

            //Pendirian Perpustakaan
            [
                'sub_komponen_id' => 17,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Pendirian Perpustakaan Perguruan Tinggi',

            ],
            [
                'sub_komponen_id' => 17,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Status Kelembagaan Perpustakaan',

            ],
            [
                'sub_komponen_id' => 17,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Status perpustakaan dalam pengambilan keputusan Perguruan Tinggi',

            ],
            [
                'sub_komponen_id' => 17,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Unsur Komite Perpustakaan/ sejenisnya terdiri atas :
                <br>1) Pimpinan PT
                <br>2) Pimpinan Fakultas/ Jurusan/Prodi
                <br>3) Dosen (Fungsional/ Profesional)
                <br>4) Pustakawan
                <br>5) Mahasiswa',

            ],

            //Struktur Organisasi
            [
                'sub_komponen_id' => 18,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Struktur organisasi perpustakaan:
                <br>1) Kepala Perpustakaan
                <br>2) Bidang Layanan Teknis
                <br>3) Bidang Layanan Pemustaka
                <br>4) Bidang Layanan TI
                <br>5) Bagian Administrasi dan Tata Usaha
                <br>6) Kelompok Fungsional Pustakawan',

            ],
            [
                'sub_komponen_id' => 18,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Pertanggungjawaban kepala perpustakaan',

            ],

            //Nomor Pokok Perpustakaan (NPP)
            [
                'sub_komponen_id' => 19,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Pencantuman NPP:
                <br>1) Papan nama perpustakaan
                <br>2) Kop surat resmi perpustakaan
                <br>3) Backdrop meja sirkulasi/layanan
                <br>4) Brosur perpustakaan
                <br>5) Banner/flyer perpustakaan
                <br>6) Website perpustakaan
                <br>7) Kartu anggota perpustakaan
                <br>8) Media sosial milik perpustakaan
                <br>9) Kalender
                <br>10) Running text
                <br>11) dan lain-lain',

            ],

            //Program Kerja
            [
                'sub_komponen_id' => 20,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Perpustakaan memiliki rencana induk/rencana strategis pengembangan perpustakaan secara tertulis yang disahkan oleh:',

            ],
            [
                'sub_komponen_id' => 20,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Perpustakaan memiliki program kerja tahunan secara tertulis yang disahkan oleh:',

            ],

            //Visi, Misi dan Tujuan Perpustakaan
            [
                'sub_komponen_id' => 21,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Perpustakaan memiliki  visi, misi, tujuan, dan tugas  yang dirumuskan secara tertulis',

            ],

            //Evaluasi dan Laporan Program Perpustakaan
            [
                'sub_komponen_id' => 22,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Pelaporan kinerja perpustakaan yang disahkan oleh kepala perpustakaan dalam 3 (tiga) tahun terakhir:
                <br>1) Tahunan
                <br>2) Triwulan
                <br>3) Bulanan',

            ],

            //Anggaran
            [
                'sub_komponen_id' => 23,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Persentase jumlah anggaran perpustakaan rerata per tahun dalam 3 (tiga) tahun terakhir terhadap anggaran perguruan tinggi',

            ],
            [
                'sub_komponen_id' => 23,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah dana partisipasi masyarakat/alumni yang tidak mengikat dalam 3 (tiga) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 23,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Anggaran untuk pengembangan koleksi perpustakaan rerata per tahun dalam 3 (tiga) tahun terakhir terhadap anggaran perpustakaan',

            ],

            //Kerja sama dan Pembinaan
            [
                'sub_komponen_id' => 24,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Kerja sama Penyelenggaraan dan Pengelolaan Perpustakaan meliputi :
                <br>1) Jejaring internasional layanan Perpustakaan berbasis TIK
                <br>2) Jejaring nasional layanan perpustakaan berbasis TIK
                <br>3) Jejaring wilayah provinsi antar jenis perpustakaan
                <br>4) Jejaring wilayah provinsi antar daerah Kabupaten/Kota
                <br>5) Pembinaan dan Konsultansi perpustakaan
                <br>6) Pengembangan system aplikasi otomasi perpustakaan
                <br>7) Lainnya',

            ],

            //Inovasi, Kreativitas dan Keunikan Perpustakaan
            [
                'sub_komponen_id' => 25,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Program dan kegiatan inovasi dan kreativitas perpustakaan dalam 3 (tiga) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 25,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Karya inovasi dan kreativitas perpustakaan dalam 3 (tiga) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 25,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Keunikan perpustakaan',

            ],

            //Prestasi dan Apresiasi Perpustakaan
            [
                'sub_komponen_id' => 26,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Prestasi perpustakaan dan pustakawan dalam 3 (tiga) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 26,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Apresiasi kinerja perpustakaan dan pustakawan dari lembaga induk dan/atau lembaga eksternal dalam 3 (tiga) tahun terakhir',

            ],

            //Tingkat Kegemaran Membaca
            [
                'sub_komponen_id' => 27,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Persentase jumlah pemustaka yang berkunjung ke perpustakaan dari keseluruhan pemustaka rerata per hari dalam 1 (satu) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 27,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Persentase jumlah koleksi yang digunakan oleh pemustaka terhadap keseluruhan koleksi perpustakaan rerata per hari dalam 1 (satu) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 27,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Persentase jumlah pemustaka yang memanfaatkan repositori dari jumlah pemustaka aktif per hari dalam 1 (satu) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 27,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Keberadaan pegiat literasi:
                <br>1) Sahabat perpustakaan
                <br>2) Duta baca mahasiswa
                <br>3) Duta baca tenaga kependidikan
                <br>4) Duta baca dosen
                <br>5) Penghargaan pemustaka aktif
                <br>6) dan lain-lain',

            ],

            //Ketercukupan Koleksi, Tenaga dan Pemerataan Akses Perpustakaan
            [
                'sub_komponen_id' => 28,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Rasio antara jumlah pemustaka (dosen, tendik dan mahasiswa) dengan jumlah keseluruhan judul koleksi yang dimiliki, rerata per tahun dalam 3 (tiga) tahun terakhir',

            ],
            [
                'sub_komponen_id' => 28,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Rasio antara jumlah pustakawan dengan pemustaka (dosen, tendik dan mahasiswa)',

            ],
            [
                'sub_komponen_id' => 28,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Pemerataan layanan perpustakaan untuk pemustaka (dosen, tendik dan mahasiswa)  di semua prodi dan lembaga atau unit yang ada di lingkungan Perguruan Tinggi',

            ],

            //Pelibatan Masyarakat dalam Kegiatan Perpustakaan
            [
                'sub_komponen_id' => 29,
                'sub_sub_komponen_id' => null,
                'nama_pertanyaan' => 'Jumlah rerata kegiatan perpustakaan yang melibatkan peran serta pemustaka (dosen, tendik dan mahasiswa) setiap tahun dalam 3 (tiga) tahun terakhir meliputi:
                <br>1) Pengembangan koleksi
                <br>2) Pendayagunaan koleksi
                <br>3) Promosi layanan
                <br>4) Pengembangan sarana prasarana perpustakaan
                <br>5) Peningkatan kegiatan literasi
                <br>6) Peningkatan kinerja penelitian
                <br>7) Peningkatan pengabdian masyarakat berbasis layanan perpustakaan',

            ],

        ];

        DB::table('pertanyaans')->insert($Pertanyaans);
    }
}
