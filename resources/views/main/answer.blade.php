@extends('layouts.clear')

@section('container')
    <!-- Tempat menampilkan jawaban dari satu postingan pertanyaan -->

    <article class='mb-5'>
        <h2 class="mb-3">{{ $posted->judul }}</h2>
        <h4 >{{ $posted->penanya }}</h4>
        {!! $posted->pertanyaan !!}
        <h5 class='mt-3'> Jawaban oleh: </h5>
        <h4 class="mt-4 mb-2">{{ $posted->answer->user->nama }}</h4>
        <p class="mb-5">{{ $posted->answer->jawaban}}</p>
        <a href="/home">back</a>
    </article>
@endsection