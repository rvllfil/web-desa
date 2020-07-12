@extends('admin.layouts.adminapp')

@section('style')
    <style>
      .card-img-top {
        width: 100%; 
        height:40vw; 
        object-fit: cover;
      }

      @media (min-width: 576px) {
        .card-img-top {
          height:30vw;
        }
      }

      @media (min-width: 768px) {
        .card-img-top {
          height:20vw;
        }
      }

      @media (min-width: 992px) {
        .card-img-top {
          height:15vw;
        }
      }
    </style>
@endsection

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Kabar Desa </h1>
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
    <a class="btn btn-primary btn-lg btn-block mt-3" href="{{ route('posts.create') }}">
      <i class="fa fa-plus"></i> Tambah Post
    </a>
  </p>

  <div class="row">

        @foreach($posts as $post)

        <div class="col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="{{ asset($post->thumbnail) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $post->judul }}</h5>
              <p class="card-text">{!! Str::limit($post->content , 100) !!}</p>
            </div>
            <div class="card-footer">
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="delete">
                  @csrf
                  @method('delete')
                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</a>                
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
      {{ $posts->links() }}
    </div>
  </div>

</div>
@endsection