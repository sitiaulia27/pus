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
            ],
            [
                'nama_komponen' => 'Sarana dan Prasarana Perpustakaan',
            ],
            [
                'nama_komponen' => 'Pelayanan Perpustakaan',
            ],
            [
                'nama_komponen' => 'Tenaga Perpustakaan',
            ],
            [
                'nama_komponen' => 'Penyelenggaraan Perpustakaan',
            ],
            [
                'nama_komponen' => 'Pengelolaan Perpustakaan',
            ],
            [
                'nama_komponen' => 'Inovasi dan Kreativitas',
            ],
            [
                'nama_komponen' => 'Tingkat Kegemaran Membaca',
            ],
            [
                'nama_komponen' => 'Indeks Pembangunan Literasi Masyarakat',
            ],
        ]);
    }
}
