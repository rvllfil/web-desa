@extends('admin.layouts.adminapp')

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
      <div class="page-header float-left">
          <div class="page-title">
            <h1> Layanan </h1>
          </div>
      </div>
  </div>
</div>
@endsection

@section('content')
      <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Layanan Surat</strong>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nama</th>
                              <th scope="col">NIK</th>
                              <th scope="col">No Whatapps</th>
                              <th scope="col">Jenis Surat</th>
                              <th scope="col">Pesan</th>
                              <th scope="col">Waktu Permohonan</th>                                                            
                          </tr>
                      </thead>
                      <tbody>
                      @foreach ($services as $service)
                        <tr>
                          <th scope="row">{{ $service->id }}</th>
                          <td>{{ $service->nama }}</td>
                          <td>{{ $service->nik }}</td>
                          <td>{{ $service->no_wa }}</td>
                          <td>{{ $service->jenis_surat }}</td>
                          <td>{{ $service->pesan }}</td>
                          <td>{{ $service->created_at }}</td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
                    </div>
                </div>
            </div>

            </div>
        </div><!-- .animated -->
    </div>
  
@endsection