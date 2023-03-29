@extends('layout.master_admin.master')
@section('content')
<h4 style="padding-top: 10px; text-align: center;">PEMASUKAN KEUANGAN</h4>
<div class="card" style="margin-top: 20px">
  <div class="card-header">
    <i class="bx bx-user"></i> <b>Data Pengeluaran</b>
  </div>
  <div class="card-body">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid" style="margin-bottom: -10px">
        <form action="" method="get" style="width: 100%">
          <div class="input-group" style="margin-bottom: 10px;">
            <a class="btn btn-outline-success" href="{{ route('finance_expenses.create') }}" role="button"><i
                class="zmdi zmdi-plus zmdi-hc-2x"></i> <i class="zmdi zmdi-money-box zmdi-hc-2x"></i></a>
            <input type="text" class="form-control" name="pencarian" placeholder="Cari Nama Pengeluaran">
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
            <th scope="col">Nominal</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Bukti</th>
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
            <td>{{ $post->expense_name }}</td>
            <td>{{ $post->expense_nominal }}</td>
            <td>{{ $post->expense_date }}</td>
            <td class="text-center">
              <img src="{{ Storage::url('public/buktipengeluaran/').$post->expense_image }}" class="rounded"
                style="width: 100px">
            </td>
            <td>
              <div class="d-grid gap-2 d-md-block text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                  action="{{ route('finance_expenses.destroy', $post->id) }}" method="POST">
                  <a href="{{ route('finance_expenses.show', $post->id) }}" class="btn btn-warning btn-sm"><i
                      class="zmdi zmdi-eye zmdi-hc-2x"></i></a>
                  <a href="{{ route('finance_expenses.edit', $post->id) }}" class="btn btn-info btn-sm"><i
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