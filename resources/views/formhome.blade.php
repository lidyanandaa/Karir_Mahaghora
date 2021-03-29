@extends('templates.defuser')

@section('content')

@include('templates.partials.navuser')
<link rel="stylesheet" type="text/css" href="../../css/formhomecss.css">

<br>
<br>

<section class="section mb-11">
    <div class="container">
        @foreach($lowongan as $lo)
        <div class="row mb-6">
            <div class="col-lg-8 col-sm-12">
                <div class="card__default mb-5">
                    <h3 class="title__small">Tentang Pekerjaan</h3>
                    <hr class="mb-3">
                    <p>{{ $lo->tentang_pekerjaan }}</p>
                    &nbsp;
                </div>
                <div class="card__default mb-5">
                    <h3 class="title__small c-blue mb-3">Persyaratan</h3>
                    <hr class="mb-3">
                    <p>{{ $lo->persyaratan }}</p>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card__default mb-5">
                    <h3 class="title__xsmall c-blue mb-3">Tanggal Pendaftaran</h3>
                    <hr class="mb-3">
                    <p class="mb-0">{{ $lo->tanggal_awal }} - {{ $lo->tanggal_akhir }}</td>
                    </p>
                </div>
                <div class="card__default mb-5">
                    <h3 class="title__xsmall c-blue mb-3">Batas Usia</h3>
                    <hr class="mb-3">
                    <p class="mb-0">
                        {{ $lo->batas_usia }} Tahun
                    </p>
                </div>

                <div class="card__default mb-5">
                    <h3 class="title__xsmall c-blue mb-3">Lokasi Penempatan</h3>
                    <hr class="mb-3">
                    <ul class="list--order pl-4">
                        <li>{{ $lo->lokasi_penempatan }}</li>
                    </ul>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">Apply Job </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section>

<br>
<br>
<section class="section bg-pattern-8 pt-10 pt-lg-20 pb-10 pb-lg-25 px-2">
    <center>
        <h1 class="title__danger text-danger mb-6">Rekomendasi Lainnya</h1>
    </center>
    <br>
    <div class="container">
        @foreach($lowongan as $item)
        <div class="card mb-3" style="max-width: 1400px;">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img class="images" src="../css/img/Logo1.png" alt="Logo" height="80%">
                </div>
                <div class="mb-3 mb-lg-0">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_lowongan }}</h5>
                        <p class="card-text">{{ $item->lokasi_penempatan }}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <p class="card-title">{{ $item->kategori}}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <p class="card-title">{{ $item->pengalaman}}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body">
                        <a href="/formhome" class="btn btn-danger d-none d-lg-inline-block px-4">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    </div>
</section>

<br>
<br>
<br>
<br>
</body>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="5" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Apply Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <center>
                        <div class="col-md-10 form-input">
                            <form action="/formhome/tambahcv" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namalengkapcv" placeholder="Enter Nama Lengkap" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamincv" id="lengan1" value="L" required="required">
                                            <label class="form-check-label" for="lengan1">Laki Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamincv" id="lengan2" value="P" required="required">
                                            <label class="form-check-label" for="lengan2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailcv" placeholder="Enter Email" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nohpcv" placeholder="Enter No HP" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pendidikanterakhircv" placeholder="Enter Pendidikan Terakhir" required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Upload Berkas </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filecv" required="required">
                                        <p class="text-justify"> *Berkas termasuk CV, Surat lamaran, dll (dalam bentuk jpg,png,pdf) </p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Simpan" class="btn2 btn-danger" value="Simpan"></input>
                                    <input type="button" value="Close" class=" btn2 btn-secondary" data-dismiss="modal" value="Close"></input>
                                </div>
                            </form>
                        </div>
                </div>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- Site footer -->@include('templates.partials.footuser')
@endsection