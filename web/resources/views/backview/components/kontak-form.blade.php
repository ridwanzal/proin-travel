<h6 class="h5 mb-2">Update Kontak & CTA</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        @if (sizeof($kontakAll) > 0)
            @foreach ($kontakAll as $kon)
                <div class="row">
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nomor Telepon (dipakai untuk menghubungi via cta tambahkan kode
                                wilayah +62)<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="nomor_telepon"
                                value="{{ $kon->nomor_telepon }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Nomor Telepon alternatif (Tambahkan kode
                                wilayah +62)<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="nomor_telepon_alt"
                                value="{{ $kon->nomor_telepon_alt }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Facebook<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="facebook"
                                value="{{ $kon->facebook }}">
                        </div>
                    </div>
                    <div class="col col-12 col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Instagram<i class="text-danger">*</i></label>
                            <input type="text" class="form-control mb-2" placeholder="" name="instagram"
                                value="{{ $kon->instagram }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control mb-2" placeholder="" name="youtube"
                            value="{{ $kon->youtube }}">
                    </div>
                    <div class="row">
                        <div class="col col-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Address <i class="text-danger">*</i></label>
                                <textarea rows="4" name="alamat" class="form-control mb-2 required">{{ $kon->alamat }}</textarea>
                            </div>
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
                        <label class="form-label">Nomor Telepon (dipakai untuk menghubungi via cta tambahkan kode
                            wilayah +62)<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="nomor_telepon">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Nomor Telepon alternatif (Tambahkan kode
                            wilayah +62)<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="nomor_telepon_alt">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Facebook<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="facebook">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Instagram<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="instagram">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Youtube<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="youtube">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Address <i class="text-danger">*</i></label>
                        <textarea rows="4" name="alamat" class="form-control mb-2 required"></textarea>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-12">
                <button class="btn btn-sm btn-warning">Update</button>
            </div>
        @endif
    </form>
</div>
