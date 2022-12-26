<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{!! route('landingPage.index') !!}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="{{ asset('admin/assets/img/logo/4k-2edit.png') }}" alt=""></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- DASHBOARD ADMIN -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Main</span>
        </li>
        <li class="menu-item @yield('dashboard')">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- DATA DAN VIDEO -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data</span>
        </li>
        <!-- DATA TABLE PENGGUNA DAN ADMIN -->
        <li class="menu-item @yield('pengguna')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Account Settings">Pengguna</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Admin</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Pengguna</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- VIDEO, KATEGORI SERTA TAMBAH VIDEO -->
        <li class="menu-item @yield('video')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-videos"></i>
                <div data-i18n="Misc">Video</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Video">Kategori Video</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Video">Tambah Video</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- HAK AKSES DAN JABATAN -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Akses & Jabatan</span></li>
        <!-- JABATAN -->
        <li class="menu-item @yield('jabatan')">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-badge"></i>
                <div data-i18n="User interface">Jabatan</div>
            </a>
        </li>
        <!-- HAK AKSES -->
        <li class="menu-item @yield('hak-akses')">
            <a href="{!! route('hak-akses.index') !!}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="User interface">Hak-akses</div>
            </a>
        </li>

        <!-- PENGATURAN KOMPONEN HALAMAN USER&DASHBOARD -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Komponen</span></li>
        <li class="menu-item @yield('pengaturan')">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-cog"></i>
                <div data-i18n="User interface">Pengaturan</div>
            </a>
            
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">Footer(landingPage)</div>
                    </a>

                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">Bodi</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>