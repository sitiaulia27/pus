<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subKomponens = [
            //koleksi
            [
                'komponen_id' => 1, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Pengembangan Koleksi',
            ],
            [
                'komponen_id' => 1, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Pengorganisasian Koleksi Perpustakaan',
            ],
            [
                'komponen_id' => 1, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Pelestarian Koleksi',
            ],

            //sarpras
            [
                'komponen_id' => 2, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Gedung/Ruang',
            ],
            [
                'komponen_id' => 2, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Sarana/Fasilitas Fisik Perpustakaan',
            ],

            //pelayanan
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Jenis pelayanan',
            ],
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Jam Buka',
            ],
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Sistem Pelayanan dan Akses Informasi',
            ],
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Keanggotaan',
            ],
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Jumlah Pengunjung dan Buku yang Dipinjam',
            ],
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Promosi',
            ],
            [
                'komponen_id' => 3, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Literasi Informasi',
            ],

            //tenaga
            [
                'komponen_id' => 4, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Kepala Perpustakaan',
            ],

            [
                'komponen_id' => 4, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Tenaga Perpustakaan',
            ],
            [
                'komponen_id' => 4, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Pengembangan Kompetensi',
            ],
            [
                'komponen_id' => 4, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Keterlibatan dalam Organisasi Profesi',
            ],

            //Penyelenggaraan
            [
                'komponen_id' => 5, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Pendirian Perpustakaan',
            ],
            [
                'komponen_id' => 5, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Struktur Organisasi',
            ],
            [
                'komponen_id' => 5, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Nomor Pokok Perpustakaan (NPP)',
            ],
            [
                'komponen_id' => 5, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Program Kerja',
            ],

            //Pengelolaan
            [
                'komponen_id' => 6, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Visi, Misi dan Tujuan Perpustakaan',
            ],
            [
                'komponen_id' => 6, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Evaluasi dan Laporan Program Perpustakaan',
            ],
            [
                'komponen_id' => 6, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Anggaran',
            ],
            [
                'komponen_id' => 6, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Kerja sama dan Pembinaan',
            ],

            //inovasi dan kreativitas
            [
                'komponen_id' => 7, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Inovasi, Kreativitas dan Keunikan Perpustakaan',
            ],
            [
                'komponen_id' => 7, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Prestasi dan Apresiasi Perpustakaan',
            ],

            //kegemaran membaca
            [
                'komponen_id' => 8, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Tingkat Kegemaran Membaca',
            ],

            //IPLM
            [
                'komponen_id' => 9, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Ketercukupan Koleksi, Tenaga dan Pemerataan Akses Perpustakaan',
            ],
            [
                'komponen_id' => 9, // ID Komponen yang sesuai
                'nama_sub_komponen' => 'Pelibatan Masyarakat dalam Kegiatan Perpustakaan',
            ],

        ];

        DB::table('sub_komponens')->insert($subKomponens);

    }
}
