<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::orderBy('created_at', 'desc')->get();
        return view('berita.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'judul' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|image',
        ]);

        $berita = new Berita;
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('posts-berita');
            $berita->image = $validatedData['image'];
        }

        $berita->judul = $validatedData['judul'];
        $berita->slug = Str::slug($validatedData['judul'], '-');
        $berita->body = $validatedData['body'];

        $berita->save();

        notify()->success('Berita Berhasil Ditambahkan');
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Berita::find($id);
        return view('berita.edit', compact('edit'));
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
            'judul' => 'required',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($berita->image) {
                Storage::delete($berita->image);
            }

            $validatedData['image'] = $request->file('image')->store('public/images/posts-berita');
            $berita->image = $validatedData['image'];
        }

        $berita->judul = $validatedData['judul'];
        $berita->slug = Str::slug($validatedData['judul'], '-');
        $berita->body = $validatedData['body'];

        $berita->save();

        notify()->success('Berita Berhasil Di Update');
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::where("id", $id)->delete();
        notify()->success('Berita Berhasil Di Hapus');
        return back();
    }

    public function json(Request $request)
    {
        $data = Berita::orderBy('created_at', 'desc')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('image', function ($data) {
                return "<img src='/storage/$data->image' />";
            })
            ->editColumn('body', function ($row) {
                return '<div class="body-content" style="overflow: auto; height: 200px;">' . $row->body . '</div>';
            })
            ->addColumn('action', function ($row) {
                $editRoute = route('berita.edit', ['beritum' => $row->id]);
                $destroyRoute = route('berita.destroy', ['beritum' => $row->id]);
                $showRoute = route('berita.show', ['beritum' => $row->id]);
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
