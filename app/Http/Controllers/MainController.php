<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('layouts.content');
    }

    public function liat_profil()
    {
        return view('profil');
    }

    public function peminjaman()
    {
        return view('peminjaman');
    }

    public function pengembalian()
    {
        return view('pengembalian');
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
}
