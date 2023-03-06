@extends('layouts.dashboard')

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

@section('email_user')
    Budi@mail.com
@endsection

@section('currentpage')
    <h2>Dashboard</h2>
@endsection

@section('container')
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
        <div class="col">
          <div class="card rounded-4  ">
            <div class="card-body">
              <p class="text-center">Total Konsultasi</p>
              <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card rounded-4 ">
            <div class="card-body">
              <p class="text-center">Terjawab</p>
              <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
        <div class="col">
          <div class="card rounded-4  ">
            <div class="card-body">
              <p class="text-center">Sedang Verifikasi</p>
              <canvas id="myChart5" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card rounded-4 ">
            <div class="card-body">
              <p class="text-center">Evaluasi Jawaban/p>
              <canvas id="myChart6" style="width:100%;max-width:600px"></canvas>
            </div>
          </div>
        </div>
    </div>

@endsection