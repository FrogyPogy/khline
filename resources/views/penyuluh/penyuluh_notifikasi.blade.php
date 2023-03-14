@extends('layouts.dashboard_jft')

@section('institute_div')
    Bidang Hukum
@endsection

@section('institute')
    Kemenkumham Jateng
@endsection

@section('item2')
    Notifikasi
@endsection

@section('item3')
    Evaluasi
@endsection

@section('user_page')
    Penyuluh Dashboard
@endsection

@section('currentpage')
    <h2>Notifikasi Masuk</h2>
@endsection

@section('container')
    @foreach($answer as $a)
    <div class="mt-5 col-sm-6">
        <h4 class="card-title mb-4">{{ $a->posts->judul }}</h4>
        <div class="card p-4 rounded-4 ">
            <div class="card-body">
                <h4 class="card-title">{{ $a->posts->penanya }}</h4>
                <p class="card-text">{{ $a->posts->pertanyaan }}</p>
            </div>
        </div>
        <div class="mt-3">
            <form action="{{ url('jft_update') }}" method="post">
                @csrf
                <div class="d-flex">
                <input name="answer_id" type="hidden" value="{{ $a->id }}">
                <textarea type="text" class="flex-fill form-control rounded-4" name="jawaban" id="jawaban" placeholder=" ketikan jawaban "></textarea>
                <button type="submit" class="flex-sm-fill ms-2 btn btn-primary rounded-4"><i class="bi bi-send"> send</i></button>
                </div>
            </form>
            
        </div>
    </div>
    @endforeach
@endsection