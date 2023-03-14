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
    <h2>Halaman Kirim Pertanyaan</h2>
@endsection

@section('container')
    <br>
    <div class="h5 mt-4 mb-4 w-100">Anggota Penyuluh</div>
      <div class="card p-4 rounded-4">
      <table id="example" class="table  rounded-3" style="width:100%">
        <thead >
            <tr>
                <th>Anggota</th>
                <th>Total Jawab</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

    
        @foreach($jft as $j)
          <tr>
            <td><h5>{{ $j->nama }}</h5>
              <p>{{ $j->jabatan }}</p></td>
            <td>20</td>
            <td><p style="color:#99CF00;">{{ $j->status }}</p></td>
            <td>
            <form action="{{ url('kirim') }}" method="post">
                @csrf
                <input name="user_id" type="hidden" value="{{$j->id}}">
                <input name="post_id" type="hidden" value="{{$post->id}}">
                <button type="submit" class="btn btn-primary"><i class="bi bi-send"> Kirim</i></button>
            </form>  
            </td>
          </tr>
        @endforeach
     
    </table>
    </div>

    </div>

@endsection