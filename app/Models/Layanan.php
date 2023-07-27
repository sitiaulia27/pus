<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanans';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
