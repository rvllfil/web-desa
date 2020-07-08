@extends('admin.layouts.adminapp')


@section('breadcrumbs')
{{-- Breadcrumbs --}}
@include('admin.partials.breadcrumbs')
{{-- /Breadcrumbs --}}
@endsection


@section('content')

@include('admin.partials.edit')

@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif


<div class="card card-body">
  <p>{{ $deskripsi}}</p>
  <p>Berikut adalah struktur organigram dari {{ $title }}:</p>
  @if ($gambar != '')
  <img src="{{ asset($gambar) }}" class="img-fluid" alt="Responsive image">        
  @else
  <img src="{{ asset('img/bagan.png') }}" class="img-fluid" alt="Responsive image"> 
  @endif
</div> 

@endsection