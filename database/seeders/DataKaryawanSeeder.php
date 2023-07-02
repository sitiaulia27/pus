<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data__karyawans')->insert([
            [
                'nama' => 'Wardika, S.ST., M.Eng.',
                'posisi' => 'Kepala UPT Perpustakaan Politeknik Negeri Indramayu',
                'foto' => null,
            ],
            [
                'nama' => 'Darwati, S. Sos.',
                'posisi' => 'Pustakawan Ahli Pertama',
                'foto' => null,
            ],
            [
                'nama' => 'Hadi Nurdiansyah',
                'posisi' => 'Pustakawan Terampil',
                'foto' => null,
            ],
            [
                'nama' => 'Markiyah, A. Md.',
                'posisi' => 'Pustakawan Terampil',
                'foto' => null,
            ],

        ]);
    }
}
