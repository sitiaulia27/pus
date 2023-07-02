<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubPertanyaan extends Model
{
    protected $table = 'sub_pertanyaans';
    protected $primaryKey = 'id_pertanyaan';

    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class, 'id_pertanyaan');
    }
}
