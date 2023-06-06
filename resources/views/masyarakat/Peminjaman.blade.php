<head>
    <title>Welcome! to SIGORA</title>
    @include('code.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}">
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
                            <a href="logout">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-stripped" id="example2">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Gor</th>
                                <th>Nama Arena</th>
                                <th>Keperluan</th>
                                <th>Waktu Awal</th>
                                <th>Waktu Akhir</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                            @foreach($peminjaman as $key => $peminjaman)
                                <td>{{$key+1}}</td>
                                <td>{{$peminjaman->Gor->nama_gor}}</td>
                                <td>{{$peminjaman->Arena->nama_arena}}</td>
                                <td>{{$peminjaman->keperluan}}</td>
                                <td>{{$peminjaman->waktu_awal}}</td>
                                <td>{{$peminjaman->waktu_akhir}}</td>
                                <td><?php if ($peminjaman->status == "terima") {
                                    echo "<span class='text-success'>{$peminjaman->status}</span>";
                                    } elseif ($peminjaman->status == "tolak") {
                                    echo "<span class='text-danger'>{$peminjaman->status}</span>";
                                    } else {
                                    echo "<span class='text-warning'>{$peminjaman->status}</span>";
                                    }
                                ?></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

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
