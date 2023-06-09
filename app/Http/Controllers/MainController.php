<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Data_Karyawan;

class MainController extends Controller
{
    public function index()
    {
        $data = Berita::get();
        return view('layouts.content', compact('data'));
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
        return view('peminjaman');
    }

    public function aktivitas()
    {
        return view('aktivitas');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function tatatertib()
    {
        return view('tatatertib');
    }

    public function sirkuref()
    {
        return view('sirkuref');
    }

    public function mulmedadmin()
    {
        return view('mulmedadmin');
    }

}
