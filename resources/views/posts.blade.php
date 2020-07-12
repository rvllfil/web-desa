@extends('layouts.layout')

@section('style')
    <style>
      .card img {
        max-height: 350px;
        object-fit: cover;
        object-position: center;
      }

      .bg-crimson  {
        background-color: crimson;
      }
    </style>
@endsection


@section('content')

@include('partials.jumbotron', ['title' => 'Kabar Desa'])

<div class="container" style="margin-top: 40px">
  <div class="row">
    <div class="col-md-7">

    @foreach ($posts as $post)
    
    
      <div class="card mb-3 border-danger">
        <a href="{{ route('posts.post', $post->slug) }}"><img class="card-img" src="{{ asset($post->thumbnail) }}"></a>
        <div class="card-body">          
          <h4 class="card-title">{{ $post->judul }}</h4>
          <small class="text-muted cat">
            <span class="fa fa-clock-o" style="color: crimson"></span> {{ $post->created_at->diffForHumans() }}
          </small>
          <p class="card-text">{!! Str::limit($post->content , 100, '.') !!}
            <a style="color: crimson" href="{{ route('posts.post', $post->slug) }}" class="">Baca Selengkapnya...</a>
          </p>
        </div>
      </div>
    

    @endforeach
  </div>

<!-- Sidebar Widgets Column -->
<div class="col-md-5" style="top: 0; margin-top: -22px;">

  <!-- Search Widget -->
  <div class="card my-4 border-danger">
    <h5 class="card-header bg-crimson text-white">Search</h5>
    <div class="card-body">
      <form class="input-group" action="{{route('search.posts')}}" method="GET">
        <input name="query" type="text" class="form-control" placeholder="Cari...">
        <span class="input-group-append">
          <button class="btn bg-crimson text-white" type="submit">Go!</button>
        </span>
      </form>
    </div>
  </div>
</div>
    
  </div>
</div>
@endsection