@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="text-center">{{ $post->name }}</h4>
        <div class="text-center">
            <span class="badge bg-secondary">{{ $post->category->name }}</span>
            <br>
            <br>
            <img src="{{ $post->cover_url }}"
                alt=""
                class="img-thumbnail"
                width="80%">
        </div>
        <br>
        <div class="container">
            {!! $post->body !!}
        </div>
    </div>
@endsection
