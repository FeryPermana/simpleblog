<x-admin-layout>
    <x-admin.pagetitle title="List Category" />
    <div class="card">
        <div class="card-body">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Publish</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ increment($categories, $loop) }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <x-admin.switch :data="$category"
                                    table="categories" />
                            </td>
                            <td>
                                <a href="{{ route('dashboard.category.edit', $category->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>

                                <button class="btn btn-danger btn-sm delete-data"
                                    data-id="{{ $category->id }}"
                                    data-url="{{ route('dashboard.category.destroy', $category->id) }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        -- Data Kosong --
                    @endforelse
                </tbody>
            </table>
            <x-admin.pagination :data="$categories" />
        </div>
    </div>
    @include('layouts.partials.publish')
    @include('layouts.partials.delete')
</x-admin-layout>
