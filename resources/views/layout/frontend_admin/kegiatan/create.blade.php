@extends('layout.master_admin.create')
@section('title')
<title>Create Activity</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/activities" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-arrow-left zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                ADD ACTIVITY
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="tab-content" id="nav-tabContent" style="font-size: small">
                                <div class="tab-pane fade active show" id="nav-content" role="tab">
                                    <div class="row">
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="ActivityName" class="form-label"><b>Activity
                                                        Name</b></label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" placeholder="Masukan Nama Kegiatan"
                                                    style="font-size: small" />
                                                <!-- error message untuk title -->
                                                @error('name')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="ActivityCategory" class="form-label"><b>Activity
                                                        Category</b></label>
                                                <select class="form-control @error('category_id') is-invalid @enderror"
                                                    name="category_id" style="font-size: small">
                                                    <option value="" selected disabled style="font-size: small">Choose
                                                        Activity Category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
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
                                                <label for="ActivityDate" class="form-label"><b>Activity
                                                        Date</b></label>
                                                <input type="date"
                                                    class="form-control @error('Activity_date') is-invalid @enderror"
                                                    name="date" value="{{ old('date') }}"
                                                    placeholder="Masukkan Tanggal Donasi" style="font-size: small" />
                                                @error('date')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="ActivityAddress" class="form-label"><b>Activity
                                                        Address</b></label>
                                                <input type="text"
                                                    class="form-control @error('Activity_nominal') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}"
                                                    placeholder="Masukkan Alamat Kegiatan" style="font-size: small" />
                                                @error('address')
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
                                                <label for="ActivityCost" class="form-label"><b>Activity
                                                        Cost</b></label>
                                                <input type="float"
                                                    class="form-control @error('cost') is-invalid @enderror" name="cost"
                                                    value="{{ old('cost') }}"
                                                    placeholder="Masukkan Pengeluaran Kegiatan"
                                                    style="font-size: small" />
                                                @error('cost')
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
                                                <label for="ActivityDescription"
                                                    class="form-label"><b>Description</b></label>
                                                <textarea
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    name="activityinfo" rows="5" placeholder="activityinfo"></textarea>
                                                @error('activityinfo')
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
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"><b>Cover Image</b></label>
                                                <input class="form-control @error('cover') is-invalid @enderror"
                                                    name="cover" type="file" style="font-size: small" />
                                                @error('cover')
                                                <div class="alert alert-danger mt-2 text-center">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-12" style="margin-bottom: 5px">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label"><b>Activity Image</b></label>
                                                <input
                                                    class="form-control @error('activity_images') is-invalid @enderror"
                                                    name="activity_images[]" multiple type="file"
                                                    style="font-size: small" />
                                                @error('activity_images')
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
        @endsection
        @section('js')
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace("activityinfo");
        </script>
        @endsection