<div class="mb-4">
    <a href="{{ url('backview/paket') }}" class="me-4">Kembali</a>
</div>
<h6 class="h5 mb-2">Edit Paket</h6>
<div class="card p-3 mb-5 pb-3">
    <div class="row">
        <div class="col col-12 col-lg-6">
            <form method="POST" action="{{ url('/paket/updateimage') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    @foreach ($paketAll as $item)
                        <label class="form-label">Ganti Image<i class="text-danger">*</i></label>
                        <input type="hidden" class="form-control mb-2" placeholder="" name="id"
                            value="{{ $item->id }}">
                        <input type="file" class="form-control mb-2" placeholder="" name="images[]" multiple
                            required>
                        <div class="mb-2 mt-2">
                            <small class="text-danger">Maksimal 500KB - 1MB </small> <a href="https://compresspng.com/"
                                target="_blank">Compress PNG</a> | <a href="https://compressjpeg.com/id/"
                                target="_blank">Compress
                                JPG</a>
                        </div>
                        <button class="btn btn-sm btn-warning mt-1" type="submit">Update</button>
                    @endforeach
                </div>
            </form>
        </div>
        <div class="col col-12 col-lg-6">
            @foreach ($paketAll as $item)
                <img width="100" src="{{ url("images/uploads/$item->image") }}" at="" />
            @endforeach
        </div>
    </div>
</div>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ url('/paket/update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @foreach ($paketAll as $item)
                <input type="hidden" class="form-control mb-2" placeholder="" name="id"
                    value="{{ $item->id }}">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Ganti Judul Paket<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="title"
                            value="{{ $item->title }}">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Ganti Nomor Telepon (+62) CTA<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="cta"
                            value="{{ $item->cta }}">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Ganti Label CTA<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="cta_info"
                            value="{{ $item->cta_info }}">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col col-12 col-lg-12">
                <div class="form-group">
                    <label class="form-label">Ganti Konten/Deskripsi Detail Paket <i class="text-danger">*</i></label>
                    <textarea id="editor" rows="4" name="content" class="form-control mb-2 required">{{ $item->content }}</textarea>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col col-12 col-lg-12">
                <button class="btn btn-sm btn-warning">Update</button>
            </div>
        </div>
    </form>
</div>
