<section class="section__main" style="background:#000;" id="section-info">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-12 text-center">
                <h1 style="color:#F3610B;">Sebelum anda konsultasi, sebaiknya<br />
                    lihat dulu apa kata mereka yang sudah<br /> menggunakan layanan kami</h1>
                <p class="mb-3 d-block text-white">Lihat review jujur mereka setelah menggunakan jasa<br /> Travel
                    Perjalanan
                    Umroh
                    PROIN</p>
            </div>
        </div>
    </div>

    <!-- show card only on mobile -->
    <div class="container">
        <div class="row d-block d-lg-none">
            @if (sizeof($testimoni) > 0)
                @foreach ($testimoni as $item)
                    <div class="col col-12">
                        <div class="card mb-3 rounded-3">
                            <div class="row g-0 js-mh">
                                <div class="col col-12 col-md-3">
                                    <img data-src="{{ asset("images/uploads/$item->image") }}" alt=""
                                        class="img-fluid rounded-start lazyload" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{ $item->content }}
                                        </p>
                                        <p class="card-text"><small class="text-muted fw-bold">
                                                {{ $item->subtitle }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col col-12">
                    <div class="card mb-3 rounded-3">
                        <div class="row g-0 js-mh">
                            <div class="col col-12 col-md-3">
                                <img data-src="{{ asset('images/dok/4.jpg') }}" alt=""
                                    class="img-fluid rounded-start lazyload" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Ma Syaa Allah Saudia The Best, Makanan sampai ngga
                                        kemakan, Jus, Kopi Teh, Air beberapa menit sekali Pramugrasi Menawarkan
                                        Snack, Makan nasi pilihan lauknya Daging & Ayam temannya Pasta Macaroni
                                        dan Sayur.
                                    </p>
                                    <p class="card-text"><small class="text-muted fw-bold">Peserta Umroh PROIN
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="card mb-3 rounded-3">
                        <div class="row g-0  js-mh">
                            <div class="col col-12 col-md-3">
                                <img data-src="{{ asset('images/dok/3.jpg') }}" alt=""
                                    class="img-fluid rounded-start lazyload" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        City tour nya di kota Mekkah, dan Madinah menggunakan bis Dallah (exclusive)
                                        bis nya,
                                        di perjalanan kita mendapat tausiah dan penjelasan tentang tadi muthawif,
                                        ada snack dan
                                        minuman di perjalanan, masyaAllah sangat terjamin di tanah harom
                                        Alhamdulillah.
                                    </p>
                                    <p class="card-text"><small class="text-muted fw-bold">Ummu Fia BTR
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="card mb-3 rounded-3">
                        <div class="row g-0  js-mh">
                            <div class="col col-12 col-md-3">
                                <img data-src="{{ asset('images/testimoni/2.jpg') }}" alt=""
                                    class="img-fluid rounded-start lazyload" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        Umroh dengan PROIN alhamdulillah baik dan lancar bu, penuh semangat terutama
                                        tour leadernya sangat perhatian kepada jemaah.
                                    </p>
                                    <p class="card-text"><small class="text-muted fw-bold">Ummu Habil WA
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- show slide on desktop -->
    <div class="swiper mySwiper ps-5 mt-5mb-5 pt-5 pe-5 d-none d-lg-block">
        <div class="swiper-wrapper">
            @if (sizeof($testimoni) > 0)
                @foreach ($testimoni as $item)
                    <div class="swiper-slide">
                        <div class="card mb-3 rounded-3">
                            <div class="row g-0 js-mh">
                                <div class="col col-12 col-md-3">
                                    <img data-src="{{ asset("images/uploads/$item->image") }}" alt=""
                                        class="img-fluid rounded-start lazyload" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{ $item->content }}
                                        </p>
                                        <p class="card-text"><small class="text-muted fw-bold">{{ $item->subtitle }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="swiper-slide">
                    <div class="card mb-3 rounded-3">
                        <div class="row g-0 js-mh">
                            <div class="col col-12 col-md-3">
                                <img data-src="{{ asset('images/dok/4.jpg') }}" alt=""
                                    class="img-fluid rounded-start lazyload" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Ma Syaa Allah Saudia The Best, Makanan sampai ngga
                                        kemakan, Jus, Kopi Teh, Air beberapa menit sekali Pramugrasi Menawarkan
                                        Snack, Makan nasi pilihan lauknya Daging & Ayam temannya Pasta Macaroni
                                        dan Sayur.
                                    </p>
                                    <p class="card-text"><small class="text-muted fw-bold">Peserta Umroh PROIN
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3 rounded-3">
                        <div class="row g-0  js-mh">
                            <div class="col col-12 col-md-3">
                                <img data-src="{{ asset('images/dok/3.jpg') }}" alt=""
                                    class="img-fluid rounded-start lazyload" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        City tour nya di kota Mekkah, dan Madinah menggunakan bis Dallah (exclusive)
                                        bis nya,
                                        di perjalanan kita mendapat tausiah dan penjelasan tentang tadi muthawif,
                                        ada snack dan
                                        minuman di perjalanan, masyaAllah sangat terjamin di tanah harom
                                        Alhamdulillah.
                                    </p>
                                    <p class="card-text"><small class="text-muted fw-bold">Ummu Fia BTR
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3 rounded-3">
                        <div class="row g-0  js-mh">
                            <div class="col col-12 col-md-3">
                                <img data-src="{{ asset('images/testimoni/2.jpg') }}" alt=""
                                    class="img-fluid rounded-start lazyload" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        Umroh dengan PROIN alhamdulillah baik dan lancar bu, penuh semangat terutama
                                        tour leadernya sangat perhatian kepada jemaah.
                                    </p>
                                    <p class="card-text"><small class="text-muted fw-bold">Ummu Habil WA
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col col-6 mt-2">
                <iframe width="100%" height="400"
                    src="https://www.youtube.com/embed/mgZiJy3hdAM?autoplay=0&mute=0">
                </iframe>
            </div>
            <div class="col col-6 mt-2">
                <video width="100%" height="420" controls>
                    <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
