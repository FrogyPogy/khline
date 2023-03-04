@extends('layouts.main')

@section('container')

    @foreach($posts as $p)
        <article class="mb-5">
            <h4 class="mt-4">{{ $p->penanya }}</h4>
            <h2>{{ $p->judul }}</a></h2>
            <text>{{ $p->pertanyaan }}</text>
            <div class="mt-3">
            <a href="/home/{{$p->id}}" class="link-info">lihat jawaban</a>
        </article>
    @endforeach

@endsection

@section('modals')

    <form method="POST" action="{{ url('home') }}">
        @csrf
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="text" class="form-control" name="input_nama" id="input_nama">
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="input_email" id="input_email"></input>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">Judul</label>
            <input type="text" class="form-control" name="input_judul" id="input_judul"></input>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">Slug</label>
            <input type="text" class="form-control" name="input_slug" id="input_slug"></input>
        </div>

        <div class="mb-3">
            <label for="message-text" class="col-form-label">Kategori kasus</label>
            <div class="dropdown">
                <select name="kategori" id="kategori" class="form-control">
                    <option value="Warisan" class="text-center">Warisan</option>
                    <option value="Korupsi" class="text-center">Korupsi</option>
                    <option value="Sertifikat" class="text-center">Sertifikat</option>
                    <option value="HAM" class="text-center">HAM</option>
                </select>
            </div>
        </div>
                <!-- <div class="mb-3">
                    <label for="message-text" class="col-form-label">Provinsi</label>
                    <div class="dropdown">
                        <select name="provinsi" id="provinsi" class="form-control">
                            <option value="" class="text-center">--pilih provinsi--</option>
                        </select>
                    </div>
                </div> -->
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Provinsi</label>
                    <input type="number" class="form-control" name="input_provinsi" id="input_provinsi"></input>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Pertanyaan</label>
                    <textarea class="form-control" name="input_pertanyaan" id="input_pertanyaan"></textarea>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                </div>
                </form>

@endsection