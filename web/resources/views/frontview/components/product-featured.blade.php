<section class="section__samecolor" style="background-color:#fff;">
    <div class="container">
        <div class="text-center pb-5 mb-3">
            <h1 class="text__title">
                Dokumentasi Perjalanan<br />
                Umroh bersama PROIN
            </h1>
        </div>
        <div class="row mb-5">
            @if (sizeof($documentation) > 0)
                @foreach ($documentation as $item)
                    <div class="col col-12 col-lg-4 mb-4">
                        <img height="100%" class="lazyload" data-src="{{ asset("images/uploads/$item->image") }}"
                            style="width:100%">
                    </div>
                @endforeach
            @else
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/1.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/2.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/3.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/4.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/5.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/6.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/7.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/8.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/9.jpg') }}" style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/10.jpg') }}"
                        style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/11.jpg') }}"
                        style="width:100%">
                </div>
                <div class="col col-12 col-lg-4 mb-4">
                    <img height="100%" class="lazyload" data-src="{{ asset('images/dok/12.jpg') }}"
                        style="width:100%">
                </div>
            @endif
        </div>
        <div class="text-center d-none">
            <a target="_self" href="{{ url('/products') }}" class="btn btn-warning">Lihat Semua Dokumentasi</a>
        </div>
    </div>
</section>
