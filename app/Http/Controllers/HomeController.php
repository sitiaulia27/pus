<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Data_Karyawan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data["count_data_karyawan"] = Data_Karyawan::count();
        $data["count_berita"] = Berita::count();
        return view('admin.content', $data);
    }
}
