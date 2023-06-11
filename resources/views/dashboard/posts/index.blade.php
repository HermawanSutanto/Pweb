@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">MY Post</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <div class="table-responsive small col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td><a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info pb-0">

                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"class="badge bg-warning pb-0"><i
                                    class="bi bi-pencil"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger pb-0 border-0" onclick="return confirm('Are You Sure?')"><i
                                        class="bi bi-x-circle"></i></button>
                            </form>


                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection