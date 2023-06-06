<head>
    <title>Masuk! ke Sigora</title>
    @include('code.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>


<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <img class="basket-ball center" src="{{ ('/images/basketball-player.png ') }}">
            </div>

            <div class="col-md-6 login-form-2">
                <h3>Welcome to Sigora</h3>
                <h5>Sistem Informasi Peminjaman Gelanggang Olahraga Salatiga</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" :value="old('email')" placeholder="Your Email" required autofocus/>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Your Password" required autocomplete="current-password"/>
                    </div>

                    <div class="form-group">
                        <input class="btnSubmit" type="submit" class="btnSubmit" value="Login" />
                    </div>

                    <div class="form-group">
                        <a href="{{ url('auth/google') }}">
                            <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                        </a>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('password.request') }}" class="ForgetPwd" value="forget-password">Forget Password?</a>
                    </div>

                    <div class="form-group">
                        <a href="/register" class="ForgetPwd" value="akun-baru">Create a New Account!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    @include('code.code-end')
</body>
