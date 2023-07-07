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
        $array = [];
        foreach ($sub as $s) {
            array_push($array, $s->sub_komponen_id);
        }

        $subSub = SubSubKomponen::whereIn('sub_komponen_id', $array)->get();
        $array2 = [];
        foreach ($subSub as $ss) {
            array_push($array2, $ss->sub_sub_komponen_id);
        }

        $pertanyaan = Pertanyaan::whereIn('sub_komponen_id', $array)->orWhereIn('sub_sub_komponen_id', $array2)->get();
        $array3 = [];
        foreach ($pertanyaan as $tanya) {
            array_push($array3, $tanya->id_pertanyaan);
        }

        $pilihan = Pilihan::whereIn('id_pertanyaan', $array3)->get();

        $subPertanyaan = SubPertanyaan::whereIn('id_pertanyaan', $array3)->get();
        $array4 = [];
        foreach ($subPertanyaan as $sp) {
            array_push($array4, $sp->sub_pertanyaan_id);
        }
        $pilihanSub = Pilihan::whereIn('sub_pertanyaan_id', $array4)->get();

        return view('akreditasi.show', compact('komponen', 'sub', 'subSub', 'pertanyaan', 'pilihan', 'subPertanyaan', 'pilihanSub'));
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
        $komponen = Komponen::where('komponen_id', $id)->first();
        $sub = SubKomponen::where('komponen_id', $id)->get();
        $array = [];
        foreach ($sub as $s) {
            array_push($array, $s->sub_komponen_id);
        }

        $subSub = SubSubKomponen::whereIn('sub_komponen_id', $array)->get();
        $array2 = [];
        foreach ($subSub as $ss) {
            array_push($array2, $ss->sub_sub_komponen_id);
        }

        $pertanyaan = Pertanyaan::whereIn('sub_komponen_id', $array)->orWhereIn('sub_sub_komponen_id', $array2)->get();
        $array3 = [];
        foreach ($pertanyaan as $tanya) {
            array_push($array3, $tanya->id_pertanyaan);
        }

        $subPertanyaan = SubPertanyaan::whereIn('id_pertanyaan', $array3)->get();
        // return $subPertanyaan;

        foreach ($pertanyaan as $tanya) {
            if ($request->get("pilihan_$tanya->id_pertanyaan") && $request->get("pilihan_$tanya->id_pertanyaan") != null) {
                $add = Pertanyaan::where('id_pertanyaan', $tanya->id_pertanyaan)->firstOrFail();
                $add->id_pertanyaan = $tanya->id_pertanyaan;
                $add->nilai = $request->get("pilihan_$tanya->id_pertanyaan");
                $save = $add->save();
            }
        }
        foreach ($subPertanyaan as $sp) {
            if ($request->get("pilihan_sub_$sp->sub_pertanyaan_id") && $request->get("pilihan_sub_$sp->sub_pertanyaan_id") != null) {
                $add = Pertanyaan::where('id_pertanyaan', $sp->id_pertanyaan)->firstOrFail();
                $add->id_pertanyaan = $sp->id_pertanyaan;
                $add->nilai = $request->get("pilihan_sub_$sp->sub_pertanyaan_id");
                $save = $add->save();
            }
        }
        $jum = count($pertanyaan);
        $sum = Pertanyaan::whereIn('sub_komponen_id', $array)->orWhereIn('sub_sub_komponen_id', $array2)->sum('nilai');
        $nilai = ($sum / $jum) / 5 * 100;
        $edit = Komponen::where('komponen_id', $id)->firstOrFail();
        $edit->komponen_id = $id;
        $edit->nilai = $nilai;
        $save = $edit->save();
        if ($save) {
            return redirect()->to('/akreditasi');
        }
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
