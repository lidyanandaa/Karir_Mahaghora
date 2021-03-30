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
                                    <h3>Input Uuser</h3>
                                </strong>
                            </div>

                            <form action="/user/input/tambahuser" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama User</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namauser" placeholder="Enter Nama Uuser" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="emailuser" aria-describedby="emailHelp" name="emailuser" placeholder="Enter Email" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">[Password</label>
                                    <input type="password" class="form-control" id="emailuser" aria-describedby="emailHelp" name="emailuser" placeholder="Enter Email" >
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