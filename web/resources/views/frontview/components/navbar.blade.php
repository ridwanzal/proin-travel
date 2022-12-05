<nav class="navbar navbar-expand-lg text-dark fixed-top navbar-light" style="background-color:#FFF;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload"
                data-src="{{ asset('images/icon/proin-logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-2 pb-2" id="navbarNav">
            <ul class="navbar-nav ml-auto" style="margin-left: auto;">
                <li class="nav-item px-md-3">
                    <a class="nav-link" aria-current="page" href="{{ url('/products') }}">Home</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/about') }}">Testimoni</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/sources') }}">FAQ</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/facilities') }}">Paket Umrah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
