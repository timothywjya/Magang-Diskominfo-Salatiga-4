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
                                Hello, {{ Auth::user()->name }}
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Welcome to SIGORA</h1>
                    <h2>Peminjaman Gelanggang Olahraga Salatiga</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="GOR-Highlights">
        <div class="container">
            <div class="row">


                @foreach($gor as $key => $gor)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img id="file-ip-1-preview" src ="{{ route('gor.download', $gor->foto_gedung) }}" alt="Card image cap" width="auto" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $gor->nama_gor }}</h5>
                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                            <a href="list/gor/{{ $gor->id }}" class="btn btn-primary">Lihat List Arena</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

    @include('code.code-end')
</body>
