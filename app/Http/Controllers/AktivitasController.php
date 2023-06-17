<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Support\Facades\DB;

class AktivitasController extends Controller
{
    protected $aktivitas;

    public function __construct()
    {
        $this->aktivitas = new Aktivitas();
    }

    public function index()
    {
        // Mengambil data aktivitas dari model
        $aktivitasData = $this->aktivitas->AllData();

        // Mendapatkan bulan dan jumlah aktivitas dari data aktivitas
        $labels = [];
        $bulanCount = [];

        // Menyiapkan array bulan
        $bulan = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',
        ];

        // Menginisialisasi jumlah pengunjung untuk setiap bulan dengan nilai 0
        $jumlahPengunjung = array_fill(0, 12, 0);

        // Menghitung jumlah pengunjung berdasarkan bulan
        foreach ($aktivitasData as $data) {
            $bulanIndex = (int) date('n', strtotime($data->tanggal_kunjungan));
            $jumlahPengunjung[$bulanIndex - 1]++;
        }

        // Mengisi array labels dan bulanCount dengan data yang sesuai
        foreach ($bulan as $index => $namaBulan) {
            $labels[] = $namaBulan;
            $bulanCount[] = $jumlahPengunjung[$index];
        }

        $data = [
            'title' => 'Chart Pengunjung',
            'labels' => $labels,
            'bulanCount' => $bulanCount,
        ];

        return view('aktivitas', $data);
    }

    public function data_buku()
    {
        // Mendapatkan bulan saat ini
        $currentMonth = date('m');

        // Query untuk mengambil data buku yang sering dipinjam pada bulan ini
        $books = DB::table('data_')
            ->select('judul_buku', DB::raw('COUNT(*) as total'))
            ->whereMonth('tanggal_kembali', $currentMonth)
            ->groupBy('judul_buku')
            ->orderBy('total', 'desc')
            ->limit(5) // Mengambil 5 buku dengan frekuensi peminjaman tertinggi
            ->get();

        return view('monthly-books', compact('books'));
    }
}
