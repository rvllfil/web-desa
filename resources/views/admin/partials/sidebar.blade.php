<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ asset('vendor/sufee-admin/images/logo.png') }}" alt="Logo"></a>
      <a class="navbar-brand hidden" href="#"><img src="{{ asset('vendor/sufee-admin/images/logo2.png') }}" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="">
            <a href=""> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>

        <h3 class="menu-title">Page Editor</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Lembaga</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="{{ url('admin/pd') }}">Aparat Desa</a></li>
                <li><i class="fa fa-id-badge"></i><a href="{{ url('admin/bpd') }}">BPD</a></li>
                <li><i class="fa fa-bars"></i><a href="{{ url('admin/lpm') }}">LPM</a></li>
                <li><i class="fa fa-share-square-o"></i><a href="{{ url('admin/pkk') }}">PKK</a></li>
                <li><i class="fa fa-id-card-o"></i><a href="{{ url('admin/kt') }}">Karang Taruna</a></li>
            </ul>
        </li>
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-email"></i>Transparansi </a>
        </li>
          
        <h3 class="menu-title">Kabar Desa</h3><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
            <ul class="sub-menu children dropdown-menu">
                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</aside><!-- /#left-panel -->