@extends('templates.default')

@section('content')
@include('templates.partials._sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

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
                            <div class="card-header text-center">
                                <strong>
                                    <h3>Input Lowongan Kerja</h3>
                                </strong>
                            </div>
                            <!-- {{-- menampilkan error validasi --}} -->
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="/lowongan/input/tambahlowongan" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lowongan Kerja</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namalowongan" placeholder="Enter Nama Lowongan Kerja" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lokasi Penempatan</label>
                                    <select class="form-control" id="lokasipenempatan" aria-describedby="emailHelp" name="lokasipenempatan" placeholder="Enter Lokasi Penempatan" >
                                        <option selected>Pilih Lokasi Penempatan</option>
                                        <option value="PT. Mahaghora">PT. Mahaghora</option>
                                        <option value="PT. Manohara Asri">PT. Manohara Asri</option>
                                        <option value="PT. Ares Kusuma Raya">PT. Ares Kusuma Raya</option>
                                        <option value="PT. Pyramide Paramount">PT. Pyramide Paramount Indonesia</option>
                                        <option value="PT. Warung Indonesia">PT. Warung Indonesia</option>
                                        <option value="PT. Sumber Tirta Hakiki">PT. Sumber Tirta Hakiki</option>
                                        <option value="Pabrik Saus Tiram Sin Tai Hing">Pabrik Saus Tiram Sin Tai Hing</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" name="kategori" placeholder="Enter Kategori" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengalaman</label>
                                    <select class="form-control" id="pengalaman" aria-describedby="emailHelp" name="pengalaman" placeholder="Enter pengalaman" >
                                        <option selected>Pilih Pengalaman</option>
                                        <option value="Fresh Graduate">Fresh Graduate</option>
                                        <option value="Experienced">Experienced</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gaji</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gaji" placeholder="Enter Gaji" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tentang Pekerjaan</label>
                                    <input type="text" class="form-control" id="tentangpekerjaan" aria-describedby="emailHelp" name="tentangpekerjaan" placeholder="Enter Tentang Pekerjaan" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Awal</label>
                                    <input type="date" class="form-control" id="tanggalawal" aria-describedby="emailHelp" name="tanggalawal" placeholder="Enter Tanggal Awal" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Akhir</label>
                                    <input type="date" class="form-control" id="tanggalakhir" aria-describedby="emailHelp" name="tanggalakhir" placeholder="Enter Tanggal Akhir" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Batas Usia</label>
                                    <input type="text" class="form-control" id="batasusia" aria-describedby="emailHelp" name="batasusia" placeholder="Enter Batas Usia" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Persyaratan</label>
                                    <input type="text" class="form-control" id="persyaratan" aria-describedby="emailHelp" name="persyaratan" placeholder="Enter Persyaratan" >
                                </div>

                                <input type="submit" value="Simpan" class="form-control button btn-danger">
                            </form>
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