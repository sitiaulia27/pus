<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    use HasFactory;

    protected $table = 'akreditasi';
    protected $primaryKey = 'akreditasi_id';

    public function Komponen()
    {
        return $this->belongsTo(Komponen::class, 'komponen_id', 'komponen_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
