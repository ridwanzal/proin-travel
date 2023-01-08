<section class="section__samecolor top" style="background-color:#fff;">
    <div class="container">
        <div class="text-center mb-3 pb-3">
            <h1 class="text__title animate__animated animate__fadeInUp">
                Travel agent berpengalaman<br />
                lebih dari 1 dekade
            </h1>
            <p class="mb-3 d-block animate__animated animate__fadeInUp animate__delay-1s">PROIN Travel Sahabat Terbaik
                Menuju Baitullah,<br />Aman Dan
                Terpercaya Untuk Keluarga Anda</p>
        </div>
        <div class="row mb-5 justify-content-center">
            <div class="col col-md-9">
                <div class="row mb-5">
                    <div class="col col-12 col-lg-6">
                        <img data-src="{{ asset('images/th-umroh.jpg') }}" alt=""
                            class="img-fluid rounded-start lazyload" alt="..." width="95%">
                    </div>
                    <div class="col col-12 col-lg-6">
                        <p>
                        <ul>
                            <li>
                                Pendaftaran agent gratis tanpa dipungut biaya
                            </li>
                            <li>
                                Berkesempatan berangkat umroh gratis
                            </li>
                            <li>
                                Uang tunai juataan rupiah
                            </li>
                            <li>
                                Konten harian untuk posting di Sosial Media
                            </li>
                            <li>
                                Product Knowledge
                            </li>
                            <li>
                                Ilmu Digital Marketing
                            </li>
                            <li>
                                Ilmu Public Speaking
                            </li>
                            <li>
                                Dan hadiah menarik lainnya
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>

                @if ($statusForm[0]->type == 1)
                    <div class="d-block">
                        <form method="POST" action="{{route('daftaragen.store')}}">
                            @csrf
                            <div class="row mb-5 justify-content-center ">
                                <div class="col col-12 col-lg-6">
                                    <h1 class="text__title text-center">
                                        Konsultasi Haji Khusus Gratis
                                    </h1>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col col-12 col-lg-6">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ Session::get('success') }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col col-12 col-lg-6">
                                    <div class="form-group">
                                        <input name="whatsapp" type="text" class="form-control" placeholder="No Whatsapp" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col col-12 col-lg-6">
                                    <div class="form-group">
                                        <input name="domisili" type="text" class="form-control" placeholder="Domisili" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="text-center mt-5">
                        <a href="https://api.whatsapp.com/send?phone=+{{ env('CUST_PHONE') }}&amp;text=Assalamualaikum Admin, Saya Ingin Tanya-Tanya Daftar Agen Boleh?"
                            target="_blank" class="btn btn-md btn-warning mb-3">Hubungi Kami</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
