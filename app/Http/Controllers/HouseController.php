<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class HouseController extends Controller
{
    public function index()
    {
        // Jalanin fungsi getAllProduk dari model
        $produk = Produk::getAllProduk();

        // ambil data kategori_produk dari model
        $kategori_produk = KategoriProduk::all();

        // Mengirim data produk ke view 'front.home'
        return view('front.home', compact('produk', 'kategori_produk'));

    }
}