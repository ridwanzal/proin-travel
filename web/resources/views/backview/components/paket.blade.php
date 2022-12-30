<h6 class="h5 mb-2">Paket</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="/kontak/store">
        @csrf
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Image<i class="text-danger">*</i></label>
                    <input type="file" class="form-control mb-2" placeholder="" name="images[]" multiple required>
                    <small class="text-danger">Maksimal 500KB - 1MB </small> <a href="https://compresspng.com/"
                        target="_blank">Compress PNG</a> | <a href="https://compressjpeg.com/id/"
                        target="_blank">Compress JPG</a>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Judul Paket<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="title">
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Harga<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="price">
                </div>
            </div>
            <div class="col col-12 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Link CTA<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="price">
                </div>
            </div>
            <div class="col col-12 col-lg-3">
                <div class="form-group">
                    <label class="form-label">Label CTA<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="price">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col col-12 col-lg-12">
                <div class="form-group">
                    <label class="form-label">Deskripsi Paket <i class="text-danger">*</i></label>
                    <textarea id="editor" rows="4" name="content" class="form-control mb-2 required"></textarea>
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
