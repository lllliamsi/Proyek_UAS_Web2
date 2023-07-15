@extends('admin.layout.appadmin')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <br>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Produk</h3>
                            <a class="btn btn-primary" href="{{ url('produk/create') }}">Tambah Produk</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Harga Beli</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Minimal Stok</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $nomor = 1;
                                    @endphp
                                    @foreach ($produk as $p)
                                        <tr>
                                            <th scope="row">
                                                {{ $nomor }}
                                            </th>
                                            <td>
                                                {{ $p->kode }}
                                            </td>
                                            <td>
                                                {{ $p->nama }}
                                            </td>
                                            <td>
                                                {{ $p->harga_jual }}
                                            </td>
                                            <td>
                                                {{ $p->harga_beli }}
                                            </td>
                                            <td>
                                                {{ $p->stok }}
                                            </td>
                                            <td>
                                                {{ $p->min_stok }}
                                            </td>
                                            <td>
                                                {{ $p->deskripsi }}
                                            </td>
                                            <td>
                                                {{ $p->nama_kategori }}
                                            </td>
                                            <td>
                                                <a href="{{ url('produk/edit/' . $p->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <a href="{{ url('produk/delete/' . $p->id) }}" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk?')">Delete</a>
                                            </td>
                                        </tr>
                                        @php
                                            $nomor++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->
@endsection()
