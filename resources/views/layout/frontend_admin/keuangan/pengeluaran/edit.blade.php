@extends('layout.master_admin.create')
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
  <div class="card-body">
    <div class="d-grid gap-2 d-md-block">
      <a href="/finance_expenses" class="btn btn-outline-danger btn-sm" type="button"><i
          class="zmdi zmdi-arrow-left zmdi-hc-2x"></i></a>
    </div>
    <div class="card-content p-2">
      <div class="text-center">
        <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
      </div>
      <div class="card-title text-uppercase text-center py-3">
        EDIT PENGELUARAN
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <form action="{{ route('finance_expenses.update', $finance_expense->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-md-12">
              <div class="tab-content" id="nav-tabContent" style="font-size: small">
                <div class="tab-pane fade active show" id="nav-content" role="tab">
                  <div class="row">
                    <div class="col-md-6 col-12" style="margin-bottom: 5px">
                      <div class="mb-3">
                        <label for="expenseName" class="form-label"><b>Nama</b></label>
                        <input type="text" class="form-control @error('expense_name') is-invalid @enderror"
                          name="expense_name" value="{{ old('expense_name', $finance_expense->expense_name) }}"
                          placeholder="Masukan Nama Pengeluaran" style="font-size: small;">
                        <!-- error message untuk title -->
                        @error('expense_name')
                        <div class="alert alert-danger mt-2 text-center">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6 col-12" style="margin-bottom: 5px">
                      <div class="mb-3">
                        <label for="expenseNominal" class="form-label"><b>Nominal</b></label>
                        <input type="number" class="form-control @error('expense_nominal') is-invalid @enderror"
                          name="expense_nominal" value="{{ old('expense_nominal', $finance_expense->expense_nominal) }}"
                          placeholder="Masukkan Nominal Pengeluaran" style="font-size: small;">
                        @error('expense_nominal')
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
                        <label for="expenseDate" class="form-label"><b>Tanggal
                            Donasi</b></label>
                        <input type="date" class="form-control @error('expense_date') is-invalid @enderror"
                          name="expense_date" value="{{ old('expense_date', $finance_expense->expense_date) }}"
                          placeholder="Masukkan Tanggal Pengeluaran" style="font-size: small">
                        @error('expense_date')
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
                        <label for="formFile" class="form-label"><b>Bukti Donasi</b></label>
                        <input class="form-control @error('expense_image') is-invalid @enderror" name="expense_image"
                          type="file" id="expense_image" style="font-size: small">
                        @error('expense_image')
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