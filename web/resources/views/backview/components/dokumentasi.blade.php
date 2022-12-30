<h6 class="h5 mb-2">Dokumentasi</h6>
<div class="card p-3 mb-3 pb-3">
    @if (Session::has('kontak-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('kontak-success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ url('/dokumentasi/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-md-2 mb-1">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Image<i class="text-danger">*</i></label>
                    <input type="file" class="form-control mb-2" placeholder="" name="image[]" multiple>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-12 mt-2">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>
                    Thumb/Image
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dokumentasi as $item)
                <tr>
                    <td>{{ $item->image }}</td>
                    <td>
                        <form method="POST" action="{{ url('dokumentasi/delete') }}">
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
