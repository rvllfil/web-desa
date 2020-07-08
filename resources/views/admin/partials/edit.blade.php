<p>
  <button class="btn btn-primary btn-lg btn-block mt-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="fa fa-pencil"></i> Ubah
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form action="{{ url('lembagas/'.$id) }}" method="post" enctype="multipart/form-data">
      @method('patch')
      @csrf
      <div class="form-group">
        <div class=""><label for="textarea-input" class=" form-control-label">Deskripsi :</label></div>
        <div class=""><textarea name="deskripsi" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
      </div>

      <div class="form-group">
        <div class=""><label for="file-input" class=" form-control-label">Gambar Struktur :</label></div>
        <div class=""><input type="file" id="file-input" name="gambar" class="form-control-file" ></div>
      </div>

      <button type="submit" class="btn btn-primary">
        <i class="fa fa-dot-circle-o"></i> Submit
      </button>
    </form>
  </div>
</div>