<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSubKomponen extends Model
{
    protected $table = 'sub_sub_komponens';
    protected $primaryKey = 'sub_sub_komponen_id';

    public function subKomponen()
    {
        return $this->belongsTo(SubKomponen::class, 'sub_komponen_id');
    }

}
