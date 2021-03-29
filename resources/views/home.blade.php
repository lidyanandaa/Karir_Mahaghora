@extends('templates.defuser')

@section('content')

@include('templates.partials.navuser')
<link rel="stylesheet" type="text/css" href="../../css/homecss.css">

<br>
<br>

<div class="container">
    <div class="hover01 column">
        <center>
            <h1 class="title__primary text-primary mb-4 text-danger" style="text-align:center">Tahapan Seleksi</h1>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <figure><img class="text-center" src="../css/img/cv.png" alt="CV"></figure>
                    <br>
                    <h4 style="text-align:center">Upload CV</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
                </div>
                <div class="col-md-4">
                    <figure><img class="text-center" src="../css/img/job.png" alt="Job"></figure>
                    <br>
                    <h4 style="text-align:center">Apply Job</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
                </div>
                <div class="col-md-4">
                    <figure><img class="text-center" src="../css/img/hrd.png" alt="HRD"></figure>
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
<br>
<br>
@foreach($inputhome as $item)
<section class="section bg-pattern-8 pt-10 pt-lg-20 pb-10 pb-lg-25 px-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="w-100 mb-5 mb-lg-0" src="../css/img/1.png" alt="">
            </div>
            <div class="col-lg-6">
                <p class="text-justify">{{ $item->konten1 }}</p>
                <p class="text-justify">{{ $item->konten2 }}</p>
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
                <p class="text-justify">{{ $item->konten3 }}</p>
                <p class="text-justify">{{ $item->konten4 }}</p>
            </div>
            <div class="col-lg-6">
                <img class="w-100 mb-5 mb-lg-0" src="../css/img/2.png" alt="">
            </div>
        </div>
    </div>
</section>
@endforeach
<br>
<br>
<br>
<center>
    <section>
        <div class="container">

            <div class="col-lg-12 col-sm-10">
                <div class="row align-items-center">
                    <div class="col">
                        <form action="/home/cari" method="GET">
                            <div class="col-sm mb-3 mb-lg-0">
                                <div class="input-group">
                                    <select name="lokasipenempatan" id="lokasipenempatan" class="select2" value="{{ old('lokasipenempatan') }}">
                                        <option value="">Lokasi</option>
                                        <option value="Mahaghora">PT. Mahaghora</option>
                                        <option value="Manohara">PT. Manohara Asri</option>
                                        <option value="Ares">PT. Ares Kusuma Raya</option>
                                        <option value="Pyramide">PT. Pyramide Paramount Indonesia</option>
                                        <option value="Warung">PT. Warung Indonesia</option>
                                        <option value="Sumber">PT. Sumber Tirta Hakiki</option>
                                        <option value="Saus">Pabrik Saus Tiram Sin Tai Hing</option>
                                    </select>
                                </div>
                            </div>
                    </div>

                    <div class="col">
                        <div class="col-sm mb-3 mb-lg-0">
                            <div class="input-group">

                                <select name="kategori" id="kategori" class="select2" value="{{ old('kategori') }}">
                                    <option value="">Kategori</option>
                                    @foreach($lowongan as $item)
                                    <option value="{{ $item->id_lowongan }}">{{ $item->kategori }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="col-sm mb-3 mb-lg-0">
                            <div class="input-group">
                                <select name="pengalaman" id="pengalaman" class="select2" value="{{ old('pengalaman') }}">
                                    <option value="">Pengalaman</option>
                                    <option value="fresh_graduate">Fresh Graduate</option>
                                    <option value="experienced">Experienced</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card-body">
                            <input class="btn btn-danger d-none d-lg-inline-block px-4" type="submit" value="Cari"></input>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</center>
<br>
<br>
<br>
<section class="section bg-pattern-8 pt-10 pt-lg-20 pb-10 pb-lg-25 px-2">
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
                        <a href="/formhome/{{ $item->id_lowongan }}" class="btn btn-danger d-none d-lg-inline-block px-4">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<br>
<br>
<!-- Site footer -->
@include('templates.partials.footuser')
@endsection