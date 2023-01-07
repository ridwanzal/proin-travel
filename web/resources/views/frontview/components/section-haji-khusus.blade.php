<section class="section__samecolor top" style="background-color:#fff;">
    <div class="container">
        <div class="text-center mb-3 pb-3">
            <h1 class="text__title animate__animated animate__fadeInUp">
                Pendaftaran Haji Khusus
            </h1>
        </div>
        <div class="row mb-5 justify-content-center">
            <div class="col col-md-9">
                <div class="row mb-5">
                    <div class="col col-12 col-lg-6">
                        <img data-src="{{ asset('images/th-haji.jpg') }}" alt=""
                            class="img-fluid rounded-start lazyload" alt="..." width="95%">
                    </div>
                    <div class="col col-12 col-lg-6">
                        <p>
                            Bismillah berikut Program Haji Khusus PROIN Pendaftar 2020-2022, Selain memiliki Izin Resmi
                            dari Kementerian Agama
                            dan berpengalaman PROIN membimbing Rangkaian Ibadah sesuai Tata Cara Nabi Muhammad
                            sebagaimana kita diperintahkan dalam hadits
                            “Ambillah dariku manasik-manasik kalian, karena sesungguhnya aku tidak mengetahui, mungkin
                            saja aku tidak berhaji setelah hajiku ini”.
                            (HR. Muslim).Semoga Allah azz wa jalla menjadikan kita para Tamu-Nya yang Mabrur
                        </p>
                    </div>
                </div>
                <div class="d-block">
                    <form method="POST" action="{{route('daftarhaji.store')}}">
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
                                    <input name="nama" type="text" class="form-control" placeholder="Nama" required />
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
                <div class="mt-5 mb-5 text-center ">atau</div>
                <div class="text-center mt-4">
                    <a href="https://api.whatsapp.com/send?phone=+{{ env('CUST_PHONE') }}&amp;text=Assalamualaikum Admin, Saya Ingin Tanya-Tanya Haji Khusus nya Boleh?"
                        target="_blank" class="btn btn-md btn-warning mb-3">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>
