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

        <div class="card p-3 mt-2">

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
        </div>


        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Tinggalkan Komentar:</h5>
          <div class="card-body">
            <form action="{{ url('/comments') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $post->id }}" class="form-control">
              <input type="hidden" name="parent_id" id="parent_id" class="form-control">
              <div class="form-group">
                <input type="text" placeholder="Nama" class="form-control" name="username" rows="3">
                <p class="text-danger">{{ $errors->first('username') }}</p>
              </div>
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control" name="email" cols="30" rows="10">
                <p class="text-danger">{{ $errors->first('email') }}</p>
              </div>
              <div class="form-group" style="display: none" id="formReplyComment">
                <label for="">Balas Komentar</label>
                <input type="text" id="replyComment" class="form-control" readonly>
            </div>
              <div class="form-group">
                <textarea name="comment" placeholder="Komentar" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>


        {{-- @foreach ($post->comments as $row)
            <blockquote>
                <h6>{{ $row->username }}</h6>
                <hr>
                <p>{{ $row->comment }}</p><br>
                <a href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
            </blockquote>
            @foreach ($row->child as $val) 
                <div class="child-comment">
                    <blockquote>
                        <h6>{{ $val->username }}</h6>
                        <hr>
                        <p>{{ $val->comment }}</p><br>
                    </blockquote>
                </div>
            @endforeach
        @endforeach --}}

              <!-- Comment with nested comments -->
              <div class="card my-4">
                <h5 class="card-header">Komentar:</h5>
                <div class="card-body">

              @foreach ($post->comments as $row)
                  <div class="media p-2">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                      <h5 class="mt-0">{{ $row->username }}</h5>
                      <p>{{ $row->comment }}</p>
                      <a href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
                      @foreach ($row->child as $val)
                      <div class="media mt-3">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                          <h5 class="mt-0">{{ $val->username }}</h5>
                          {{ $val->comment }}
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
        </div>


      <!-- Sidebar Widgets Column -->
        <div class="col-md-4 d-md-none d-lg-block" style="top: 0; margin-top: -42px;">

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

<script>
  function balasKomentar(id, title) {
      $('#formReplyComment').show();
      $('#parent_id').val(id)
      $('#replyComment').val(title)
  }
</script>
@endsection