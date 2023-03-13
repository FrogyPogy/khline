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
    <h2>Anggota</h2>
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

    <!-- Button trigger modal -->
    <a type="button" class="btn btn-primary" href='/register'>
    Tambah Anggota</a>
    <br>
    <div class="h5 mt-4 mb-4 w-100">Data Anggota</div>
      <div class="card p-4 rounded-4">
      <table id="example" class="table  rounded-3" style="width:100%">
        <thead >
            <tr>
                <th>Anggota</th>
                <th>Total Jawab</th>
                <th>Status</th>
                <th>Ubah Data</th>
            </tr>
        </thead>

        <tbody>
        @foreach($anggota as $a)
          <tr>
            <td><h5>{{ $a->nama }}</h5>
              <p>{{ $a->jabatan }}</p></td>
            <td>20</td>
            <td><p style="color:#99CF00;">{{ $a->status }}</p></td>
            <td>
              <a href="{{ url('anggota', $a->id) }}" type="button" class="btn btn-primary"><i class="bi bi-pen"></i> edit</a>  
              <a href='/test' type="button" class="btn btn-danger"><i class="bi bi-trash"></i> hapus</a>
            </td>
          </tr>
        @endforeach
     
    </table>
    </div>




    </div>

@endsection