<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk | Daftar</title>
    <link rel="shortcut icon" href="{{ asset('admin/assets/img/logo/nongki.ico') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('authpage/style.css') }}">
</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('login.index') }}" method="GET" class="sign-in-form">
                    <h2 class="title">Masuk</h2>
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>

                    <input type="submit" value="Masuk" class="btn solid" />

                    {{-- <p class="social-text">Or Sign in with social platforms</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div> --}}
                </form>

                <form action="{{ route('register.post') }}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Nama Lengkap" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" name="telphone" id="telphone" placeholder="No. Telpon" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirm_password" id="confirm_password"
                            placeholder="Konfirmasi Password" />
                    </div>

                    <input type="submit" class="btn" value="Daftar" />

                    {{-- <p class="social-text">Or Sign up with social platforms</p>
                        <div class="social-media">

                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div> --}}
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Punya Akun?</h3>
                    <p>
                        Daftar untuk mulai mempelajari Coding. <br>
                        Bersama Nongkrong Koding, buat waktu nongkrongmu jadi lebih menyenangkan
                    </p>

                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>

                <img src="{{ asset('authpage/img/ngoding.svg') }}" class="image" alt="" />
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Punya Akun?</h3>

                    <p>
                        Masuk untuk melanjutkan progres pembelajaranmu bersama Nongkrong Koding
                    </p>

                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>

                <img src="{{ asset('authpage/img/rocket.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('authpage/main.js') }}"></script>
</body>

</html>
