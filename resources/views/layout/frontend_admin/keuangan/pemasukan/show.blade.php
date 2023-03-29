@extends('layout.master_admin.create')
@section('title')
<title>Show</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/finance_recapitulations" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-close zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                DETIL INFORMASI
            </div>
            <div class="row">
                <div class="card" style="width: 100%; margin-left:10px; margin-right:10px; margin-top:-10px;">
                    <ul class="list-group" style="margin-left: 30px; margin-right: 30px;">
                        <p class="card-text" style="margin-top: 10px;"> <b>Tanggal</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{
                            $finance_recapitulations->date}}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Pemasukan</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{
                            $finance_recapitulations->income}}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Pengeluaran</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257); margin-bottom:20px;">
                            {{$finance_recapitulations->recapitulation_date}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection