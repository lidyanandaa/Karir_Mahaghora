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
                        <div class="card-body"><a href="/inputhome"> Kembali</a>
                            <div class="card-body">
                                <div class="card-header text-center">
                                    <strong>
                                        <h3>Input Home</h3>
                                    </strong>
                                </div>
                                @foreach($inputhome as $ih)
                                <form action="/inputhome/updateinputhome" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{ $ih->id_inputhome }}"> <br />
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 1</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten1" placeholder="Enter Konten 1" required="required" value="{{ $ih->konten1 }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 2</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten2" placeholder="Enter Konten 2" required="required" value="{{ $ih->konten2 }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 3</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten3" placeholder="Enter Konten 3" required="required"  value="{{ $ih->konten3 }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 4</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten4" placeholder="Enter Konten 4" required="required"  value="{{ $ih->konten4 }}">
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