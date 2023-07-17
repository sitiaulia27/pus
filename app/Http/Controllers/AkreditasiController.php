<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use App\Models\Komponen;
use App\Models\Pertanyaan;
use App\Models\Pilihan;
use App\Models\SubKomponen;
use App\Models\SubPertanyaan;
use App\Models\SubSubKomponen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use Yajra\DataTables\DataTables;

class AkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Komponen::all();
        $latestData = Akreditasi::join(
            DB::raw("(SELECT komponen_id, MAX(created_at) as max_created_at FROM akreditasi GROUP BY komponen_id) latest"),
            function ($join) {
                $join->on('akreditasi.komponen_id', '=', 'latest.komponen_id');
                $join->on('akreditasi.created_at', '=', 'latest.max_created_at');
            }
        )->where('akreditasi.user_id', '=', Auth::user()->id)
            ->get();

        $result = 0;

        foreach ($data as $item) {
            $latestRecord = $latestData->firstWhere('komponen_id', $item->komponen_id);
            $item->nilai = $latestRecord ? $latestRecord->nilai : null;
            if ($latestRecord) {
                $result += $latestRecord->nilai;
            }
        }

        return view('akreditasi.index', compact('data', 'result'));
    }

    public function getAkreditasi()
    {
        $cetak = Komponen::all();

        $result = 0;

        foreach ($cetak as $item) {
            $latestRecord = Akreditasi::where('komponen_id', $item->komponen_id)
                ->latest('created_at')
                ->first();

            if ($latestRecord) {
                $item->nilai = $latestRecord->nilai;
                $result += $latestRecord->nilai;
            }
        }

        // Generate PDF
        $pdf = PDF::loadView('akreditasi.akre-cetak', compact('cetak', 'result'));

        // Set the response headers for PDF download
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="akreditasi.pdf"',
        ];

        return response($pdf->output(), 200, $headers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $komponen = Komponen::where('komponen_id', $id)->first();
        $sub = SubKomponen::where('komponen_id', $id)->get();
        $ids = '';
        foreach ($sub as $s) {
            $ids .= $s->sub_komponen_id . ',';
        }
        $arr = rtrim($ids, ",");
        $array = explode(",", $arr);
        $subSub = SubSubKomponen::whereIn('sub_komponen_id', $array)->get();

        $pertanyaan = Pertanyaan::all();

        $pilihan = Pilihan::all();

        $subPertanyaan = SubPertanyaan::all();

        $latestData = Akreditasi::where("user_id", Auth::user()->id)
            ->where("komponen_id", $id)
            ->latest('created_at')
            ->first();

        return view('akreditasi.show', compact('komponen', 'sub', 'subSub', 'pertanyaan', 'pilihan', 'subPertanyaan', 'latestData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $totalPilihan = 0;
        $totalSoal = 0;
        $komponen_id = $request->komponen_id;
        $user_id = Auth::user()->id;
        $options = [];

        foreach ($request->input() as $key => $value) {
            if (strpos($key, 'pilihan_') === 0) {
                $totalPilihan += intval($value);
                $totalSoal += 1;
                $options[$key] = $value;
            }
        }

        $komponen = Komponen::where("komponen_id", $komponen_id)->first();

        $score = $totalPilihan / (5 * $totalSoal) * $komponen->bobot;

        $akreditasi = new Akreditasi;

        $akreditasi->user_id = $user_id;
        $akreditasi->komponen_id = $komponen_id;
        $akreditasi->nilai = $score;
        $akreditasi->options = json_encode($options);

        $akreditasi->save();

        notify()->success('Akreditasi Berhasil Disimpan');
        return redirect()->route('akreditasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function json(Request $request)
    {
        $data = Komponen::orderBy('komponen_id', 'ASC')->get();

        $latestData = Akreditasi::join(
            DB::raw("(SELECT komponen_id, MAX(created_at) as max_created_at FROM akreditasi GROUP BY komponen_id) latest"),
            function ($join) {
                $join->on('akreditasi.komponen_id', '=', 'latest.komponen_id');
                $join->on('akreditasi.created_at', '=', 'latest.max_created_at');
            }
        )->get();

        foreach ($data as $item) {
            $latestRecord = $latestData->firstWhere('komponen_id', $item->komponen_id);
            $item->nilai = $latestRecord ? $latestRecord->nilai : "-";
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('komponen', function ($row) {
                return $row->nama_komponen;
            })
            ->addColumn('nilai', function ($row) {
                return $row->nilai; // Ganti 'skor' dengan nama kolom yang sesuai dalam tabel Komponen
            })
            ->addColumn('action', function ($row) {
                $showRoute = route('akreditasi.show', ['akreditasi' => $row->komponen_id]);
                return '<div class="buttons">
            <a href="' . $showRoute . '" class="btn btn-info mr-2"><i class="fa fa-eye"></i></a>
        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
