@extends('templates.defuser')

@section('content')

    @include('templates.partials.navuser')
  <link rel="stylesheet" type="text/css" href="../../css/internshipcss.css">

  <br>
  <br>

  <div class="container">
    <div class="hover01 column">
      <center>
        <h1 class="title__primary text-priamry mb-4 text-danger" style="text-align:center">Tahapan Seleksi</h1>
        <div class="row align-items-center">
          <div class="col-md-4">
            <figure class="col-md-7"><img class="text-center" src="../css/img/cv.png" alt="CV"></figure>
            <br>
            <h4 style="text-align:center">Upload CV</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
          </div>
          <div class="col-md-4">
            <figure class="col-md-7"><img class="text-center" src="../css/img/job.png" alt="Job"></figure>
            <br>
            <h4 style="text-align:center">Apply Job</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
          </div>
          <div class="col-md-4">
            <figure class="col-md-7"><img class="text-center" src="../css/img/hrd.png" alt="HRD"></figure>
            <br>
            <h4 style="text-align:center">Diperiksa oleh HRD</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
          </div>
        </div>
      </center>
    </div>
  </div>

  <br>
  <br>
  @foreach($inputinternship as $item)
  <section class="section bg-pattern-8 pt-10 pt-lg-20 pb-10 pb-lg-25 px-2">
    <div class="container">    
      <div class="row align-items-center">
        <div class="col-lg-6">
          <center>
          <img class="w-95 mb-5 mb-lg-0" src="../css/img/3.png" alt="">
          </center>
        </div>
        <div class="col-lg-6">
          <p class="text-justify">{{ $item->konten1 }}</p>
          <p class="text-justify">{{ $item->konten2 }}</p>
        </div>
      </div>
    </div>
  </section>

  <br>

  <section class="section mb-3 mb-lg-11 pt-5 px-2">
    <div class="container">
      <div class="row justify-content-center mb-6">
        <div class="col-lg-10 px-lg-4 text-center">
          <h1 class="title__danger text-danger mb-6">{{ $item->judul1 }}</h1>
          <p class="text-left text-md-center">{{ $item->konten3 }}</p>
        </div>
      </div>
    </div>
  </section>

  <br>
  <br>
  <br>
  <br>

  <section class="section bg-pattern-8 pt-10 pt-lg-20 pb-10 pb-lg-25 px-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <p class="text-justify">{{ $item->konten4 }}</p>
          <p class="text-justify">{{ $item->konten5 }}</p>
          <center><a href="/forminternship" class="btn btn-danger">Lihat Detail</a></center>
        </div>
        <div class="col-lg-6">
          <img class="w-90 mb-5 mb-lg-0" src="../css/img/Magang.png" alt="">
        </div>
      </div>
    </div>
  </section>
@endforeach
  <br>
  <br>
  <br>

  <center>
    <h1 class="title__danger text-danger mb-6">Galeri Magang</h1>
    <br>
  </center>
  <figure>
    <div class="container">
      <img src="../css/img/8.jpg" alt="img1" class="images">
      <div class="overlay">
        <div class="text">
          <h2>JUDUL</h2>
          <p>Artikel</p>
        </div>
      </div>
    </div>
    <div class="container">
      <img src="../css/img/0.jpg" alt="img2" class="images">
      <div class="overlay">
      <div class="text">
          <h2>JUDUL</h2>
          <p>Artikel</p>
        </div>
      </div>
    </div>
    <div class="container">
      <img src="../css/img/7.jpg" alt="img3" class="images">
      <div class="overlay">
      <div class="text">
          <h2>JUDUL</h2>
          <p>Artikel</p>
        </div>
      </div>
    </div>
    <div class="container">
      <img src="../css/img/4.jpg" alt="img4" class="images">
      <div class="overlay">
      <div class="text">
          <h2>JUDUL</h2>
          <p>Artikel</p>
        </div>
      </div>
    </div>
    <div class="container">
      <img src="../css/img/5.jpg" alt="img5" class="images">
      <div class="overlay">
      <div class="text">
          <h2>JUDUL</h2>
          <p>Artikel</p>
        </div>
      </div>
    </div>
    <div class="container">
      <img src="../css/img/6.jpg" alt="img6" class="images">
      <div class="overlay">
      <div class="text">
          <h2>JUDUL</h2>
          <p>Artikel</p>
        </div>      </div>
    </div>
  </figure>

  <br>
  <br>

  <br>
  <br>

  <!-- Site footer -->
  @include('templates.partials.footuser')
@endsection