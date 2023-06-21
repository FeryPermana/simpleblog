<x-admin-layout>
    <x-admin.pagetitle title="{{ $method == 'update' ? 'Edit Category' : 'Create Category' }}" />
    @push('styles')
        <link rel="stylesheet"
            href="{{ asset('plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') }}">
    @endpush

    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ $url }}"
            method="POST">
            @csrf
            @if ($method == 'update')
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"
                        class="form-control @error('name') border-danger @enderror"
                        id="name"
                        name="name"
                        placeholder="Masukan Nama Category"
                        value="{{ old('name', @$category->name) }}">
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="publish">Publish</label><br>
                    <input type="checkbox"
                        name="publishment"
                        {{ @$category->publishment == 'published' ? 'checked' : '' }}
                        data-bootstrap-switch
                        data-off-color="danger"
                        data-on-color="success">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit"
                    class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                })
            });
        </script>
    @endpush
</x-admin-layout>
