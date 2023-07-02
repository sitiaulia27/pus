<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';
    protected $primaryKey = 'penilaian_id';

    public function subSubKomponen()
    {
        return $this->belongsTo(SubSubKomponen::class, 'sub_sub_komponen_id', 'sub_sub_komponen_id');
    }
}
