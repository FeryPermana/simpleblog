@props(['data' => []])
<div class="row">
    <div class="col-12">
        {{ $data->withQueryString()->onEachSide(2)->links('pagination::bootstrap-5') }}
    </div>
</div>
