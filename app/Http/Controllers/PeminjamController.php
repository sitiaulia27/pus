<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Peminjam;
use App\Models\Status;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{

    public function index()
    {
        $data = Peminjam::all();
        return view('peminjam.index', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjam.create',
            [
                'jurusans' => Jurusan::all(),
                'statuses' => Status::all(),
            ]);
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

            'nim' => 'required|unique:peminjams',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan_id' => 'required',
            'judul_buku' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status_id' => 'required',
        ]);

        Peminjam::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan_id' => $request->jurusan_id,
            'judul_buku' => $request->judul_buku,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status_id' => $request->status_id,
        ]);

        notify()->success('Peminjam Berhasil Ditambahkan');
        return redirect()->route('peminjam.index');
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
     * param \App\Models\Peminjam $peminjam
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Peminjam::find($id);
        return view('peminjam.edit', compact('edit'),
            [
                'jurusans' => Jurusan::all(),
                'statuses' => Status::all(),
            ]);
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

            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan_id' => 'required',
            'judul_buku' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status_id' => 'required',
        ]);

        Peminjam::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan_id' => $request->jurusan_id,
            'judul_buku' => $request->judul_buku,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status_id' => $request->status_id,
        ]);

        notify()->success('Peminjam Berhasil Di Update');
        return redirect()->route('peminjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Peminjam $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjam::where("id", $id)->delete();
        notify()->success('Berhasil Menghapus Data Peminjam');
        return back();
    }

    public function pesan()
    {
        // Session::flash('sukses', 'Ini notifikasi SUKSES');
        return redirect('pesanberhasil');
    }
}
