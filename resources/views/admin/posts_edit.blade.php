@extends('admin.layouts.adminapp')

@section('breadcrumbs')
<div class="breadcrumbs mb-3">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Edit Post </h1>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="card">
      <form class="p-4" action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" value="{{ $post->judul }}">  
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea class="form-control" name="content">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
          <label>Thumbnail</label>
          <input type="file" class="form-control" name="thumbnail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'content' );
</script>
@endsection
