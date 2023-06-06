<head>
    <title>Welcome! to SIGORA</title>
    @include('code.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pinjam.css') }}">
</head>

<body>
    @include('header.header')
    @include('Navigation.navigation')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dropdown">
                        <button class="dropbtn">
                            <p>
                                <img class="rounded-circle mt-5" src="{{ ('/images/exp_photo.jpg ') }}">
                                Hello, {{Auth::user()->name}}
                            </p>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{ route('masyarakat.edit', Auth()->user()->id) }}">Ganti Password</a>
                            <a href="{{ url('/logout') }}">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Welcome to SIGORA</h1>
                    <h2>Pinjam Arena {{ $arena->nama_arena }}</h2>
                    <div class="center">
                        <span class="text-danger">{!! session()->get('error') !!}</span>
                        <span class="text-success">{!! session()->get('success') !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/simpanpinjamanmasyarakat" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Awal</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="waktu_awal" id="date" class="pengaturan-form"
                                    style="display: inline;" onchange="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Akhir</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="waktu_akhir" id="date2" class="pengaturan-form"
                                    style=" display: inline;" onchange="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Keperluan</label>
                            <div class="col-sm-10">
                                <input type="text" class="pengaturan-form" id="inputEmail3" name="keperluan"
                                    required="required" placeholder="Keperluan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="pengaturan-form" id="inputEmail3" name="no_hp" required="required"
                                    placeholder="Nomor HP">
                            </div>
                        </div>

                        <input type="hidden" name="arena_id" value="{{ $arena->id }}">
                        <input type="hidden" name="gor_dipinjam_id" value="{{ $arena->kode_gor }}">
                        <input type="hidden" name="user_peminjam_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="nama_peminjam" value="{{ Auth::user()->name }}">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-primary" value="Pinjam">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    @include('code.code-end')
</body>


@push('js')
<script>
var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
document.getElementById('date').value = now.toISOString().slice(0, 16);
document.getElementById('date2').value = now.toISOString().slice(0, 16);

var today = new Date().toISOString().slice(0, 16);
document.getElementsByName("waktu_awal")[0].min = today;
document.getElementsByName("waktu_akhir")[0].min = today;
</script>
@endpush
