<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Peminjam extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['nim', 'nama', 'kelas', 'jurusan_id', 'judul_buku', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status_id'];

    public function jurusan()
    {
        return $this->belongsTo("App\Models\Jurusan", "jurusan_id", "id");
    }

    public function status()
    {
        return $this->belongsTo("App\Models\Status", "status_id", "id");
    }
}
