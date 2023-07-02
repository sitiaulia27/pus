<?php

namespace App\Http\Controllers;

use App\Models\Data_Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = data_karyawan::paginate(5);
        return view('karyawan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([

            'nama' => 'required',
            'posisi' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|image',
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('post-karyawan');
        }

        Data_Karyawan::create($validatedData);
        notify()->success('Data Karyawan Berhasil Ditambahkan');
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Data_Karyawan::find($id);
        return view('karyawan.edit', compact('edit'));
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
        $rules = [
            'nama' => 'required',
            'posisi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['foto'] = $request->file('foto')->store('post-karyawan');
        }

        Data_Karyawan::where('id', $id)->update($validatedData);

        notify()->success('Data Karyawan Berhasil Diubah');
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data_Karyawan::where("id", $id)->delete();
        notify()->success('Berhasil Menghapus Data Karyawan');
        return back();
    }

    public function showTeam()
    {
        $tim = Data_Karyawan::all(); // Mengambil semua data tim dari model Tim
        return view('layouts.index', compact('tim'));
    }

    public function json(Request $request)
    {
        $data = Data_Karyawan::orderBy('id', 'ASC')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('foto', function ($data) {
                return "<img src='/storage/$data->foto' />";
            })
            ->addColumn('action', function ($row) {
                $editRoute = route('karyawan.edit', ['karyawan' => $row->id]);
                $destroyRoute = route('karyawan.destroy', ['karyawan' => $row->id]);
                return '<div class="buttons">
            <a href="' . $editRoute . '" class="btn btn-primary btn-md"><i class="fa fa-edit"></i></a>
            <form action="' . $destroyRoute . '" method="POST" style="display: inline-block;">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button class="btn btn-danger delete" type="submit" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i></button>
            </form>
        </div>';
            })
            ->rawColumns(['foto', 'action'])
            ->make(true);
    }

}
