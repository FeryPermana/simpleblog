<x-admin-layout>
    <x-admin.pagetitle title="{{ $method == 'update' ? 'Edit Artikel' : 'Create Artikel' }}" />
    @push('styles')
        <link rel="stylesheet"
            href="{{ asset('plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"
                                class="form-control @error('name') border-danger @enderror"
                                id="name"
                                name="name"
                                placeholder="Masukan Judul Artikel"
                                value="{{ old('name', @$post->name) }}">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input type="file"
                            class="dropify"
                            data-default-file="url_of_your_file" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control form-select"
                                name="category"
                                id="category"
                                aria-label="Default select example">
                                <option selected
                                    value="">Pilih Kategori</option>
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('category', @$post->category_id) ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @empty
                                    <option value="">Kosong</option>
                                @endforelse
                            </select>
                            @error('category')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="publish">Publish</label><br>
                            <input type="checkbox"
                                name="publishment"
                                {{ @$post->publishment == 'published' ? 'checked' : '' }}
                                data-bootstrap-switch
                                data-off-color="danger"
                                data-on-color="success">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="summernote">Tulis Artikel</label>
                    <textarea id="summernote"
                        name="body">
                    {{ old('body', @$post->body) }}
                    </textarea>
                    @error('body')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script>
            $(document).ready(function() {
                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                })


                // Summernote
                $('#summernote').summernote()

                // CodeMirror
                CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                    mode: "htmlmixed",
                    theme: "monokai"
                });

                $('.dropify').dropify();
            });
        </script>
    @endpush
    @include('layouts.partials.publish')
    @include('layouts.partials.delete')
</x-admin-layout>
