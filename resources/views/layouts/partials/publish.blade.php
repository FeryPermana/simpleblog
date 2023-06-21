@push('scripts')
    <script>
        function publishing(id, table) {
            var check = $("#publish-data-" + id);
            var val = check.is(":checked") ? 'published' : 'draft';
            $.ajax({
                type: 'POST',
                url: '{{ route('publishment.update') }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "val": val,
                    "table": table,
                },
                success: function(data) {
                    console.log(data);
                    if (data == 'published') {
                        toastr.success('Is Published');
                    } else {
                        toastr.success('Is Not Published');
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>
@endpush
