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

@section('currentpage')
    <h2>Halaman Edit Anggota</h2>
@endsection

@section('container')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5">
        <form action="{{ url('update_anggota', $user->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama</label>
                <input type="text" class="form-control @error('nama') 
                is-invalid @enderror" name="nama" id="nama" required value="{{ $user->nama }}">
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required value="{{ $user->email }}"></input>
            </div>

            <div class="mb-3">
                <label for="message-text" class="col-form-label">Jabatan</label>
                <div class="dropdown">
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option value="{{ $user->jabatan }}" class="text-center">{{ $user->jabatan }}</option>
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
                <label for="message-text" class="col-form-label">Role</label>
                <div class="dropdown">
                    <select name="roles" id="roles" class="form-control">
                        <option value="{{ $user->roles }}" class="text-center">{{ $user->roles }}</option>
                        <option value="st" class="text-center">Struktural</option>
                        <option value="jft" class="text-center">Penyuluh</option>
                    </select>
                </div>
            </div>
                    
            <div class="mb-3">
                <a type="button" class="btn btn-secondary" href='../../anggota'>Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
@endsection