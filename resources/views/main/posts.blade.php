@extends('layouts.main')

@section('container')

    @foreach($posts as $p)
        <article class="mb-5">
            <h4 class="mt-4">{{ $p->penanya }}</h4>
            <h2>{{ $p->judul }}</a></h2>
            <text>{{ $p->pertanyaan }}</text>
            <div class="mt-3">
            <a href="/home/{{$p->slug}}" class="link-info">lihat jawaban</a>
        </article>
    @endforeach

@endsection