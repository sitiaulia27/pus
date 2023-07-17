<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'title' => 'Ruang Referensi',
                'image' => null,
            ],
            [
                'title' => 'Ruang Sirkulasi',
                'image' => null,
            ],
            [
                'title' => 'Meja Baca',
                'image' => null,
            ],
        ]);
    }
}
