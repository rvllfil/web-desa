@extends('admin.layouts.adminapp')

@section('breadcrumbs')
<div class="breadcrumbs mb-3">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Tambah Produk </h1>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
  <div class="card">
    <form class="p-4" action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang">
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga">
      </div>
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi"></textarea>
      </div>
      <div class="form-group">
        <label>Kontak Penjual</label>
        <input type="text" class="form-control" name="kontak_penjual">
      </div>
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'deskripsi' );
</script>
@endsection
