<footer class="py-5 text-white" style="background-color:#002134;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-2">
                <a class="navbar-brand" href="#"><img class="lazyload" data-src="{{ asset('images/logo2.svg') }}"
                        style="width:90%;"></a>
            </div>
            <div class="col col-12 col-lg-4 footer__list">
                <p class="mt-3 mt-md-0 mb-5">
                    Jl. Raya Juwana - Pati
                    KM 1, Kel. Growong Lor,
                    Kec. Juwana Kab. Pati, Jawa Tengah
                </p>
                <div class="mb-2">
                    <label><i class="bi-envelope"></i>&nbsp;Hamzan.Nasution@sbpseafood.com</label>
                </div>
                <div class="mb-2">
                    <label><i class="bi-phone"></i>&nbsp;+62 812-1908-0800</label>
                </div>
                <div class="mb-2">
                    <label><i class="bi-whatsapp"></i>&nbsp;+62 812-1908-0800</label>
                </div>
            </div>

            <div class="col col-12 col-lg-2 mb-3">
                <h5 class="mb-4">QUICK LINKS</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ url('/products') }}" class="nav-link p-0 text-muted">Our
                            Products</a></li>
                    <li class="nav-item mb-2"><a href="{{ url('/about') }}" class="nav-link p-0 text-muted">Our
                            Story</a></li>
                    <li class="nav-item mb-2"><a href="{{ url('/sources') }}" class="nav-link p-0 text-muted">Our
                            Sources</a></li>
                    <li class="nav-item mb-2"><a href="{{ url('/facilities') }}"
                            class="nav-link p-0 text-muted">Facilities</a></li>
                    <li class="nav-item mb-2"><a href="{{ url('/contact') }}" class="nav-link p-0 text-muted">Contact
                            Us</a></li>
                </ul>
            </div>

            <div class="col col-12 col-lg-3 mb-3">
                <form>
                    <h5 class="mb-4">SOCIALS</h5>
                    <div class="d-flex" style="">
                        <a target="_blank" href="#"><i class="bi-facebook text-white me-md-4 me-3" role="img"
                                aria-label="GitHub"></i></a>
                        <a target="_blank" href="#"><i class="bi-instagram text-white me-md-4  me-3"
                                role="img" aria-label="GitHub"></i></a>
                        <a target="_blank" href="#"><i class="bi-linkedin text-white me-md-4  me-3" role="img"
                                aria-label="GitHub"></i></a>
                        <a target="_blank" href="#"><i class="bi-youtube text-white me-md-4  me-3" role="img"
                                aria-label="GitHub"></i></a>
                    </div>
                    <a></a>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; <?php echo date('Y'); ?> PT Sinas Bulan Purnama. All rights reserved</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
        </div>
    </div>
</footer>
