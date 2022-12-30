<h6 class="h5 mb-2">Bonus Listing</h6>
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif
<div class="card p-3 mb-5 pb-3">
    <form method="POST" action="{{ route('bonuslist.store') }}">
        @csrf
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Boostrap 5 icons (tambahkan nama icon), lihat contoh : <a
                            href="https://icons.getbootstrap.com/" target="_blank">lihat referensi</a><i
                            class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="e.g: circle" name="image"
                        placeholder="bi-circle" required>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Judul<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="title" required>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-label">Deskripsi <i class="text-danger">*</i></label>
                        <textarea rows="4" name="description" class="form-control mb-2" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-12 mt-2">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
    <br />
    <table class="table">
        <thead>
            <tr>
                <th>
                    Bootstrap 5 Icon name
                </th>
                <th>
                    Judul
                </th>
                <th>
                    Deskripsi
                </th>
                <th>
                    Tindakan
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bonusList as $item)
                <tr>
                    <td>{{ $item->image }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <form method="POST" action="{{ url('bonuslist/delete') }}">
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
