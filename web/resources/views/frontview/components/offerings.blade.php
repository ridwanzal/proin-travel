<section class="section__productrange" style="background:#fff;">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-12 col-lg-12">
                <div class="text-center">
                    <h1 class="masthead__title text__title animate__animated animate__fadeInUp pb-2">
                        Penawaran terbaik dari<br />
                        PROIN Travel
                    </h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-12 col-lg-12">
                <div class="row">
                    @if (sizeof($paket) > 0)
                        @foreach ($paket as $item)
                            <div class="col col-12 col-lg-4">
                                <div class="card rounded-3 js-mh mb-3">
                                    <img src="{{ asset("images/uploads/$item->image") }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body p-4">
                                        <div class="card-title text__title text-center mb-4">
                                            <h3>
                                                {{ $item->title }}
                                            </h3>
                                            <hr />
                                            <div class="text-left">
                                                {!! $item->content !!}
                                            </div>
                                            <div class="mt-5">
                                                <a href="https://api.whatsapp.com/send?phone=+{{ $item->cta }}&amp;text={{ $item->cta_info }}"
                                                    target="_blank" class="btn btn-md btn-warning mb-3">Konsultasi
                                                    sekarang</a>
                                                <p style="font-size: 14px; color: #888;">Segera hubungi admin kami<br />
                                                    untuk
                                                    informasi selengkapnya</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col col-12 col-lg-4">
                            <div class="card rounded-3 js-mh mb-3">
                                <img src="{{ asset('images/th-umroh-hrg.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body p-4">
                                    <div class="card-title text__title text-center mb-4">
                                        <h3>
                                            Umroh April<br /> 2023
                                        </h3>
                                        <hr />
                                    </div>
                                    <div class="text-left mb-4">
                                        <ul class="no-list ms-4">
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Tiket Pesawat</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Visa</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Hotel Bintang 3/4/5</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Bus Model Terbaru</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Makan 3x sehari</li>
                                        </ul>
                                    </div>
                                    <div class="text-center mb-4">
                                        <h2>44.250.000</h2>
                                    </div>
                                    <div class="text-center">
                                        <a target="_self" href="{{ url('/paket-umroh/detail/april') }}"
                                            class="btn btn-warning">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4">
                            <div class="card rounded-3 js-mh mb-3">
                                <img src="{{ asset('images/th-umroh-hrg.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body p-4">
                                    <div class="card-title text__title text-center mb-4">
                                        <h3>
                                            Umroh Maret<br /> 2023
                                        </h3>
                                        <hr />
                                    </div>
                                    <div class="text-left mb-4">
                                        <ul class="no-list ms-4">
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Tiket Pesawat</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Visa</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Hotel Bintang 3/4/5</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Bus Model Terbaru</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Makan 3x sehari</li>
                                        </ul>
                                    </div>
                                    <div class="text-center mb-4">
                                        <h2>33.000.000</h2>
                                    </div>
                                    <div class="text-center">
                                        <a target="_self" href="{{ url('/paket-umroh/detail/maret') }}"
                                            class="btn btn-warning">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4">
                            <div class="card rounded-3 js-mh mb-3">
                                <img src="{{ asset('images/th-umroh-hrg.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body p-4">
                                    <div class="card-title text__title text-center mb-4">
                                        <h3>
                                            Umroh Februari 2023
                                        </h3>
                                        <hr />
                                    </div>
                                    <div class="text-left mb-4">
                                        <ul class="no-list ms-4">
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Tiket Pesawat</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Visa</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Hotel Bintang 3/4/5</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Bus Model Terbaru</li>
                                            <li><i class="bi bi-check-circle-fill me-2"
                                                    style="color:#086E2E; font-size:16px;"></i>Makan 3x sehari</li>
                                        </ul>
                                    </div>
                                    <div class="text-center mb-4">
                                        <h2>29.500.000</h2>
                                    </div>
                                    <div class="text-center">
                                        <a target="_self" href="{{ url('/paket-umroh/detail/februari') }}"
                                            class="btn btn-warning">Lihat
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
