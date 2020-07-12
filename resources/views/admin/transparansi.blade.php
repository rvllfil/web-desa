@extends('admin.layouts.adminapp')

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Transparansi </h1>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif

<div class="container">
  <p>
    <a class="btn btn-primary btn-lg btn-block mt-3" href="{{ route('transparansi.create') }}">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </p>

  <div class="row">

        @foreach($transparansi as $tp)

        <div class="col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{ asset($tp->gambar) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $tp->judul }}</h5>
            </div>
            <div class="card-footer">
                <form action="{{ route('transparansi.destroy', $tp->id) }}" method="POST" class="delete">
                  @csrf
                  @method('delete')
                  <a href="{{ route('transparansi.edit', $tp->id) }}" class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</a>                
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Postingan Ini?')">
                    <span class="fa fa-trash"></span> Hapus
                  </button>
                </form>
            </div>
          </div>
        </div>

        @endforeach

  </div>

  <div class="d-flex justify-content-center">
    <div>
      {{-- {{ $posts->links() }} --}}
    </div>
  </div>

</div>
@endsection