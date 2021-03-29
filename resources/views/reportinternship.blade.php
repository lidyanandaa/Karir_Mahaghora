@extends('templates.default')

@section('content')
@include('templates.partials._sidebar')
<link rel="stylesheet" type="text/css" href="../../css/lowongancss.css">
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
                    <h1>Laporan Mahaghora Internship</h1>
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
                        <div class="card-header">
                            <form action="">
                                <div class="form-group">
                                    <label for="mulai">Mulai</label>
                                    <input class="form-control" type="date" name="mulai" id="mulai" value="{{ request('mulai') }}">
                                </div>
                                <div class="form-group">
                                    <label for="berakhir">Berakhir</label>
                                    <input class="form-control" type="date" name="berakhir" id="berakhir" value="{{ request('berakhir') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="overflow-x:auto;">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td align="center"><strong>No</strong></td>
                                                <td align="center"><strong>Nama Lengkap</strong></td>
                                                <td align="center"><strong>Jenis Kelamin</strong></td>
                                                <td align="center"><strong>Email</strong></td>
                                                <td align="center"><strong>No HP</strong></td>
                                                <td align="center"><strong>Instansi</strong></td>
                                                <td align="center"><strong>Jumlah Orang</strong></td>
                                                <td align="center"><strong>Berkas</strong></td>
                                                <td align="center"><strong>Tanggal Upload</strong></td>
                                            </tr>
                                            @foreach($internship as $i)
                                            <tr>
                                                <td align="center">{{ $i->id_intern }}</td>
                                                <td align="center">{{ $i->nama_lengkap_intern }}</td>
                                                <td align="center">{{ $i->jenis_kelamin_intern }}</td>
                                                <td align="center">{{ $i->email_intern }}</td>
                                                <td align="center">{{ $i->no_hp_intern }}</td>
                                                <td align="center">{{ $i->instansi_intern }}</td>
                                                <td align="center">{{ $i->jumlah_orang_intern }}</td>
                                                <td align="center"><a href="storage/storage/berkas_file_intern/{{$i->nama_berkas_intern}}">{{$i->nama_berkas_intern}}</a></td>
                                                <td align="center">{{ date('d F Y',strtotime($i->updated_at)) }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
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

@section('scripts')
<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script type="text/javascript">
    $(function() {
        let dateInterval = getQueryParameter('date_filter');
        let start = moment().startOf('isoWeek');
        let end = moment().endOf('isoWeek');
        if (dateInterval) {
            dateInterval = dateInterval.split(' - ');
            start = dateInterval[0];
            end = dateInterval[1];
        }
        $('#date_filter').daterangepicker({
            "showDropdowns": true,
            "showWeekNumbers": true,
            "alwaysShowCalendars": true,
            startDate: start,
            endDate: end,
            locale: {
                format: 'YYYY-MM-DD',
                firstDay: 1,
            },
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                'This Year': [moment().startOf('year'), moment().endOf('year')],
                'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
                'All time': [moment().subtract(30, 'year').startOf('month'), moment().endOf('month')],
            }
        });
    });

    function getQueryParameter(name) {
        const url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        const regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
</script>

@stop

@include('templates.partials._footer')
@endsection