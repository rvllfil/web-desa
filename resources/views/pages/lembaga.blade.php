@extends('layouts.layout')

@section('title')
  Cibatu | {{ $title }}
@endsection

@section('content')

@include('partials.jumbotron')
  <div class="container">
    <p class="lead">{{ $deskripsi }}</p>
    <p class="lead">Berikut adalah struktur organigram dari {{ $title }} Desa Cibatu:</p>
    @if ($gambar != '')
    <img src="{{ asset($gambar) }}" class="img-fluid" alt="Responsive image">        
    @else
    <img src="{{ asset('img/bagan.png') }}" class="img-fluid" alt="Responsive image"> 
    @endif
  </div> 
  
  

@endsection