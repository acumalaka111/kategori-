<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


//Route::get('/', function () {
// return view('welcome');
//   });

//Route::get('/home', function () {
// return "Hallo nama saya adi wong";
//   });

Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/', [HomepageController::class, 'index']);

Route::get('/beranda', [LatihanController::class, 'beranda']);

Route::get('/about', [HomepageController::class, 'about']);

Route::get('/kontak', [HomepageController::class, 'kontak']);

//Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/kategori/{slug}', [HomepageController::class, 'kategori.index']);

Route::get('/produk/{slug}', [HomepageController::class, 'produkdetail']);

//Route grup kategori
Route::group(['prefix' => 'mahasiswa'], function () {
    Route::get('/mahasiswa', 'DashboardController@index');
    Route::get('pendaftaran', function () {
        return "Halaman pendaftaran";
   });
   Route::get('ujian', function () {
        return "Halaman ujian ";
   });
   Route::get('nilai', function () {
        return "Halaman nilai ";
   });
});
