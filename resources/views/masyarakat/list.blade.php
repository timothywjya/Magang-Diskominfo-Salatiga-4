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
                    <h2>List Arena</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Arena</th>
                            <th>Fasilitas</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($arena as $key => $arena)
                            <td>{{$key+1}}</td>
                            <td>{{$arena->nama_arena}}</td>
                            <td>{{$arena->fasilitas}}</td>
                            <td>{{$arena->kapasitas}}</td>
                        <td>
                                    <a href="/pinjam/arena/{{$arena->id}}" class="btn btn-primary btn-xs">
                                        Pinjam
                                    </a>
                                </td>
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
