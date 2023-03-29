@extends('layout.master_admin.master')
@section('content')

<!--Data Kategori-->
<h4 style="padding-top: 10px; text-align: center;">KEGIATAN AKSI SOSIAL</h4>
<div class="card" style="margin-top: 20px">
  <!--Data Kegiatan-->
  <div class="card-header">
    <i class="bx bx-user"></i> <b>Data Kegiatan</b>
  </div>
  <div class="card-body">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid" style="margin-bottom: -10px">
        <form action="" method="get" style="width: 100%">
          <div class="input-group" style="margin-bottom: 10px;">
            <a class="btn btn-outline-success" href="{{ route('activities.create') }}" role="button"><i
                class="zmdi zmdi-plus zmdi-hc-2x"></i> <i class="zmdi zmdi-money-box zmdi-hc-2x"></i></a>
            <input type="text" class="form-control" name="pencarian" placeholder="Cari Nama Kegiatan">
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
            <th scope="col">Nama</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pengeluaran</th>
            {{-- <th scope="col">Deskripsi</th> --}}
            <th scope="col">Cover</th>
            {{-- <th scope="col">Image</th> --}}
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = $posts->firstItem();
          ?>
          @forelse ($posts as $post)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->date }}</td>
            <td>{{ $post->address }}</td>
            <td>{{ $post->cost }}</td>
            {{-- <td>{!! $post->activityinfo !!}</td> --}}
            <td class="text-center">
              <img src="cover/{{$post->cover }}" class="rounded" style="width: 100px">
            </td>
            {{-- <td class="text-center">
              @if (count($post->images)>0)
              @foreach ($post->images as $img)
              <img src="/images/{{$img->image }}" class="rounded" style="width: 100px">
              @endforeach
              @endif
            </td> --}}
            <td>
              <div class="d-grid gap-2 d-md-block text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('activities.destroy', $post->id) }}" method="POST">
                  <a href="{{ route('activities.show', $post->id) }}" class="btn btn-warning btn-sm"><i
                      class="zmdi zmdi-eye zmdi-hc-2x"></i></a>
                  <a href="{{ route('activities.edit', $post->id) }}" class="btn btn-info btn-sm"><i
                      class="zmdi zmdi-edit zmdi-hc-2x"></i></a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><i
                      class="zmdi zmdi-delete zmdi-hc-2x"></i></button>
                </form>
              </div>
            </td>
          </tr>
          @empty
          <div class="alert alert-danger text-center" style="font-size: small">
            Data belum Tersedia.
          </div>
          @endforelse
        </tbody>
      </table>
    </div>
    {{$posts->links()}}
  </div>
</div>
@endsection