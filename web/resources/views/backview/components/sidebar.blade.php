<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-1">
                <ul class="nav flex-column">
                    <li class="nav-item d-none">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 style="padding:0;" class="accordion-header nav-link" id="flush-headingOne">
                                    <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse2" aria-expanded="false"
                                        aria-controls="flush-collapse2"
                                        style="padding:0;background:#F8F9FA;font-size:14px;">
                                        <span class="nav-link" href="{{ url('') }}">
                                            <i class="dashi bi bi-basket me-2"></i>
                                            Sources
                                        </span>
                                        </button>
                                </h2>
                                <div id="flush-collapse2" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <a class="nav-link" href="{{ url('') }}">
                                            <i class="dashi bi bi-basket me-2"></i>
                                            Masthead Upload
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-block">
                        <a class="nav-link" href="{{ url('backview/sources') }}">
                            <i class="dashi bi bi-basket me-2"></i>
                            Our Sources
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('backview/facilities') }}">
                            <i class="dashi bi bi-building me-2"></i>
                            Facilities
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('backview/story') }}">
                            <i class="dashi bi bi-back me-2"></i>
                            Story
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('backview/certification') }}">
                            <i class="dashi bi bi-map me-2"></i>
                            Certifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('backview/contact') }}">
                            <i class="dashi bi bi-files me-2"></i>
                            Contact Reports
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logout') }}">
                            <i class="dashi bi bi-x-circle me-2"></i>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
