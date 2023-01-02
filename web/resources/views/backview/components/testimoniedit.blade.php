<?php
function testiType($param)
{
    if ($param == 1) {
        return 'Image';
    } else {
        return 'Video';
    }
}
?>
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('kontak-success') }}</strong>
    </div>
@endif
<div class="mb-4">
    <a href="{{ url('backview/testimoni') }}" class="me-4">Kembali</a>
</div>

<h6 class="h5 mb-2">Testimoni</h6>
<div class="card p-3 mb-4">
    <form method="POST" action="{{ url('/testimoni/updateimage') }}" enctype="multipart/form-data">
        @csrf
        @foreach ($testimoni as $item)
            <div class="row mb-2">
                <div class="col col-12 col-lg-6">
                    <div class="form-group mb-3">
                        <label class="form-label">Image/Thumb<i class="text-danger">*</i></label>
                        <input type="hidden" class="form-control mb-2" placeholder="" name="id"
                            value="{{ $item->id }}">
                        <input type="file" class="form-control mb-2" placeholder="" name="images[]" multiple
                            required>
                    </div>
                    <button class="btn btn-sm btn-warning">Update</button>
                </div>
                <div class="col col-12 col-lg-6">
                    <span style="font-size: 12px;" class="">Current image</span><br />
                    <img width="100" src="{{ url("images/uploads/$item->image") }}" at="" />
                </div>
            </div>
        @endforeach
    </form>
</div>
<div class="card p-3 mb-5 pb-3">
    <form method="POST" action="{{ url('/testimoni/update') }}" enctype="multipart/form-data">
        @csrf
        @foreach ($testimoni as $item)
            <div class="row mb-2">
                <div class="col col-12 col-lg-6">
                    <input type="hidden" class="form-control mb-2" placeholder="" name="id"
                        value="{{ $item->id }}">
                    <div class="form-group">
                        <label class="form-label">Nama Klien<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="subtitle"
                            value="{{ $item->subtitle }}" required>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Tipe<i class="text-danger">*</i></label>
                        <select class="form-control" name="type" required>
                            <option value="1">Image</option>
                        </select>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Content<i class="text-danger">*</i></label>
                        <textarea rows="4" name="content" class="form-control mb-2" required>{{ $item->content }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-12 mt-2">
                <button class="btn btn-sm btn-warning">Update</button>
            </div>
        @endforeach
    </form>
</div>
