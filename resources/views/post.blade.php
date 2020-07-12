@extends('layouts.layout')


@section('style')
<style>    
  .container .thumbnail {
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
  }

  .bg-crimson {
    background-color: crimson
  }
</style>
@endsection

@section('content')
      <!-- Page Content -->
  <div class="container" style="margin-top: 80px">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $post->judul }}</h1>

        <hr>

        <!-- Date/Time -->
        <p>Diposting pada {{ $post->created_at->format('d F Y') }} oleh Admin Desa Cibatu</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid thumbnail" src="{{ asset($post->thumbnail) }}" alt="">

        <hr>

        <!-- Post Content -->
        <p>{!! $post->content !!}</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
<div class="col-md-4" style="top: 0; margin-top: -22px;">

  <!-- Search Widget -->
  <div class="card" style="margin-top: 50px">
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
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection