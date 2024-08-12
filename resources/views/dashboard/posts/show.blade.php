@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>
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

                {{-- <a href="/blog" class="d-block mt-3">Back to Posts</a> --}}
            </div>
        </div>
    </div>
@endsection
