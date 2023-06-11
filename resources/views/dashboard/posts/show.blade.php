@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8">
                <h1 class="mb-3 mt-5">
                    {{ $post->title }}
                </h1>
                <a href="/dashboard/posts" class="btn btn-success"> <i class="bi bi-arrow-left "
                        style="margin-right:5px"></i>Back to all
                    My
                    Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <i class="bi bi-pencil"
                        style="margin-right:5px"></i>
                    Edit</a>

                {{-- <a href="/dashboard/posts" class="btn btn-danger"> <i class="bi bi-x-circle"
                        style="margin-right:5px"></i>Delete</a> --}}
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('Are You Sure?')"><i class="bi bi-x-circle"
                            style="margin-right: 5px"></i>Delete</button>
                </form>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-2"
                    alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
