@extends('layouts.dashboard')

@section('institute_div')
    Bidang Hukum
@endsection

@section('item2')
    Anggota
@endsection

@section('item3')
    Pertanyaan
@endsection

@section('institute')
    Kemenkumham Jateng
@endsection

@section('user_page')
    Admin Dashboard
@endsection

@section('email_user')
    admin@mail.com
@endsection

@section('currentpage')
    <h2 class="row justify-content-center">Halaman Registrasi Anggota</h2>
@endsection

@section('container')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
        <form action="/register" method="post">
            @csrf
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama</label>
                <input type="text" class="form-control @error('nama') 
                is-invalid @enderror" name="nama" id="nama" required value="{{ old('nama') }}">
                @error('nama')
                <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                name="email" id="email" required value="{{ old('email') }}"></input>
                @error('email')
                <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                name="password" id="password" required></input>
                @error('password')
                <div class='invalid-feedback'>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Jabatan</label>
                <div class="dropdown">
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option value="Penyuluh Hukum Pratama" class="text-center">Penyuluh Hukum Pratama</option>
                        <option value="Penyuluh Hukum Muda" class="text-center">Penyuluh Hukum Muda</option>
                        <option value="Penyuluh Hukum Madya" class="text-center">Penyuluh Hukum Madya</option>
                        <option value="Kasubbid" class="text-center">Kasubbid</option>
                        <option value="Kabid" class="text-center">Kabid</option>
                        <option value="Kadiv" class="text-center">Kadiv</option>
                    </select>
                </div>
            </div>
                    
            <div class="mb-3">
                <a type="button" class="btn btn-secondary" href='anggota'>Back</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>
@endsection