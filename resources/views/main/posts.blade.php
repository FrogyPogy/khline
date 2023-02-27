@extends('layouts.main')

@section('container')

    @foreach($posts as $p)
        <article class="mb-4">
            <h4 class="mt-4">{{ $p->penanya }}</h4>
            <h2><a href="/posts/{{ $p->id }}">{{ $p->judul }}</a></h2>
            <text>{{ $p->pertanyaan }}</text>
        </article>
    @endforeach

@endsection