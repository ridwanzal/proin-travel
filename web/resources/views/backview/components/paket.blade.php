<h6 class="h5 mb-2">Paket</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ url('/paket/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Image<i class="text-danger">*</i></label>
                    <input type="file" class="form-control mb-2" placeholder="" name="images[]" multiple required>
                    <div class="mb-2 mt-2">
                        <small class="text-danger">Maksimal 500KB - 1MB </small> <a href="https://compresspng.com/"
                            target="_blank">Compress PNG</a> | <a href="https://compressjpeg.com/id/"
                            target="_blank">Compress JPG</a>
                    </div>
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
                    <label class="form-label">Nomor Telepon (+62) CTA<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="cta">
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Label CTA<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="cta_info">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col col-12 col-lg-12">
                <div class="form-group">
                    <label class="form-label">Konten/Deskripsi Detail Paket <i class="text-danger">*</i></label>
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
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>
                    Thumb/Image
                </th>
                <th>
                    Judul Paket
                </th>
                <th>
                    Nomor Telepon (+62) CTA
                </th>
                <th>
                    Cta Info
                </th>
                <th>
                    Tindakan Info
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paketAll as $item)
                <tr>
                    <td>{{ $item->image }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->cta }}</td>
                    <td>{{ $item->cta_info }}</td>
                    <td>
                        <form method="POST" action="{{ url('paket/delete') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}" />
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
