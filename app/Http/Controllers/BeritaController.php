<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::all();
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
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            $file->move(public_path('images/posts-berita'), $filenameToStore);

            $berita->image = $filenameToStore;
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

            $validatedData['image'] = $request->file('image')->store('images/posts-berita');
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

    public function showContent()
    {
        $berita = Berita::all(); // Mengambil semua data berita dari model Berita

        return view('layouts.content', compact('berita'));
    }

}
