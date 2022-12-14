{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                {{-- <h5>{{ $post["author"] }}</h5> --}}

                <article class="my-3 fs-5 mb-2">
                    {!! $post->body !!}
                </article>

                 <a href="/blog" class="mt-3 btn btn-outline-success">Back To Posts</a>
            </div>
        </div>
    </div>
    
    
@endsection