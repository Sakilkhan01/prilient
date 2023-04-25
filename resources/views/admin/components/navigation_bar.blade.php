<header class="main-header">
    <a href="{{ url('admin/dashboard') }}" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Prilient</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url('public/images/profile.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ config('app.name') }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{ url('public/images/profile.jpg') }}" class="img-circle" alt="User Image">

                <p>
                  {{ config('app.name') }} - Admin
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('admin/profile') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>