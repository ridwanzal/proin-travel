<h6 class="h5 mb-2">Bonus Listing</h6>
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif
<div class="card p-3 mb-5 pb-3">
    <form method="POST" action="{{ route('bonuslist.update') }}">
        @csrf
        <div class="row">
            @foreach ($bonusAll as $item)
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Boostrap 5 icons (tambahkan nama icon), lihat contoh : <a
                                href="https://icons.getbootstrap.com/" target="_blank">lihat referensi</a><i
                                class="text-danger">*</i></label>
                        <input type="hidden" class="form-control mb-2" placeholder="e.g: circle" name="id"
                            value="{{ $item->id }}" required>
                        <input type="text" class="form-control mb-2" placeholder="e.g: circle" name="image"
                            placeholder="bi-circle" value="{{ $item->image }}" required>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Judul<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="title"
                            value="{{ $item->title }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-12 col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Deskripsi <i class="text-danger">*</i></label>
                            <textarea rows="4" name="description" class="form-control mb-2" required>{{ $item->description }}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col col-12 col-lg-12 mt-2">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
</div>
