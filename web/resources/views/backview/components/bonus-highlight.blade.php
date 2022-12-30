<h6 class="h5 mb-2">Bonus Highlight</h6>
<div class="card p-3 mb-5 pb-3">
    <form method="POST" action="{{ route('bonushighlight.store') }}">
        @csrf
        @if (sizeof($bonusHighlight) > 0)
            @foreach ($bonusHighlight as $item)
                <div class="row">
                    <div class="col col-12 col-lg-12">
                        <div class="form-group">
                            <label class="form-label">Text/Content Highlight <i class="text-danger">*</i></label>
                            <textarea rows="4" name="content" class="form-control mb-2">{{ $item->content }}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col col-12 col-lg-12">
                    <div class="form-group">
                        <label class="form-label">Text/Content Highlight <i class="text-danger">*</i></label>
                        <textarea rows="4" name="content" class="form-control mb-2" required></textarea>
                    </div>
                </div>
            </div>
        @endif
        <div class="col col-12 col-lg-12">
            <button class="btn btn-sm btn-warning">Update</button>
        </div>
    </form>
</div>
