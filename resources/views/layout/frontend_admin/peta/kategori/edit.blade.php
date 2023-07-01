@extends('layout.master_admin.create')
@section('title')
<title>Edit</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/categories" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-arrow-left zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                EDIT MAP CATEGORY
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="col-md-12" style="margin-top: -15px">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="category" class="form-label"><b>Category</b></label>
                                                <input type="text"
                                                    class="form-control @error('category') is-invalid @enderror"
                                                    name="name" value="{{ old('category', $category->name) }}"
                                                    placeholder="Masukkan Kategori Peta" style="font-size: small;">
                                                @error('category')
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