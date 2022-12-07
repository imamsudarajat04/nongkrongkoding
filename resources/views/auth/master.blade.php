<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <title>@yield('oginTitle')</title> --}}
    <title>Login | Signup</title>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('authpage/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">

                    <h2 class="title">Sign In</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>

                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign In with social platform</p>

                    <div class="social-media">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="" class="sign-up-form">

                    <h2 class="title">Register</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email">
                    </div>


                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password">
                    </div>

                    <input type="submit" value="Sign Up" class="btn solid">

                    <p class="social-text">Or Sign Up with social platform</p>

                    <div class="social-media">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="panels-container">

                <div class="panel left-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                            assumenda eligendi molestiae 
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Sign Up
                        </button>
                    </div>
                    <img src="{{ asset('authpage/img/start.svg') }}" class="image" alt="">
                </div>


                <div class="panel right-panel">
                    <div class="content">
                        <h3>One Of Use?</h3>
                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                            assumenda eligendi molestiae 
                        </p>

                        <button class="btn transparent" id="sign-in-btn">
                            Login
                        </button>
                    </div>
                    <img src="{{ asset('authpage/img/rocket.svg') }}" class="image" alt="">
                </div>

            </div>
        </div>
    </div>
</body>

</html>
