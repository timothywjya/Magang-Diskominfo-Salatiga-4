{{-- @extends('adminlte::auth.auth-page', ['auth_type' => 'login']) --}}

@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/email') )

@if (config('adminlte.use_route_url', false))
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
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

    <form action="{{ route('masyarakat.update', $user) }}" method="post">
        @method('PUT')
        @csrf
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <img class="basket-ball center" src="{{ ('/images/basketball-player.png ') }}">
                </div>

                <div class="col-md-6 login-form-2">
                    <h3>Ganti Kata Sandi Anda</h3>
                    <h5>Sistem Informasi Peminjaman Gelanggang Olahraga Salatiga</h5>
            {{-- Token field
            <input type="hidden" name="token" value="{{ $token }}"> --}}
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                @error('password') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Konfirmasi Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirmation">
            </div>


            {{-- Confirm password reset button --}}
            <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                <span class="fas fa-sync-alt"></span>
                {{ __('adminlte::adminlte.reset_password') }}
            </button>
                    </div>


                </div>
            </div>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </form>

{{-- @stop --}}
