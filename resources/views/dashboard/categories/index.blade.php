@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori Puisi</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert"> 
        {{ session('success') }}
      </div>
    @endif

          <div class="table-responsive col-lg-6">
            <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Tambah Kategori Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>

                <a href="/dashboard/categories/{{ $category->uuid }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                <form method="POST" action="/dashboard/categories/{{ $category->uuid }}" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
            
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>    

@endsection