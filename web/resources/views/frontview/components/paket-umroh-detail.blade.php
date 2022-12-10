<section class="section__samecolor top" style="background-color:#fff;">
    <div class="container animate__animated animate__fadeIn animate__delay-0s">
        <div class="text-center mb-3 pb-3">
            <h1 class="text__title animate__animated animate__fadeInUp">
                Umroh Musin Tahun 2023<br />
                <h3 class="text-dark mb-5" style="text-transform: uppercase;">{{ $month }}</h3>
            </h1>
            <img data-src="{{ asset('images/th-umroh-hrg.jpeg') }}" alt="" style="margin: 0 auto;"
                class="d-block lazyload animate__animated animate__fadeIn animate__delay image__flyer" />
        </div>
        <div class="row mb-5 justify-content-center">
            <div class="col col-md-6">
                <div class="">
                    <h4 class="mb-3">
                        Pembimbing Ibadah : Asatidah Proin Travel
                    </h4>
                    <div class="text__paket text-left mb-3">
                        <p>
                            ✈️ Saudia Airlines
                        </p>
                        <p>
                            Keberangkatan Jeddah (Langsung Umroh)
                        </p>
                        <p>
                            Kepulangan Jeddah
                        </p>
                        <p>
                            Akomodasi Hotel ⭐⭐⭐⭐ & ⭐⭐⭐⭐ & ⭐⭐⭐
                        </p>
                        <p>
                            🏩 Madinah
                        </p>
                        <p>
                            🏩 Mekkah
                        </p>
                        <p class="d-block fw-bold">
                            💰 Harga : Rp {{ $price }}
                            @if (str_contains(url()->current(), 'maret'))
                                &<br /> 💰 Harga : Rp 32.000.000
                                &<br /> 💰 Harga : Rp 34.500.000 &<br /> 💰 Harga : Rp 38.000.000
                            @endif
                        </p>
                    </div>

                    <!-- include -->
                    <div class="text__paket text-left mb-3">
                        <p class="fw-bold">
                            Harga paket termasuk :
                        </p>
                        <ul class="no-list">
                            <li>
                                ✅ Tiket pesawat Saudia PP (flight Dari Jakarta)
                            </li>
                            <li>
                                ✅ Akomodasi/Hotel sesuai program
                            </li>
                            <li>
                                ✅ Transportasi Bus AC
                            </li>
                            <li>
                                ✅ Makan 3X sehari
                            </li>
                            <li>
                                ✅ Asuransi perjalanan
                            </li>
                            <li>
                                ✅ Ziarah Makkah dan Medinah
                            </li>
                            <li>
                                ✅ Visa Umroh
                            </li>
                            <li>
                                ✅ Airport Handling
                            </li>
                            <li>
                                ✅ Air Zamzam 5 Liter (bila di izinkan)
                            </li>
                            <li>
                                ✅ Perlengkapan Umroh
                            </li>
                        </ul>
                    </div>
                    <!-- end include -->

                    <!-- exclude -->

                    <div class="text__paket text-left mb-3">
                        <p class="fw-bold">
                            Harga paket tidak termasuk :
                        </p>
                        <ul class="no-list">
                            <li>
                                ❌ Biaya vaksin maningitis & Pengurusan Pasport
                            </li>
                            <li>
                                ❌ Kelebihan Bagasi
                            </li>
                            <li>
                                ❌ Biaya Pengeluaran Pribadi lainnya
                            </li>
                        </ul>
                    </div>
                    <!-- end exclude -->

                    <div class="text-center mt-5">
                        @include('frontview/components/cta')
                        <p>Segera hubungi admin kami<br /> untuk informasi selengkapnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
