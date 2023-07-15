<?php

namespace App\Http\Controllers;

use App\Models\PesananProduk;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class ProdukController extends Controller
{
    public function index()
    {
        // Jalanin fungsi getAllProduk dari model
        $produk = Produk::getAllProduk();

        // Mengirim data produk ke view 'admin.produk'
        return view('admin.produk', compact('produk'));
    }

    public function kategori()
    {
        // ambil data kategori_produk dari model
        $kategori_produk = KategoriProduk::all();

        // Mengirim data produk ke view 'admin.kategori_produk'
        return view('admin.kategori_produk', compact('kategori_produk'));
    }

    public function pesanan()
    {
        // ambil data kategori_produk dari model
        $pesanan = PesananProduk::all();

        // Mengirim data produk ke view 'admin.pesanan'
        return view('admin.pesanan', compact('pesanan'));
    }

    public function input()
    {
        $produk = Produk::all();
        // ambil data kategori_produk dari model
        $kategori_produk = KategoriProduk::all();

        // Mengirim data produk ke view 'admin.input_produk'
        return view('admin.input_produk', compact('kategori_produk', 'produk'));
    }


    public function inputKategori()
    {

        // Mengirim data produk ke view 'admin.input_kategori'
        return view('admin.input_kategori');
    }

    // detail produk
    public function show(string $id)
    {
        // Jalanin fungsi getAllProduk dari model
        $produk = Produk::getAllProduk();

        // ambil data kategori_produk dari model
        $kategori_produk = KategoriProduk::all();

        //get post by ID
        $post = Produk::findOrFail($id);


        //render view with post
        return view('front.detail', compact('post', 'produk', 'kategori_produk'));
    }

    public function store(Request $request)
    {
        // fitur tambah data / validasi kirim data
        $produk = new Produk;

        // akses kolom kode lalu diisi dengan data input kode user
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;

        // simpan data ke database
        $produk->save();

        // menampilkan ke url produk
        return redirect('produk');
    }

    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();
        return view('admin.edit', compact(
            'produk',
            'kategori_produk'
        ));
    }

    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return redirect('produk')->with('success', 'Produk berhasil dihapus');
    }
}