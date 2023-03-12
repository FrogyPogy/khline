@extends('layouts.main')

@section('container')

    @foreach($posts as $p)
        <article class="mb-5">
            <h4 class="mt-4">{{ $p->penanya }}</h4>
            <h2>{{ $p->judul }}</a></h2>
            <text>{{ $p->pertanyaan }}</text>
            <div class="mt-3">
            <a href="/home/{{ $p->slug }}" class="link-info">lihat jawaban</a>
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
            <label for="message-text" class="col-form-label">Kategori kasus</label>
            <div class="dropdown">
                <select name="kategori_id" id="kategori_id" class="form-control">
                    <option value="" class="text-center">- Pilih Kategori -</option>
                    @foreach($kategori as $k)
                    <option value="{{ $k->id }}" class="text-center">{{ $k->nama }}</option>
                    @endforeach
                    
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="message-text" class="col-form-label">Provinsi</label>
            <div class="dropdown">
                <select name="provinsi_id" id="provinsi_id" class="form-control">
                    <option value="" class="text-center">- Pilih Provinsi -</option>
                    @foreach($provinsi as $prov)
                    <option value="{{ $prov->id }}" class="text-center">{{ $prov->nama }}</option>
                    @endforeach
                </select>
            </div>
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