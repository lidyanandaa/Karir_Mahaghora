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
                                    <h3>Input Home</h3>
                                </strong>
                            </div>
                            <form action="/inputhome/inputanhome/tambahinputanhome" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 1</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten1" placeholder="Enter Konten 1" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 2</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten2" placeholder="Enter Konten 2" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 3</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten3" placeholder="Enter Konten 3" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Konten 4</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="konten4" placeholder="Enter Konten 4" required="required">
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