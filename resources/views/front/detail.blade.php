@extends('front.layout.appfront')
@section('content')
    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>DETAIL PRODUCT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Informasi produk -->
                    <div class="container p-4">
                        <div class="row p-5 ">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <div class="card mb-3 bg-light shadow p-3 mb-5 bg-body rounded" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('front/images/sepatu.svg') }}" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td>
                                                                {{ $post->nama }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Harga</td>
                                                            <td>
                                                                {{ $post->harga_jual }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Stok</td>
                                                            <td>
                                                                {{ $post->stok }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Deskripsi</td>
                                                            <td>
                                                                {{ $post->deskripsi }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kategori Produk</td>
                                                            <td>
                                                                {{ $post->nama_kategori }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a class="btn btn-danger" href="{{ url('/home') }}">Kembali</a></td>
                                                            <td><a class="btn btn-primary" href="{{ url('pesanan/create') }}">Beli</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End product Area -->
@endsection()
