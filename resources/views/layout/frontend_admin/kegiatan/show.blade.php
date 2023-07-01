@extends('layout.master_admin.create')
@section('title')
<title>Show</title>
@endsection
@section('adddata')
<div class="card card-create mx-auto my-4" style="margin-top: 50px">
    <div class="card-body">
        <div class="d-grid gap-2 d-md-block">
            <a href="/activities" class="btn btn-outline-danger btn-sm" type="button"><i
                    class="zmdi zmdi-close zmdi-hc-2x"></i></a>
        </div>
        <div class="card-content p-2">
            <div class="text-center">
                <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">
                INFORMATION DETAIL
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card" style="padding: 10px;">
                        <img src="/cover/{{$post->cover }}" class="card-img-top"
                            style="padding: 10px; display:block; margin-right:auto; margin-left:auto; width:75%">
                        <div class="card-body" style="padding:5px">
                            <h7 class="card-title" style="font-size: 13px">Cover Image</h7>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card" style="padding: 10px;">
                        @if (count($post->images)>0)
                        @foreach ($post->images as $img)
                        <img src="/images/{{$img->image }}" class="card-img-top"
                            style="padding: 10px; display:block; margin-right:auto; margin-left:auto; width:75%">
                        @endforeach
                        @endif
                        <div class="card-body" style="padding:5px">
                            <h7 class="card-title" style="font-size: 13px">Activity Image</h7>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 100%; margin-left:10px; margin-right:10px; margin-top:-10px;">
                    <ul class="list-group" style="margin-left: 30px; margin-right: 30px;">
                        <p class="card-text" style="margin-top: 10px;"> <b>Activity Name</b></p>
                        <li class="list-group-item"
                            style="font-size: small; background-color: rgba(255, 255, 255, 0.257);">{{ $post->name
                            }}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Category</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{
                            $post->category->name}}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Date</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{
                            $post->date}}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Address</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{
                            $post->address }}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Cost</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257);">{{ $post->cost
                            }}</li>
                        <p class="card-text" style="margin-top: 10px;"> <b>Description</b></p>
                        <li class="list-group-item"
                            style="font-size: small;background-color: rgba(255, 255, 255, 0.257); margin-bottom:20px;">
                            {!!$post->activityinfo !!}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endsection