<link rel="stylesheet" type="text/css" href="{{ asset('/css/navigation.css') }}">

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('beranda')}}">
            <img src="{{ ('/images/Sigora-navbar.png ') }}">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="float: right;">
                    <a class="nav-link" href="{{url('beranda')}}" style="float: right;">Beranda</a>
                </li>

                <li class="nav-item" style="float: right;">
                    <a class="nav-link" href="{{url('peminjaman')}}" style="float: right;">Peminjaman</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
