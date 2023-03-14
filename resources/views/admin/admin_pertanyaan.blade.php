@extends('layouts.dashboard')

@section('institute_div')
    Bidang Hukum
@endsection

@section('institute')
    Kemenkumham Jateng
@endsection

@section('item2')
    Anggota
@endsection

@section('item3')
    Pertanyaan
@endsection

@section('user_page')
    Admin Dashboard
@endsection

@section('email_user')
    admin@mail.com
@endsection

@section('currentpage')
    <h2>Pertanyaan Masuk</h2>
@endsection

@section('container')
    @if(session()->has('success'))
        <div class="row justify-content-center">
        <div class="alert alert-light alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>
    @endif

    <div class="h5 mt-5 mb-4 w-100">Daftar Pertanyaan Masuk</div>
    <div class="card p-4 rounded-4">
    <table id="example" class="table rounded-1" style="width:100%">
        <thead>
            <tr>
                <th>Penanya</th>
                <th>Judul Pertanyaan</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($newpost as $data)
            <td><h5>{{ $data->penanya }}</h5>
            <p>{{ $data->provinsi->nama }}</p></td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->kategori->nama }}</td>
            <td>Baru</td>
            <td>
              <a href="{{ url('teruskan', $data->id) }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-left"></i> teruskan</a>  
              <a href='#' type="button" class="btn btn-success"><i class="bi bi-eye"></i> lihat</a>
            </td>
        @endforeach
        </tbody>
    </table>

@endsection