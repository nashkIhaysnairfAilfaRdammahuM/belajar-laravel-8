@extends('layouts.main')
@section('container')
    <h1>Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/400x300?{{ $category->slug }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <h5 class="card-title px-3 py-2 fs-3" style="background-color: rgba(0, 0, 0, 0.75)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection