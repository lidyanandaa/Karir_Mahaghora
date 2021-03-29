@extends('templates.defuser')

@section('content')

@include('templates.partials.navuser')
<link rel="stylesheet" type="text/css" href="../../css/beasiswacss.css">

<section class="section mb-3 mb-lg-11 pt-5 px-2">
    <div class="container">
    @foreach($inputbeasiswa as $item)
        <div class="row justify-content-center mb-6">
            <div class="col-lg-10 px-lg-4 text-center">
                <h1 class="title__danger text-danger mb-6">{{ $item->judul1 }}</h1>
                <p class="text-left text-md-center">{{ $item->konten1 }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
<br>
<br>
<br>

<section>
<center>
    <div class="container">
        <div class="col-lg-12 text-center">
            <div class="row justify-content-center mb-6">
                <div class="col px-lg-4 text-center">
                    <h1 class="title__danger text-danger mb-6">Apa yang kamu dapat dari Beasiswa Mahaghora?</h1>
                    <br>
                    <div class="row">
                        <div class="col flex text-center">
                            <div class="card h-100 match">
                                <div class="card-body py-7 py-5">
                                    <div class="mb-7"><img src="https://karir.bca.co.id/public/assets/img/illustrations/ppapti/laptop.svg" class="illustration__small" alt="Laptop"></div>
                                    <br>
                                    <h5 class="card-title">Card title</h5>
                                    <p>Disediakan buku pelajaran <br class="d-none d-md-block" />sepanjang</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm text-center">
                            <div class="card h-100 match">
                                <div class="card-body py-7 py-5">
                                    <div class="mb-7"><img src="https://karir.bca.co.id/public/assets/img/illustrations/ppapti/koin.svg" class="illustration__small" alt="Uang Masuk"></div>
                                    <br>
                                    <h5 class="card-title">Card title</h5>
                                    <p>Bebas biaya pendidikan <br class="d-none d-md-block" />dan mendapatkan uang saku bulanan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm text-center">
                            <div class="card h-100 match">
                                <div class="card-body py-7 py-5">
                                    <div class="mb-7"><img src="https://karir.bca.co.id/public/assets/img/illustrations/ppapti/docs.svg" class="illustration__small" alt="Docs"></div>
                                    <br>
                                    <h5 class="card-title">Card title</h5>
                                    <p>Mendapatkan kesempatan <br class="d-none d-md-block" /> magang dan penawaran kerja</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</section>
<br>
<div class="text-center">
    <a href="" class="btn btn-danger">Lihat Detail</a>
</div>



<br>
<br>
<br>
<br>

<!-- Site footer -->
@include('templates.partials.footuser')
@endsection