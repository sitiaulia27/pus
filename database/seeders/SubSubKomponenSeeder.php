<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSubKomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data SubSubKomponen
        $subSubKomponens = [
            //koleksi
            [
                'sub_komponen_id' => 1, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Kebijakan Pengembangan Koleksi',
            ],
            [
                'sub_komponen_id' => 1, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Seleksi Bahan Pustaka',
            ],
            [
                'sub_komponen_id' => 1, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Jenis dan Jumlah Koleksi',
            ],
            [
                'sub_komponen_id' => 1, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Koleksi Sumber Informasi Bahan Elektronik',
            ],

            //sarpras
            [
                'sub_komponen_id' => 5, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Perlengkapan Penyimpanan Koleksi',
            ],
            [
                'sub_komponen_id' => 5, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Peralatan Multimedia',
            ],
            [
                'sub_komponen_id' => 5, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Perlengkapan Pelayanan Perpustakaan',
            ],
            [
                'sub_komponen_id' => 5, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Perlengkapan Kerja Perpustakaan',
            ],
            [
                'sub_komponen_id' => 5, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Sarana Keamanan Gedung dan Koleksi Perpustakaan',
            ],
            [
                'sub_komponen_id' => 5, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Fasilitas Umum',
            ],

            //tenaga
            [
                'sub_komponen_id' => 14, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Pustakawan',
            ],
            [
                'sub_komponen_id' => 14, // ID SubKomponen yang sesuai
                'nama_sub_sub_komponen' => 'Tenaga Teknis',
            ],

        ];

        DB::table('sub_sub_komponens')->insert($subSubKomponens);
    }
}
