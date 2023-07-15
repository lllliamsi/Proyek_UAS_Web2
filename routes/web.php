<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Buat routing ke home
Route::get('/', [HouseController::class, 'index']);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // menampilkan detail produk di front.detail
    Route::get('/detail/{id}', [ProdukController::class, 'show']);


    // Buat routing ke dashboard admin
    Route::get('/dashboard', [AdminController::class, 'index']);

    // Buat routing ke produk admin
    Route::get('/produk', [ProdukController::class, 'index']);

    // Buat routing ke kategori_produk admin
    Route::get('/kategori', [ProdukController::class, 'kategori']);

    // Buat routing ke pesanan admin
    Route::get('/pesanan', [ProdukController::class, 'pesanan']);


    // Buat routing ke input_kategori admin
    Route::get('/inputKategori', [ProdukController::class, 'inputKategori']);

    // Buat routing untuk create produk
    Route::get('/produk/create', [ProdukController::class, 'input']);

    Route::post('/produk/store', [ProdukController::class, 'store']);

    Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});