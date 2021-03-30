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
                    <h1>Laporan Pelamar</h1>
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
                        <div class="card-header">
                            <form action="">
                                <div class="form-group">
                                    <label for="mulaicv">Mulai</label>
                                    <input class="form-control" type="date" name="mulaicv" id="mulaicv" value="{{ request('mulaicv') }}">
                                </div>
                                <div class="form-group">
                                    <label for="berakhircv">Berakhir</label>
                                    <input class="form-control" type="date" name="berakhircv" id="berakhircv" value="{{ request('berakhircv') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="overflow-x:auto;">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td align="center"><strong>No</strong></td>
                                                <td align="center"><strong>Nama Lengkap</strong></td>
                                                <td align="center"><strong>Jenis Kelamin</strong></td>
                                                <td align="center"><strong>Email</strong></td>
                                                <td align="center"><strong>No HP</strong></td>
                                                <td align="center"><strong>Pendidikan Terakhir</strong></td>
                                                <td align="center"><strong>Berkas</strong></td>
                                                <td align="center"><strong>Tanggal Upload</strong></td>
                                            </tr>
                                            @foreach($cv as $c)
                                            <tr>
                                                <td align="center">{{ $loop->iteration }}</td>
                                                <td align="center">{{ $c->nama_lengkap_cv }}</td>
                                                <td align="center">{{ $c->jenis_kelamin_cv }}</td>
                                                <td align="center">{{ $c->email_cv }}</td>
                                                <td align="center">{{ $c->no_hp_cv }}</td>
                                                <td align="center">{{ $c->pendidikan_terakhir_cv }}</td>
                                                <td align="center"><a href="storage/storage/berkas_file_cv/{{$c->nama_berkas_cv}}">{{$c->nama_berkas_cv}}</a></td>
                                                <td align="center">{{ date('d F Y',strtotime($c->updated_at)) }}</td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
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