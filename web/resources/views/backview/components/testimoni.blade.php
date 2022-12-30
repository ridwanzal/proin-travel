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

<h6 class="h5 mb-2">Testimoni</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ url('/testimoni/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Image/Thumb<i class="text-danger">*</i></label>
                    <input type="file" class="form-control mb-2" placeholder="" name="images[]" multiple required>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Nama Klien<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="subtitle" required>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Content<i class="text-danger">*</i></label>
                    <textarea rows="4" name="content" class="form-control mb-2" required></textarea>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Tipe<i class="text-danger">*</i></label>
                    <select class="form-control" name="type" required>
                        <option value="1">Image</option>
                        <option value="1">Video</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-12 mt-2">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>
                    Thumb/Image
                </th>
                <th>
                    Judul
                </th>
                <th>
                    Deskripsi
                </th>
                <th>
                    Tipe
                </th>
                <th>
                    Tindakan
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimoni as $item)
                <tr>
                    <td>{{ $item->image }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->subtitle }}</td>
                    <td>{{ testiType($item->type) }}</td>
                    <td>
                        <form method="POST" action="{{ url('testimoni/delete') }}">
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
