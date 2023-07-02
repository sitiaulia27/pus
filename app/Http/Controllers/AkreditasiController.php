<?php

namespace App\Http\Controllers;

use App\Models\Komponen;
use App\Models\Pertanyaan;
use App\Models\Pilihan;
use App\Models\SubKomponen;
use App\Models\SubPertanyaan;
use App\Models\SubSubKomponen;
use Illuminate\Http\Request;
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
        return view('akreditasi.index', compact('data'));
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
        //
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

        return view('akreditasi.show', compact('komponen', 'sub', 'subSub', 'pertanyaan', 'pilihan', 'subPertanyaan'));
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
        return $request;
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
