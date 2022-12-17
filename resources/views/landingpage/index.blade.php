<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('landingpage.includes.stylelanding')
</head>

<body>
    @include('sweetalert::alert')
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-7">
                    <ul class="info">
                        <li><a href="#"><i class="fa fa-envelope"></i>nongkrongkoding@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>0812-3456-7890</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-4 col-5">
                    <ul class="social-media">
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('landingpage.components.landingnavbar')

    <!-- TOP DATA PAGE -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>Nongkrong Koding</h6>
                                        <h2>Pelajari Koding dengan mudah bersama kami.</h2>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            <a href="/login">Mulai</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('landing/assets/images/landing1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT THIS PAGE -->
    <div id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('landing/assets/images/about-dec-v3.png') }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>Tentang Kami</h6>
                                    <h4>Siapa <em>NongkrongKoding?</em></h4>
                                    <div class="line-dec"></div>
                                </div>

                                <p>Nongkrong Koding adalah Platform untuk belajar koding dengan mudah. Teman - teman
                                    bisa membeli kursus dengan kami melalui Bank Transfer dan lain sebagainya.</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0s">
                                            <div class="progress" data-percentage="90">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <div class="progress-value">
                                                    <div>
                                                        90%<br>
                                                        <span>Coding</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Design</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s"
                                            data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Programming</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES PAGE -->
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Layanan Kami</h6>
                        <h4>Yang tersedia pada <em>Layanan Kami</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('landing/assets/images/icons8-imac-settings-100.png') }}"
                                                        alt=""></span>
                                                <small>Full Stack Developer</small>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('landing/assets/images/icons8-programming-64.png') }}"
                                                        alt=""></span>
                                                <small>Front End Developer</small>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('landing/assets/images/icons8-backend-development-96.png') }}"
                                                        alt=""></span>
                                                <small>Back End Developer</small>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('landing/assets/images/icons8-security-98.png') }}"
                                                        alt=""></span>
                                                <small>Cyber <br> Security</small>
                                            </div>
                                        </div>

                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="{{ asset('landing/assets/images/javascript.png') }}"
                                                        alt=""></span>
                                                <small>Bahasa <br> Javascript</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Full Stack Developer</h4>
                                                                <p>Tingkatkan keahlianmu di frontend dan backend
                                                                    dengan mudah</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i> UI Design</span>
                                                                    <span><i class="fa fa-check"></i> UX Design</span>
                                                                    <span><i class="fa fa-check"></i> HTML, CSS
                                                                        &amp; JS</span>
                                                                    <span><i class="fa fa-check"></i> PHP &amp;
                                                                        Laravel</span>
                                                                    <span><i class="fa fa-check"></i> Git Hub</span>
                                                                    <span><i class="fa fa-check"></i> My SQL</span>
                                                                </div>
                                                                <p>Pelajari serta terapkan di dunia kerja dan bekerja
                                                                    menjadi "Full stack Developer!"</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Front End Developer</h4>
                                                                <p>Menjadi Frontend tidak kalah serunya juga loh!
                                                                    Selamat Berjuang di kelas Front End Developer!
                                                                </p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Logo
                                                                        Design</span>
                                                                    <span><i class="fa fa-check"></i> UI Design</span>
                                                                    <span><i class="fa fa-check"></i> UX Design</span>
                                                                    <span><i class="fa fa-check"></i> HTML &amp;
                                                                        CSS</span>
                                                                    <span><i class="fa fa-check"></i> Figma &amp;
                                                                        Adobe</span>
                                                                    <span><i class="fa fa-check"></i> Git Hub</span>
                                                                </div>
                                                                <p>jadilah salah satu orang yang ahli di Frontend
                                                                    Developer!
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image-02.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Back End Developer</h4>
                                                                <p>Back End Developer berguna bagi setiap fungsi pada
                                                                    website maka dari itu backend juga penting demi
                                                                    berjalannya sebuah website. Ikuti Kelas Backend
                                                                    kami!</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> PHP &amp;
                                                                        Laravel</span>
                                                                    <span><i class="fa fa-check"></i> Git Hub</span>
                                                                    <span><i class="fa fa-check"></i> My SQL</span>
                                                                </div>
                                                                <p>Jadilah Backend Developer yang Handal!</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image-03.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Cyber Security</h4>
                                                                <p>Tingkatkan ke ahlian mu di bidang Cyber Security
                                                                    bersama kami!</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i>Ethical
                                                                        Hacking</span>
                                                                    <span><i class="fa fa-check"></i>Penetration
                                                                        Testing</span>
                                                                    <span><i class="fa fa-check"></i>Security
                                                                        Hacking</span>
                                                                    <span><i class="fa fa-check"></i>Networking
                                                                        Security</span>
                                                                    <span><i class="fa fa-check"></i>Kali Linux</span>
                                                                    <span><i class="fa fa-check"></i>Information
                                                                        Security</span>
                                                                </div>
                                                                <p>Belajar tidak mengenal Usia dan Waktu! Semangat!</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image-04.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Javascript</h4>
                                                                <p>Javascript tidak luput oleh waktu karena Javascript
                                                                    sendiri dapat mendukung dalam pembuatan sebuah
                                                                    website yang Profesional.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i>Fundamental
                                                                        Js</span>
                                                                    <span><i class="fa fa-check"></i>Struktur Js</span>
                                                                    <span><i class="fa fa-check"></i>Membuat Portofolio
                                                                        dengan Js</span>
                                                                </div>
                                                                <p>Jangan Menyerah sampai di sini teman !</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- QUOTE PAGE -->
    <div id="free-quote" class="free-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h4>Trusted by over 13,400 great teams</h4>
                        <h6><small>Leading companies use the same courses to help employees keep their skills
                                fresh.</small></h6>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PORTOFOLIO PAGE -->
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Kelas Kami</h6>
                        <h4>Lihat Kelas yang <em>Tersedia</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        @foreach ($kelas as $k)
                            <div class="item">
                                <a href="#">
                                    <div class="portfolio-item">
                                        <div class="thumb">
                                            <img src="{{ asset('landing/assets/images/portfolio-01.jpg') }}"
                                                alt="">
                                        </div>

                                        <div class="down-content">
                                            <h4>{!! $k->name !!}</h4>
                                            <span>Rp. {!! number_format($k->price) !!}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ARTIKEL PAGE -->
    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-heading">
                        <h6>Artikel</h6>
                        <h4>Baca Lebih Banyak <em>Artikel</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-post">
                        <div class="thumb">
                            <a href="#"><img
                                    src="{{ asset('landing/assets/images/hacker-working-darkness.jpg') }}"
                                    alt=""></a>
                        </div>

                        <div class="down-content">
                            <span class="category">Ethical Hacking</span>
                            <span class="date">03 August 2022</span>

                            <a href="#">
                                <h4>Cyber Security</h4>
                            </a>

                            <p>Cyber security adalah aktivitas yang dilakukan sistem atau seseorang dalam rangka
                                melindungi sistem komputer dari serangan. Biasanya serangan tersebut bersifat ilegal.
                            </p>

                            <span class="author">
                                <img src="{{ asset('landing/assets/images/author-post.jpg') }}" alt="">
                                By: Hendra Yudha Pratamadya
                            </span>

                            <div class="border-first-button">
                                <a href="#">
                                    Lanjut Baca
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('landing/assets/images/Fullstackdev.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="right-content">
                                        <span class="category">Web Development</span>
                                        <span class="date">24 September 2022</span>
                                        <a href="#">
                                            <h4>Tentang Pengembangan Web</h4>
                                        </a>
                                        <p>Pengembangan Web adalah
                                            sebuah proses pembangunan dan pemeliharaan situs web.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('landing/assets/images/HTML.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">Dasar Programming</span>
                                        <span class="date">24 September 2022</span>
                                        <a href="#">
                                            <h4>Bingung harus mulai dari mana?</h4>
                                        </a>
                                        <p>Jawaban singkatnya: mulai dari HTML. Karena HTML adalah inti dari seluruh
                                            halaman web. Sangat mustahil untuk membuat website tanpa memiliki dasar
                                            pengetahuan tentang HTML.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="post-item last-post-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('landing/assets/images/Sejarah.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">Seputar Dunia Teknologi</span>
                                        <span class="date">24 September 2022</span>
                                        <a href="#">
                                            <h4>Sejarah Teknologi</h4>
                                        </a>
                                        <p>Sejarah teknologi adalah sejarah yang berkaitan dengan alat dan teknologi
                                            atau teknik hasil penemuan manusia yang pada akhirnya dapat digunakan untuk
                                            memudahkan aktivitas manusia itu sendiri.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACTS PAGE -->
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Kontak kami</h6>
                        <h4>Hubungi kami <em>Sekarang</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="{{ asset('landing/assets/images/contact-dec-v3.png') }}"
                                        alt="">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div id="map">
                                    {{-- <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63828.914749279924!2d104.44957766074359!3d0.9171476503030395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f6dec85825%3A0xec4ab548c30d02a1!2sTanjung%20Pinang%2C%20Tanjung%20Pinang%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1670358120541!5m2!1sen!2sid"
                                        width="100%" height="636px" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('landing/assets/images/phone-icon.png') }}"
                                                        alt="">
                                                    <a href="#"><small>Telepon : <br>0812-3456-7890</small></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('landing/assets/images/email-icon.png') }}"
                                                        alt="">
                                                    <a href="#"><small>nongkrongkoding <br>
                                                            @gmail.com</small></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('landing/assets/images/location-icon.png') }}"
                                                        alt="">
                                                    <a href="#"><small>Tanjungpinang<br>- Kepulauan
                                                            Riau</small></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name"
                                                    placeholder="Name" autocomplete="on" required>
                                            </fieldset>

                                            <fieldset>
                                                <input type="text" name="email" id="email"
                                                    pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                            </fieldset>

                                            <fieldset>
                                                <input type="subject" name="subject" id="subject"
                                                    placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Send
                                                    Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPONENT && INCLUDES FOOTER & SCRIPT -->
    @include('landingpage.components.landingfooter')
    @include('landingpage.includes.scriptlanding')
</body>

</html>
