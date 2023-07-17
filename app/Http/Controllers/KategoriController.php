<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::all();
        return view('kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
        ]);

        Kategori::create($validatedData);
        notify()->success('Kategori Berhasil Ditambahkan');
        return redirect()->route('kategori.index');
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
        $edit = Kategori::find($id);
        return view('kategori.edit', compact('edit'));
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
        ];

        $validatedData = $request->validate($rules);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $validatedData['nama'];

        $kategori->save();
        notify()->success('Kategori Berhasil Di Ubah');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::where("id", $id)->delete();
        notify()->success('Kategori Berhasil Di Hapus');
        return back();
    }

    public function json(Request $request)
    {
        $data = Kategori::orderBy('id', 'ASC')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $editRoute = route('kategori.edit', ['kategori' => $row->id]);
                $destroyRoute = route('kategori.destroy', ['kategori' => $row->id]);
                return '<div class="buttons">
            <a href="' . $editRoute . '" class="btn btn-primary btn-md"><i class="fa fa-edit"></i></a>
            <form action="' . $destroyRoute . '" method="POST" style="display: inline-block;">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button class="btn btn-danger delete" type="submit" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i></button>
            </form>
        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

}
