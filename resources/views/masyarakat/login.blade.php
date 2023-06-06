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
                <form method="GET" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" value="" require/>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password" value="" require/>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>

                    <div class="form-group">
                        <a href="/lupapassword" class="ForgetPwd" value="forget-password">Forget Password?</a>
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
