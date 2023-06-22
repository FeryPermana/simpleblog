@props(['data'])

<select name="category"
    class="form-control custom-select"
    onchange="this.form.submit()">
    <option value="">Semua Kategori</option>
    @foreach ($data as $category)
        <option value="{{ $category->slug }}"
            {{ @$_GET['category'] == $category->slug ? 'selected' : '' }}>{{ $category->name }}
        </option>
    @endforeach
</select>
