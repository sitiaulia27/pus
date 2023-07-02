<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    protected $table = 'pilihans';
    protected $primaryKey = 'id_pertanyaan';

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }

    public function subPertanyaan()
    {
        return $this->belongsTo(subPertanyaan::class, 'sub_pertanyaan_id');
    }
}
