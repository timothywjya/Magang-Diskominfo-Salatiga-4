<head>
    <title>Masuk! ke Sigora</title>
    @include('code.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/register.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <form action="{{route('register')}}" method="post">

    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <img class="basket-ball center" src="{{ ('/images/basketball-player.png ') }}">
            </div>

            <div class="col-md-6 login-form-2">
                <h3>Registrasi Akun</h3>
                <h5>Sistem Informasi Peminjaman Gelanggang Olahraga Salatiga</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="name" value="" required autofocus autocomplete="name" />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email" value="" require />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="password" value="" required autocomplete="new-password" />
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="password" value="" required autocomplete="new-password" />
                        </div>

                    <div class="form-group">
                        <button class="btnSubmit">
                            Mendaftar
                        </button>
                    </div>

                    <div class="form-group">
                        <a href="">
                            <button class="btnSubmit">
                                <img class="img-logo" src="{{ ('/images/google-logo.png ') }}">
                                Sign up with Google
                            </button>
                        </a>
                    </div>

                    <div class="form-group">
                        <a href="{{route('login')}}" class="back" value="Back">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    @include('code.code-end')
</body>
