{{-- @extends('adminlte::auth.auth-page', ['auth_type' => 'login']) --}}

@php( $password_email_url = View::getSection('password_email_url') ?? config('adminlte.password_email_url', 'password/email') )

@if (config('adminlte.use_route_url', false))
    @php( $password_email_url = $password_email_url ? route($password_email_url) : '' )
@else
    @php( $password_email_url = $password_email_url ? url($password_email_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.password_reset_message'))

{{-- @section('auth_body') --}}
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <head>
        <title>Lupa ke Sigora?</title>
        @include('code.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>

    <form action="{{ $password_email_url }}" method="post">
        @csrf

        {{-- Email field --}}
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <img class="basket-ball center" src="{{ ('/images/basketball-player.png ') }}">
                </div>

                <div class="col-md-6 login-form-2">
                    <h3>Lupa Kata Sandi Anda?</h3>
                    <h5>Sistem Informasi Peminjaman Gelanggang Olahraga Salatiga</h5>
                    <form method="POST" action="{{ route('password.email') }}">

                        <div class="form-group">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                        </div>

                        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                            <span class="fas fa-share-square"></span>
                            {{ __('adminlte::adminlte.send_password_reset_link') }}
                        </button><br>

                            <div class="form-group">
                                <a href="{{route('login')}}" class="ForgetPwd" value="Login">Kembali</a>
                            </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                </div>
            </div>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </form>

{{-- @stop --}}
