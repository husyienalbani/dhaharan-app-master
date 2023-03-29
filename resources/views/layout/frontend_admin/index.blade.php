@extends('layout.master_admin.master')
@section('sidebar')
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" class="logo-icon" alt="logo icon" />
            <h5 class="logo-text">Dhaharan.id</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MENU</li>
        <li class="active">
            <a href="index.html">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="IndexAdministator.html">
                <i class="zmdi zmdi-account-box"></i> <span>Admin</span>
            </a>
        </li>

        <li>
            <a href="IndexActivity.html">
                <i class="zmdi zmdi-view-web"></i> <span>Activity</span>
            </a>
        </li>

        <li>
            <a href="IndexMap.html">
                <i class="zmdi zmdi-map"></i> <span>Maps</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dropdown" aria-expanded="false" aria-controls="ui-basic">
                <i class="zmdi zmdi-money-box"></i></span>
                <span class="menu-title">Finance</span>
                <i class="zmdi zmdi-chevron-down" style="margin-left: 115px;"></i>
            </a>
            <div class="collapse" id="dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="IndexDonation.html">Finance <span
                                class="badge bg-secondary">Donation</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IndexExpense.html">Finance <span
                                class="badge bg-secondary">Expanse</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IndexRecapitulation.html">Finance <span
                                class="badge bg-secondary">Recapitulation</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="calendar.html">
                <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
            </a>
        </li>

        <li>
            <a href="profile.html">
                <i class="zmdi zmdi-face"></i> <span>Profile</span>
            </a>
        </li>

        <li class="sidebar-header">MORE INFO</li>
        <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-print text-success"></i>
                <span>Print</span></a>
        </li>
    </ul>
</div>
@endsection
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
                        <span class="float-right"><b>150</b>
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
                        <span class="float-right"><b>40</b>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body bg-warning">
                    <h5 class="text-white mb-0">
                        Donasi
                        <span class="float-right"><i class="fa fa-usd"></i></span>
                    </h5>
                    <hr>
                    <p class="mb-0 text-white small-font">
                        Jumlah
                        <span class="float-right"><b>999</b> </span>
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
                        <span class="float-right"><b>5</b>
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