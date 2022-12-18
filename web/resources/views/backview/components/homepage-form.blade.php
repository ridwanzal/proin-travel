<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5">Homepage Management</h1>
</div>

<!-- kelola masthead -->
<h6 class="h5 mb-2">Masthead</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('masthead-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('masthead-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="/masthead/store">
        @csrf
        @if (sizeof($mastheadAll) > 0)
            @foreach ($mastheadAll as $m)
                <div class="row">
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Masthead Title <i class="text-danger">*</i></label>
                            <textarea rows="2" name="title" class="form-control mb-2 required">{{ $m->title }}</textarea>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Tagline content <i class="text-danger">*</i></label>
                            <textarea rows="4" name="tagline" class="form-control mb-2 required">{{ $m->tagline }}</textarea>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-12">
                        <button type="submit" class="btn btn-sm btn-warning">Submit</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Masthead Title<i class="text-danger">*</i></label>
                        <textarea rows="2" name="title" class="form-control mb-2 required"></textarea>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Tagline Content <i class="text-danger">*</i></label>
                        <textarea rows="4" name="tagline" class="form-control mb-2 required"></textarea>
                    </div>
                </div>
                <div class="col col-12 col-lg-12">
                    <button type="submit" class="btn btn-sm btn-warning">Submit</button>
                </div>
            </div>
        @endif
    </form>
    <hr />
    <form method="POST" action="{{ url('/upload/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-0">
            <div class="col col-12 col-lg-6">
                @if (Session::has('upmasthead-success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('upmasthead-success') }}</strong>
                    </div>
                @endif
                <div class="form-group">
                    <label class="form-label">Masthead Background Image<i
                            class="text-danger">*</i>&nbsp;&nbsp;<small>Image should
                            be around
                            400KB</small></label>
                    <input type="file" name="images[]" id="inputImage" multiple class="form-control mb-2 required"
                        accept="image/png, image/jpg, image/jpeg" />
                    <input type="hidden" name="type" value="1" />
                    <input type="hidden" name="subtype" value="1" />
                    <input type="hidden" name="info" value="-" />
                    <input type="hidden" name="text" value="-" />
                    <input type="hidden" name="link" value="-" />
                    <small class="mb-3 d-block text-success" style="">You just need to reupload the image for
                        update</small>
                </div>
                <div class="col col-12 col-lg-12">
                    <button type="submit" class="btn btn-sm btn-warning">Submit</button>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                @foreach ($mastheadImage as $upload)
                    <h6>Image Preview</h6>
                    <img height="120" class="lazyload" data-src="{{ asset("images/uploads/$upload->name") }}"
                        alt="">
                @endforeach
            </div>
        </div>
    </form>
</div>
<!-- end kelola masthead -->

<!-- kelola about us -->
<h6 class="h5 mb-2">About Us</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('about-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('about-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="/about/store">
        @csrf
        @if (sizeof($aboutAll) > 0)
            @foreach ($aboutAll as $about)
                <div class="row">
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">About Us Title<i class="text-danger">*</i></label>
                            <textarea rows="2" name="title" class="form-control mb-2 required">{{ $about->title }}</textarea>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">About Us Description<i class="text-danger">*</i></label>
                            <textarea rows="4" name="description" class="form-control mb-2 required">{{ $about->description }}</textarea>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-12">
                        <button class="btn btn-sm btn-warning">Update</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">About Us Title<i class="text-danger">*</i></label>
                        <textarea rows="2" name="title" class="form-control mb-2 required"></textarea>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">About Us Description<i class="text-danger">*</i></label>
                        <textarea rows="4" name="description" class="form-control mb-2 required"></textarea>
                    </div>
                </div>
                <div class="col col-12 col-lg-12">
                    <button type="submit" class="btn btn-sm btn-warning">Update</button>
                </div>
            </div>
        @endif
    </form>
</div>
<!-- end kelola about us -->

<!-- media sosial link -->
<h6 class="h5 mb-2">Social Media</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('social-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('social-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="/socials/store">
        @csrf
        @if (sizeof($socialsAll) > 0)
            @foreach ($socialsAll as $soc)
                <div class="row">
                    <div class="col col-12 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">Facebook (full uri hyperlink)</label>
                            <input type="text" name="facebook" class="form-control mb-2" placeholder=""
                                value="{{ $soc->facebook }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">Instagram (full uri hyperlink)</label>
                            <input type="text" name="instagram" class="form-control mb-2" placeholder=""
                                value="{{ $soc->instagram }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">Linkedin (full uri hyperlink)</label>
                            <input type="text" name="linkedin" class="form-control mb-2" placeholder=""
                                value="{{ $soc->linkedin }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-4">
                        <div class="form-group">
                            <label class="form-label">Youtube (full uri hyperlink)</label>
                            <input type="text" name="youtube" class="form-control mb-2" placeholder=""
                                value="{{ $soc->youtube }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-12">
                        <button type="submit" class="btn btn-sm btn-warning">Update</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col col-12 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Facebook (full uri hyperlink)</label>
                        <input type="text" name="facebook" class="form-control mb-2" placeholder="">
                    </div>
                </div>
                <div class="col col-12 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Instagram (full uri hyperlink)</label>
                        <input type="text" name="instagram" class="form-control mb-2" placeholder="">
                    </div>
                </div>
                <div class="col col-12 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Linkedin (full uri hyperlink)</label>
                        <input type="text" name="linkedin" class="form-control mb-2" placeholder="">
                    </div>
                </div>
                <div class="col col-12 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Youtube (full uri hyperlink)</label>
                        <input type="text" name="youtube" class="form-control mb-2" placeholder="">
                    </div>
                </div>
                <div class="col col-12 col-lg-12">
                    <button class="btn btn-sm btn-warning">Update</button>
                </div>
            </div>
        @endif
    </form>
</div>
<!-- end media sosial link -->

<!-- kelola kontak info -->
<h6 class="h5 mb-2">Contact Information</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="/kontak/store">
        @csrf
        @if (sizeof($kontakAll) > 0)
            @foreach ($kontakAll as $kon)
                <div class="row">
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Address<i class="text-danger">*</i></label>
                            <textarea rows="4" name="address" class="form-control mb-2 required">{{ $kon->address }}</textarea>
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Email Address<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="email"
                                value="{{ $kon->email }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Handphone/Telephone (1)<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="phone1"
                                value="{{ $kon->phone1 }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Handphone/Telephone (2)<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="phone2"
                                value="{{ $kon->phone2 }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-12">
                        <button class="btn btn-sm btn-warning">Update</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Address <i class="text-danger">*</i></label>
                        <textarea rows="4" name="address" class="form-control mb-2 required"></textarea>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Email Address<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="email">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Handphone/Telephone (1)<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="phone1">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Handphone/Telephone (2)<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="phone2">
                    </div>
                </div>
                <div class="col col-12 col-lg-12">
                    <button class="btn btn-sm btn-warning">Update</button>
                </div>
            </div>
        @endif
    </form>
</div>
<!-- end kelola masthead -->

</div>
