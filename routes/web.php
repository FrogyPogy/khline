<?php

use Illuminate\Support\Facades\Route;
use App\Models\posts;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JftController;
use App\Http\Controllers\StrukturalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main page
Route::get('/home', [PostsController::class, 'index'])->middleware('guest');
// Main Page-answer
Route::get('/home/{post:slug}', [PostsController::class, 'showAnswer'])->middleware('guest');
// Create new Posts
Route::post('/home', [PostsController::class,'store'])->middleware('guest');
//Sign-in Page
Route::get('sign-in',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('sign-in',[LoginController::class, 'authenticate']);
Route::post('sign-out',[LoginController::class,'signOut']);

//Register;

Route::middleware('auth')->group(function(){
    //Admin-dashboard
    Route::get('/admin',[AdminController::class, 'dashboard']);

    // //Admin-anggota
    Route::get('anggota',[AdminController::class, 'anggota']);
    
    //Admin-laporan
    Route::get('laporan',[AdminController::class, 'laporan']);

    //Admin-pertanyaan
    Route::get('pertanyaan',[AdminController::class, 'pertanyaan']);

    //Admin tambah anggota
    Route::get('/register',[RegisterController::class, 'index']);
    Route::post('/register',[RegisterController::class, 'store']);

    //Penyuluh-dashboard
    Route::get('jft_dash',[JftController::class, 'dashboard']);

    //Penyuluh-notifikasi
    Route::get('jft_notif',[JftController::class, 'notifikasi']);

    //Penyuluh-laporan
    Route::get('jft_lapor',[JftController::class, 'laporan']);

    //Penyuluh-evaluasi
    Route::get('jft_eval',[JftController::class, 'evaluasi']);

    //Struktural-dashboard
    Route::get('st_dash',[StrukturalController::class, 'dashboard']);

    //Struktural-evaluasi
    Route::get('st_eval',[StrukturalController::class, 'evaluasi']);

    //Struktural-laporan
    Route::get('st_lapor',[StrukturalController::class, 'laporan']);

    //Struktural-notifikasi
    Route::get('st_notif',[StrukturalController::class, 'notifikasi']);

});


//Admin-Settings
// Route::get('/admin_s',function(){
//     return view('/admin/admin_settings');
// });



//Penyuluh-riwayat
// Route::get('jft_riwayat',JftController::class, 'riwayat');

