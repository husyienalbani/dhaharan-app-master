@extends('layout.master_admin.master')
@section('content')
<h4 style="padding-top: 10px; text-align: center;">REKAPITULASI KEUANGAN</h4>
<div class="card" style="margin-top: 20px">
  <div class="card-header">
    <i class="bx bx-user"></i> <b>Data Kategori Peta</b>
  </div>
  <div class="card-body">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid" style="margin-bottom: -10px">
        <form action="" method="get" style="width: 100%">
          <div class="input-group" style="margin-bottom: 10px;">
            <a class="btn btn-outline-success" href="{{ route('categories.create') }}" role="button"><i
                class="zmdi zmdi-plus zmdi-hc-2x"></i> <i class="zmdi zmdi-money-box zmdi-hc-2x"></i></a>
            <input type="text" class="form-control" name="pencarian" placeholder="Cari Kategori">
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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = $category->firstItem();
          ?>
          @forelse ($category as $post)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $post->name }}</td>
            <td>
              <div class="d-grid gap-2 d-md-block text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('categories.destroy', $post->id) }}" method="POST">
                  <a href="{{ route('categories.edit', $post->id) }}" class="btn btn-info btn-sm"><i
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
    {{$category->links()}}
  </div>
</div>
@endsection