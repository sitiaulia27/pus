<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKomponen extends Model
{
    protected $table = 'sub_komponens';
    protected $primaryKey = 'sub_komponen_id';

    public function komponen()
    {
        return $this->belongsTo(Komponen::class, 'komponen_id');
    }

    public function subSubKomponen()
    {
        return $this->hasMany(SubSubKomponen::class, 'sub_komponen_id');
    }
}
