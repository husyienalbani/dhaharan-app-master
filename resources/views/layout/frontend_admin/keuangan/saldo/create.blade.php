@extends('layout.master_admin.create')
@section('title')
<title>Create</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/finance_recapitulations" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-arrow-left zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                ADD MONTH RECAPITULATION
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="{{ route('finance_recapitulations.store') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="col-md-12" style="margin-top: -15px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="date" class="form-label"><b>Date
                                                    </b></label>
                                                <input type="date"
                                                    class="form-control @error('recapitulation_date') is-invalid @enderror"
                                                    name="date" value="{{ old('date') }}"
                                                    placeholder=" Masukkan Tanggal Donasi" style="font-size: small">
                                                @error('date')
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
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="income" class="form-label"><b>Income</b></label>
                                                <input type="number"
                                                    class="form-control @error('income') is-invalid @enderror"
                                                    name="income" value="{{ old('income') }}"
                                                    placeholder="Masukan Nominal Pemasukan" style="font-size: small;">
                                                <!-- error message untuk title -->
                                                @error('income')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="expense" class="form-label"><b>Cost</b></label>
                                                <input type="number"
                                                    class="form-control @error('expense') is-invalid @enderror"
                                                    name="expense" value="{{ old('expense') }}"
                                                    placeholder="Masukkan Nominal Pengeluaran"
                                                    style="font-size: small;">
                                                @error('expense')
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
                                                <label for="saldo" class="form-label"><b>Saldo</b></label>
                                                <input type="number"
                                                    class="form-control @error('saldo') is-invalid @enderror"
                                                    name="saldo" value="{{ old('saldo') }}"
                                                    placeholder="Masukkan Nominal Saldo" style="font-size: small;">
                                                @error('saldo')
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