<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class AktivitasController extends Controller
{
    protected $aktivitas;

    public function __construct()
    {
        $this->aktivitas = new Aktivitas();
    }

    public function StoreDataPeminjaman()
    {
        $apiKey = '2f268133-0b37-40b8-a0ff-03cba2a1fef4';
        $client = new Client();
        $apiUrl1 = 'https://dev-api-gateway.polindra.ac.id/api/perpustakaan/peminjaman';

        $response1 = $client->post($apiUrl1, [
            'form_params' => [
                'key' => $apiKey,
                'debug' => 'true',
                'datatable' => 'false',
                'per_page' => '1271',
            ],
            'verify' => false, // Disable SSL verification if needed
        ]);
        if ($response1->getStatusCode() === 200) {
            $responseData1 = json_decode($response1->getBody(), true);

            if ($responseData1['meta']['status'] === 'success') {
                $data1 = $responseData1['result']['data'];

                // Loop melalui setiap entri data
                $i = 1;
                foreach ($data1 as $entry) {
                    DB::table('buku')->insert([
                        'id' => $i,
                        'book_name' => $entry['book_name'],
                        'member_id' => $entry['member_id'],
                    ]);
                    $i++;
                }
            }
        }
        return $this->index();
    }

    public function index()
    {

        $buku = DB::table('buku')->first();
        $apiUrl = 'https://dev-api-gateway.polindra.ac.id/api/perpustakaan/pengunjung';
        $apiKey = '2f268133-0b37-40b8-a0ff-03cba2a1fef4';

        $client = new Client();
        $response = $client->post($apiUrl, [
            'form_params' => [
                'key' => $apiKey,
                'debug' => 'true',
                'datatable' => 'false',
                'per_page' => '6790',
                'fields' => 'checkin_date',
            ],
            'verify' => false, // Disable SSL verification if needed
        ]);

        $apiUrl1 = 'https://dev-api-gateway.polindra.ac.id/api/perpustakaan/peminjaman';

        $response1 = $client->post($apiUrl1, [
            'form_params' => [
                'key' => $apiKey,
                'debug' => 'true',
                'datatable' => 'false',
                'per_page' => '1271',
            ],
            'verify' => false, // Disable SSL verification if needed
        ]);
        // dd(json_decode($response1->getBody(), true));
        if ($response->getStatusCode() === 200 || $response1->getStatusCode() === 200) {
            $responseData = json_decode($response->getBody(), true);
            $responseData1 = json_decode($response1->getBody(), true);
            // dd($responseData1);

            if ($responseData['meta']['status'] === 'success' || $responseData1['meta']['status'] === 'success') {
                $data = $responseData['result']['data'];
                $data1 = $responseData1['result']['data'];
                // Menginisialisasi jumlah pengunjung untuk setiap bulan dengan nilai 0
                $jumlahPengunjung = array_fill(0, 12, 0);

                // Loop melalui setiap entri data
                foreach ($data as $entry) {
                    $checkinDate = $entry['checkin_date'];
                    $tahun = (int) date('Y', strtotime($checkinDate));

                    // Filter data hanya pada tahun tertentu (misalnya 2022)
                    if ($tahun === 2022) {
                        $bulanIndex = (int) date('n', strtotime($checkinDate));
                        $jumlahPengunjung[$bulanIndex - 1]++;
                    }
                }

                // Membuat array labels (nama bulan) dan bulanCount (jumlah pengunjung)
                $bulan = [
                    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',
                ];
                $labels = [];
                $bulanCount = [];

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

                $peminjaman['peminjaman'] = $buku;

                return view('aktivitas', $data, $peminjaman, $labels);
            } else {
                // Menampilkan pesan kesalahan jika respons tidak berhasil
                echo 'Error: ' . $responseData['meta']['message'];
            }
        } else {
            // Error saat melakukan permintaan
            echo 'Error: ' . $response->getReasonPhrase();
        }
    }
}
