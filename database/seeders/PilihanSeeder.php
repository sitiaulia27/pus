<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pilihans = [
            //Kebijakan Pengembangan Koleksi
            [
                'id_pertanyaan' => 1,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 6 aspek',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 1,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 aspek',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 1,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 aspek',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 1,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 aspek',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 1,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 4 aspek',
                'bobot' => 1,
            ],
            [
                'id_pertanyaan' => 2,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 6 aspek',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 2,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 aspek',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 2,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 aspek',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 2,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 aspek',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 2,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 4 aspek',
                'bobot' => 1,
            ],

            //Seleksi Bahan Pustaka
            [
                'id_pertanyaan' => 3,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 kali',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 3,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 kali',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 3,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 kali',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 3,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 kali',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 3,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'kurang dari 2 kali',
                'bobot' => 1,
            ],

            //Jenis dan Jumlah Koleksi - Jumlah mahasiswa kurang dari 2.000

            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 1,
                'nama_pilihan' => 'Lebih dari 4.500 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 1,
                'nama_pilihan' => '3.500 - 4.500 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 1,
                'nama_pilihan' => '2.500 - 3.499 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 1,
                'nama_pilihan' => '1.500 - 2.499 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 1,
                'nama_pilihan' => 'Kurang dari 1.500 judul',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.000 - 5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 2,
                'nama_pilihan' => 'Lebih dari 9.500 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 2,
                'nama_pilihan' => '8.000 - 9.500 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 2,
                'nama_pilihan' => '6.500 - 7.999 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 2,
                'nama_pilihan' => '5.000 - 6.499 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 2,
                'nama_pilihan' => 'Kurang dari 5.000 judul',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001 - 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 3,
                'nama_pilihan' => 'Lebih dari 16.500 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 3,
                'nama_pilihan' => '14.500 - 16.500 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 3,
                'nama_pilihan' => '12.500 - 14.499 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 3,
                'nama_pilihan' => '10.500 - 11.499 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 3,
                'nama_pilihan' => 'Kurang dari 10.500 judul',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001 - 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 4,
                'nama_pilihan' => 'Lebih dari 30.000 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 4,
                'nama_pilihan' => '27.500 - 30.000 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 4,
                'nama_pilihan' => '25.000 - 27.499 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 4,
                'nama_pilihan' => '22.500 - 24.999 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 4,
                'nama_pilihan' => 'Kurang dari 22.500 judul',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 5,
                'nama_pilihan' => 'Lebih dari 42.000 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 5,
                'nama_pilihan' => '38.500 - 42.000 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 5,
                'nama_pilihan' => '35.000 - 38.499 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 5,
                'nama_pilihan' => '31.500 - 34.999 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 5,
                'nama_pilihan' => 'Kurang dari 31.500 judul',
                'bobot' => 1,
            ],

            //Jenis koleksi referensi yang dimiliki
            [
                'id_pertanyaan' => 5,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 8 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 5,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '7 -8 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 5,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 -6 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 5,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 -4 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 5,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 jenis',
                'bobot' => 1,
            ],

            //Jumlah jurnal ilmiah tercetak
            [
                'id_pertanyaan' => 6,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 3 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 6,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 6,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 6,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 6,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Jenis koleksi muatan
            [
                'id_pertanyaan' => 7,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 5 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 7,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => ' 4 -5 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 7,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 7,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 7,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 jenis',
                'bobot' => 1,
            ],

            //Persentase jumlah penambahan
            [
                'id_pertanyaan' => 8,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 8,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 8,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 8,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 8,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2%',
                'bobot' => 1,
            ],

            //Persentase koleksi buku
            [
                'id_pertanyaan' => 9,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 %',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 9,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 - 4 %',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 9,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 -2 %',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 9,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 1 %',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 9,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Buku elektronik yang dimiliki
            [
                'id_pertanyaan' => 10,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 699 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 10,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '500-699 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 10,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '300 - 499 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 10,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '100-299 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 10,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 100 judul',
                'bobot' => 1,
            ],

            //Jumlah rerata jurnal ilmiah
            [
                'id_pertanyaan' => 11,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 3 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 11,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 11,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 11,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 11,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Jumlah basis data elektronik yang dilanggan perpustakaan
            [
                'id_pertanyaan' => 12,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 3 basis data',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 12,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => ' 3 basis data',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 12,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 basis data',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 12,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 basis data',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 12,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Jenis kebijakan tertulis
            [
                'id_pertanyaan' => 13,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 13,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 13,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 13,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 13,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 jenis',
                'bobot' => 1,
            ],

            //Penerapan standar/pedoman
            [
                'id_pertanyaan' => 14,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 6 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 14,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 14,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 14,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 14,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 4 jenis',
                'bobot' => 1,
            ],

            //Sistem otomasi pengolahan
            [
                'id_pertanyaan' => 15,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Memiliki aplikasi otomasi baku lengkap yang didukung fasilitas LAN terkoneksi internet',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 15,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Memiliki aplikasi otomasi baku lengkap yang didukung fasilitas LAN',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 15,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Memiliki aplikasi otomasi baku dengan fasilitas stand alone',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 15,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Memiliki computer tetapi belum ada aplikasi otomasi',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 15,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Belum memiliki',
                'bobot' => 1,
            ],

            //Cacah ulang (stock opname)
            [
                'id_pertanyaan' => 16,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 tahun sekali',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 16,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 tahun sekali',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 16,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 tahun sekali',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 16,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 tahun sekali',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 16,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Pernah tapi tidak regular',
                'bobot' => 1,
            ],

            //Penyiangan (weeding) koleksi
            [
                'id_pertanyaan' => 17,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 tahun
                sekali',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 17,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 tahun sekali',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 17,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 tahun sekali',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 17,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 tahun sekali',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 17,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Pernah tapi tidak regular',
                'bobot' => 1,
            ],

            //Kegiatan pelestarian (perawatan dan perbaikan kerusakan)
            [
                'id_pertanyaan' => 18,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 kegiatan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 18,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 kegiatan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 18,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 kegiatan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 18,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 kegiatan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 18,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 kegiatan',
                'bobot' => 1,
            ],

            //Komponen ke-2 (Komponen Sarana dan Prasarana Perpustakaan)
            //Luas gedung/ruang perpustakaan yang dimiliki dan/atau diperuntukkan:
            //Jumlah mahasiswa kurang dari 2.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 6,
                'nama_pilihan' => 'Lebih dari 899 m2',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 6,
                'nama_pilihan' => '700 - 899 m2',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 6,
                'nama_pilihan' => '500 - 699 m2',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 6,
                'nama_pilihan' => '300 - 499 m2',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 19,
                'sub_pertanyaan_id' => 6,
                'nama_pilihan' => 'Kurang dari 300 m2',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.000-5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 7,
                'nama_pilihan' => 'Lebih dari 1.249 m2',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 7,
                'nama_pilihan' => '1.000 - 1.249 m2',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 7,
                'nama_pilihan' => '700 - 999 m2',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 7,
                'nama_pilihan' => '450 - 699 m2',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 7,
                'nama_pilihan' => 'Kurang dari 450 m2',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001 - 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 8,
                'nama_pilihan' => 'Lebih dari 1.999 m2',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 8,
                'nama_pilihan' => '1.500- 1.999 m2',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 8,
                'nama_pilihan' => '1.000 - 1.499 m2',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 8,
                'nama_pilihan' => '500 - 999 m2',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 8,
                'nama_pilihan' => 'Kurang dari 500 m2',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001-20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 9,
                'nama_pilihan' => 'Lebih dari 3.999 m2',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 9,
                'nama_pilihan' => '3.000 - 3.999 m2',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 9,
                'nama_pilihan' => '2.000 - 2.999 m2',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 9,
                'nama_pilihan' => '1.000 - 1.999 m2',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 9,
                'nama_pilihan' => 'Kurang dari 1.000 m2',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 10,
                'nama_pilihan' => 'Lebih dari 5.999 m2',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 10,
                'nama_pilihan' => '4.500 - 5.999 m2',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 10,
                'nama_pilihan' => '3.000 - 4.499 m2',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 10,
                'nama_pilihan' => '1.500 - 2.999 m2',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 10,
                'nama_pilihan' => 'Kurang dari 1.500 m2',
                'bobot' => 1,
            ],

            //Status kepemilikan dan desain
            [
                'id_pertanyaan' => 20,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 kriteria',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 20,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 kriteria',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 20,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 kriteria',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 20,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 kriteria',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 20,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 kriteria',
                'bobot' => 1,
            ],

            //Jumlah koleksi kurang dari 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 11,
                'nama_pilihan' => 'Lebih dari 20 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 11,
                'nama_pilihan' => '15 - 20 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 11,
                'nama_pilihan' => '10 - 14 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 11,
                'nama_pilihan' => '5 - 9 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 11,
                'nama_pilihan' => 'Kurang dari 5 rakk',
                'bobot' => 1,
            ],

            //Jumlah koleksi 10.000 - 15.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 12,
                'nama_pilihan' => 'Lebih dari 50 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 12,
                'nama_pilihan' => '35 - 50 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 12,
                'nama_pilihan' => '20 - 34 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 12,
                'nama_pilihan' => '10 - 19 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 12,
                'nama_pilihan' => 'Kurang dari 10 rak',
                'bobot' => 1,
            ],

            //Jumlah koleksi 15.001 - 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 13,
                'nama_pilihan' => 'Lebih dari 60 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 13,
                'nama_pilihan' => '45 - 60 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 13,
                'nama_pilihan' => '30 - 44 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 13,
                'nama_pilihan' => '15 - 29 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 13,
                'nama_pilihan' => 'Kurang dari 15 rak',
                'bobot' => 1,
            ],

            //Jumlah koleksi 20.001 - 30.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 14,
                'nama_pilihan' => 'Lebih dari 70 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 14,
                'nama_pilihan' => '55 - 70 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 14,
                'nama_pilihan' => '40 - 54 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 14,
                'nama_pilihan' => '20 - 24 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 14,
                'nama_pilihan' => 'Kurang dari 20 rak',
                'bobot' => 1,
            ],

            //Jumlah koleksi lebih dari 30.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 15,
                'nama_pilihan' => 'Lebih dari 80 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 15,
                'nama_pilihan' => '65 - 80 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 15,
                'nama_pilihan' => '50 - 64 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 15,
                'nama_pilihan' => '35 - 49 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 15,
                'nama_pilihan' => 'Kurang dari 35 rak',
                'bobot' => 1,
            ],

            //Jumlah rak koleksi jurnal ilmiah
            [
                'id_pertanyaan' => 22,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 19 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 22,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '15 - 19 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 22,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '10 - 14 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 22,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 -9 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 22,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 5 rak',
                'bobot' => 1,
            ],

            //Rak display koleksi buku baru
            [
                'id_pertanyaan' => 23,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 rak',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 23,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 rak',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 23,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 rak',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 23,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 rak',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 23,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 rak',
                'bobot' => 1,
            ],

            //Perangkat multimedia yang dimiliki
            [
                'id_pertanyaan' => 24,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 5 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 24,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 24,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 24,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 24,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 jenis',
                'bobot' => 1,
            ],

            //Sarana layanan pemustaka
            [
                'id_pertanyaan' => 25,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 sarana',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 25,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 sarana',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 25,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 sarana',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 25,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 sarana',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 25,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 sarana',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa kurang dari 2.500
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 16,
                'nama_pilihan' => 'Lebih dari 50 set',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 16,
                'nama_pilihan' => '40 - 50 set',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 16,
                'nama_pilihan' => '30 - 39 set',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 16,
                'nama_pilihan' => '20 - 29 set',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 16,
                'nama_pilihan' => 'Kurang dari 20 set',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.500-5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 17,
                'nama_pilihan' => 'Lebih dari 100 set',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 17,
                'nama_pilihan' => '75 - 100 set',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 17,
                'nama_pilihan' => '50 - 74 set',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 17,
                'nama_pilihan' => '25 - 49 set',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 17,
                'nama_pilihan' => 'Kurang dari 25 set',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001 - 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 18,
                'nama_pilihan' => 'Lebih dari 125 set',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 18,
                'nama_pilihan' => '100-125 set',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 18,
                'nama_pilihan' => '75 - 99 set',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 18,
                'nama_pilihan' => '50 - 74 set',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 18,
                'nama_pilihan' => 'Kurang dari 50 set',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001-20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 19,
                'nama_pilihan' => 'Lebih dari 150 set',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 19,
                'nama_pilihan' => '125 - 150 set',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 19,
                'nama_pilihan' => '100 - 124 set',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 19,
                'nama_pilihan' => '75 - 99 set',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 19,
                'nama_pilihan' => 'Kurang dari 75 set',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 20,
                'nama_pilihan' => 'Lebih dari 175 set',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 20,
                'nama_pilihan' => '150 - 175 set',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 20,
                'nama_pilihan' => '125 - 149 set',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 20,
                'nama_pilihan' => '100 - 124 set',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 20,
                'nama_pilihan' => 'Kurang dari 100 set',
                'bobot' => 1,
            ],

            //Jumlah papan pengumuman (konvensional dan elektronik/digital)
            [
                'id_pertanyaan' => 27,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 buah',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 27,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 buah',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 27,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 buah',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 27,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 buah',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 27,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 buah',
                'bobot' => 1,
            ],

            //Persentase jumlah perangkat komputer tenaga perpustakaan
            [
                'id_pertanyaan' => 28,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 90%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 28,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '70 - 90%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 28,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50 - 69%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 28,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 49%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 28,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 30%',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa kurang dari 2.500
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 21,
                'nama_pilihan' => 'Lebih dari 15 unit',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 21,
                'nama_pilihan' => '10 - 15 unit',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 21,
                'nama_pilihan' => '5 -9 unit',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 21,
                'nama_pilihan' => '2 -4 unit',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 21,
                'nama_pilihan' => 'Kurang dari 2 unit',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.500 - 5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 22,
                'nama_pilihan' => 'Lebih dari 15 unit',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 22,
                'nama_pilihan' => '13 - 15 unit',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 22,
                'nama_pilihan' => '10 - 12 unit',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 22,
                'nama_pilihan' => '5 -9 unit',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 22,
                'nama_pilihan' => 'Kurang dari 5 unit',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001 - 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 23,
                'nama_pilihan' => 'Lebih dari 20 unit',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 23,
                'nama_pilihan' => '16 - 20 unit',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 23,
                'nama_pilihan' => '13 - 15 unit',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 23,
                'nama_pilihan' => '10 - 12 unit',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 23,
                'nama_pilihan' => 'Kurang dari 10 unit',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001 - 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 24,
                'nama_pilihan' => 'Lebih dari 30 unit',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 24,
                'nama_pilihan' => '25 - 30 unit',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 24,
                'nama_pilihan' => '20 - 24 unit',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 24,
                'nama_pilihan' => '15 - 19 unit',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 24,
                'nama_pilihan' => 'Kurang dari 15 unit',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 25,
                'nama_pilihan' => 'Lebih dari 35 unit',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 25,
                'nama_pilihan' => '30 - 35 unit',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 25,
                'nama_pilihan' => '25 - 29 unit',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 25,
                'nama_pilihan' => '20 - 24 unit',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 25,
                'nama_pilihan' => 'Kurang dari 20 unit',
                'bobot' => 1,
            ],

            //Kapasitas kecepatan akses internet (bandwidth) di perpustakaan
            [
                'id_pertanyaan' => 30,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 500 MBps',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 30,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '250 - 500 MBps',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 30,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50 - 249 MBps',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 30,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5-49 MBps',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 30,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 5 MBps',
                'bobot' => 1,
            ],

            //Jenis sarana keamanan gedung dan fasilitas perpustakaan;
            [
                'id_pertanyaan' => 31,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 5 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 31,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 31,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 31,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 31,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 jenis',
                'bobot' => 1,
            ],

            //Fasilitas umum:
            [
                'id_pertanyaan' => 32,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 fasilitas',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 32,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 fasilitas',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 32,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 fasilitas',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 32,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 fasilitas',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 32,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 fasilitas',
                'bobot' => 1,
            ],

            //Rambu-rambu perpustakaan yang tersedia
            [
                'id_pertanyaan' => 33,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 33,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 33,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 33,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 33,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 jenis',
                'bobot' => 1,
            ],

            //Jenis layanan perpustakaan:
            [
                'id_pertanyaan' => 34,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 5 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 34,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 34,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 34,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 34,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 jenis',
                'bobot' => 1,
            ],

            //Jenis layanan referensi yang disediakan:
            [
                'id_pertanyaan' => 35,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 35,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 35,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 35,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 35,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 jenis',
                'bobot' => 1,
            ],

            //Kegiatan peningkatan layanan perpustakaan :
            [
                'id_pertanyaan' => 36,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 3 kegiatan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 36,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 kegiatan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 36,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 kegiatan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 36,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 kegiatan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 36,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada kegiatan',
                'bobot' => 1,
            ],

            //Jam buka perpustakaan per minggu
            [
                'id_pertanyaan' => 37,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 49 jam',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 37,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '45-49 jam',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 37,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '40-44 jam',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 37,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '35-39 jam',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 37,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 35 jam',
                'bobot' => 1,
            ],

            //Sistem layanan sirkulasi
            [
                'id_pertanyaan' => 38,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Otomasi penuh / terintegrasi berbasis internet',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 38,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Otomasi penuh / terintegrasi berbasis LAN',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 38,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Semi otomasi',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 38,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Manual dengan menggunakan sistem kartu',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 38,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Manual dengan sistem buku besar',
                'bobot' => 1,
            ],

            //Sistem akses informasi ke koleksi
            [
                'id_pertanyaan' => 39,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'OPAC berbasis internet',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 39,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'OPAC berbasis LAN',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 39,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Memiliki aplikasi otomasi (stand alone)',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 39,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Katalog kartu / buku)',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 39,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada katalog',
                'bobot' => 1,
            ],

            //Fitur Website perpustakaan
            [
                'id_pertanyaan' => 40,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 40,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 40,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 40,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 40,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 jenis',
                'bobot' => 1,
            ],

            //Prosedur keanggotaan perpustakaan
            [
                'id_pertanyaan' => 41,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Terintegrasi kartu mahasiswa atau kartu pegawai dengan aktivasi online',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 41,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Terintegrasi kartu dengan formulir aktivasi',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 41,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Registrasi dengan formulir permohonan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 41,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Registrasi dengan kartu tersendiri',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 41,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak memiliki prosedur baku',
                'bobot' => 1,
            ],

            //Jumlah rerata pengunjung perpustakaan per bulan dalam 1 (satu) tahun - Jumlah mahasiswa kurang dari 2.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 26,
                'nama_pilihan' => 'Lebih dari 8.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 26,
                'nama_pilihan' => '7.000 - 8.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 26,
                'nama_pilihan' => '6.000 - 6.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 26,
                'nama_pilihan' => '5.000 - 5.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 26,
                'nama_pilihan' => 'Kurang dari 5.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.000-5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 27,
                'nama_pilihan' => 'Lebih dari 9.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 27,
                'nama_pilihan' => '8.000 - 9.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 27,
                'nama_pilihan' => '7.000 - 7.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 27,
                'nama_pilihan' => '6.000 - 6.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 27,
                'nama_pilihan' => 'Kurang dari 6.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001-10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 28,
                'nama_pilihan' => 'Lebih dari 10.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 28,
                'nama_pilihan' => '9.000 - 10.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 28,
                'nama_pilihan' => '8.000 - 8.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 28,
                'nama_pilihan' => '7.000 - 7.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 28,
                'nama_pilihan' => 'Kurang dari 7.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001-20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 29,
                'nama_pilihan' => 'Lebih dari 11.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 29,
                'nama_pilihan' => '10.000 - 11.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 29,
                'nama_pilihan' => '9.000 - 9.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 29,
                'nama_pilihan' => '8.000 - 8.999 Orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 29,
                'nama_pilihan' => 'Kurang dari 8.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 30,
                'nama_pilihan' => 'Lebih dari 12.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 30,
                'nama_pilihan' => '11.000- 12.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 30,
                'nama_pilihan' => '10.000 - 10.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 30,
                'nama_pilihan' => '9.000 - 9.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 30,
                'nama_pilihan' => 'Kurang dari 9.000 orang',
                'bobot' => 1,
            ],

            //Jumlah dosen dan tenaga kependidikan
            [
                'id_pertanyaan' => 43,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 199 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 43,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '150-199 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 43,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '100-149 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 43,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50-99 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 43,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 50 orang',
                'bobot' => 1,
            ],

            //Jumlah rerata pengunjung perpustakaan melalui online per bulan dalam 1 (satu) tahun - Jumlah mahasiswa kurang dari 2.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 31,
                'nama_pilihan' => 'Lebih dari 8.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 31,
                'nama_pilihan' => '7.000 - 8.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 31,
                'nama_pilihan' => '6.000 - 6.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 31,
                'nama_pilihan' => '5.000 - 5.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 31,
                'nama_pilihan' => 'Kurang dari 5.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.000-5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 32,
                'nama_pilihan' => 'Lebih dari 9.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 32,
                'nama_pilihan' => '8.000 - 9.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 32,
                'nama_pilihan' => '7.000 - 7.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 32,
                'nama_pilihan' => '6.000 - 6.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 32,
                'nama_pilihan' => 'Kurang dari 6.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001- 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 33,
                'nama_pilihan' => 'Lebih dari 10.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 33,
                'nama_pilihan' => '9.000 - 10.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 33,
                'nama_pilihan' => '8.000 - 8.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 33,
                'nama_pilihan' => '7.000 - 7.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 33,
                'nama_pilihan' => 'Kurang dari 7.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001-20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 34,
                'nama_pilihan' => 'Lebih dari 11.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 34,
                'nama_pilihan' => '10.000- 11.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 34,
                'nama_pilihan' => '9.000 - 9.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 34,
                'nama_pilihan' => '8.000 - 8.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 34,
                'nama_pilihan' => 'Kurang dari 8.000 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 35,
                'nama_pilihan' => 'Lebih dari 12.000 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 35,
                'nama_pilihan' => '11.000- 12.000 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 35,
                'nama_pilihan' => '10.000 - 10.999 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 35,
                'nama_pilihan' => '9.000 - 9.999 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 35,
                'nama_pilihan' => 'Kurang dari 9.000 orang',
                'bobot' => 1,
            ],

            //Jumlah rerata buku yang dipinjam per bulan dalam 1 (satu) tahun - Jumlah mahasiswa kurang dari 2.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 36,
                'nama_pilihan' => 'Lebih dari 4.000 eks.',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 36,
                'nama_pilihan' => '3.000 - 4.000 eks.',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 36,
                'nama_pilihan' => '2.000 - 2.999 eks.',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 36,
                'nama_pilihan' => '1.000 - 1.999 eks.',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 36,
                'nama_pilihan' => 'Kurang dari 1.000 eks.',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.000-5.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 37,
                'nama_pilihan' => 'Lebih dari 5.000 eks.',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 37,
                'nama_pilihan' => '4.000 - 5.000 eks.',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 37,
                'nama_pilihan' => '3.000 - 3.999 eks.',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 37,
                'nama_pilihan' => '2.000 - 2.999 eks.',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 37,
                'nama_pilihan' => 'Kurang dari 2.000 eks.',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001-10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 38,
                'nama_pilihan' => 'Lebih dari 6.000 eks.',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 38,
                'nama_pilihan' => '5.000 - 6.000 eks.',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 38,
                'nama_pilihan' => '4.000 - 4.999 eks.',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 38,
                'nama_pilihan' => '3.000 - 3.999 eks.',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 38,
                'nama_pilihan' => 'Kurang dari 3.000 eks.',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001-20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 39,
                'nama_pilihan' => 'Lebih dari 7.000 eks.',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 39,
                'nama_pilihan' => '6.000 - 7.000 eks.',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 39,
                'nama_pilihan' => '5.000 - 5.999 eks.',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 39,
                'nama_pilihan' => '4.000 - 4.999 eks.',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 39,
                'nama_pilihan' => 'Kurang dari 4.000 eks.',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 40,
                'nama_pilihan' => 'Lebih dari 8.000 eks.',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 40,
                'nama_pilihan' => '7.000 - 8.000 eks.',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 40,
                'nama_pilihan' => '6.000 - 6.999 eks.',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 40,
                'nama_pilihan' => '5.000 - 5.999 eks.',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 40,
                'nama_pilihan' => 'Kurang dari 5.000 eks.',
                'bobot' => 1,
            ],

            //Jenis kegiatan promosi
            [
                'id_pertanyaan' => 46,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 6 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 46,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 46,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 46,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 46,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 4 jenis',
                'bobot' => 1,
            ],

            //Jumlah kegiatan promosi perpustakaan per tahun
            [
                'id_pertanyaan' => 47,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 8 kali',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 47,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '8 kali',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 47,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '7 kali',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 47,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 kali',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 47,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 6 kali',
                'bobot' => 1,
            ],

            //Peran perpustakaan dalam mengurangi praktek plagiarisme:
            [
                'id_pertanyaan' => 48,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 cara',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 48,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 cara',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 48,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 cara',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 48,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 cara',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 48,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 cara',
                'bobot' => 1,
            ],

            //Kualifikasi pendidikan kepala perpustakaan
            [
                'id_pertanyaan' => 49,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'S2 perpustakaan atau lebih tinggi',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 49,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'S3 bidang lain dan diklat bidang perpustakaan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 49,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'SI perpustakaan atau S2 bidang lain dan diklat bidang perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 49,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Diploma perpustakaan dan S1 bidang lain atau lebih tinggi',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 49,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Diploma bidang lain',
                'bobot' => 1,
            ],

            //Status kepala perpustakaan
            [
                'id_pertanyaan' => 50,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Fungsional pustakawan / profesional bidang perpustakaan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 50,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Fungsional dosen bidang perpustakaan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 50,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Fungsional bidang lain dengan diklat bidang perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 50,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Fungsional bidang lain dan belum mengikuti diklat bidang perpustakaan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 50,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Pegawai tidak tetap',
                'bobot' => 1,
            ],

            //Jumlah Pengembangan Keprofesian Berkelanjutan (PKB)
            [
                'id_pertanyaan' => 51,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 sertifikat',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 51,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 sertifikat',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 51,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 sertifikat',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 51,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 sertifikat',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 51,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 sertifikat',
                'bobot' => 1,
            ],

            //Jumlah pustakawan (fungsional/]Drofesional) - Jumlah pemustaka/(mahasiswa, dosen, tendik)kurang 2.500 orang
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 41,
                'nama_pilihan' => 'Lebih dari 10 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 41,
                'nama_pilihan' => '7-10 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 41,
                'nama_pilihan' => '5 -6 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 41,
                'nama_pilihan' => '3 -4 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 41,
                'nama_pilihan' => 'Kurang dari 3 orang',
                'bobot' => 1,
            ],

            //Jumlah pemustaka (mahasiswa,dosen, tendik) 2.500 - 5.000 orang
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 42,
                'nama_pilihan' => 'Lebih dari 15 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 42,
                'nama_pilihan' => '10 - 15 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 42,
                'nama_pilihan' => '7 -9 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 42,
                'nama_pilihan' => '3 -6 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 42,
                'nama_pilihan' => 'Kurang dari 3 orang',
                'bobot' => 1,
            ],

            //Jumlah pemustaka (mahasiswa,dosen, tendik) 5.001 - 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 43,
                'nama_pilihan' => 'Lebih dari 20 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 43,
                'nama_pilihan' => '15 - 20 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 43,
                'nama_pilihan' => '10 - 14 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 43,
                'nama_pilihan' => '5 -9 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 43,
                'nama_pilihan' => 'Kurang dari 5 orang',
                'bobot' => 1,
            ],

            //Jumlah pemustaka (mahasiswa, dosen, tendik) 10.001 - 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 44,
                'nama_pilihan' => 'Lebih dari 30 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 44,
                'nama_pilihan' => '21-30 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 44,
                'nama_pilihan' => '13 - 20 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 44,
                'nama_pilihan' => '10 - 12 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 44,
                'nama_pilihan' => 'Kurang dari 10 orang',
                'bobot' => 1,
            ],

            //Jumlah pemustaka (mahasiswa,dosen, tendik) lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 45,
                'nama_pilihan' => 'Lebih dari 40 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 45,
                'nama_pilihan' => '23 - 40 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 45,
                'nama_pilihan' => '15-22 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 45,
                'nama_pilihan' => '10-14 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 45,
                'nama_pilihan' => 'Kurang dari 10 orang',
                'bobot' => 1,
            ],

            //Jumlah tenaga teknis - Jumlah mahasiswa kurang 2.500 orang
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 46,
                'nama_pilihan' => 'Lebih dari 2 orang, S1 semua bidang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 46,
                'nama_pilihan' => '2 orang, D3 semua bidang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 46,
                'nama_pilihan' => '1 orang, D3 semua bidang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 46,
                'nama_pilihan' => '1 orang, D2 semua
                bidang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 46,
                'nama_pilihan' => '1 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 2.500 - 5.000 orang
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 47,
                'nama_pilihan' => 'Lebih dari 3 orang, SI semua bidang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 47,
                'nama_pilihan' => '3 orang, D3 semua bidang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 47,
                'nama_pilihan' => '2 orang, D3 semua bidang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 47,
                'nama_pilihan' => '1 orang, D2 semua bidang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 47,
                'nama_pilihan' => '1 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 5.001 - 10.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 48,
                'nama_pilihan' => 'Lebih dari 4 orang, SI semua bidang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 48,
                'nama_pilihan' => '4 orang, D3 semua bidang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 48,
                'nama_pilihan' => '3 orang, D3 semua
                bidang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 48,
                'nama_pilihan' => '2 orang, D2 semua bidang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 48,
                'nama_pilihan' => 'Kurang dari 2 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa 10.001 - 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 49,
                'nama_pilihan' => 'Lebih dari 5 orang, S1 semua bidang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 49,
                'nama_pilihan' => '5 orang, D3 semua bidang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 49,
                'nama_pilihan' => '4 orang, D3 semua bidang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 49,
                'nama_pilihan' => '3 orang, D2 semua bidang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 49,
                'nama_pilihan' => 'Kurang dari 3 orang',
                'bobot' => 1,
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 50,
                'nama_pilihan' => 'Lebih dari 6 orang, SI semua bidang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 50,
                'nama_pilihan' => '6 orang, D3 semua bidang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 50,
                'nama_pilihan' => '5 orang, D3 semua bidang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 50,
                'nama_pilihan' => '4 orang, D2 semua bidang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 50,
                'nama_pilihan' => 'Kurang dari 4 orang',
                'bobot' => 1,
            ],

            //Tenaga teknis bidang IT,
            [
                'id_pertanyaan' => 54,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 3 orang',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 54,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 orang',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 54,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 orang',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 54,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 orang',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 54,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Persentase jumlah tenaga perpustakaan
            [
                'id_pertanyaan' => 55,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 75%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 55,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '61-75%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 55,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50 - 60%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 55,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 49%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 55,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 30%',
                'bobot' => 1,
            ],

            //Persentase jumlah pustakawan/tenaga
            [
                'id_pertanyaan' => 56,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 49%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 56,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '40 - 49%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 56,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 39%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 56,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '20 - 29%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 56,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 20%',
                'bobot' => 1,
            ],

            //Jumlah rerata keikutsertaan
            [
                'id_pertanyaan' => 57,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 7 kali',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 57,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '7 kali',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 57,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 kali',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 57,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 kali',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 57,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 5 kali',
                'bobot' => 1,
            ],

            //Persentase jumlah keikutsertaan
            [
                'id_pertanyaan' => 58,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 69%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 58,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '60 - 69%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 58,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50 - 59%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 58,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 49%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 58,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 30%',
                'bobot' => 1,
            ],

            //Pendirian Perpustakaan Perguruan Tinggi - Perpustakaan PTN
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 51,
                'nama_pilihan' => 'Regulasi pendirian dari Menteri dan SK pemimpin perguruan tinggi (Rektor / Direktur / Ketua)',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 51,
                'nama_pilihan' => 'Regulasi pendirian dari Menteri',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 51,
                'nama_pilihan' => 'SK pemimpin perguruan tinggi (Rektor / Direktur / Ketua)',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 51,
                'nama_pilihan' => 'SK pemimpin perguruan tinggi setingkat Dekan/Ketua Jurusan/Ketua Prodi',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 51,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Perpustakaan PTS
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 52,
                'nama_pilihan' => 'SK pendirian dari Ketua Yayasan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 52,
                'nama_pilihan' => 'SK Pendirian dari pemimpin Perguruan Tinggi (Rektor / Direktur / Ketua)',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 52,
                'nama_pilihan' => 'SK Pendirian dari pemimpin Perguruan Tinggi ditindaklanjuti oleh Wakil Rektor / Direktur / Ketua',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 52,
                'nama_pilihan' => 'SK pemimpin perguruan tinggi setingkat Dekan/Ketua Jurusan/Ketua Prodi',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 52,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Universitas / Institut
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 53,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat lembaga / direktorat',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 53,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat pusat',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 53,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat Unit Pelaksana Teknis (UPT)',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 53,
                'nama_pilihan' => 'Kedudukan perpustakan setingkat bidang/bagian',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 53,
                'nama_pilihan' => 'Kedudukan perpustakan setingkat sub bidang/sub bagian',
                'bobot' => 1,
            ],

            //Sekolah Tinggi/ Politeknik / Akademi
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 54,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat pusat',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 54,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat unit',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 54,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat bidang/bagian',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 54,
                'nama_pilihan' => 'Kedudukan perpustakaan setingkat sub bagian',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => null,
                'sub_pertanyaan_id' => 54,
                'nama_pilihan' => 'Kedudukan perpustakaan tidak ada dalam struktur organisasi Sekolah Tinggi / Politeknik/ Akademi',
                'bobot' => 1,
            ],

            //Status perpustakaan dalam pengambilan keputusan Perguruan Tinggi
            [
                'id_pertanyaan' => 61,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Menjadi anggota Senat Perguruan Tinggi',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 61,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Melalui pemimpin perguruan tinggi',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 61,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Melalui pemimpin Lembaga / Direktorat yang membawahi perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 61,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Melalui pemimpin Pusat / setingkat',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 61,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak dilibatkan dalam pengambilan keputusan',
                'bobot' => 1,
            ],

            //Unsur Komite Perpustakaan/sejenisnya terdiri atas
            [
                'id_pertanyaan' => 62,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 unsur',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 62,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 unsur',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 62,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 unsur',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 62,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 unsur',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 62,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada komite perpustakaan',
                'bobot' => 1,
            ],

            //Struktur organisasi perpustakaan
            [
                'id_pertanyaan' => 63,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 6 komponen',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 63,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '6 komponen',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 63,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 komponen',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 63,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 komponen',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 63,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 4 komponen',
                'bobot' => 1,
            ],

            //Pertanggungjawaban kepala perpustakaan
            [
                'id_pertanyaan' => 64,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Bertanggung jawab kepada pemimpin perguruan tinggi, dan/atau ketua yayasan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 64,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Bertanggung jawab kepada wakil pemimpin perguruan tinggi, dan/atau wakil ketua yayasan bidang akademik',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 64,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Bertanggung jawab kepada kepala/ketua lembaga yang langsung membawahi perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 64,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Bertanggung jawab kepada kepala pusat yang membawahi perpustakaan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 64,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Bertanggung jawab kepada kepala bidang/bagian',
                'bobot' => 1,
            ],

            //Pencantuman NPP:
            [
                'id_pertanyaan' => 65,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 5 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 65,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 65,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 65,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 65,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 jenis',
                'bobot' => 1,
            ],

            //Perpustakaan memiliki rencana
            [
                'id_pertanyaan' => 66,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Pemimpin perguruan tinggi, danatau Ketua Yayasan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 66,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Wakil pemimpin perguruan tinggi, dan/atau Wakil Ketua Yayasan Bidang Akademik',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 66,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kepala/ketua lembaga yang langsung membawahi perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 66,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kepala Pusat yang membawahi perpustakaan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 66,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kepala Bidang/Bagian yang membawahi perpustakaan',
                'bobot' => 1,
            ],

            //Perpustakaan memiliki program kerja
            [
                'id_pertanyaan' => 67,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Pemimpin perguruan tinggi, dan/atau Ketua Yayasan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 67,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Wakil pemimpin perguruan tinggi, dan atau Wakil Ketua Yayasan Bidang Akademik',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 67,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kepala/ketua lembaga yang langsung membawahi perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 67,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kepala pusat yang membawahi perpustakaan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 67,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kepala Bidang/Bagian yang membawahi perpustakaan',
                'bobot' => 1,
            ],

            //Perpustakaan memiliki visi, misi
            [
                'id_pertanyaan' => 68,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Mengacu pada visi misi lembaga induk, dan ditetapkan oleh pemimpin perguruan tinggi atau ketua yayasan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 68,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Mengacu pada visi misi lembaga induk, dan ditetapkan oleh wakil pemimpin perguruan tinggi/wakil ketua yayasan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 68,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Mengacu pada visi misi lembaga induk, dan ditetapkan oleh Kepala Perpustakaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 68,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak mengacu pada visi misi lembaga induk dan ditetapkan oleh Kepala Perpustakaann',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 68,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak memiliki dokumen perumusan visi, misi, tujuan, dan tugas perpustakaan',
                'bobot' => 1,
            ],

            //Pelaporan kinerja perpustakaan
            [
                'id_pertanyaan' => 69,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis laporan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 69,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis laporan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 69,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 jenis laporan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 69,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Membuat laporan tetapi tidak teratur',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 69,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak membuat laporan',
                'bobot' => 1,
            ],

            //Persentase jumlah anggaran
            [
                'id_pertanyaan' => 70,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 70,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 70,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 70,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 70,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2%',
                'bobot' => 1,
            ],

            //Jumlah dana partisipasi
            [
                'id_pertanyaan' => 71,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 200 juta',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 71,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '150-200 juta',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 71,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '100 - 149 juta',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 71,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50 - 99 juta',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 71,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 50 juta',
                'bobot' => 1,
            ],

            //Anggaran untuk pengembangan
            [
                'id_pertanyaan' => 72,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 45%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 72,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '40 - 45%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 72,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '35 - 39,99%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 72,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 34,99% atau 51 - 70%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 72,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 30% atau lebih dari 70%',
                'bobot' => 1,
            ],

            //Kerja sama Penyelenggaraan
            [
                'id_pertanyaan' => 73,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 aspek',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 73,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 aspek',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 73,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 aspek',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 73,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 aspek',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 73,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'kurang dari 2 aspek',
                'bobot' => 1,
            ],

            //Program dan kegiatan inovasi
            [
                'id_pertanyaan' => 74,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 3 program',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 74,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 program',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 74,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 program',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 74,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 program',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 74,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada program',
                'bobot' => 1,
            ],

            //Karya inovasi dan kreativitas
            [
                'id_pertanyaan' => 75,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 karya',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 75,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 karya',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 75,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 karya',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 75,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 karya',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 75,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 karya',
                'bobot' => 1,
            ],

            //Keunikan perpustakaan
            [
                'id_pertanyaan' => 76,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 karya',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 76,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 karya',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 76,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 karya',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 76,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 karya',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 76,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 karya',
                'bobot' => 1,
            ],

            //Prestasi perpustakaan
            [
                'id_pertanyaan' => 77,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 6 prestasi',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 77,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 -6 prestasi',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 77,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 - 4 prestasi',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 77,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 -2 prestasi',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 77,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak ada',
                'bobot' => 1,
            ],

            //Apresiasi kinerja perpustakaan
            [
                'id_pertanyaan' => 78,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 penghargaan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 78,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 penghargaan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 78,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 penghargaan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 78,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 penghargaan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 78,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 penghargaan',
                'bobot' => 1,
            ],

            //Persentase jumlah pemustaka
            [
                'id_pertanyaan' => 79,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 40%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 79,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 40%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 79,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '20 - 29%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 79,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '10 - 19%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 79,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'kurang dari 10%',
                'bobot' => 1,
            ],

            //Persentase jumlah koleksi
            [
                'id_pertanyaan' => 80,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 40%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 80,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '35 - 40%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 80,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 34%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 80,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '25 - 29%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 80,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 25%',
                'bobot' => 1,
            ],

            //Persentase jumlah pemustaka
            [
                'id_pertanyaan' => 81,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 40%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 81,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '35 - 40%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 81,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '30 - 34%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 81,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '25 - 29%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 81,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'kurang dari 25%',
                'bobot' => 1,
            ],

            //Keberadaan pegiat literasi:
            [
                'id_pertanyaan' => 82,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 4 jenis',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 82,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 jenis',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 82,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 jenis',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 82,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '2 jenis',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 82,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 2 jenis',
                'bobot' => 1,
            ],

            //Rasio antara jumlah pemustaka
            [
                'id_pertanyaan' => 83,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : lebih dari 6 judul',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 83,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 :6 judul',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 83,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : 5 judul',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 83,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : 4 judul',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 83,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : Kurang dari 4 judul',
                'bobot' => 1,
            ],

            //Rasio antara jumlah pemustaka dengan pemustaka
            [
                'id_pertanyaan' => 84,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : kurang dari 400',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 84,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1:400- 499',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 84,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : 500',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 84,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '1 : lebih dari 500',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 84,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Tidak memiliki pustakawan',
                'bobot' => 1,
            ],

            //Pemerataan layanan
            [
                'id_pertanyaan' => 85,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 70%',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 85,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '60 - 70%',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 85,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '50 - 59%',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 85,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '40 - 49%',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 85,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 40%',
                'bobot' => 1,
            ],

            //Jumlah rerata kegiatan
            [
                'id_pertanyaan' => 86,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Lebih dari 5 kegiatan',
                'bobot' => 5,
            ],
            [
                'id_pertanyaan' => 86,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '5 kegiatan',
                'bobot' => 4,
            ],
            [
                'id_pertanyaan' => 86,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '4 kegiatan',
                'bobot' => 3,
            ],
            [
                'id_pertanyaan' => 86,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => '3 kegiatan',
                'bobot' => 2,
            ],
            [
                'id_pertanyaan' => 86,
                'sub_pertanyaan_id' => null,
                'nama_pilihan' => 'Kurang dari 3 kegiatan',
                'bobot' => 1,
            ],

        ];

        DB::table('pilihans')->insert($Pilihans);
    }
}
