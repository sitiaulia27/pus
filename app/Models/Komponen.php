<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    protected $table = 'komponens';
    protected $primaryKey = 'komponen_id';

    public function subKomponen()
    {
        return $this->hasMany(SubKomponen::class, 'komponen_id');
    }
}
