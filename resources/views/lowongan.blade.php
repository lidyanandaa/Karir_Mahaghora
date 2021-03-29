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
                    <h1>Lowongan Kerja</h1>
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
                                    <table id="example2" class="table table-bordered  table-striped table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <td align="center"><strong>No</strong></td>
                                                <td align="center"><strong>Nama Lowongan</strong></td>
                                                <td align="center"><strong>Lokasi Penempatan</strong></td>
                                                <td align="center"><strong>Kategori</strong></td>
                                                <td align="center"><strong>Pengalaman</strong></td>
                                                <td align="center"><strong>Gaji</strong></td>
                                                <td align="center"><strong>Tentang Pekerjaan</strong></td>
                                                <td align="center"><strong>Tanggal Awal</strong></td>
                                                <td align="center"><strong>Tanggal Akhir</strong></td>
                                                <td align="center"><strong>Batas Usia</strong></td>
                                                <td align="center"><strong>Persyaratan</strong></td>
                                                <td align="center"><strong>Tanggal Upload</strong></td>
                                                <td colspan="2" align="center"><strong>Aksi</strong></td>
                                            </tr>
                                            @foreach($lowongan as $l)
                                            <tr>
                                                <td align="center">{{ $loop->iteration }}</td>
                                                <td align="center">{{ $l->nama_lowongan }}</td>
                                                <td align="center">{{ $l->lokasi_penempatan }}</td>
                                                <td align="center">{{ $l->kategori }}</td>
                                                <td align="center">{{ $l->pengalaman }}</td>
                                                <td align="center">{{ $l->gaji }}</td>
                                                <td align="center">{{ $l->tentang_pekerjaan }}</td>
                                                <td align="center">{{ date('d F Y',strtotime($l->tanggal_awal)) }}</td>
                                                <td align="center">{{ date('d F Y',strtotime($l->tanggal_akhir)) }}</td>
                                                <td align="center">{{ $l->batas_usia }} Tahun</td>
                                                <td align="center">{{ $l->persyaratan }}</td>
                                                <td align="center">{{ $l->updated_at }}</td>
                                                <td align="center">
                                                    <a class="btn btn-primary " href="/lowongan/editlowongan/{{ $l->id_lowongan }}">Edit</a>
                                                </td>
                                                <td align="center">
                                                    <a class="btn btn-danger" href="/lowongan/hapuslowongan/{{ $l->id_lowongan }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <a href="/lowongan/input" class="btn btn-info float-left active mb-3" role="button" aria-pressed="true">
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