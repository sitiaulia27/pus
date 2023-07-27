<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Data_Karyawan;
use App\Models\Layanan;
use App\Models\Slider;

class MainController extends Controller
{
    public function index()
    {
        $data = Berita::orderBy('created_at', 'desc')->get();
        $sliders = Slider::all();
        return view('layouts.content', compact('data', 'sliders'));
    }

    public function liat_profil()
    {
        $data = Data_Karyawan::get();
        return view('profil', compact('data'));
    }

    public function form()
    {
        return view('form');
    }

    public function peminjaman()
    {
        $idKategori1 = 6; // id_kategori pertama
        $idKategori2 = 7; // id_kategori kedua

        $layanan5 = Layanan::where('id_kategori', $idKategori1)->first();
        $layanan6 = Layanan::where('id_kategori', $idKategori2)->first();
        return view('peminjaman', compact('layanan5', 'layanan6'));
    }

    public function tatatertib()
    {
        $id_kategori = 1; // ID kategori yang diinginkan
        $layanan = Layanan::select('id', 'judul', 'body', 'image')
            ->where('id_kategori', $id_kategori)
            ->get()
            ->groupBy('id_kategori');

        if ($layanan->isNotEmpty()) {
            return view('tatatertib', compact('layanan'));
        } else {
            abort(404); // Jika data tidak ditemukan, tampilkan halaman 404
        }
    }

    public function sirkuref()
    {
        $idKategori1 = 2; // id_kategori pertama
        $idKategori2 = 3; // id_kategori kedua

        $layanan1 = Layanan::where('id_kategori', $idKategori1)->first();
        $layanan2 = Layanan::where('id_kategori', $idKategori2)->first();

        return view('sirkuref', compact('layanan1', 'layanan2'));
    }

    public function baca_admin()
    {
        $idKategori1 = 4; // id_kategori pertama
        $idKategori2 = 5; // id_kategori kedua

        $layanan3 = Layanan::where('id_kategori', $idKategori1)->first();
        $layanan4 = Layanan::where('id_kategori', $idKategori2)->first();
        return view('baca_admin', compact('layanan3', 'layanan4'));
    }

    public function layanan_lainnya()
    {
        $idKategori1 = 8; // id_kategori pertama
        $idKategori2 = 9; // id_kategori kedua
        $idKategori3 = 10;

        $layanan7 = Layanan::where('id_kategori', $idKategori1)->first();
        $layanan8 = Layanan::where('id_kategori', $idKategori2)->first();
        $layanan9 = Layanan::where('id_kategori', $idKategori3)->first();
        return view('layanan_lainnya', compact('layanan7', 'layanan8', 'layanan9'));
    }

    public function postberita($slug)
    {
        $data = [
            "detail" => Berita::where("slug", $slug)->first(),
        ];
        return view('postberita', compact('data'));
    }

    public function informasi()
    {
        return view('informasi');
    }

}
