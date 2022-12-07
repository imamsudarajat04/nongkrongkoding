<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <a href="index.html" class="logo">
                        <img src="{{ asset('landing/assets/images/logo-v3.png') }}" alt="">
                    </a>

                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#portfolio">Projects</a></li>
                        <li class="scroll-to-section"><a href="#blog">Blog</a></li>
                        <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                        <li class="scroll-to-section">
                            <div class="border-first-button">
                                <a href="{{ route('login.index') }}">Get Start</a>
                            </div>
                        </li> 
                    </ul>        
                    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
</header>