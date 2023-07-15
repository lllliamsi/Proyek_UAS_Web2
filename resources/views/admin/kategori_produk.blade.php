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
                            <h3>Data Kategori</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $nomor = 1;
                                    @endphp
                                    @foreach ($kategori_produk as $kp) 
                                        <tr>
                                            <th scope="row">
                                                {{ $nomor }}
                                            </th>
                                            <td>
                                                {{ $kp->nama }}
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
