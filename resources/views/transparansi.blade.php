@extends('layouts.layout')

@section('content')
  @include('partials.jumbotron', ['title' => 'Transparansi'])
<div class="container" style="margin-top: 50px">
    <p class="lead"> Sebagai wujud nyata komitmen keterbukaan informasi publik terutama terkait dengan pengelolaan anggaran keuangan desa, Pemerintah Desa Cibatu mulai tahun 2017 melakukan publikasi APBDesa dan Realisasi APBDesa dalam format infografik, sehingga dapat lebih mudah dibaca, disebarkan dan dicetak untuk kemudian diakses oleh seluruh warga masyarakat, baik warga Desa Cibatu maupun publik pada umumnya.</p>
  

    <div class="row mt-4">
    @foreach($transparansi as $tp)

        <div class="col-md-12 col-lg-12 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $tp->judul }}</h5>
            </div>
            <img class="card-img-top" src="{{ asset($tp->gambar) }}" alt="Card image cap">
          </div>
        </div>

    @endforeach
  </div>
</div>

@endsection