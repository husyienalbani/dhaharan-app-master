@extends('layout.master_admin.master')
@section('content')
<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body bg-success">
                    <h5 class="text-white mb-0">
                        Kegiatan
                        <span class="float-right"><i class="fa fa-calendar-plus-o"></i></span>
                    </h5>
                    <hr>
                    <p class="mb-0 text-white small-font">
                        Jumlah
                        <span class="float-right"><b>{{ $jumlah_kegiatan}}</b>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body bg-danger">
                    <h5 class="text-white mb-0">
                        Lokasi
                        <span class="float-right"><i class="fa fa-map-marker"></i></span>
                    </h5>
                    <hr>
                    <p class="mb-0 text-white small-font">
                        Jumlah
                        <span class="float-right"><b>{{ $jumlah_lokasi}}</b>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body bg-warning">
                    <h5 class="text-white mb-0">
                        Pendonasi
                        <span class="float-right"><i class="fa fa-usd"></i></span>
                    </h5>
                    <hr>
                    <p class="mb-0 text-white small-font">
                        Jumlah
                        <span class="float-right"><b>{{ $jumlah_pendonasi}}</b> </span>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body bg-info">
                    <h5 class="text-white mb-0">
                        Anggota
                        <span class="float-right"><i class="fa fa-users"></i></span>
                    </h5>
                    <hr>
                    <p class="mb-0 text-white small-font">
                        Jumlah
                        <span class="float-right"><b>{{ $jumlah_pengguna}}</b>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

</div>

<!--End Dashboard Content-->
@endsection