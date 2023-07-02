<?php

use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
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
route::get('/form', [App\Http\Controllers\MainController::class, 'form'])->name('form');
route::get('/aktivitas', [App\Http\Controllers\MainController::class, 'aktivitas'])->name('aktivitas');
route::get('/tatatertib', [App\Http\Controllers\MainController::class, 'tatatertib'])->name('tatatertib');
route::get('/sirkuref', [App\Http\Controllers\MainController::class, 'sirkuref'])->name('sirkuref');
route::get('/mulmedadmin', [App\Http\Controllers\MainController::class, 'mulmedadmin'])->name('mulmedadmin');
route::get('/peminjaman', [App\Http\Controllers\MainController::class, 'peminjaman'])->name('peminjaman');
route::get('/postberita', [App\Http\Controllers\MainController::class, 'postberita'])->name('postberita');

//aktivitas
route::get('/aktivitas', [App\Http\Controllers\AktivitasController::class, 'index'])->name('aktivitas');
route::get('/storeDataPeminjaman', [App\Http\Controllers\AktivitasController::class, 'StoreDataPeminjaman'])->name('StoreDataPeminjaman');

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
    Route::get('karyawan/json', [DataKaryawanController::class, 'json'])->name('karyawan.index.json');
    Route::resource("karyawan", DataKaryawanController::class);
    //berita
    Route::get('berita/json', [BeritaController::class, 'json'])->name('berita.index.json');
    Route::resource("berita", BeritaController::class);
    //Akreditasi
    Route::get('akreditasi/json', [AkreditasiController::class, 'json'])->name('akreditasi.index.json');
    Route::resource("akreditasi", AkreditasiController::class);
});
