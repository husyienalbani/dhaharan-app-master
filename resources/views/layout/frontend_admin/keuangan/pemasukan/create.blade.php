@extends('layout.master_admin.create')
@section('title')
<title>Create</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/finance_donations" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-arrow-left zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                ADD DONATION
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="{{ route('finance_donations.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-12">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="DonationName" class="form-label"><b>Name</b></label>
                                                <input type="text"
                                                    class="form-control @error('donation_name') is-invalid @enderror"
                                                    name="donation_name" value="{{ old('donation_name') }}"
                                                    placeholder="Masukan Nama Pendonasi" style="font-size: small;">
                                                <!-- error message untuk title -->
                                                @error('donation_name')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="DonationNominal" class="form-label"><b>Nominal</b></label>
                                                <input type="number"
                                                    class="form-control @error('donation_nominal') is-invalid @enderror"
                                                    name="donation_nominal" value="{{ old('donation_nominal') }}"
                                                    placeholder="Masukkan Nominal Donasi" style="font-size: small;">
                                                @error('donation_nominal')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: -10px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="DonationCategory" class="form-label"><b>Catgeory</b></label>
                                                <select
                                                    class="form-control @error('donation_category') is-invalid @enderror"
                                                    name="donation_category" value="{{ old('donation_category') }}"
                                                    style="font-size: small">
                                                    <option>Money</option>
                                                    <option>Item</option>
                                                </select>
                                                @error('donation_category')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="DonationInformation" class="form-label"><b>More
                                                        Info</b></label>
                                                <input type="text"
                                                    class="form-control @error('donation_information') is-invalid @enderror"
                                                    name="donation_information"
                                                    value="{{ old('donation_information') }}"
                                                    placeholder="Masukkan Keterangan" style="font-size: small">
                                                @error('donation_information')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: -15px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="DonationDate" class="form-label"><b>Donation
                                                        Date</b></label>
                                                <input type="date"
                                                    class="form-control @error('donation_date') is-invalid @enderror"
                                                    name="donation_date" value="{{ old('donation_date') }}""
                                                    placeholder=" Masukkan Tanggal Donasi" style="font-size: small">
                                                @error('donation_date')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: -15px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"><b>Proof</b></label>
                                                <input
                                                    class="form-control @error('donation_image') is-invalid @enderror"
                                                    name="donation_image" type="file" id="donation_image"
                                                    style="font-size: small">
                                                @error('donation_image')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                Save
                            </button>
                            <button type="reset" class="btn btn-warning btn-sm">
                                Riset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection