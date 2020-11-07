@extends('admin.layouts.adminapp')

@section('style')
<style>
.card img {
  max-height: 200px;
  object-fit: cover;
  object-position: center;
}
</style>
@endsection

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Produk </h1>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif

<div class="container">
  <p>
    <a class="btn btn-primary btn-lg btn-block mt-3" href="{{ route('produk.create') }}">
      <i class="fa fa-plus"></i> Tambah Produk
    </a>
  </p>

  <div class="row">

        @foreach($barangs as $barang)

        <div class="col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{ asset($barang->gambar) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $barang->nama_barang }}</h5>
            </div>
            <div class="card-footer">
                <form action="{{ route('produk.destroy', $barang->id) }}" method="POST" class="delete">
                  @csrf
                  @method('delete')
                  <a href="{{ route('produk.edit', $barang->id) }}" class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</a>                
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Postingan Ini?')">
                    <span class="fa fa-trash"></span> Hapus
                  </button>
                </form>
            </div>
          </div>
        </div>

        @endforeach

  </div>

  {{-- <div class="d-flex justify-content-center">
    <div>
      {{ $posts->links() }}
    </div>
  </div> --}}

</div>
@endsection