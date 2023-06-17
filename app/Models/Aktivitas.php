<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aktivitas extends Model
{
    //mengambil data dari tabel pengunjung
    public function AllData()
    {
        return DB::table('pengunjungs')->get();
        return DB::table('data_buku')->get();
    }
}
