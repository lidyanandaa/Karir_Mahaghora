@extends('templates.default2')

@section('content')
@include('templates.partials.sidebar')
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
                        <div class="card-body"><a href="/lowongan"> Kembali</a>
                            <div class="card-body">
                                <div class="card-header text-center">
                                    <strong>
                                        <h3>Input Lowongan Kerja</h3>
                                    </strong>
                                </div>
                                @foreach($lowongan as $l)
                                <form action="/lowongan/updatelowongan" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $l->id_lowongan }}"> <br />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lowongan Kerja</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namalowongan" placeholder="Enter Nama Lowongan Kerja" required="required" value="{{ $l->nama_lowongan }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lokasi Penempatan</label>
                                        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lokasipenempatan" placeholder="Enter Lokasi Penempatan" required="required" value="{{ $l->lokasi_penempatan }}">
                                            @foreach($lowongan as $data2)
                                            <option value="{{ $data2->lokasi_penempatan}}" {{$l->id_lowongan == $l->lokasi_penempatan  ? 'selected' : ''}}>{{$data2->lokasi_penempatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kategori" placeholder="Enter Kategori" required="required" value="{{ $l->kategori }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pengalaman</label>
                                        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pengalaman" placeholder="Enter pengalaman" required="required" value="{{ $l->pengalaman }}">
                                        @foreach($lowongan as $data2)
                                            <option value="{{ $data2->id_lowongan}}" {{$l->id_lowongan == $l->id_lowongan  ? 'selected' : ''}}>{{$data2->pengalaman}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gaji</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gaji" placeholder="Enter Gaji" required="required" value="{{ $l->gaji }}">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tentang Pekerjaan</label>
                                        <input type="text" class="form-control" id="tentangpekerjaan" aria-describedby="emailHelp" name="tentangpekerjaan" placeholder="Enter Tentang Pekerjaan" required="required" value="{{ $l->tentang_pekerjaan }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Awal</label>
                                        <input type="date" class="form-control" id="tanggalawal" aria-describedby="emailHelp" name="tanggalawal" placeholder="Enter Tanggal Awal" required="required" value="{{ $l->tanggal_awal }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Akhir</label>
                                        <input type="date" class="form-control" id="tanggalakhir" aria-describedby="emailHelp" name="tanggalakhir" placeholder="Enter Tanggal Akhir" required="required" value="{{ $l->tanggal_akhir }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Batas Usia</label>
                                        <input type="text" class="form-control" id="batasusia" aria-describedby="emailHelp" name="batasusia" placeholder="Enter Batas Usia" required="required" value="{{ $l->batas_usia }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Persyaratan</label>
                                        <input type="text" class="form-control" id="persyaratan" aria-describedby="emailHelp" name="persyaratan" placeholder="Enter Persyaratan" required="required" value="{{ $l->persyaratan }}">
                                    </div>

                                    <input type="submit" value="Simpan" class="form-control button btn-danger">
                                </form>
                                @endforeach
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

@include('templates.partials.footer')
@endsection