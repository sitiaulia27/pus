<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Data_Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data["count_data_karyawan"] = Data_Karyawan::count();
        $data["count_berita"] = Berita::count();
        return view('admin.content', $data);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        notify()->success('Perubahan Berhasil Disimpan');
        return redirect()->route('admin.content');
    }
}
