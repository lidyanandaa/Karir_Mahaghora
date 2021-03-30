@extends('templates.default')

@section('content')
@include('templates.partials._sidebar')
<style>
    tr:nth-child(odd) {
        background-color: #f2f2f2
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="overflow-x:auto;">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td align="center"><strong>No</strong></td>
                                                <td align="center"><strong>Nama Kategori</strong></td>
                                                <td align="center"><strong>Tanggal Upload</strong></td>
                                                <td colspan="2" align="center"><strong>Aksi</strong></td>
                                            </tr>
                                            @foreach($kategori as $k)
                                            <tr>
                                                <td align="center">{{ $k->id_kategori }}</td>
                                                <td align="center">{{ $k->nama_kategori }}</td>
                                                <td align="center">{{ $k->updated_at }}</td>
                                                <td align="center">
                                                    <a class="btn btn-primary " href="/kategori/editkategori/{{ $k->id_kategori }}">Edit</a>
                                                </td>
                                                <td align="center">
                                                    <a class="btn btn-danger" href="/kategori/hapuskategori/{{ $k->id_kategori }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <a href="/kategori/input" class="btn btn-info float-left active mb-3" role="button" aria-pressed="true">
                                <i class="fa fa-plus"></i>
                                Tambah Data</a>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('templates.partials._footer')
@endsection