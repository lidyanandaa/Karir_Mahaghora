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
                        <div class="card-body"><a href="/kategori"> Kembali</a>
                            <div class="card-body">
                                <div class="card-header text-center">
                                    <strong>
                                        <h3>Input Kategori</h3>
                                    </strong>
                                </div>
                                @foreach($kategori as $k)
                                <form action="/kategori/updatekategori" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $k->id_kategori }}"> <br />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Kategori</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namakategori" placeholder="Enter Nama User" value="{{ $k->nama_kategori }}">
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