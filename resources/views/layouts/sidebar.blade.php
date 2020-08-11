<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>

</head>
    <body>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{env('APP_URL')}}" class="brand-link">
      <span class="brand-text font-weight-light">iNET SPATIAL Test</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ env('APP_URL') }}/stories" class="nav-link">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>Stories</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ env('APP_URL') }}/user" class="nav-link">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>Profile</p>
            </a>
          </li>
          
          <li class="nav-item">
			<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    </body>
</html>


