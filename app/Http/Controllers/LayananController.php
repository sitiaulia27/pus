<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Layanan::all();
        return view('layanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::orderBy('id', 'asc')->get();
        return view('layanan.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'body' => 'required',
        ]);

        $layanan = new Layanan;
        $layanan->judul = $request->input('judul');
        $layanan->body = $request->input('body');
        $layanan->image = $request->file('image');
        $layanan->id_kategori = $request->input('id');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post-layanan');
            $layanan->image = $imagePath;
        }
        $layanan->save();

        notify()->success('Layanan Berhasil Ditambahkan');
        return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Layanan::where('id', $id)->first();
        $kategoris = Kategori::all();

        return view('layanan.edit', compact('edit', 'kategoris'));
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
        $request->validate([
            'judul' => 'required',
            'body' => 'required',
        ]);

        $layanan = Layanan::findOrFail($id);
        $layanan->judul = $request->input('judul');
        $layanan->body = $request->input('body');
        $layanan->id_kategori = $request->input('id');

        if ($request->hasFile('image')) {
            // Menghapus gambar lama
            Storage::delete($layanan->image);

            // Menyimpan gambar baru
            $imagePath = $request->file('image')->store('post-layanan');
            $layanan->image = $imagePath;
        }

        $layanan->save();

        notify()->success('Layanan Berhasil Diperbarui');
        return redirect()->route('layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Layanan::where("id", $id)->delete();
        notify()->success('Layanan Berhasil Di Hapus');
        return back();
    }

    public function json(Request $request)
    {
        $data = Layanan::orderBy('id', 'ASC')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('image', function ($data) {
                return "<img src='/storage/$data->image' />";
            })

            ->editColumn('body', function ($row) {
                return '<div class="body-content" style="overflow: auto; height: 200px;">' . $row->body . '</div>';
            })
            ->addColumn('action', function ($row) {
                $editRoute = route('layanan.edit', ['layanan' => $row->id]);
                $destroyRoute = route('layanan.destroy', ['layanan' => $row->id]);
                $showRoute = route('layanan.show', ['layanan' => $row->id]);
                return '<div class="buttons">
            <a href="' . $editRoute . '" class="btn btn-primary btn-md"><i class="fa fa-edit"></i></a>
            <a href="' . $showRoute . '" class="btn btn-info mr-2"><i class="fa fa-eye"></i></a>
            <form action="' . $destroyRoute . '" method="POST" style="display: inline-block;">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button class="btn btn-danger delete" type="submit" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i></button>
            </form>
        </div>';
            })
            ->rawColumns(['image', 'body', 'action'])
            ->make(true);
    }
}
