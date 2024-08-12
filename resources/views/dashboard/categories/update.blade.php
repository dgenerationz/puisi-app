@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category</h1>
    </div>

    <div class="col-lg-8">

        <form method="POST" action="/dashboard/categories/{{ $category->uuid }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" id="title"
                    name="category" required autofocus value="{{ old('category', $category->name) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <a href="/dashboard/categories" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection
