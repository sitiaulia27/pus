<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komponens')->insert([
            [
                'nama_komponen' => 'Koleksi Perpustakaan',
                'jumlah_soal' => '18',
                'bobot' => '15',
            ],
            [
                'nama_komponen' => 'Sarana dan Prasarana Perpustakaan',
                'jumlah_soal' => '15',
                'bobot' => '10',
            ],
            [
                'nama_komponen' => 'Pelayanan Perpustakaan',
                'jumlah_soal' => '15',
                'bobot' => '20',
            ],
            [
                'nama_komponen' => 'Tenaga Perpustakaan',
                'jumlah_soal' => '10',
                'bobot' => '15',
            ],
            [
                'nama_komponen' => 'Penyelenggaraan Perpustakaan',
                'jumlah_soal' => '9',
                'bobot' => '10',
            ],
            [
                'nama_komponen' => 'Pengelolaan Perpustakaan',
                'jumlah_soal' => '6',
                'bobot' => '15',
            ],
            [
                'nama_komponen' => 'Inovasi dan Kreativitas',
                'jumlah_soal' => '5',
                'bobot' => '5',
            ],
            [
                'nama_komponen' => 'Tingkat Kegemaran Membaca',
                'jumlah_soal' => '4',
                'bobot' => '5',
            ],
            [
                'nama_komponen' => 'Indeks Pembangunan Literasi Masyarakat',
                'jumlah_soal' => '4',
                'bobot' => '5',
            ],
        ]);
    }
}
