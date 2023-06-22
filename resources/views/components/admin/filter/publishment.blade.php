<select name="publishment"
    onchange="this.form.submit()"
    class="form-control">
    <option value="">Semua Status</option>
    <option value="draft"
        {{ @$_GET['publishment'] == 'draft' ? 'selected' : '' }}>Draft</option>
    <option value="published"
        {{ @$_GET['publishment'] == 'published' ? 'selected' : '' }}>Published</option>
</select>
