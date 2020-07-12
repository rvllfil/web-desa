@extends('admin.layouts.adminapp')

@section('breadcrumbs')
<div class="breadcrumbs mb-3">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Tambah Transparansi Data </h1>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')

<div class="container">
    <div class="card">
      <form class="p-4" action="{{ route('transparansi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
          <label>Gambar Data Transparansi</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection
