<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubPertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subPertanyaans = [
            //Jumlah koleksi buku tercetak (termasuk koleksi referensi, tidak termasuk repositori), pilih pernyataan berikut :
            [
                'id_pertanyaan' => 4,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 4,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.000 - 5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 4,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001 - 10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 4,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001 - 20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 4,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah mahasiswa lebih dari 20.000
            [
                'id_pertanyaan' => 19,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 19,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.000-5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 19,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001-10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 19,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001-20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 19,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Rak buku tercetak (termasuk koleksi referensi) pilih salah satu sesuai jumlah koleksi yang dimiliki
            [
                'id_pertanyaan' => 21,
                'nama_sub_pertanyaan' => 'Jumlah koleksi kurang dari 10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 21,
                'nama_sub_pertanyaan' => 'Jumlah koleksi 10.000 - 15.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 21,
                'nama_sub_pertanyaan' => 'Jumlah koleksi 15.001 - 20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 21,
                'nama_sub_pertanyaan' => 'Jumlah koleksi 20.001 - 30.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 21,
                'nama_sub_pertanyaan' => 'Jumlah koleksi lebih dari 30.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah meja dan kursi baca (standar 1 meja memuat 4 kursi)
            [
                'id_pertanyaan' => 26,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.500',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 26,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.500-5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 26,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001-10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 26,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001-20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 26,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah perangkat komputer untuk pemustaka
            [
                'id_pertanyaan' => 29,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.500',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 29,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.500 - 5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 29,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001 - 10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 29,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001 - 20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 29,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah rerata pengunjung perpustakaan per bulan dalam 1 (satu) tahun
            [
                'id_pertanyaan' => 42,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 42,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.000-5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 42,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001-10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 42,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001-20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 42,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah rerata pengunjung perpustakaan melalui online per bulan dalam 1 (satu) tahun
            [
                'id_pertanyaan' => 44,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 44,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.000-5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 44,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001-10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 44,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001-20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 44,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah rerata buku yang dipinjam per bulan dalam 1 (satu) tahun
            [
                'id_pertanyaan' => 45,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang dari 2.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 45,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.000-5.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 45,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001-10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 45,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001-20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 45,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah pustakawan (fungsional/profesional)
            [
                'id_pertanyaan' => 52,
                'nama_sub_pertanyaan' => 'Jumlah pemustaka/ (mahasiswa, dosen, tendik) kurang 2.500 orang',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 52,
                'nama_sub_pertanyaan' => 'Jumlah pemustaka (mahasiswa, dosen, tendik) 2.500 - 5.000 orang',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 52,
                'nama_sub_pertanyaan' => 'Jumlah pemustaka (mahasiswa, dosen, tendik) 5.001 - 10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 52,
                'nama_sub_pertanyaan' => 'Jumlah pemustaka (mahasiswa, dosen, tendik) 10.001 - 20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 52,
                'nama_sub_pertanyaan' => 'Jumlah pemustaka (mahasiswa, dosen, tendik) lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Jumlah tenaga teknis
            [
                'id_pertanyaan' => 53,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa kurang 2.500 orang',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 53,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 2.500 - 5.000 orang',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 53,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 5.001 - 10.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 53,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa 10.001 - 20.000',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 53,
                'nama_sub_pertanyaan' => 'Jumlah mahasiswa lebih dari 20.000',
                'jenis_pilihan' => 'satu',
            ],

            //Pendirian Perpustakaan Perguruan Tinggi
            [
                'id_pertanyaan' => 59,
                'nama_sub_pertanyaan' => 'Perpustakaan PTN',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 59,
                'nama_sub_pertanyaan' => 'Perpustakaan PTS',
                'jenis_pilihan' => 'satu',
            ],

            //Status Kelembagaan Perpustakaan
            [
                'id_pertanyaan' => 60,
                'nama_sub_pertanyaan' => 'Universitas/Institut',
                'jenis_pilihan' => 'satu',
            ],
            [
                'id_pertanyaan' => 60,
                'nama_sub_pertanyaan' => 'Sekolah Tinggi/ Politeknik /Akademi',
                'jenis_pilihan' => 'satu',
            ],
        ];

        DB::table('sub_pertanyaans')->insert($subPertanyaans);
    }
}
