@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('title', 'Cibatu')

@section('content')


<div class="jumbotron jumbotron-fluid" style="background-image: url({{ asset('img/back.png') }});">
  <div class="container">
    <h1 class="display-4">Kenali Desa kami Lebih Dekat Lagi</h1>
    <p class="lead">Desa Cibatu adalah desa di wilayah Kecamatan Cisaat Kabupaten Sukabumi</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
  </div>
</div>



@endsection