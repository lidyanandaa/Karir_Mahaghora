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
                    <h1>User</h1>
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
                                                <td align="center"><strong>Email</strong></td>
                                            </tr>
                                            @foreach($users as $u)
                                            <tr>
                                                <td align="center">{{ $u->id }}</td>
                                                <td align="center">{{ $u->name }}</td>
                                                <td align="center">{{ $u->email }}</td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                    @can('update-post', $post)
                                    <a href="/lowongan/input" class="btn btn-info float-left active mb-3" role="button" aria-pressed="true">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data</a>
                                    @endcan
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