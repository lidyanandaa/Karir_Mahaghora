@extends('templates.defuser')

@section('content')

@include('templates.partials.navuser')
<link rel="stylesheet" type="text/css" href="../../css/formintershipcss.css">

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-10 offset-1 form-input">

      <form action="/forminternship/tambahintern" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namalengkapintern" placeholder="Enter Nama Lengkap" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelaminintern" id="lengan1" value="L" required="required">
              <label class="form-check-label" for="lengan1">Laki Laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelaminintern" id="lengan2" value="P" required="required">
              <label class="form-check-label" for="lengan2">Perempuan</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailintern" placeholder="Enter Email" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No HP</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nohpintern" placeholder="Enter No HP" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Instansi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="instansiintern" placeholder="Enter Instansi" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jumlah Orang</label>
          <div class="col-sm-10">
            <input min="1" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlahorangintern" placeholder="Enter Jumlah Orang" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Upload Berkas </label>
          <div class="col-sm-10">
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileintern" required="required">
            <p> *Berkas termasuk CV, Surat lamaran, dll (dalam bentuk jpg,png,pdf) </p>
          </div>
        </div>
        <div class="text-center">
          <input type="submit" class="form-control button btn-danger" value="Simpan">
        </div>
      </form>
    </div>
  </div>
</div>

@include('sweetalert::alert')
<br>
<br>
<!-- Site footer -->
@include('templates.partials.footuser')
@endsection