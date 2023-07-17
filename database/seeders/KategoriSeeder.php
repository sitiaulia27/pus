<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            [
                'nama' => 'Tata Tertib',
            ],
            [
                'nama' => 'Layanan Sirkulasi',
            ],
            [
                'nama' => 'Layanan Referensi',
            ],
            [
                'nama' => 'Layanan Baca di Tempat',
            ],
            [
                'nama' => 'Layanan Administrasi',
            ],
            [
                'nama' => 'Peminjaman Bahan Pustaka',
            ],
            [
                'nama' => 'Pengembalian Bahan Pustaka',
            ],
            [
                'nama' => 'Layanan Literasi Informasi',
            ],
            [
                'nama' => 'Layanan Penyediaan Dokumen',
            ],
            [
                'nama' => 'Layanan Penelusuran(OPAC)',
            ],
        ]);
    }
}
