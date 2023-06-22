@props(['placeholder' => 'Pencarian...'])
<input type="text"
    class="form-control"
    name="search"
    placeholder="{{ $placeholder }}"
    value="{{ @$_GET['search'] }}">
