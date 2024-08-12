@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By: <a href="/puisi?user={{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a>, in <a
                        href="/puisi?category={{ $post->categories->slug }}">{{ $post->categories->name }}</a></p>
                {{-- @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="..." class="img-fluid">            
                </div>
            @else
                <img src="/img/asdfg.jpg" class="card-img-top mt-3" alt="..." class="img-fluid">
            @endif --}}
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/puisi" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
