<?php

namespace App\Http\Controllers;

use App\models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();
        return view('slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|image',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('post-slide');
        }

        Slider::create($validatedData);
        notify()->success('Slide Berhasil Ditambahkan');
        return redirect()->route('slider.index');
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
        $edit = Slider::find($id);
        return view('slider.edit', compact('edit'));
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
            'title' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('post-slide');
        }

        Slider::where('id', $id)->update($validatedData);

        notify()->success('Slide Berhasil Diubah');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::where("id", $id)->delete();
        notify()->success('Slide Berhasil Di Hapus');
        return back();
    }

    public function json(Request $request)
    {
        $data = Slider::orderBy('id', 'ASC')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('image', function ($data) {
                $imagePath = '/storage/' . $data->image;
                $image = "<img src='$imagePath' width='100' height='150' />";
                return $image;
            })
            ->addColumn('action', function ($row) {
                $editRoute = route('slider.edit', ['slider' => $row->id]);
                $destroyRoute = route('slider.destroy', ['slider' => $row->id]);
                return '<div class="buttons">
            <a href="' . $editRoute . '" class="btn btn-primary btn-md"><i class="fa fa-edit"></i></a>
            <form action="' . $destroyRoute . '" method="POST" style="display: inline-block;">
                ' . csrf_field() . '
                ' . method_field('DELETE') . '
                <button class="btn btn-danger delete" type="submit" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i></button>
            </form>
        </div>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}
