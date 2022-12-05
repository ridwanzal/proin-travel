<section class="masthead__wrapper text-dark masthead">
    {{-- <div class="masthead__background">
        <img src="{{ asset('images/bg.jpeg') }}" alt="" />
    </div> --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col col-12 col-lg-6">
                <div class="text-left pt-5 pb-4">
                    <h5 class="text__subtitle pb-2">Travel Perjalanan Umrah terbaik</h5>
                    <h1 class="masthead__title text__title animate__animated animate__fadeInUp pb-2">
                        Sahabat terbaik menuju Baitullah, aman dan terpercaya untuk keluarga anda
                    </h1>
                    <small
                        class="masthead__subtitles text-center masthead__title animate__animated animate__fadeInUp animate__delay-1s pb-5 mt-3">
                        Proin Travel adalah penyedia jasa perjalanan ibadah Umrah & Haji yang Alhamdulillah dipercaya
                        dan telah berpengalaman memberangkatkan para jamaah dari seluruh Indonesia.
                    </small>
                </div>
                <div
                    class="text-left masthead__subtitle masthead__title animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="{{ url('#section-info') }}" class="btn btn-warning">Pesan sekarang</a>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="pt-5 mt-md-3 mb-5 mb-md-3">
                    <img height="400px" width="auto" data-src="{{ asset('images/makkah.png') }}" alt=""
                        class="d-lg-block d-none lazyload" />

                    <img width="100%" data-src="{{ asset('images/makkah.png') }}" alt=""
                        class="d-block d-lg-none lazyload" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section__main animate__animated animate__fadeInUp" style="background:#EDF6EE;" id="section-info">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-12 text-center">
                <h1 class="text__title">Apa kata mereka tentang PROIN</h1>
            </div>
            <div class="col col-12 col-lg-12 text-center">
                <p class="mb-4">
                    Lihat review jujur mereka setelah menggunakan jasa<br />
                    Travel Perjalanan Umrah PROIN
                </p>
            </div>
        </div>
        <div class="row">
            <div class="swiper mySwiper mb-5 pt-5">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i <= 5; $i++)
                        <div class="swiper-slide">
                            <div class="card mb-3 rounded-3" style="border:1px solid #efefef;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img data-src="{{ asset('images/testimoni/2.jpg') }}" alt=""
                                            class="img-fluid rounded-start lazyload" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.
                                            </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="swiper-pagination mt-5 pt-5"></div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col col-lg-12">
                <div class="text-center">
                    <a href="{{ url('#section-info') }}" class="btn btn-warning">Pesan sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
