<h6 class="h5 mb-2">FAQ</h6>
<div class="card p-3 mb-5 pb-3">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    <form method="POST" action="{{ route('faq.store') }}">
        @csrf
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Title<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Description <i class="text-danger">*</i></label>
                    <textarea rows="4" name="description" class="form-control mb-2 required"></textarea>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-12">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
    <div class="row mt-4">
        <div class="col col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataFaq as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <form method="POST" action="{{ url('faq/delete') }}">
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
    </div>
</div>
