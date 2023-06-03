<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PeminjamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('layouts.content');
// });
//user
route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('layouts.index');
route::get('/profil', [App\Http\Controllers\MainController::class, 'liat_profil'])->name('profil');
route::get('/peminjamanan', [App\Http\Controllers\MainController::class, 'peminjaman'])->name('peminjaman');
route::get('/pengembalian', [App\Http\Controllers\MainController::class, 'pengembalian'])->name('pengembalian');
('peminjaman');
route::get('/aktivitas', [App\Http\Controllers\MainController::class, 'aktivitas'])->name('aktivitas');
route::get('/tatatertib', [App\Http\Controllers\MainController::class, 'tatatertib'])->name('tatatertib');

//form login
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//logout
route::get('/logout', function () {
    \Auth::logout();
    return redirect('/home');
});

//dashboard
Route::group(['admin' => 'dashboard', 'middleware' => ['web', 'auth']], function () {
    route::get('/dashboard', [App\Http\Controllers\MainController::class, 'dashboard']);
    route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.content');

    //karyawan
    Route::resource("karyawan", DataKaryawanController::class);

    //peminjam
    Route::resource("peminjam", PeminjamController::class);

    //berita
    Route::resource("berita", BeritaController::class);

    //jurusan
    Route::resource("jurusan", JurusanController::class);
});

Route::get('/pesanberhasil', [\App\Http\Controllers\PeminjamController::class, 'pesan']);
