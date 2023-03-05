@extends('layouts.dashboard')

@section('institute_div')
    Bidang Hukum
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
    <h2>Anggota</h2>
@endsection

@section('container')
    <!-- Button trigger modal -->
    <a type="button" class="btn btn-primary" href='/register'>
    Tambah Anggota</a>
    <br>
    <div class="h5 mt-5 mb-4 w-100">Data Anggota</div>
    <div class="card p-4 rounded-4">
    <table id="example" class="table rounded-1" style="width:100%">
        <thead></thead>
        <tbody></tbody>
    </table>

@endsection