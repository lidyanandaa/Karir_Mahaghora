@extends('templates.default')

@section('content')
@include('templates.partials._sidebar')
<link rel="stylesheet" type="text/css" href="../../css/lowongancss.css">
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
                    <h1>Input Home</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
            </div>
        </div>
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
                                                <td align="center"><strong>Konten 1</strong></td>
                                                <td align="center"><strong>Konten 2</strong></td>
                                                <td align="center"><strong>Konten 3</strong></td>
                                                <td align="center"><strong>Konten 4</strong></td>
                                                <td align="center"><strong>Tanggal Upload</strong></td>
                                                <td colspan="2" align="center"><strong>Aksi</strong></td>
                                            </tr>
                                            @foreach($inputhome as $ih)
                                            <tr>
                                                <td align="center">{{ $loop->iteration }}</td>
                                                <td align="center">{{ $ih->konten1 }}</td>
                                                <td align="center">{{ $ih->konten2 }}</td>
                                                <td align="center">{{ $ih->konten3 }}</td>
                                                <td align="center">{{ $ih->konten4 }}</td>
                                                <td align="center">{{ $ih->updated_at }}</td>
                                                <td align="center">
                                                    <a class="btn btn-primary " href="/inputhome/editinputhome/{{ $ih->id_inputhome }}">Edit</a>
                                                </td>
                                                <td align="center">
                                                    <a class="btn btn-danger" href="/inputhome/hapusinputhome/{{ $ih->id_inputhome }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                    <br>
                                    <a href="/inputhome/inputanhome" class="btn btn-info float-left active mb-3" role="button" aria-pressed="true">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data</a>
                                </div>
                            </div>
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