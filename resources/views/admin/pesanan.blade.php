@extends('admin.layout.appadmin')
@section('content')
    <br>
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Pesanan</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $nomor = 1;
                                    @endphp
                                    @foreach ($pesanan as $p) 
                                    <tr>
                                        <th scope="row">
                                            @php $nomor @endphp
                                        </th>
                                        <td>
                                            {{ $p->nama_pemesan }}
                                        </td>
                                        <td>
                                            {{ $p->tanggal }}
                                        </td>
                                        <td>
                                            {{ $p->alamat_pemesan }}
                                        </td>
                                        <td>
                                            {{ $p->no_hp }}
                                        </td>
                                        <td>
                                            {{ $p->email }}
                                        </td>
                                        <td>
                                            {{ $p->produk_id }}
                                        </td>
                                        <td>
                                            {{ $p->jumlah_pesanan }}
                                        </td>
                                        <td>
                                            {{ $p->deskripsi }}
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
