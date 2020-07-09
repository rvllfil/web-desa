<!-- Header-->
<header id="header" class="header">

  <div class="header-menu">

      <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
              <button class="search-trigger"><i class="fa fa-search"></i></button>
              <div class="form-inline">
                  <form class="search-form">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                      <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                  </form>
              </div>
          </div>
      </div>

      <div class="col-sm-5">
          <div class="user-area dropdown float-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle" src="{{ asset('vendor/sufee-admin/images/avatar-1.png') }}" alt="User Avatar">
              </a>

              <div class="user-menu dropdown-menu">
                      <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                      <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                      <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                     
              </div>
          </div>

          <div class="language-select dropdown" id="language-select">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                  <i class="flag-icon flag-icon-us"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="language" >
                  <div class="dropdown-item">
                      <span class="flag-icon flag-icon-fr"></span>
                  </div>
                  <div class="dropdown-item">
                      <i class="flag-icon flag-icon-es"></i>
                  </div>
                  <div class="dropdown-item">
                      <i class="flag-icon flag-icon-us"></i>
                  </div>
                  <div class="dropdown-item">
                      <i class="flag-icon flag-icon-it"></i>
                  </div>
              </div>
          </div>

      </div>
  </div>

</header><!-- /header -->
<!-- Header-->