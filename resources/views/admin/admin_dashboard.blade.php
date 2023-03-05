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
    <h2>Dashboard</h2>
@endsection

@section('container')
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
        <div class="col">
          <div class="card rounded-4  ">
            <div class="card-body">
              <p class="text-center">Jumlah Mahasiswa Cuti</p>
              <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card rounded-4 ">
            <div class="card-body">
              <p class="text-center">Jumlah Mahasiswa Lulus</p>
              <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
        <div class="col">
          <div class="card rounded-4  ">
            <div class="card-body">
              <p class="text-center">Jumlah Mahasiswa Undur Diri</p>
              <canvas id="myChart5" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card rounded-4 ">
            <div class="card-body">
              <p class="text-center">Jumlah Mahasiswa Drop Out</p>
              <canvas id="myChart6" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
    </div>

    <!-- <br>
    <div class="h5 mt-4 mb-4 w-100">Data Mahasiswa</div>
    <div class="card p-4 rounded-4">
    <table id="example" class="table rounded-3" style="width:100%">
        <thead></thead>
        <tbody></tbody>
    </table> -->

@endsection
