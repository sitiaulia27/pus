<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            'judul' => 'HTML',
            'slug' => 'html',
            'body' => 'HTML adalah singkatan dari Hypertext Markup Language',
            'image' => 'noimage.jpg',

        ]);
    }
}
