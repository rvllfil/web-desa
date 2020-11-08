@extends('layouts.layout')

@section('style')
    <style>
      .card img {
        max-height: 200px;
        object-fit: cover;
        object-position: center;
      }

      .crimson {
        background-color: crimson;
        color: white;
      }

      body {
        min-height: 100vh;
        background: #f8f8f8;
      }

      @media (max-width: 768px) {
        .card img {
          max-height: 400px;
        }
      }
      
    </style>
@endsection

@section('content')
<div class="container py-5 mt-5">
  <!-- For Demo Purpose-->
  <header class="text-center mb-5">
      <h1 class="display-4 font-weight-bold">Produk Desa</h1>
      <p class="font-italic text-muted mb-0">Ini adalah Produk-produk unggulan Desa Cibatu</p>
      
  </header>

  
  <!-- First Row [Prosucts]-->
  <div class="row pb-5 mb-4"> 

    @foreach ($products as $product)
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0 mt-4">
          <img src="{{ asset($product->gambar) }}" alt="" class="">
          <div class="card-body p-4">
            <h5><a href="{{ route('products.product', $product->id) }}" class="text-dark">{{ $product->nama_barang }}</a></h5>
            <h5 class="text-dark font-weight-bold">Rp. {{ $product->harga }}</h5>
            <div class="row px-2">
            <h5><a href="{{ route('products.product', $product->id) }}" class="btn crimson"><i class="fa fa-money-bill-wave"></i> Pesan</a></h5>
            </div>
          </div>
          
        </div>
      </div>
    @endforeach
      
  </div>
</div>
@endsection