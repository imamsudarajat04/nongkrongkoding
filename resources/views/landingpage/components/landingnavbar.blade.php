<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    
                    <a href="{{ route('landingPage.index') }}" class="logo">
                        <img src="{{ asset('admin/assets/img/logo/4k-edit.png') }}" alt="">
                    </a>

                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                        <li class="scroll-to-section"><a href="#about">Tentang</a></li>
                        <li class="scroll-to-section"><a href="#services">Layanan</a></li>
                        <li class="scroll-to-section"><a href="#portfolio">Kelas</a></li>
                        <li class="scroll-to-section"><a href="#blog">Blog</a></li>
                        <li class="scroll-to-section"><a href="#contact">Kontak</a></li>
                        @auth
                            <li class="scroll-to-section"><a href="{!! route('dashboard.index') !!}">Dashboard</a></li>
                        @else
                            <li class="scroll-to-section"><a href="{{ route('login.index') }}">Mulai</a></li>
                        @endauth
                        <li class="scroll-to-section"></li>
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</header>
