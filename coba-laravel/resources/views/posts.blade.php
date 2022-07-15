@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
    <article class="mb-3">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}">Read more...</a></p>
    </article>
    @endforeach    
@endsection