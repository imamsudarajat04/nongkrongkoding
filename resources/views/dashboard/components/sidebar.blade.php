<ul class="navbar-nav" id="navbar-nav">
  <li class="menu-title"><span data-key="t-menu">Menu</span></li>
  <li class="nav-item">
      <a class="nav-link menu-link @yield('dashboard')" href="{!! route('dashboard.index') !!}">
          <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
      </a>
  </li> <!-- end Dashboard Menu -->
  
  <li class="nav-item">
    <a class="nav-link menu-link" href="#Users" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
        <i class="mdi mdi-account-group"></i> Data Users
    </a>
    <div class="collapse menu-dropdown" id="Users">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link active"> User </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> Hak Akses </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> Jabatan </a>
            </li>
        </ul>
    </div>
  </li>

</ul>