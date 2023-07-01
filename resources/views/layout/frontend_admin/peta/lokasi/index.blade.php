@extends('layout.master_admin.master')
@section('content')

<!--Data Kategori-->
<h4 style="padding-top: 10px; text-align: center;">SOCIAL ACTIVITY LOCATION</h4>
<div class="card" style="margin-top: 20px">
  <!--Data Kegiatan-->
  <div class="card-header">
    <i class="bx bx-user"></i> <b>Location Data</b>
  </div>
  <div class="card-body">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid" style="margin-bottom: -10px">
        <form action="" method="get" style="width: 100%">
          <div class="input-group" style="margin-bottom: 10px;">
            <a class="btn btn-outline-success" href="{{ route('places.create') }}" role="button"><i
                class="zmdi zmdi-plus zmdi-hc-2x"></i> <i class="zmdi zmdi-pin zmdi-hc-2x"></i></a>
            <input type="text" class="form-control" name="pencarian" placeholder="Cari Nama Lokasi">
            <button class="btn btn-outline-success"><i class="zmdi zmdi-search zmdi-hc-2x"></i></button>
          </div>
        </form>
      </div>
    </nav>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Location Name</th>
            <th scope="col">Category</th>
            <th scope="col">Role</th>
            <th scope="col">Cover</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = $posts->firstItem();
          ?>
          @forelse ($posts as $post)
          @if(Auth::check() && Auth::user()->role === '1')
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->categoryPlace->name}}</td>
            <td>{{ $post->user->name}}</td>
            <td class="text-center">
              <img src="coverplace/{{$post->cover }}" class="rounded" style="width: 100px">
            </td>
            <td>
              <div class="d-grid gap-2 d-md-block text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('places.destroy', $post->id) }}" method="POST">
                  <a href="{{ route('places.show', $post->id) }}" class="btn btn-warning btn-sm"><i
                      class="zmdi zmdi-eye zmdi-hc-2x"></i></a>
                  <a href="{{ route('places.edit', $post->id) }}" class="btn btn-info btn-sm"><i
                      class="zmdi zmdi-edit zmdi-hc-2x"></i></a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><i
                      class="zmdi zmdi-delete zmdi-hc-2x"></i></button>
                </form>
                @if($post->is_approved == 0)
                <form action="{{ route('places.approve', $post->id) }}" method="POST">
                  @csrf
                  <button class="btn btn-success btn-sm" type="submit" style="margin-top: 10px">
                    APPROVE</button>
                </form>
                @endif
              </div>
            </td>
          </tr>
          @else
          @if(Auth::user()->role === '2' && $post->is_approved == 1)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->categoryPlace->name}}</td>
            <td>{{ $post->user->name}}</td>
            <td class="text-center">
              <img src="coverplace/{{$post->cover }}" class="rounded" style="width: 100px">
            </td>
            <td>
              <div class="d-grid gap-2 d-md-block text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('places.destroy', $post->id) }}" method="POST">
                  <a href="{{ route('places.show', $post->id) }}" class="btn btn-warning btn-sm"><i
                      class="zmdi zmdi-eye zmdi-hc-2x"></i></a>
                </form>
              </div>
            </td>
          </tr>
          @endif
          @endif
          @empty
          <tr>
            <td colspan="5">
              <div class="alert alert-danger text-center" style="font-size: small">
                Data belum Tersedia.
              </div>
            </td>
          </tr>
          @endforelse
        </tbody>

      </table>
    </div>
    {{$posts->links()}}
  </div>
</div>
@endsection