@can('system_management_access')    
    <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link @yield('dashboard')" href="{!! route('dashboard.index') !!}">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                </a>
            </li> <!-- end Dashboard Menu -->
        @can('menu_access')    
            <li class="nav-item"> <!-- Todo Fixing Responsive Menu -->
                <a class="nav-link menu-link" href="#Users" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="mdi mdi-account-group"></i> Data Pengguna
                </a>
                <div class="collapse menu-dropdown @yield('showMenu')" id="Users">
                    <ul class="nav nav-sm flex-column">
                        @can('pengguna_access')    
                            <li class="nav-item">
                                <a href="{!! route('pengguna.index') !!}" class="nav-link @yield('pengguna')"> Pengguna </a>
                            </li>
                        @endcan
                        @can('jabatan_access')    
                            <li class="nav-item">
                                <a href="{!! route('jabatan.index') !!}" class="nav-link @yield('jabatan')"> Jabatan </a>
                            </li>
                        @endcan
                        @can('hakakses_access')    
                            <li class="nav-item">
                                <a href="#" class="nav-link @yield('hak-akses')"> Hak Akses </a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </li>
        @endcan

    </ul>
@endcan