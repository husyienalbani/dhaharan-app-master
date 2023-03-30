@extends('layout.master_admin.create')
@section('title')
<title>Show</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/finance_donations" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-close zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                DETIL INFORMASI
            </div>
            <div class="col-12">
                <div class="card" style="padding: 10px;">
                    <img src="{{ Storage::url('public/buktidonasi/').$finance_donations->donation_image }}"
                        class="card-img-top" style="display:block; margin-right:auto; margin-left:auto; width:50%">
                    <div class="card-body" style="padding:5px">
                        <h7 class="card-title" style="font-size: 13px">Bukti Donasi</h7>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%; margin-left:10px; margin-right:10px; margin-top:-10px;">
                <ul class="list-group" style="margin-left: 30px; margin-right: 30px;">
                    <p class="card-text" style="margin-top: 10px;"> <b>Nama Donasi</b></p>
                    <li class="list-group-item" style="font-size: small; background-color: rgba(255, 255, 255, 0.257);">
                        {{
                        $finance_donations->donation_name }}</li>
                    <p class="card-text" style="margin-top: 10px;"> <b>Nominal</b></p>
                    <li class="list-group-item" style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">
                        {{
                        $finance_donations->donation_nominal}}</li>
                    <p class="card-text" style="margin-top: 10px;"> <b>Kategori Donasi</b></p>
                    <li class="list-group-item" style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">
                        {{$finance_donations->donation_category}}</li>
                    <p class="card-text" style="margin-top: 10px;"> <b>Keterangan</b></p>
                    <li class="list-group-item" style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">
                        {{$finance_donations->donation_information}}</li>
                    <p class="card-text" style="margin-top: 10px;"> <b>Tanggal</b></p>
                    <li class="list-group-item"
                        style="font-size: small;background-color: rgba(255, 255, 255, 0.257); margin-bottom:20px;">
                        {{$finance_donations->donation_date}}</li>
                </ul>
            </div>
        </div>
    </div>
    @endsection