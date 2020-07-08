<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cibatu | Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admin.partials.style')
    @yield('style')
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

  {{-- Left Panel --}}
  @include('admin.partials.sidebar')
  {{-- /Left Panel --}}

  {{-- Right Panel --}}
  <div id="right-panel" class="right-panel">
    {{-- Header --}}
    @include('admin.partials.header')
    {{-- /Header --}}

    @yield('breadcrumbs')

    {{-- Content --}}
    <div class="content mt-3">

    {{-- Alert Message 
      <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div> --}}
    
      @yield('content')

    </div>
    {{-- /Content --}}
  </div>
  {{-- /Right Panel --}}

    @include('admin.partials.script')
</body>
</html>
