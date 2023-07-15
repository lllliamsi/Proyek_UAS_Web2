@extends('front.layout.appfront')
@section('content')


    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>FORM PEMESANAN PRODUK</h2>
                    </div>
                </div>
            </div>
            <div class="row p-5 ">
                <form method="POST" action="{{ url('pesanan/store') }}">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
                        <div class="col-8">
                            <input id="tanggal" name="tanggal" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk" class="col-4 col-form-label">Produk</label>
                        <div class="col-8">
                            <select id="produk_id" name="produk_id" class="">
                                @foreach ($produk as $p) 
                                    <option value="{{ $p->id }}">{{ $p->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-4 col-form-label">Nomor HP</label>
                        <div class="col-8">
                            <input id="no_hp" name="no_hp" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                        <div class="col-8">
                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5"
                                class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Product Area -->
@endsection()