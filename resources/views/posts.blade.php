{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/puisi" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <div style="max-height: 350px; overflow:hidden;">
                        <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search title" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>

            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            {{-- @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="..."
                        class="img-fluid">
                </div>
            @else
                <img src="/img/asdfg.jpg" class="card-img-top" alt="..." class="img-fluid">
            @endif --}}
            <div class="card-body text-center">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p>By: <a href="/puisi?user={{ $posts[0]->user->username }}"
                        class="text-decoration-none">{{ $posts[0]->user->name }}</a>, in <a
                        href="/puisi?category={{ $posts[0]->categories->uuid }}"
                        class="text-decoration-none">{{ $posts[0]->categories->name }}</a></p>
                {{-- <p class="card-text">{{ $posts[0]->excerpt }}</p> --}}
                <p class="card-text"><small class="text-body-secondary">Last updated
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">

                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="card-img-top" alt="...">
                            <div class="position-absolute bg-dark px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/puisi?category={{ $post->categories->uuid }}"
                                    class="text-white text-decoration-none">{{ $post->categories->name }}</a></div>
                            {{-- @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="..." class="img-fluid">            
            @else
                <img src="/img/asdfg.jpg" class="card-img-top" alt="..." class="img-fluid">
            @endif --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>By: <a href="/puisi?user={{ $post->user->username }}"
                                        class="text-decoration-none">{{ $post->user->name }}</a>, in <a
                                        href="/puisi?category={{ $post->categories->uuid }}"
                                        class="text-decoration-none">{{ $post->categories->name }}</a></p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated
                                        {{ $post->created_at->diffForHumans() }}</small></p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
