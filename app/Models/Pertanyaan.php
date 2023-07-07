<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaans';
    protected $primaryKey = 'sub_komponen_id';
    protected $guarded = [];

    public function subKomponen()
    {
        return $this->belongsTo(SubKomponen::class, 'sub_komponen_id');
    }

    public function subSubKomponen()
    {
        return $this->belongsTo(SubSubKomponen::class, 'sub_sub_komponen_id');
    }
}
