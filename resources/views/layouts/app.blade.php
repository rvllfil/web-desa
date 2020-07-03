<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Partials Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Page Styles -->
    @yield('style')
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/6144395dcf.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
  
  @include('partials.navbar')

  @yield('content')

  @include('partials.footer')

  <!-- Bootstrap Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @yield('script')
</body>
</html>