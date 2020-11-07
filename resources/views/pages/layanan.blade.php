@extends('layouts.layout')

@section('content')
<br><br><br><br>
<div class="col-xl-8 offset-xl-2 py-5">

  <h1 align="center"><p>Pelayanan Surat Online</p>
      <a href="/">Desa Cibatu</a>
  </h1>

  <p class="lead">Silahkan lengkapi semua isian sesuai dengan data yang diperlukan</p>


  <form id="contact-form" method="POST" action="{{ route('layanan.store') }}" role="form" novalidate="true">
  @csrf
      <div class="messages"></div>

      <div class="controls">

          <div class="row">
              <div class="col-md-6">
                  <div class ="form-group">
                      <label for="form_name">Nama *</label>
                      <input id="form_name" type="text" name="nama" class="form-control" placeholder="Silahkan masukkan nama anda *" required="required" data-error="Nama harus diisi!.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">NIK *</label>
                      <input id="form_lastname" type="text" name="nik" class="form-control" placeholder="Silahkan masukkan NIK anda *" required="required" data-error="NIK Harus diisi!.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_email">No WhatsApp *</label>
                      <input id="form_email" type="email" name="no_wa" class="form-control" placeholder="Silahkan masukkan email anda *" required="required" data-error="Format email salah.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_need">Pilih Jenis Surat *</label>
                      <select id="form_need" name="jenis_surat" class="form-control" required="required" data-error="Pilih jenis surat yang anda perlukan">
                          <option value=""></option>
                          <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                          <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                          <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                          <option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum Pernah Menikah</option>
                          <option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran</option>
                          <option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
                          <option value="Surat Keterangan Beda Nama">Surat Keterangan Beda Nama</option>
                          <option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan</option>
                          <option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah</option>
                      </select>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_message">Pesan *</label>
                      <textarea id="form_message" name="pesan" class="form-control" placeholder="Silahkan isi keperluan atau keterangan lainnya disini *" rows="4" required="required" data-error="Silahkan isi pesan atau keterangan anda."></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <input type="submit" class="btn btn-success btn-send disabled" value="Kirim Permohonan">
              </div>
              <div class="col-md-6">
                  <input type="button" class="btn btn-primary btn-send" value="Kembali" onclick="window.history.back()">
                  </div>
          </div>
          
          <div class="row">
              <div class="col-md-12">
                  <p class="text-muted">
                      <strong>*</strong> Harus diisi
                      </p>
              </div>
          </div>
      </div>

  </form>

</div>
@endsection