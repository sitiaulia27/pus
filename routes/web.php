<?php

use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SliderController;
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
route::get('/', [MainController::class, 'index'])->name('layouts.index');
route::get('/profil', [MainController::class, 'liat_profil'])->name('profil');
route::get('/form', [MainController::class, 'form'])->name('form');
route::get('/tatatertib', [MainController::class, 'tatatertib'])->name('tatatertib');
route::get('/sirkuref', [MainController::class, 'sirkuref'])->name('sirkuref');
route::get('/baca_admin', [MainController::class, 'baca_admin'])->name('baca_admin');
route::get('/peminjaman', [MainController::class, 'peminjaman'])->name('peminjaman');
route::get('/layanan_lainnya', [MainController::class, 'layanan_lainnya'])->name('layanan_lainnya');
route::get('/postberita/{slug}', [MainController::class, 'postberita'])->name('postberita');
route::get('/informasi', [MainController::class, 'informasi'])->name('informasi');

Auth::routes([
    'register' => false,
]);

//dashboard
Route::group(['admin' => 'dashboard', 'middleware' => ['web', 'auth']], function () {
    route::get('/dashboard', [HomeController::class, 'index'])->name('admin.content');
    Route::get('/user/edit', [HomeController::class, 'edit'])->name('user.edit');
    Route::put('/user', [HomeController::class, 'update'])->name('user.update');

    //karyawan
    Route::get('karyawan/json', [DataKaryawanController::class, 'json'])->name('karyawan.index.json');
    Route::resource("karyawan", DataKaryawanController::class);

    //berita
    Route::get('berita/json', [BeritaController::class, 'json'])->name('berita.index.json');
    Route::resource("berita", BeritaController::class);

    //Akreditasi
    Route::get('akreditasi/json', [AkreditasiController::class, 'json'])->name('akreditasi.index.json');
    Route::get('getAkreditasi', [AkreditasiController::class, 'getAkreditasi'])->name('getAkreditasi');
    Route::resource("akreditasi", AkreditasiController::class);

    //Slide
    Route::get('slider/json', [SliderController::class, 'json'])->name('slider.index.json');
    Route::resource("slider", SliderController::class);

    //Kategori
    Route::get('kategori/json', [KategoriController::class, 'json'])->name('kategori.index.json');
    Route::resource("kategori", KategoriController::class);

    //Layanan
    Route::get('layanan/json', [LayananController::class, 'json'])->name('layanan.index.json');
    Route::resource("layanan", LayananController::class);
});
