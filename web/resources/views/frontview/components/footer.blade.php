<footer class="py-5 text-white" style="background-color:#000;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-6">


                @if (env('CUST_WILAYAH') == 'jakarta')
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                            data-src="{{ asset('images/icon/proin-logo.png') }}"></a>
                @elseif (env('CUST_WILAYAH') == 'tangerang')
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
                            data-src="{{ asset('images/icon/proin-tangerang.png') }}"></a>
                @elseif (env('CUST_WILAYAH') == 'bogor')
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="lazyload" height="50"
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


                <p class="text-white mt-5 mb-4" style="font-size: 14px;">
                    @if (sizeof($contacts) > 0)
                        {{ $contacts[0]->alamat }}
                    @else
                        @if (env('CUST_ADDRESS') != '')
                            {{ env('CUST_ADDRESS') }}
                        @else
                            Dapatkan layanan perjalanan ibadah umroh dan haji<br /> sesuai Sunnah dengan memilih Proin
                            Travel<br /> sebagai
                            agen perjalanan ibadah Anda.
                        @endif
                    @endif
                </p>
            </div>

            <div class="col col-12 col-lg-3 mb-4">
                <h5 class="mb-4 text-white">QUICK LINKS</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 text-white"><a href="{{ url('/paket-umroh') }}"
                            class="text-white nav-link p-0    ">Paket Umroh</a></li>
                    <li class="nav-item mb-2 text-white"><a href="{{ url('/haji-khusus') }}"
                            class="text-white nav-link p-0 ">Haji Khusus</a></li>
                    <li class="nav-item mb-2 text-white"><a href="{{ url('/jadi-agen') }}"
                            class="text-white nav-link p-0 ">Daftar Agen</a></li>
                    <li class="nav-item mb-2 text-white"><a href="{{ url('/#section-info') }}"
                            class="nav-link p-0 text-white  ">Testimoni</a></li>
                    <li class="nav-item mb-2 text-white"><a href="{{ url('/#section-faq') }}"
                            class="text-white nav-link p-0">FAQ
                            Us</a></li>
                </ul>
            </div>

            <div class="col col-12 col-lg-3 mb-3">
                <form>
                    <h5 class="text-white d-none">SOCIALS</h5>
                    <div class="d-flex" style="">
                        @if (sizeof($contacts) > 0)
                            @if ($contacts[0]->facebook != '-')
                                <a target="_blank" href="{{ $contacts[0]->facebook }}"><i
                                        class="text-white bi-facebook me-md-4 me-3" role="img"
                                        aria-label="Facebook"></i></a>
                            @endif

                            @if ($contacts[0]->facebook != '-')
                                <a target="_blank" href="{{ $contacts[0]->instagram }}"><i
                                        class="text-white bi-instagram me-md-4 me-3" role="img"
                                        aria-label="Facebook"></i></a>
                            @endif
                        @else
                            @if (env('CUST_FB') != '')
                                <a target="_blank" href="{{ env('CUST_FB') }}"><i
                                        class="text-white bi-facebook me-md-4 me-3" role="img"
                                        aria-label="Facebook"></i></a>
                            @endif

                            @if (env('CUST_IG') != '')
                                <a target="_blank" ef="{{ env('CUST_IG') }}"><i
                                        class="text-white bi-instagram me-md-4  me-3" role="img"
                                        aria-label="Instagram"></i></a>
                            @endif
                        @endif
                    </div>
                    <a></a>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p style="font-size:13px;" class="text-white">&copy; Copyright <?php echo date('Y'); ?> PT. BPW Proconfo | No.
                Reg. : 157 HIMPUH/2010 | Izin Haji PIHK 594/2021
                2018 | SK Umroh : U.73.2020 | No. IATA : 15335040 </p>
            <p class="float-right text-white    " style="font-size:13px;">
                All rights reserved.
            </p>
        </div>
    </div>
</footer>
