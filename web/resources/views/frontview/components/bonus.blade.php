<section class="section__productrange animate__animated animate__fadeInUp" style="background:#065D40;">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-12 col-lg-12">
                <div class="text-center">
                    <h1 class="masthead__title text-white animate__animated animate__fadeInUp pb-2">
                        Bonus Eksklusif<br />dari Kami
                    </h1>
                    <p class="text-danger fw-bold">Khusus untuk Kamu yang DP hari ini !</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-12 col-lg-10">
                <div class="row mb-4">
                    @if (sizeof($bonusList) > 0)
                        @foreach ($bonusList as $item)
                            <div class="col col-12 col-lg-4">
                                <div class="text-center">
                                    <i class="image__icon bi bi-{{ $item->image ?? 'box' }}"></i>
                                    <h5 class="text-white">
                                        {{ $item->title }}
                                    </h5>
                                    <p class="text-white">
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col col-12 col-lg-4">
                            <div class="text-center">
                                <i class="image__icon bi bi-currency-dollar"></i>
                                <h5 class="text-white">
                                    Potongan biaya pembuatan paspor
                                </h5>
                                <p class="text-white">
                                    Potongan Biaya Pembuatan Paspor Senilai 350.000
                                </p>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4">
                            <div class="text-center">
                                <i class="image__icon bi bi-box"></i>
                                <h5 class="text-white">
                                    Gratis Kurma Ajwa
                                </h5>
                                <p class="text-white">
                                    Kurma Ajwa Gratis Saat Kepulangan Senilai 200.000
                                </p>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-4">
                            <div class="text-center">
                                <i class="image__icon bi bi-card-checklist"></i>
                                <h5 class="text-white">
                                    Subsidi uang transport
                                </h5>
                                <p class="text-white text-center">
                                    Biaya Transportasi Pengurusan Dokumen Senilai 50.000
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col col-12">
                        <div class="text-center">
                            @if (sizeof($bonusHighlight) > 0)
                                @foreach ($bonusHighlight as $item)
                                    {!! $item->content !!}
                                @endforeach
                            @else
                                <h1 class="text-white">Dengan Total Bonus Senilai <strong><span
                                            class="text-danger">600.000 </span><strong>Kamu Bisa Membeli Tambahan
                                            Oleh-Oleh Untuk Keluarga Tercinta</strong></strong></h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
