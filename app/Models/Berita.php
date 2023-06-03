<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'beritas';
    protected $fillable = [
        'judul', 'slug', 'body', 'image',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul',
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
