<h6 class="h5 mb-2">FAQ</h6>
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
                    <label class="form-label">Title<i class="text-danger">*</i></label>
                    <input type="text" class="form-control mb-2" placeholder="" name="title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-lg-6">
                <div class="form-group">
                    <label class="form-label">Description <i class="text-danger">*</i></label>
                    <textarea rows="4" name="address" class="form-control mb-2 required"></textarea>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-12">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
</div>
<div class="card p-3 mb-5 pb-3">
    <div class="row">
        <div class="col col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
