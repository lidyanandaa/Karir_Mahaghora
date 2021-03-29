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
                    <h1>Mahaghora Internship</h1>
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
                            
                        
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td align="center"><strong>No</strong></td>
                                                <td align="center"><strong>Nama Lengkap</strong></td>
                                                <td align="center"><strong>Jenis Kelamin</strong></td>
                                                <td align="center"><strong>Email</strong></td>
                                                <td align="center"><strong>No HP</strong></td>
                                                <td align="center"><strong>Instansi</strong></td>
                                                <td align="center"><strong>Jumlah Orang</strong></td>
                                                <td align="center"><strong>Berkas</strong></td>
                                            </tr>
                                            @foreach($internship as $i)
                                            <tr>
                                            <td align="center">{{ $loop->iteration }}</td>
                                            <td align="center">{{ $i->nama_lengkap_intern }}</td>
                                            <td align="center">{{ $i->jenis_kelamin_intern }}</td>
                                            <td align="center">{{ $i->email_intern }}</td>
                                            <td align="center">{{ $i->no_hp_intern }}</td>
                                            <td align="center">{{ $i->instansi_intern }}</td>
                                            <td align="center">{{ $i->jumlah_orang_intern }}</td>
                                            <td align="center"><a href="storage/storage/berkas_file_intern/{{$i->nama_berkas_intern}}">
                                                        {{$i->nama_berkas_intern}}
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