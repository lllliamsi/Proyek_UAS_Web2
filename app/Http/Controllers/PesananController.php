<?php

namespace App\Http\Controllers;
use App\Models\KategoriProduk;
use App\Models\PesananProduk;

use App\Models\Produk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::getAllProduk();
        $kategori_produk = KategoriProduk::all();
        $pesanan = PesananProduk::all();
        return view('front.pemesanan', compact('kategori_produk', 'pesanan', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //membuat tambah data
        $pesanan = new PesananProduk;
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
