@extends('layouts.main')
@section('container')
    <h1>Profil</h1>
    @foreach ($posts as $post)
        <article class="mb-5">

            <h5>
                <a href="/profil/{{ $post['slug'] }}">{{ $post['Nama'] }}</a>
            </h5>
            <h5>{{ $post['NIM'] }}</h5>
            <p>{{ $post['Fakultas'] }}</p>

        </article>
    @endforeach
@endsection
