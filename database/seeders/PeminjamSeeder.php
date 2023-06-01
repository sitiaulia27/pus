<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peminjams')->insert([
            [
                'nim' => '2003054',
                'nama' => 'rere',
                'kelas' => 'D3TI3B',
                'jurusan_id' => 'teknik informatika',
                'judul_buku' => 'Alogarithma',
                'tanggal_peminjaman' => '2022-12-12 ',
                'tanggal_pengembalian' => '2022-12-22 ',
                'status_id' => 'dipinjam',
            ],
        ]);
    }
}
