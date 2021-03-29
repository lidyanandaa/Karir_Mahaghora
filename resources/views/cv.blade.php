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
                    <h1>CV</h1>
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
                                            <td align="center"><strong>Nama Lengkap</strong></td>
                                            <td align="center"><strong>Jenis Kelamin</strong></td>
                                            <td align="center"><strong>Email</strong></td>
                                            <td align="center"><strong>No HP</strong></td>
                                            <td align="center"><strong>Pendidikan Terakhir</strong></td>
                                            <td align="center"><strong>Berkas</strong></td>
                                            </tr>
                                            @foreach($cv as $c)
                                            <tr>
                                            <td align="center">{{ $loop->iteration }}</td>
                                            <td align="center">{{ $c->nama_lengkap_cv }}</td>
                                            <td align="center">{{ $c->jenis_kelamin_cv }}</td>
                                            <td align="center">{{ $c->email_cv }}</td>
                                            <td align="center">{{ $c->no_hp_cv }}</td>
                                            <td align="center">{{ $c->pendidikan_terakhir_cv }}</td>
                                            <td align="center"><a href="storage/storage/berkas_file_cv/{{$c->nama_berkas_cv}}">
                                                        {{$c->nama_berkas_cv}}
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
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