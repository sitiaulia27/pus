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
            'nama' => 'Siti Aulia Fitriyanti',
            'jabatan' => 'pustakawan',
            'foto' => 'noimage.jpg',

        ]);
    }
}
