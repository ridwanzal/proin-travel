
<section class="section__main animate__animated animate__fadeInUp" style="background:#000;" id="section-info">
  <div class="container">
      <div class="row">
          <div class="col col-12 col-lg-12 text-center">
              <h1 style="color:#F3610B;">Sebaiknya Anda Lihat Dulu<br/>Kata Mereka yang Sudah Menggunakan<br/> Layanan Kami</h1>
          </div>
      </div>
      <div class="row">
          <div class="swiper mySwiper mb-5 pt-5">
              <div class="swiper-wrapper">
                  @for ($i = 0; $i < 1; $i++)
                      <div class="swiper-slide">
                          <div class="card mb-3 rounded-3">
                              <div class="row g-0">
                                  <div class="col-md-4">
                                      <img data-src="{{ asset('images/testimoni/2.jpg') }}" alt=""
                                          class="img-fluid rounded-start lazyload" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                      <div class="card-body">
                                          <p class="card-text">Ma Syaa Allah Saudia The Best, Makanan sampai ngga kemakan, Jus, Kopi Teh, Air beberapa menit sekali Pramugrasi Menawarkan Snack, Makan nasi pilihan lauknya Daging & Ayam temannya Pasta Macaroni dan Sayur.
                                          </p>
                                          <p class="card-text"><small class="text-muted">Maskapai Penerbangan yang digunakan Proin Travel
                                        </small>
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
                  <a href="{{ url('#section-info') }}" class="btn btn-warning">Lihat semua testimoni</a>
              </div>
          </div>
      </div>
  </div>
</section>