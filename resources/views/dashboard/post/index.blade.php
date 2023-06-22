<x-admin-layout>
    <x-admin.pagetitle title="List Artikel" />
    <div class="card">
        <div class="card-header">
            <form>
                <div class="row mb-3">
                    <div class="col-md-1 mb-3 mb-md-0">
                        <x-admin.filter.rows />
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0">
                        <x-admin.filter.category :data="$categories" />
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <x-admin.filter.publishment />
                    </div>
                    <div class="col-md-4 ms-auto mb-3">
                        <x-admin.filter.search />
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Kategori</th>
                        <th>Publish</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ increment($posts, $loop) }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <x-admin.switch :data="$post"
                                    table="posts" />
                            </td>
                            <td>
                                <a href="{{ route('dashboard.post.edit', $post->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>

                                <button class="btn btn-danger btn-sm delete-data"
                                    data-id="{{ $post->id }}"
                                    data-url="{{ route('dashboard.post.destroy', $post->id) }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        -- Data Kosong --
                    @endforelse
                </tbody>
            </table>
            <x-pagination :data="$posts" />
        </div>
    </div>
    @include('layouts.partials.publish')
    @include('layouts.partials.delete')
</x-admin-layout>
