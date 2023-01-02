<div class="mb-4">
    <a href="{{ url('backview/faq') }}" class="me-4">Kembali</a>
</div>
<h6 class="h5 mb-2">Edit FAQ</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ route('faq.update') }}">
        @csrf
        @foreach ($faqAll as $item)
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <input type="hidden" class="form-control mb-2" placeholder="" name="id"
                            value="{{ $item->id }}">
                        <label class="form-label">Title<i class="text-danger">*</i></label>
                        <input type="text" class="form-control mb-2" placeholder="" name="title"
                            value="{{ $item->title }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Description <i class="text-danger">*</i></label>
                        <textarea rows="4" name="description" class="form-control mb-2 required">{{ $item->description }}"</textarea>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col col-12 col-lg-12">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
</div>
