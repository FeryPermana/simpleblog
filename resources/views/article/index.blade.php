@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 border-end">
                <form action="">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="d-flex"
                                role="search">
                                <input class="form-control me-2"
                                    type="search"
                                    name="search"
                                    placeholder="Search"
                                    aria-label="Search"
                                    value="{{ $_GET['search'] ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex gap-2">
                                <select class="form-select"
                                    name="category"
                                    aria-label="Default select example">
                                    <option selected
                                        value="">Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->slug }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-outline-success"
                                    type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>

                <hr>

                @foreach ($posts as $post)
                    <div class="card mt-3 border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $post->cover_url }}"
                                        alt=""
                                        class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">{{ $post->name }}</h5>
                                    <p class="text-secondary">{{ formatTanggalIndo($post->created_at) }}</p>
                                    <a href="{{ route('article.show', $post->slug) }}"
                                        class="btn btn-primary mt-3">Baca Artikel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach

                <x-pagination :data="$posts" />
            </div>
            <div class="col-md-4">
                <div class="container">
                    <h3 class="text-center">Artikel Terbaru</h3>
                    <br>
                    @foreach ($postslatest as $pl)
                        <a href="{{ route('article.show', $pl->slug) }}"
                            class="text-decoration-none text-dark">
                            <div class="shadow-sm p-2 mt-2 rounded">
                                <h6>{{ $pl->name }}</h6>
                                <p class="text-secondary">{{ formatTanggalIndo($pl->created_at) }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
