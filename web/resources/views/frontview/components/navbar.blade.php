<nav class="navbar navbar-expand-lg text-dark fixed-top navbar-light" style="background-color:#FFF;">
    <div class="container">


        @if (env('CUST_WILAYAH') == 'jakarta')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-logo.png') }}"></a>
        @elseif (env('CUST_WILAYAH') == 'tangerang')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-tangerang.png') }}"></a>
        @elseif (env('CUST_WILAYAH') == 'bogor')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazylc    oad" height="50"
                    data-src="{{ asset('images/icon/proin-bogor.png') }}"></a>
        @elseif (env('CUST_WILAYAH') == 'cilegon')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-cilegon.png') }}"></a>
        @elseif (env('CUST_WILAYAH') == 'cibubur')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-cibubur.png') }}"></a>
        @elseif (env('CUST_WILAYAH') == 'depok')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-depok.png') }}"></a>
        @elseif (env('CUST_WILAYAH') == 'pondokgede')
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-pondokgede.png') }}"></a>
        @else
            <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                    data-src="{{ asset('images/icon/proin-logo.png') }}"></a>
        @endif


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pt-2 pb-2" id="navbarNav">
            <ul class="navbar-nav ml-auto" style="margin-left: auto;">
                <li class="nav-item px-md-3">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" aria-current="page" href="{{ url('/paket-umroh') }}">Paket Umroh</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/haji-khusus') }}">Haji Khusus</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/jadi-agen') }}">Daftar Agen</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/#section-info') }}">Testimoni</a>
                </li>
                <li class="nav-item px-md-3">
                    <a class="nav-link" href="{{ url('/#section-faq') }}">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
